<?php

/*
*	友情链接管理
*	友情链接列表 	Flink/index
*	添加友情链接 	Flink/add insert
*	修改友情链接 	Flink/edit save
*	删除友情链接 	Flink/del delall
*	$author 蒋永忠
*/
namespace Admin\Controller;
class FlinkController extends CommonController{
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Flink');
        $this -> assign('menuList','Flinkindex');

        $m = M(CONTROLLER_NAME);
		// 搜索条件
		if(I('get.keywords')){
			$keyword = I('get.keywords');
			$keyword = "link_name like '%".$keyword."%'";
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

	/*
	*	添加友情链接
	*/
	public function add(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Flink');
        $this -> assign('menuList','Flinkadd');

		$this -> display();
	}

	/*
	*	添加友情链接
	*/
	public function insert(){
		$link = M('flink');
		if($_POST['link_name'] && $_POST['link_url']){
			if($_POST['link_type'] != 2){
				$_POST['link_logo'] = null;
			}
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
	/*
	*	删除单个
	*/
	public function del(){
		$m = M(CONTROLLER_NAME);
		if($m -> where('id='.I('post.id')) -> delete()){
			$this -> ajaxReturn(1);
		}else{
			$this -> ajaxReturn(0);
		}
	} 
	/*
	*	删除多个
	*/
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
	/*
	*	修改友情链接
	*/
	public function edit(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Flink');

		$id = $_GET['id'];
		$m = M(CONTROLLER_NAME);
		$link = $m -> find($id);
		$this -> assign('link',$link); 
		$this -> display();
	}
	/*
	*	保存修改数据
	*/
	public function save(){
		$link = M(CONTROLLER_NAME);
		if($_POST['link_type'] == 1){
			$_POST['link_logo'] = null;
		}else{
			//删除原来logo
			$logo = $link -> field('link_logo')->where($_POST['id']) -> find();
			$logo = "./Public/Uploads/".$logo['link_logo'];
		}
		if($_POST['link_name'] && $_POST['link_url']){
			$link -> create();
			if($link -> save()){
				//删除成功，删除原图片
				unlink($logo);
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	}
}