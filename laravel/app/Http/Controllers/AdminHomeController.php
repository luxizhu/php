<?php
/**
 * Created by PhpStorm.
 * User: xizhu
 * Date: 16-9-24
 * Time: 下午11:54
 */
namespace App\Http\Controllers;

class AdminHomeController extends Controller{
    protected $pre = "pre.main";

    public function toIndex(){
        return view('admin');
    }

    public function getMainPage(){
        return $this->pre->content=view("inner.page");
    }
}