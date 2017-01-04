<?php

namespace Home\Controller;

class ArticleController extends CommonController{
	public function index(){
		// 通过id查询到文章内容
		$a = M('article');
		if(!$id = $_GET['id']){
			$this -> error('非法参数，请重试！');
		}
		$art = $a -> where('id='.$id) -> find();
		if($art){
			// 查询分类信息
			$type = M('article_type') -> field('article_type_name') -> where('id='.$art['article_type']) -> find();
			$art['type_name'] = $type['article_type_name'];
			//查询作者信息
			$author = M('admin_user') -> field('admin_name') -> where('id='.$art['article_author']) -> find();
			$art['admin_name'] = $author['admin_name'];
			
			$this -> assign('art',$art);
		}else{
			$this -> error('暂无此内容，请重试！');
		}
		//查询上一条新闻和下一条新闻
		$next = $a -> field('id') -> where('id<'.$id) -> order('id desc') -> find();
		$this -> assign('next',$next['id']);
		$prev = $a -> field('id') -> where('id>'.$id) -> order('id asc') -> find();
		$this -> assign('prev',$prev['id']);
		$this -> display();
	}

	/*
	*	遍历所有的文章
	*/
	public function articleList(){
		//遍历出所有的文章
		$a = M('article');
		$t = M('article_type');
		$type = $t -> where('is_show=1') -> field('id,article_type_name') -> order(array('order'=>'desc')) -> select();
		foreach($type as &$v){
			$article = $a -> where('article_type='.$v['id']) -> field('id,article_title,article_author,article_time') -> order('article_time desc') -> select();
			//查询作者
			foreach($article as &$user){
				$author = M('admin_user') -> where('id='.$user['article_author']) -> field('admin_name') -> find();
				$user['author'] = $author['admin_name'];
			}
		
			$v['article'] = $article;
		}
		
		$this -> assign('type',$type);
		$this -> display();
	}
}