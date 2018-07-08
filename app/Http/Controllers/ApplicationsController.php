<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Repositories\ApplicationsRepository;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    protected $a_rep;
    public function __construct(ApplicationsRepository $a_rep)
    {
        $this->middleware('auth');
        $this->a_rep = $a_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $result = $this->a_rep->addApplication($request);
        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('home')->with($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add(){
        return view('add_application');
    }

    public function getApplications(){
        return $this->a_rep->get('*', FALSE, TRUE, FALSE);
    }
}
