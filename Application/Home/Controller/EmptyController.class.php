<?php

/*
*	空控制器，没有找到控制器的时候跳转到首页
*/
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller{
	public function index(){
		$this -> redirect('Index/index');
	}
	/*
    *   空操作方法，无此操作方法时跳转到首页
    */
    public function _empty(){
        $this -> redirect('Index/index');
    }
}