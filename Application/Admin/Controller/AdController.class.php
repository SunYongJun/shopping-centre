<?php

/*
*	广告管理
*	广告列表	Ad/index
*	添加广告	Ad/add insert
*	修改广告	Ad/edit save
*	删除广告	Ad/del delall
*	$author 蒋永忠
*/

namespace Admin\Controller;
class AdController extends CommonController{
	/*
	*	广告列表
	*/
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Ad');
        $this -> assign('menuList','Adindex');

        $m = M(CONTROLLER_NAME);
		// 搜索条件
		if(I('get.keywords')){
			$keyword = I('get.keywords');
			$keyword = "ad_link like '%".$keyword."%'";
		}else{
			$keyword = '';
		}
		
		$count = $m -> where($keyword) -> count();// 查询满足要求的总记录数

		// 调用自定义的分页
		$mypage = $this -> mypage($count,8);

		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m-> where($keyword)->order('id desc')->limit($mypage->firstRow.','.$mypage->listRows)->select();
		foreach ($list as &$value) {
			if($value['ad_position'] == 1){
				$value['ad_position'] = '顶部广告';
			}else if($value['ad_position'] == 2){
				$value['ad_position'] = '中间Banner广告';
			}
			else if($value['ad_position'] == 3){
				$value['ad_position'] = '底部广告';
			}else{
				$value['ad_position'] = '非法广告';
			}
		}
		$show = $mypage->show();// 分页显示输出
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		$this -> display();
	}
	/*
	*	添加广告
	*/
	public function add(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Ad');
        $this -> assign('menuList','Adadd');

        $this -> display();
	}
	/*
	*	添加数据
	*/
	public function insert(){
		$link = M('ad');

		if($_POST['ad_link'] && $_POST['ad_picture']){

			$link -> create();
			if($link -> add()){
				$this -> success('添加成功！','index');
			}else{
				$this -> error('添加失败');
			}
		}else{
			$this -> error('添加失败');
		}
	}
	//删除单个
	public function del(){
		$m = M(CONTROLLER_NAME);
		if($m -> where('id='.I('post.id')) -> delete()){
			$this -> ajaxReturn(1);
		}else{
			$this -> ajaxReturn(0);
		}
	} 
	//删除多个
	public function delall(){
		if(IS_AJAX){
			$ids = I('post.id');
			$ids = implode(',', $ids);
			$m = M(CONTROLLER_NAME);
			if($m -> delete($ids)){
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}
	}
	public function edit(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Ad');

		$id = $_GET['id'];
		$m = M(CONTROLLER_NAME);
		$link = $m -> find($id);
		$this -> assign('ad',$link); 
		$this -> display();
	}
	public function save(){
		$link = M(CONTROLLER_NAME);
		if($_POST['ad_link'] && $_POST['ad_picture']){
			$link -> create();
			if($link -> save()){
				//删除成功，删除原图片
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	}
}