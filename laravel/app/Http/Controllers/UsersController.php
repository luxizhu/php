<?php
/**
 * Created by PhpStorm.
 * User: xizhu
 * Date: 16-9-20
 * Time: 下午11:32
 */

namespace App\Http\Controllers;


use Illuminate\View\View;

class UsersController extends Controller
{
    protected $layout="layouts.main";

    public function userIndex(){
        return view('users');
    }

    public function getRegister(){
        $this->layout->content=view('users.register');
    }
}