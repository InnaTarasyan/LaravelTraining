<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Requests\ApplicationRequest;
use App\Repositories\ApplicationsRepository;

use App\Repositories\CommentsRepository;
use Gate;

class ApplicationsController extends Controller
{
    protected $a_rep;
    protected $c_rep;

    public function __construct(ApplicationsRepository $a_rep, CommentsRepository $c_rep)
    {
        $this->middleware('auth');
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

        $applications = $this->getApplications();
        return view('home')
            -> with(['applications' => $applications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request)
    {
        if(Gate::denies('add', new \App\Application)){
            abort(403);
        }

        $result = $this->a_rep->addApplication($request);
        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('applications')->with($result);

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

        return view('application')
            ->with(['application' => $application]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('add_application')
            ->with(['application' => $application]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationRequest $request, Application $application)
    {
        if(Gate::denies('update', new \App\Application)){
            abort(403);
        }
        $result = $this->a_rep->updateApplication($request, $application);
        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('applications')->with($result);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        if(Gate::denies('delete', new \App\Application)){
            abort(403);
        }

        $result = $this->a_rep->deleteApplication($application);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('/applications')->with($result);
    }

    public function add(){
        return view('add_application');
    }

    public function getApplications(){
        return $this->a_rep->get('*', FALSE, TRUE, FALSE);
    }

    public function getComments(){
        $comments = $this->c_rep->get(['text', 'article_id', 'user_id' ], FALSE);
        if($comments){
            $comments->load('user', 'application');
        }
        return $comments;
    }
}
