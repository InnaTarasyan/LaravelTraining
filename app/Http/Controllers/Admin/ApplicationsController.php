<?php

namespace App\Http\Controllers\Admin;

use App\Application;
// use App\Helpers\Contracts\SaveStr;

use App\Http\Requests\ApplicationRequest;
use App\Repositories\ApplicationsRepository;

use App\Repositories\CommentsRepository;
use Gate;
use Route;


class ApplicationsController extends BaseController
{
    protected $a_rep;
    protected $c_rep;
    protected $currentUrl;
    protected $type;


    public function __construct(ApplicationsRepository $a_rep, CommentsRepository $c_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view', new \App\Application)){
           abort(403);
        }

        $route = Route::currentRouteName();


        switch ($route){
            case "applications.index" : {
                $this->type = 'apps';
                $this->pageUrl = 'applications.index';
                break;
            }
            case "webapps.index":  {
                $this->type = 'web';
                $this->pageUrl = 'webapps.index';
                break;
            }

        }


        $this->currentUrl = Route::currentRouteName();

        $applications = $this->getApplications();

        $this->template = 'home';
        $this->vars = array_add($this->vars, 'applications', $applications);
        $this->vars = array_add($this->vars, 'currentUrl', $this->currentUrl);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->template = 'add_application';

        $this->currentUrl = Route::currentRouteName();

        $this->vars = array_add($this->vars, 'types', ['web', 'apps']);
        $this->vars = array_add($this->vars, 'currentUrl', $this->currentUrl);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request   /*, SaveStr $saveStr */ )
    {

        if(Gate::denies('add', new \App\Application)){
            abort(403);
        }

        $result = $this->a_rep->addApplication($request /*, $saveStr */ );
        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect()->route('admin')->with($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        $application = $this->a_rep->one($application->id, ['comments' => TRUE]);

        $this->template = 'application';
        $this->vars = array_add($this->vars, 'application', $application);

        return $this->renderOutput();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);

        $this->template = 'add_application';
        $this->currentUrl = Route::currentRouteName();

        $this->vars = array_add($this->vars, 'application', $application);
        $this->vars = array_add($this->vars, 'currentUrl', $this->currentUrl);
        $this->vars = array_add($this->vars, 'types', ['web', 'apps']);

        return $this->renderOutput();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationRequest $request, $id)
    {
        if(Gate::denies('update', new \App\Application)){
            abort(403);
        }

        $application = Application::find($id);

        $result = $this->a_rep->updateApplication($request, $application);
        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }


        return redirect()->route('admin')->with($result);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete', new \App\Application)){
            abort(403);
        }

        $application = Application::find($id);

        $result = $this->a_rep->deleteApplication($application);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }


        return redirect()->route('admin')->with($result);
    }

    public function getApplications(){

        $where = ['type', $this->type];

        return $this->a_rep->get('*', FALSE, TRUE, $where);
    }

    public function getComments(){
        $comments = $this->c_rep->get(['text', 'article_id', 'user_id' ], FALSE);
        if($comments){
            $comments->load('user', 'application');
        }
        return $comments;
    }
}
