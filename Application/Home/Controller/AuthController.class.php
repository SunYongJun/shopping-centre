<?php
namespace Home\Controller;

class AuthController extends CommonController {
     public function _initialize(){
     	parent::_initialize();
     	$user = $_SESSION['user']['id'];
     	if($user == false){
     		$this -> error('您还未登录！',U('User/login'));	
     	}
     }
}