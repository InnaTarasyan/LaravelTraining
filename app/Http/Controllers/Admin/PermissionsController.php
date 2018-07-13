<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\PermissionsRepository;
use App\Repositories\RolesRepository;

class PermissionsController extends BaseController
{
    private $rol_rep;
    private $per_rep;

    public function __construct(PermissionsRepository $per_rep, RolesRepository $rol_rep){
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));


        $this->rol_rep = $rol_rep;
        $this->per_rep = $per_rep;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->title = 'Редактирование Привелегий!';

        $this->template = 'permissions';

        $this->vars = array_add($this->vars, 'permissions', $this->getPermissions());
        $this->vars = array_add($this->vars, 'roles', $this->getRoles());

        return $this->renderOutput();

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
    public function store(Request $request)
    {
        $result = $this->per_rep->changePermissions($request);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return back()->with($result);
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

    public function getPermissions(){
        return $this->per_rep->get('*');
    }

    public function getRoles(){
        return $this->rol_rep->get('*');
    }
}
