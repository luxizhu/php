<?php
/**
 * Created by PhpStorm.
 * User: xizhu
 * Date: 16-9-20
 * Time: 下午10:25
 */

namespace App\Http\Controllers;


class HomeController
{
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function index(){
        return view('welcome');
    }
}