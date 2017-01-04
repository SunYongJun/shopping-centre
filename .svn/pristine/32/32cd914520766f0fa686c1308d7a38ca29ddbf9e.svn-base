<?php
/**
	*   商品分类
	*   ShopType/_initialize  		分配控制器及方法名以动态该方法执行时的导航样式
	*   ShopType/index				分类列表
	*   ShopType/add				添加分类页面
	*   ShopType/insert			执行添加
	*   ShopType/edit				修改页面
	*   ShopType/save				执行修改
	*   ShopType/delete			删除
	*   ShopType/deleteall			全部删除
	*   @author		孙永军
**/ 

namespace Admin\Controller;

class ShopTypeController extends CommonController{

	// 分配控制器及方法名以动态该方法执行时的导航样式
	public function _initialize() {
		parent::_initialize();
		$this->assign('menuList',CONTROLLER_NAME.'-'.ACTION_NAME);
		$this->assign('menu','Goods');
	}

	// 分类列表
	public function index(){
		$type =  M('shop_type');

		if($_GET['keywords']){
	            $maps['type_name'] = array('like','%'.$_GET['keywords'].'%');
	        }

		$count =  $type -> where($maps) -> count();
		$mypage = $this -> mypage($count,8);
		$data = $type ->where($maps) -> order('type_order desc')->limit($mypage->firstRow,$mypage->listRows) -> select();

		foreach($data as $k=>$v) {
			$map['id'] = array('eq',$data[$k]['pid']);
			$result = $type -> field('type_name') ->where($map) -> find();
			
			if(!empty($result)){
				$data[$k]['pname'] = $result['type_name'];
			}else{
				$data[$k]['pname'] = '顶级分类';
			}
		}		
		$page = $mypage -> show();
		$this->assign('page',$page);
		$this->assign('type',$data);
		
		$this -> display();
	}

	// 添加页面
	public function add() {
		$type =  M('shop_type');
		$data = $type->query("select * from le_shop_type order by concat(shop_pid,'-',id) asc,type_order asc");

		//分类分层
		foreach($data as $k=>$v) {
			$num = count(explode('-',$v['shop_pid']));

			if($num > 1) {
				unset($data[$k]);
				continue;
			}
			$data[$k]['before'] = '';
			for($i = 0; $i< $num; $i++) {
				$data[$k]['before'] .= '&nbsp;&nbsp;　&nbsp;';
			}
		}
		$this->assign('type',$data);

		$this -> display();
	}

	// 修改
	public function edit() {
		$type = M('shop_type');

		//查询父类信息
		$pdata = $type->query("select * from le_shop_type order by concat(shop_pid,'-',id) asc,type_order asc");

		//分类分层
		foreach($pdata as $k=>$v) {
			$num = count(explode('-',$v['shop_pid']));
			$pdata[$k]['before'] = '';
			for($i = 0; $i< $num; $i++) {
				$pdata[$k]['before'] .= '&nbsp;&nbsp;　&nbsp;';
			}
		}

		$this->assign('pdata',$pdata);
		
		//查询该ID信息
		$map['id'] = array('eq',$_GET['id']);
		$iddata = $type->where($map)->find();
		$iddata['pname'] = $type -> find($iddata['pid'])[type_name];
		
		$this->assign('iddata',$iddata);
		$this->display();
	}

	// 执行添加
	public function insert() {	

		if(IS_POST) {			
			
			$type =  M('shop_type');
			$data = $_POST;
			$pid = $_POST['pid'];
			if($pid == '0'){
				$data['shop_pid'] = '0';
			}else{
				$pdata = $type->query("SELECT CONCAT(shop_pid,'-',id) AS p FROM le_shop_type WHERE id=$pid");
				$data['shop_pid'] = $pdata[0]['p'];							
			}

			$type -> create($data);
			if($result = $type->add()){				
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}
	}

	// 删除
	public function delete() {
		if(IS_GET) {
			$map['id'] = array('eq',$_GET['id']);
			$user = M('shop_type');
			$goods = M('goods');

			//如果该分类下有商品，阻止删除
			$maps['type_id'] = $_GET['id'];
			$gnum = $goods->where($maps) ->count();
			if($gnum){
				exit($this->error('该分类下有商品，请先删除商品'));
			}
			if($user-> where($map) -> delete()){
				$this->success('删除成功',U('index'));
			}else{
				$this->error('删除失败');
			}
		}
	}

	// 执行修改
	public function save() {
		if(IS_POST){
			$data = M(CONTROLLER_NAME);
			$map['id'] = array('eq',$_POST['pid']);
			$datap = $data->where($map)->select();
			$pdata = $_POST;
			$pdata['shop_pid'] = $datap[0]['shop_pid'].'-'.$datap[0]['id'];
		
			$data->create($pdata);
			if($data->save()) {
				$this->success('修改成功',U('ShopType/index'));
			}else{
				$this->error('修改失败');
			}
		}
	}

	//批量删除
	public function delall() {		
		$type = M(CONTROLLER_NAME);
		$goodsm = M('goods');

		//分类下有商品的,返回其分类名称
		$data = '';
		foreach($_POST['id'] as $v) {
			$map['type_id'] = $v;
			$goodsd = $goodsm ->where($map)-> select();

			if(count($goodsd)){
				$data .= $type->find($v)['type_name'].' ';
			}else{
				$type -> delete($v);				
			}
		}
		if(empty($data)) {
			$data .= '删除成功';
		}else{
			$data .= ' 分类下有商品，无法删除';
		}	
		$this -> ajaxReturn($data);
		
	}

}