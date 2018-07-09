<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Auth;

class BaseController extends Controller
{
    protected $template;
    protected $content = FALSE;
    protected $vars = FALSE;
    protected $m_rep;

    public function __construct(MenusRepository $m_rep){
        $this->middleware('auth');
        $this->m_rep = $m_rep;
    }

    public function renderOutput(){
        $menu = $this->getMenu();
        $navigation = view('navigation')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars);
    }

    public function getMenu(){
        $menu = $this->m_rep->get();
        $mBuilder = \Menu::make('MyMenu', function ($m) use ($menu) {

            foreach ($menu as $item){
                if($item->parent == 0){
                    $m->add($item->title, $item->path)->id($item->id);
                } else{
                    if($m->find($item->parent)){
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });

        return $mBuilder;
    }
}
