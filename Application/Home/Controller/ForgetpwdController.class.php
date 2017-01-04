<?php

/*
*	用户忘记密码,继承Controller
*	ForgetPwd/index         找回密码页面
*   ForgetPwd/checkPwd      账号问题
*   ForgetPwd/checkTwice    验证答案
*   ForgetPwd/checkTwice    验证答案
*   ForgetPwd/checkThird    执行修改密码
*   ForgetPwd/checkEmail    检测用户是否存在
*   ForgetPwd/vcode         生成验证码
*   ForgetPwd/check_verify  验证验证码
*   ForgetPwd/checkVcode    再次验证码
*   @author                 王雪
*/

	namespace Home\Controller;
	use Think\Controller;
	class ForgetPwdController extends Controller{
		public function index(){

			$this ->display();
		}

		// 账号问题答案
		public function checkPwd(){
			$useremail = $_POST['user_email'];
			$user = M('user');
			$where['user_email'] = $useremail;
			$users = $user -> where($where) -> find();
			if(!$users['user_question'] || !$users['user_answer']){
				$this -> ajaxReturn(false);
				return ;
			}
			$data['question']=$users['user_question'];
			if(isset($_POST['answer'])){
				if($_POST['answer']==$users['user_answer']){
					$this ->ajaxReturn(true);
				}else{
					$this ->ajaxReturn(false);
				}
			}
			if($users){
				$this -> ajaxReturn($data);
			}else{
				$this -> ajaxReturn($data);
			}
		}

		// 确认答案
		public function checkTwice(){
			$user = M('user');
			$answer = $_POST['data'];
			$where['user_email'] = $_POST['emails'];
			$users = $user -> where($where) -> find();

			if(isset($_POST['data'])){
				if($_POST['data']==$users['user_answer']){
					$this ->ajaxReturn(true);
				}else{
					$this ->ajaxReturn(false);
				}
			}
		}

		// 执行修改密码
		public function checkThird(){
			$user = M('user');
			$useremail = $_POST['email'];
			$userpass['user_pwd'] = md5($_POST['password']);
			$where['user_email'] = $useremail;

			$result = $user->where($where)->save($userpass);
			if($result){
				$users = $user ->where($where)->find();
				$_SESSION['user']=$users;
				$_SESSION['user']['user_pwd']=null;

				$this ->ajaxReturn(true);
			}else{
				$this ->ajaxReturn(false);
			}

		}

		// 检查用户邮箱是否存在
		public function checkEmail(){
			// var_dump($_POST);
			$user = M('user');
			$useremail = $_POST['emails'];
			$where['user_email']=$useremail;
			$users = $user -> where($where)->find();
			if($users){
				$this->ajaxReturn(true);
			}else{
				$this->ajaxReturn(false);
			}
		}

		// 生成验证码
		public function vcode(){
			$Verify = new \Think\Verify();
			$Verify->fontSize = 15;
			$Verify->fontttf = '5.ttf'; 
			$Verify->length   = 4;
			$Verify->useNoise = false;
			$Verify->entry();
		}

		// 检测验证码
		function check_verify($code, $id = ''){
		    $verify = new \Think\Verify();
		        return $verify->check($code, $id);
		    }

		// 再次验证验证码
		public function checkVcode(){
			$code = $_POST['vcode'];
			if($this->check_verify($code)){
				$this -> ajaxReturn(true);
			}else{
				$this -> ajaxReturn(false);
			}
		}
	}

