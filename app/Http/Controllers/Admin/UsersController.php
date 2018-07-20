<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Repositories\RolesRepository;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\User;

class UsersController extends BaseController
{
    protected  $u_rep;
    protected  $roles_rep;
    public function __construct(UsersRepository $u_rep, RolesRepository $roles_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->u_rep = $u_rep;
        $this->roles_rep = $roles_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view', new \App\User)){
            abort(403);
        }

        $users = $this->getUsers();

        $this->template = 'admin.users';
        $this->vars = array_add($this->vars, 'users', $users);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->template = 'admin.add_user';

        if(Gate::denies('save', new \App\User)){
            abort(403);
        }

        $roles = $this->getRoles();

        $roles = $roles->reduce(function ($returnRoles, $role){
            $returnRoles[$role->id] = $role->name;
            return $returnRoles;
        }, []);

        $this->vars = array_add($this->vars, 'roles', $roles);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $result = $this->u_rep->addUser($request);

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
    public function edit(User $user)
    {
        if(Gate::denies('edit', new \App\User)){
            abort(403);
        }

        $roles = $this->getRoles();

        $roles = $roles->reduce(function ($returnRoles, $role){
            $returnRoles[$role->id] = $role->name;
            return $returnRoles;
        }, []);

        $this->template = 'admin.add_user';

        $this->vars = array_add($this->vars, 'user', $user);
        $this->vars = array_add($this->vars, 'roles', $roles);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $result = $this->u_rep->updateUser($request, $user);

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
    public function destroy(User $user)
    {
        if(Gate::denies('destroy', new \App\User)){
            abort(403);
        }

        $result = $this->u_rep->deleteUser($user);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect()->route('admin')->with($result);
    }

    public function getUsers(){
        return $this->u_rep->get('*');
    }

    public function getRoles(){
        return $this->roles_rep->get('*');
    }
}
