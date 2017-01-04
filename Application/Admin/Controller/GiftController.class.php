<?php
/**
	*赠品管理
	*   Gift/_initialize  	分配控制器及方法名以动态该方法执行时的导航样式
	*   Gift/index 		赠品列表
	*   Gift/add		添加页面
	*   Gift/insert		添加执行
	*   Gift/edit		修改页面
	*   Gift/save		修改执行
	*   Gift/delete		删除
	*   Gift/delall		批量删除
	*   @author	孙永军
**/

namespace Admin\Controller;

class GiftController extends CommonController{

	// 分配控制器及方法名以动态该方法执行时的导航样式
	public function _initialize() {
		$this->assign('menuList',CONTROLLER_NAME.'-'.ACTION_NAME);
		$this->assign('menu','sale');
	}

	// 赠品列表
	public function index() {
		$gift = M('gift');
		
		if($_GET['keywords']){
	            $maps['gift_name'] = array('like','%'.$_GET['keywords'].'%');
	        }
	        $count =  $gift -> where($maps) -> count();
		$mypage = $this -> mypage($count,8);
		$data = $gift ->where($maps) -> limit($mypage->firstRow,$mypage->listRows) -> select();

		$page = $mypage -> show();

		$this->assign('page',$page);

		$this->assign('gift',$data);
		$this->display();
	}

	// 添加页面
	public function add() {
		$this->display();
	}

	// 添加执行
	public function insert() {
		if($_POST){
			$model = M('gift');
			$model->create();
			if($model->add()){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error('非法操作');
		}
	}

	// 修改页面
	public function edit() {
		$model = M('gift');
		$map['id'] = array('eq',$_GET['id']);
		$gift = $model->where($map)->find();
		$this->assign('gift',$gift);
		$this->display();
	}

	// 修改执行
	public function save() {
		if($_POST){
			$model = M('gift');
			$model->create();
			if($model->save()){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
		}else{
			$this->error('非法操作');
		}
	}

	// 删除
	public function delete() {
		$model = M('gift');
		$map['id'] = array('eq',$_GET['id']);
		if($model->where($map)->delete()) {
		$this->success('删除成功','index');	
		}else{
			$this->error('删除失败');
		}
	}
	
	//批量删除
	public function delall() {
		$ids = implode(',',$_POST['id']);
		$goods = M(CONTROLLER_NAME);
		if($goods -> delete($ids)){
			$this -> ajaxReturn($ids);
		}else{
			$this -> ajaxReturn(false);
		}
	}

}