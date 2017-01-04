<?php

/*
*	实现管理员之间的留言，继承Common类 
*	Message/index 	浏览留言	  
*	Message/insert 	插入留言	  
*	Message/del 	删除留言	 
*	Message/read 	阅读留言	
*	$anthor 蒋永忠
*/
namespace Admin\Controller;
class MessageController extends CommonController{
	/*
	*	浏览留言
	*/
	public function index(){
		// 分配左侧菜单样式变量
        $this -> assign('menu','ShopConfig');
        $this -> assign('menuList','Messageindex');
		//遍历出所有管理员，发送消息用
		$admin = M('admin_user');
		$user = $admin -> field('id,admin_name') -> order('id asc') -> select(); 
		$this -> assign('user',$user);

		//查询自己的消息
		$m = M('admin_message');
		//收件人是自己的id
		$map['receiver_id'] = array('eq',$_SESSION['admin']['id']);
		//未删除
		$map['is_delete'] = array('eq',0);
		$msg = $m -> where($map) -> order('send_time desc,id desc') -> select();
		//遍历发送人的信息
		foreach($msg as &$vsg){
			$auser = $admin -> where('id='.$vsg['send_id']) -> field('admin_name,img') -> find();
			$vsg['name'] = $auser['admin_name'];
			$vsg['img'] = $auser['img'];
		}
		
		$this -> assign('msg',$msg);
		$this -> display();
	}
	
	/*
	*	发送留言
	*/
	public function insert(){
		$m = M('admin_message');
		$_POST['send_id'] = $_SESSION['admin']['id'];
		if($_POST['send_id'] == $_POST['receiver_id']){
			$this -> ajaxReturn(array('status'=>0,'content'=>'不允许给自己发站内消息！'));
		}
		$_POST['send_time'] = time();
		if($m -> create()){
			if($m -> add()){
				$this -> ajaxReturn(array('status'=>1,'content'=>'发送成功！'));
			}else{
				$this -> ajaxReturn(array('status'=>0,'content'=>'发送失败！'));
			}
		}
	}

	/*
	*	删除留言
	*/
	Public function del(){
		$id = $_POST['id'];
		$msg = M('admin_message');
		if($id){
			$data['is_delete'] = 1;
			if($msg -> where('id='.$id) -> save($data)){
				$this -> ajaxReturn(array('status'=>1));
			}else{
				$this -> ajaxReturn(array('status'=>0,'content'=>'删除失败！'));
			}
		}else{
			$this -> ajaxReturn(array('status'=>0,'content'=>'非法操作！'));
		}
	}

	/*
	*	阅读留言
	*/
	public function read(){
		$id = $_POST['id'];
		$msg = M('admin_message');
		if($id){
			$data['is_readed'] = 1;
			$data['read_time'] = time();
			if($msg -> where('id='.$id) -> save($data)){
				$this -> ajaxReturn(array('status'=>1,'content'=>date('Y-m-d H:i:s',$data['read_time'])));
			}else{
				$this -> ajaxReturn(array('status'=>0,'content'=>'操作失败！'));
			}
		}else{
			$this -> ajaxReturn(array('status'=>0,'content'=>'非法操作！'));
		}
	}
}