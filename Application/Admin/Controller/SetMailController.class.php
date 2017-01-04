<?php

namespace Admin\Controller;

class SetMailController extends CommonController{
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','ShopConfig');
        $this -> assign('menuList','SetMailindex');
        
		echo '邮件设置';
	}
}
