<?php 
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
		protected $_validate = array(
			array('user_email','','此用户名已存在',2,'unique'),
			array('useremail','','此用户名已存在',2,'unique',2),
			array('user_email','email','邮箱格式不正确'),
			array('user_email','require','此字段不能为空！'),
			array('user_pwd','require','此字段不能为空！'),
			array('user_phone','number','此字段只能为数字！'),
		
			);
	} 
 ?>