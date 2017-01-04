<?php
	namespace Admin\Model;
	use Think\Model;

	class AdminUserModel extends Model{
		protected $_validate = array(
			array('admin_name','','此用户名已存在！',2,'unique'),
			array('admin_name','require','此字段不能为空！'),
			array('admin_pwd','require','此字段不能为空！'),
			// array('verify','require','验证码必须！'),
			array('re_admin_pwd','admin_pwd','两次密码不一致',0,'confirm'), 
			);
	}

 ?>