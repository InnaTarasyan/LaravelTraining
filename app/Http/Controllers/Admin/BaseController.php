<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

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

        return \Menu::make('adminMenu', function ($menu) {
            $menu->add('Домой', array('route'  => 'admin'));
            $menu->add('Веб', array('route'  => 'webapps.index'));
            $menu->add('Андройд', array('route'  => 'applications.index'));
            $menu->add('Меню',  array('route'  => 'menus.index'));
            $menu->add('Пользователи',  array('route'  => 'users.index'));
            $menu->add('Привелегии', array('route'  => 'permissions.index'));
        });


    }
}
