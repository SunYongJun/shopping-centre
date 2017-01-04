<?php

/**
	*   购物车页面
	*   Cart/index 			购物车页面
	*   Cart/add				加入购物车
	*   Cart/minus			购物车数量减少
	*   Cart/plur			购物车数量增加
	*   @deprecate		  	Cart/keynum	购物车数量输入判断，已不使用
	*   Cart/delete			从购物车移除
	*   Cart/bakcart			结算时备份未选中的物品，结算完成后改回，使其继续存在在购物车中
	*   @author				孙永军
**/ 

namespace Home\Controller;

class CartController extends AuthController{

	// 购物车页面
	public function index(){
		if(!count($_SESSION['cart'])) {
		exit($this->error('购物车内暂无商品',U('Home/Index/index')));
		}
		if(!empty($_SESSION['bak'])) {
			foreach($_SESSION['bak'] as $k=>$v) {
				$_SESSION['cart'][$k] = $v;
			}
			unset($_SESSION['bak']);
		}

		//为您推荐
		$goods = M('goods');

		$good = $goods->order('sales_volume')->limit(15)->select();

		$this->assign('goods',$good);
		$this -> display();
	}

	/**
		*   加入购物车
		*@param		$_POST['id']   	string   多个物品加入购物车，以逗号拼接的商品id组字符串  	
		*@param 		$_POST['sale'] 	int	 	是否秒杀，参数值为秒杀价格    
		*@param		$_POST['num']  int  	单个商品加入购物车的数量
	**/ 
	public function add() {
		if($_POST['id']){
			$carts = M('goods');

			$idarr = explode(',',trim($_POST['id'],','));
		
			foreach($idarr as $v) {
				$cart = $carts->find($v);
		
				if($cart == false) {
					$data = array('status'=>0,'content'=>'该物品不存在');
					continue;
				}

				//判断是否有存货
				if($cart['goods_number'] < 1) {

					//缺货登记
					$books = M('book_goods');
					if($books -> where(array('goods_id'=>$v))->find()) {
						$data = array('status'=>0,'content'=>'该物品无库存');
						continue;
					}
					$books -> goods_id = $v;
					$books-> email = $_SESSION['user']['user_email'];
					$books -> book_time = time();
					if($books -> add()) {
						$data = array('status'=>0,'content'=>'该物品无库存');
					}else{
						$data = array('status'=>0,'content'=>'意外错误');
					}
					$this->ajaxReturn($data);

					continue;
				}
				//购物车数量不能大于库存数量
				if($_SESSION['cart'][$v]['num']>=$cart['goods_number']){
					$data = array('status'=>0,'content'=>'该物品库存不足');
					continue;
				}

				//是否秒杀，如果是，使用秒杀价格
				if(!empty($_POST['sale'])) {
					$cart['goods_price'] = $_POST['sale'];
				}

				//如果购物车不存在此商品则添加，存在则数量+1
				if(empty($_SESSION['cart'][$v])) {
					$_SESSION['cart'][$v] = $cart;
					$_SESSION['cart'][$v]['num'] = 1;
					if($_POST['num']) {
						$_SESSION['cart'][$v]['num'] = $_POST['num'];
					}
				}else{
					if($_POST['num']) {
						$_SESSION['cart'][$v]['num'] += $_POST['num'];
					}else{
						$_SESSION['cart'][$v]['num']++;
					}
				}

				$data['status'] = 1;
				$data['content'] = '加入购物车成功';
			}
		}else{
			$data['status'] = 0;
			$data['content'] = '加入购物车失败';
		}
		$this->ajaxReturn($data);
	}

	// 购物车数量减少
	public function minus() {
		if($_POST['id']){
			if($_SESSION['cart'][$_POST['id']]['num'] > 1){
				$_SESSION['cart'][$_POST['id']]['num']--;
			}
			$this->ajaxReturn($_SESSION['cart'][$_POST['id']]['num']);
		}
	}

	// 购物车数量增加
	public function plur() {
		if($_POST['id']){
			$goods = M('goods');
			$gnum = $goods-> find($_POST['id'])['goods_number'];
			if($gnum > $_SESSION['cart'][$_POST['id']]['num']) {
				$_SESSION['cart'][$_POST['id']]['num']++;
				$this->ajaxReturn($_SESSION['cart'][$_POST['id']]['num']);
			}else{
				$this->ajaxReturn(false);
			}
		}
	}

	//@deprecate    购物车数量输入判断
	public function keynum(){
		$goods = M('goods');
		$gnum = $goods-> find($_POST['id'])['goods_number'];
		if($_POST['num'] > $gnum) {
			$_SESSION['cart'][$_POST['id']]['num'] = $gnum;
			$this->ajaxReturn($gnum);
		}else{
			$_SESSION['cart'][$_POST['id']]['num'] = $_POST['num'];
			$this->ajaxReturn($_POST['num']);
		}
	}

	// 购物车商品移除
	public function delete() {
		if($_GET['id']){
			unset($_SESSION['cart'][$_GET['id']]);
			$this->success('移除成功');
		}else{
			$this->error('移除失败');
		}
	}

	//处理未选中的购物车商品
	public function bakcart() {
		if($_POST['id']) {
			$_SESSION['bak'][$_POST['id']] = $_SESSION['cart'][$_POST['id']];
			unset($_SESSION['cart'][$_POST['id']]);

			$this->ajaxReturn($_SESSION['bak'][$_POST['id']]);
		}else{
			$this->ajaxReturn(false);
		}
	}

}                                                              