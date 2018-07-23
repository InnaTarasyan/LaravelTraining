<?php

namespace App\Http\Controllers;

use App\Repositories\ApplicationsRepository;
use Illuminate\Http\Request;
use App\Repositories\MenusRepository;
use App\Application;
use Yajra\DataTables\Facades\DataTables as Datatables;
use Validator;
use Mail;
use Config;
use Session;
use Redirect;

class HomeController extends Controller
{
    protected  $m_rep;
    protected  $a_rep;
    public function __construct(MenusRepository $m_rep, ApplicationsRepository $a_rep)
    {
        $this->m_rep = $m_rep;
        $this->a_rep = $a_rep;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = $this->a_rep->one($id, ['comments' => TRUE]);

        return view('theme.application')
                   ->with(['application' => $application]);
    }

    public function index(){

        $menu = $this->getMenu();

        $navigation = view('theme.navigation')
            ->with([ 'menu' => $menu]);


        return view('theme.index')
            ->with(['menu' => $navigation,
                'key' => env('GOOGLEAPIS_KEY')]);
    }

    public function getMenu()
    {
        $menus =  $this->m_rep->get();
        if($menus->isEmpty()){
            return FALSE;
        }
        else {
            return \Menu::make('usersMenu', function ($menu) use ($menus) {
                foreach ($menus  as $value){
                    if($value->parent == 0){
                        $menu->add($value->title, $value->path)->id($value->id);
                    } else {
                        if($menu->find($value->parent)){
                            $menu->find($value->parent)->add($value->title, $value->path)->id($value->id);
                        }
                    }
                }
            });
        }
    }




    public function getAndroidApps($type){
        return Datatables::of(Application::where('type', $type)->get())
            ->editColumn('name', function ($item){
                return '<a href="'. route('show', ['id' => $item->id]) .'">'. $item->name .'</a>';
            })
            ->editColumn('img', function ($item){
                return '<img class="myImg" src="images/apps/'.$item->img.'" alt="'.$item->name.'" style="width:100%;max-width:300px">';
            })
            ->editColumn('desc', function ($item){
                return substr($item->desc, 0, 60)."..";
            })
            ->editColumn('url', function ($item){
                return '<a href="'.$item->url.'">'. $item->url .'</a>';
            })
            ->rawColumns(['name', 'img', 'url'])
            ->make(true);
    }


    public function about(Request $request){

            $input = $request->except('_token');

            $messages = [
                'required' => 'Field :attribute is required'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'text' => 'required|max:255'
            ], $messages);

            if($validator->fails()){
                return redirect(url()->previous())->withErrors($validator)->withInput();
            }

            $data = $request->all();

            $result = Mail::send('theme.email', ['data' => $data], function ($message) use ($data){
                $mail_admin = env('mail_admin');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Feedback');
                Session::flash('status', 'Email is sent!');

            });

        return redirect(url()->previous());


    }
}
