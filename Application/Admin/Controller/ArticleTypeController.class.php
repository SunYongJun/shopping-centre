<?php

/*
*	文章分类  ArticleType
*	分类列表	ArticleType/index
*	增加文章分类	ArticleType/add  insert
*	修改文章分类	ArticleType/edit save
*	$author 蒋永忠
*/

namespace Admin\Controller;
class ArticleTypeController extends CommonController{
	/*
	*	文章分类列表显示
	*/
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Article');
        $this -> assign('menuList','ArticleTypeindex');
		$m = M(CONTROLLER_NAME);
		// 搜索条件
		if(I('get.keywords')){
			$keyword = I('get.keywords');
			$keyword = "article_type_name like '%".$keyword."%'";
		}else{
			$keyword = '';
		}
		// 查询满足要求的总记录数
		$count = $m -> where($keyword) -> count();

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
	*	增加文章分类
	*/
	public function add(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Article');
        $this -> assign('menuList','ArticleTypeindex');
        
		$this -> display();
	}

	/*
	*	插入分类数据
	*/
	Public function insert(){
		$m = M(CONTROLLER_NAME);
		if(IS_POST){
			if(I('post.is_show')){
				$_POST['is_show'] = 1;
			}else{
				$_POST['is_show'] = 0;
			}
			if(I('post.article_type_name') == null || !I('post.article_order') == null){
				$this -> error('添加失败！');
			}
			$m -> create();
			if($m -> add()){
				$this -> success('添加成功！');
			}else{
				$this -> error('添加失败！');
			}
		}
	}
	/*
	*	删除单条数据
	*/
	public function del(){
		$m = M(CONTROLLER_NAME);
		$a = M('article');
		$id = $_POST['id'];
		if($id){
			if($m -> delete($id)){
				$a -> where('article_type='.$id) -> delete();
				$this -> ajaxReturn(1);
			}else{
				$this -> ajaxReturn(0);
			}
		}else{
			$this -> ajaxReturn(0);
		}
	} 
	/*
	*	编辑分类
	*/
	public function edit(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','ArticleType');
		$id = 'id='.$_GET['id'];
		$m = M(CONTROLLER_NAME);
		$type = $m -> where($id) -> find();
		$this -> assign('type',$type); 
		$this -> display();
	}

	Public function save(){
		$m = M(CONTROLLER_NAME);
		if(IS_AJAX){
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
	/*
	*	删除多条数据
	*/
	public function delall(){
		if(IS_AJAX){
			$ids = $_POST['id'];
			$ids = implode(',', $ids);
			$m = M(CONTROLLER_NAME);
			$a = M('article');
			if($ids){
				if($m -> delete($ids)){
					$a -> where(array('article_type'=>array('in',$ids))) -> delete();
						$this -> ajaxReturn(1);
				}else{
					$this -> ajaxReturn(0);
				}
			}else{
				$this -> ajaxReturn(0);
			}
		}
	}
}