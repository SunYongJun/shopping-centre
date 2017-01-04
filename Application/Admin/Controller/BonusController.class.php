<?php

/*
*	红包管理
* 	红包列表	Bonus/index	
* 	添加红包	Bonus/add insert	
* 	修改红包	Bonus/edit save
* 	删除红包	Bonus/del delall
* 	$author 蒋永忠	
*/

namespace Admin\Controller;
class BonusController extends CommonController{
	/*
	*	红包列表
	*/
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Bonus');
        $this -> assign('menuList','Bonusindex');

        $m = M(CONTROLLER_NAME);
		// 搜索条件
		if($_GET['keywords']){
			$keyword = $_GET['keywords'];
			$keyword = "bonus_name like '%".$keyword."%'";
		}else{
			$keyword = '';
		}
		
		$count = $m -> where($keyword) -> count();// 查询满足要求的总记录数

		// 调用自定义的分页
		$mypage = $this -> mypage($count,8);

		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m-> where($keyword)->order('id desc')->limit($mypage->firstRow.','.$mypage->listRows)->select();
		$show = $mypage->show();// 分页显示输出
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this -> display();
	}
	//添加数据
	public function insert(){
		$m = M(CONTROLLER_NAME);
		if($_POST['bonus_name'] && $_POST['bonus_level'] && $_POST['bonus_money']){
			$m -> create();
			if($m -> add()){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}
	}
	//修改数据
	public function edit(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Bonus');
        $this -> assign('menuList','Bonusindex');

		$m = M(CONTROLLER_NAME);
		if($_GET['id']){
			$type = $m -> find($_GET['id']);
			$this -> assign('type',$type); 
			$this -> display();
		}else{
			$this -> error('错误参数！');
		}
		
	}
	//保存修改数据
	public function save(){
		$m = M(CONTROLLER_NAME);
		if($_POST['bonus_name'] && $_POST['bonus_level'] && $_POST['bonus_money']){
			$m -> create();
			if($m -> save()){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	}
	//删除单个
	public function del(){
		$m = M(CONTROLLER_NAME);
		if($_POST['id'] > 0){
			if($m -> delete($_POST['id'])){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	} 
	//批量删除
	public function delall(){
		if($_POST['id']){
			$ids = $_POST['id'];
			$ids = implode(',', $ids);
			$m = M(CONTROLLER_NAME);
			if($m -> delete($ids)){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	}
}