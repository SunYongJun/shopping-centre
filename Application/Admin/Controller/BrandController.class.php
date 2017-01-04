<?php

/**
	*   商品品牌控制器
	*   Brand/_initialize  分配控制器及方法名以动态该方法执行时的导航样式
	*   Brand/index  	品牌列表
	*   Brand/add  		品牌添加页面
	*   Brand/insert  	执行添加
	*   Brand/edit  		修改页面
	*   Brand/save  		执行修改
	*   Brand/delete  	删除
	*   Brand/delall 		 批量删除
	*   @author   		孙永军 
**/

namespace Admin\Controller;

class BrandController extends CommonController{

	// 分配控制器及方法名以动态该方法执行时的导航样式
	public function _initialize() {
		parent::_initialize();
		$this->assign('menuList',CONTROLLER_NAME.'-'.ACTION_NAME);
		$this->assign('menu','Goods');
	}
	
	// 品牌列表
	public function index() {
		$brand = M('brand');

		if($_GET['keywords']){
	            $maps['brand_name'] = array('like','%'.$_GET['keywords'].'%');
	        }

		$count =  $brand -> where($maps) -> count();
		$mypage = $this -> mypage($count,8);
		$data = $brand ->where($maps)->order('brand_order desc')-> limit($mypage->firstRow,$mypage->listRows) -> select();
		
		$page = $mypage -> show();
		$this->assign('page',$page);

		$this->assign('brand',$data);
		$this->display();
	}

	// 品牌添加页面
	public function add() {
		$this->display();
	}

	// 执行添加
	public function insert() {
		if($_POST){
			$model = M('brand');
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
		$model = M('brand');
		$map['id'] = array('eq',$_GET['id']);
		$brand = $model->where($map)->find();
		$this->assign('brand',$brand);
		$this->display();
	}

	// 执行修改
	public function save() {
		if($_POST){
			$model = M('brand');
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
		$model = M('brand');
		
		$goods = M('goods');

		//如果该分类下有商品，阻止删除
		$maps['brand_id'] = $_GET['id'];
		$gnum = $goods->where($maps) ->count();
		if($gnum){
			exit($this->error('该品牌下有商品，请先删除商品'));
		}

		$map['id'] = array('eq',$_GET['id']);

		if($model->where($map)->delete()) {
		$this->success('删除成功',U('index'));	
		}else{
			$this->error('删除失败');
		}
	}


	//批量删除
	public function delall() {
		$brand = M(CONTROLLER_NAME);

		$goodsm = M('goods');

		//分类下有商品的,返回其分类名称
		$data = '';
		foreach($_POST['id'] as $v) {
			$map['brand_id'] = $v;
			$goodsd = $goodsm ->where($map)-> select();

			if(count($goodsd)){
				$data .= $brand->find($v)['brand_name'].' ';
			}else{
				$brand -> delete($v);				
			}
		}

		if(empty($data)) {
			$data .= '删除成功';
		}else{
			$data .= ' 品牌下有商品，无法删除';
		}
	
		$this -> ajaxReturn($data);
	}


}