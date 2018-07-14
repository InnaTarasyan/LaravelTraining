<?php

namespace App\Http\Controllers;

use App\Repositories\ApplicationsRepository;
use Illuminate\Http\Request;
use App\Repositories\MenusRepository;

class HomeController extends Controller
{
    protected  $m_rep;
    protected  $a_rep;
    public function __construct(MenusRepository $m_rep, ApplicationsRepository $a_rep)
    {
        $this->m_rep = $m_rep;
        $this->a_rep = $a_rep;
    }

    public function index(){

        $menu = $this->getMenu();
        $apps = $this->getApplications();

        $navigation = view('navigation')
            ->with([ 'menu' => $menu])
            ->render();

        return view('theme.index')
            ->with(['menu' => $navigation,
                'apps' => $apps]);
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


    public function getApplications(){
        return $this->a_rep->get('*', FALSE, FALSE, FALSE);
    }
}
