<?php
/*
*	商店设置
*	$author 蒋永忠
*/
namespace Admin\Controller;
class ShopConfigController extends CommonController{
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','ShopConfig');
        $this -> assign('menuList','ShopConfigindex');

        //商城的管理信息只以第一条数据为准查询。
        $m = M('shop_config');
        $data = $m -> find('1');
        
        $this -> assign('shopset',$data);
        $this -> display();
	}

	public function insert(){
		$m = M('shop_config');
		if($m -> create()){
			if($m -> where('1') -> save()){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	}
}