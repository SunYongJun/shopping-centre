<?php
/**
	*   商品相册
	*   GoodsGallery/_initialize  		分配控制器及方法名以动态该方法执行时的导航样式
	*   GoodsGallery/index			相册列表
	*   GoodsGallery/add			添加页面
	*   GoodsGallery/insert			执行添加操作
	*   GoodsGallery/delete			删除
	*   @author		孙永军
**/ 

namespace Admin\Controller;

class GoodsGalleryController extends CommonController{

	// 相册列表
	public function index(){
		if(!empty($_GET['id'])) {
			$goods = M('goods_gallery');
			$map['goods_id'] = $_GET['id'];
			$data = $goods ->where($map)->select();
			$this->assign('goods',$data);
			$this -> display();
		}else{
			$this->error('非法操作 ');
		}
	}

	// 添加页面
	public function add() {
		if(!empty($_GET['id'])){

			//查询所属商品名称
			$goods = M('goods');
			$good = $goods->find($_GET['id']);
			$data['goods_name'] = $good['goods_name'];
			$data['goods_id'] = $_GET['id'];
			$this->assign('goods',$data);
			$this->display();
		}
	}

	// 执行添加
	public function insert() {	
		if(IS_POST) {	
			$type =  M('goods_gallery');
			$_POST['img_url'] = trim($_POST['img_url']);

			if(substr_count($_POST['img_url'],' ') != 0) { 
				$img = explode(' ',$_POST['img_url']);
				foreach($img as $_POST['img_url']){					
					$type -> create();
					if(!$type->add()) {
						$this -> error('添加失败');
						continue;
					}
				}
			}
			$this->success('添加成功',U('Admin/GoodsGallery/index/id/'.$_POST['goods_id']));
		}	
	}

	// 删除
	public function delete() {
		$user = M('goods_gallery');
		$map['id'] = array('eq',$_POST['id']);
		
		if($user-> where($map) -> delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	

}