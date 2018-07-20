<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenusRequest;
use App\Menu;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;


class MenusController extends BaseController
{
    protected  $m_rep;
    public function __construct(MenusRepository $m_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->m_rep = $m_rep;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->getMenus();

        $this->template = 'admin.menus';
        $this->vars = array_add($this->vars, 'menus', $menus);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->title = 'Новый пункт меню!';
        $tmp = $menus = $this->getMenus()->roots();
        $menus = $tmp->reduce(function ($returnMenus, $menu){
            $returnMenus[$menu->id] = $menu->title;
            return $returnMenus;
        }, ['0' => 'Родительский пункт меню']);

        $this->template =  'admin.menus_create_content';
        $this->vars = array_add($this->vars, 'menus', $menus);
        return $this->renderOutput();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenusRequest $request)
    {
        $result = $this->m_rep->addMenu($request);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('/admin/menus')->with($result);
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
    public function edit(Menu $menu)
    {

        $tmp = $menus = $this->getMenus()->roots();
        $menus = $tmp->reduce(function ($returnMenus, $menu){
            $returnMenus[$menu->id] = $menu->title;
            return $returnMenus;
        }, ['0' => 'Родительский пункт меню']);

        $this->template =  'admin.menus_create_content';
        $this->vars = array_add($this->vars, 'menus', $menus);
        $this->vars = array_add($this->vars, 'menu', $menu);
        return $this->renderOutput();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenusRequest $request, Menu $menu)
    {
        $result = $this->m_rep->updateMenu($request, $menu);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('/admin/menus')->with($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $result = $this->m_rep->deleteMenu($menu);

        if(is_array($result) && !empty($result['error'])){
            return back()->with($result);
        }

        return redirect('/admin/menus')->with($result);
    }


    public function getMenus()
    {
        $menus =  $this->m_rep->get();
        if($menus->isEmpty()){
            return FALSE;
        }
        else {
            return \Menu::make('forAdminMenus', function ($menu) use ($menus) {
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
}
