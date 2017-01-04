<?php

/*
*	订单管理，包括订单列表、订单详细信息、已删除订单、缺货等级
* 	后台订单列表	Order/index
* 	后台订单详细信息	Order/info
* 	确认发货	Order/shipping
* 	取消订单	Order/del
* 	已删除订单列表	Order/cancel
* 	缺货等级列表	Order/book
* 	补货	Order/addgood
* 	$author 蒋永忠
*/

namespace Admin\Controller;

class OrderController extends CommonController{
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Order');
        $this -> assign('menuList','Orderindex');

        $m = M('order_action');
		// 搜索条件
		if($_GET['keywords']){
			$keyword = $_GET['keywords'];
			$keyword['acti'] = array("like","'%".$keyword."%'");
		}else{
			$keyword = '';
		}
		$keyword['is_delete'] = array('eq',0);
		$count = $m -> where($keyword) -> count();// 查询满足要求的总记录数

		// 调用自定义的分页
		$mypage = $this -> mypage($count,8);	
		

		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m-> where($keyword) ->order('id desc')->limit($mypage->firstRow.','.$mypage->listRows)->select();
		
		foreach($list as &$v){
			$v['status'] = action($v['action_status']);
			// 查询下单人
			$user = M('user') -> field('user_email') -> where('id='.$v['user_id']) -> find();
			$v['username'] = $user['user_email'];
			//查询收货人
			$address = M('user_address') -> field('true_name,address_phone') -> where('id='.$v['address_id']) -> find();
			$v['name'] = $address['true_name'];
			$v['phone'] = $address['address_phone'];
		}
		
		$show = $mypage->show();// 分页显示输出
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		//自动确认收货，商品发货后10天自动确认收货
        $da['action_status'] = 3;
        $time = time() - 3600*24*10;
        $m -> where("action_status = 2 AND action_time < {$time}") -> save($da);
        // echo date("Y-m-d",'1417701215﻿');
        // echo date("Y-m-d",'1417701215﻿');
		$this -> display();
	}

	public function info(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Order');
        //查询订单详细信息
        $acti = $_GET['acti'];
        if(!$acti){
        	$this -> error('非法参数！');
        }
        $action = M('order_action');
        $info = $action -> where('acti='.$acti) -> find();
        if($info){
        	$info['status'] = action($info['action_status']);
        	$info['delivery'] = dev($info['delivery']);
        	$address = M('user_address') -> where('id='.$info['address_id']) -> find();
        	$user = M('user') -> field('user_email') -> where('id='.$info['user_id']) -> find();
        	// var_dump($address);
        	//查询配送方式和支付方式
        	$pay = M('pay_type') -> where('id='.$info['pay_id']) -> field('pay_name') -> find();
        	$shipping = M('shipping') -> where('id='.$info['shipping_id']) -> field('shipping_name,shipping_money') -> find();

        	$this -> assign('info',$info);
        	$this -> assign('user',$user);
        	$this -> assign('address',$address);
        	$this -> assign('pay',$pay);
        	$this -> assign('shipping',$shipping);

        	//查询订单内商品信息
        	$ag = M('order_goods');
        	$g = $ag -> where('action_id='.$info['id']) -> select();
        	$i = 0;
        	$gift = M('gift');
        	foreach($g as $vg){
        		$goods[$i] = M('goods') -> field('goods_sn,goods_name,goods_price,goods_img,gift_id') -> where('id='.$vg['goods_id']) -> find();
        		$goods[$i]['sum'] = $goods[$i]['goods_price'] * $vg['goods_number'];
        		$goods[$i]['num'] = $vg['goods_number'];
        		$giftV = $gift -> where('id='.$goods[$i]['gift_id']) -> find();
        		$goods[$i]['gift'] = $giftV;
        		// echo $gift -> getlastsql();
        		// var_dump($giftV);
        		$i ++;
        	}
        	// var_dump($goods);
        	$this -> assign('goods',$goods);
        }else{
        	$this -> error('查询无此订单信息！');
        }
		$this -> display();
	}

	/*
	*	确认发货，返回Ajax值
	*/
	public function shipping(){
		$acti = $_POST['acti'];
		if(!$acti){
			$this -> ajaxReturn(array('satus'=>0,'content'=>'非法操作！'));
		}
		//先查询状态在确认发货
		$status = M('order_action') -> field('action_status') -> where('acti='.$acti) -> find();
		//判断只有付款了才能发货
		if($status['action_status'] == 1){
			$data['action_status'] = 2;
			$data['action_time'] = time();
			$bool = M('order_action') -> where('acti='.$acti) -> save($data);
			if($bool){
				$re['status'] = 1;
				$re['content'] = '已发货！';
			}else{
				$re['status'] = 0;
				$re['content'] = '发货失败！';
			}
			$this -> ajaxReturn($re);
		}elseif($status['action_status'] == 0){
			$this -> ajaxReturn(array('satus'=>0,'content'=>'该订单尚未付款，不能发货！'));
		}elseif($status['action_status'] == 2){
			$this -> ajaxReturn(array('satus'=>0,'content'=>'该订单已发货！'));
		}elseif($status['action_status'] == 3){
			$this -> ajaxReturn(array('satus'=>0,'content'=>'该订单已收货！'));
		}elseif($status['action_status'] == 4){
			$this -> ajaxReturn(array('satus'=>0,'content'=>'该订单已取消！'));
		}
	}	

	/*
	*	删除订单，只有状态为4的才可以删除，4为订单取消状态
	*/
	public function del(){
		$id = $_POST['id'];
		if(!$id){
			$this -> ajaxReturn(array('status'=>0,'content'=>'非法参数！'));
			exit;
		}
		$m = M('order_action');
		$where['action_status'] = array('eq',4);
		$where['id'] = array('eq',$id);
		$da['is_delete'] = 1;
		$bool = $m -> where($where) -> save($da);
		echo $m -> getlastsql();
		if($bool){
			$data = array(
				'satus' => 1,
				'content' => '删除成功！'
				);
		}else{
			$data = array(
				'satus' => 0,
				'content' => '删除失败！'
				);
		}
		$this -> ajaxReturn($data);
	}


	/*
	*	已删除订单
	*/
	public function cancel(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Order');
        $this -> assign('menuList','Ordercancel');

        $m = M('order_action');
		// 搜索条件
		if($_GET['keywords']){
			$keyword = $_GET['keywords'];
			$keyword['acti'] = array("like","'%".$keyword."%'");
		}else{
			$keyword = '';
		}
		$keyword['is_delete'] = array('eq',1);
		$count = $m -> where($keyword) -> count();// 查询满足要求的总记录数

		// 调用自定义的分页
		$mypage = $this -> mypage($count,8);	
		$keyword['is_delete'] = array('eq',1);

		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m-> where($keyword) ->order('id desc')->limit($mypage->firstRow.','.$mypage->listRows)->select();
		
		foreach($list as &$v){
			$v['status'] = action($v['action_status']);
			// 查询下单人
			$user = M('user') -> field('user_email') -> where('id='.$v['user_id']) -> find();
			$v['username'] = $user['user_email'];
			//查询收货人
			$address = M('user_address') -> field('true_name,address_phone') -> where('id='.$v['address_id']) -> find();
			$v['name'] = $address['true_name'];
			$v['phone'] = $address['address_phone'];
		}
		
		$show = $mypage->show();// 分页显示输出
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出

		$this -> display();
	}

	/*
	*	缺货等级  book_goods
	*/
	public function book(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','Order');
        $this -> assign('menuList','Orderbook');

        $m = M('book_goods');
        // 搜索条件
		if($_GET['keywords']){
			$keyword = $_GET['keywords'];
			$keyword['acti'] = array("like","'%".$keyword."%'");
		}else{
			$keyword = '';
		}
		$keyword['is_delete'] = array('eq',0);
		$count = $m -> count();// 查询满足要求的总记录数

		// 调用自定义的分页
		$mypage = $this -> mypage($count,8);	
		
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m ->order('book_time desc')->limit($mypage->firstRow.','.$mypage->listRows)->select();
		if($list){
			$g = M('goods');
			foreach($list as &$v){
				$good = $g -> where('id='.$v['goods_id']) -> field('goods_name') -> find();
				$v['name'] = $good['goods_name'];
			}
			$this -> assign('list',$list);
		}
		$this -> display();
	}

	/*
	*	确认补货
	*/
	public function addgood(){
		$id = $_POST['id'];
		$book = M('book_goods');
		if($id){
			$data['admin_id'] = $_SESSION['admin']['id'];
			$data['admin_name'] = $_SESSION['admin']['admin_name'];
			$data['admin_time'] = time();
			$data['book_status'] = 1;
			if($book -> where('id='.$id) -> save($data)){
				$this -> ajaxReturn(array('status'=>1,'content'=>'补货成功！'));
			}else{
				$this -> ajaxReturn(array('status'=>0,'content'=>'补货失败！'));
			}
		}else{
			$this -> ajaxReturn(array('status'=>0,'content'=>'非法参数！'));
		}
	} 
}