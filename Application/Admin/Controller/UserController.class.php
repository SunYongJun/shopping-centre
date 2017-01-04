<?php

/*
*   后台添加用户部分，继承common类
*   User/index        用户列表
*   User/add          添加用户
*   User/checkEmail   检车用户是否存在
*   User/insert       执行添加用户
*   User/save         修改用户
*   User/save_doit    执行修改用户
*	User/del          单个禁用用户
*   USer/delAll       批量禁用用户
*   @author           王雪
*/

namespace Admin\Controller;

class UserController extends CommonController{

	public function index(){

		$user = M('user');
		 if($_GET['keywords']){
	            $maps['user_email'] = array('like','%'.$_GET['keywords'].'%');
	        }

		 // 查询总记录数
        $count = $user-> where($maps) -> count();
        
        // 调用自定义的分页
        $mypage = $this -> mypage($count,8);

        $list = $user-> where($maps) -> limit($mypage->firstRow,$mypage->listRows)
        ->select();

        $show = $mypage->show();           // 分页显示输出
        $this->assign('list',$list);       // 赋值数据集
        $this->assign('page',$show);       // 赋值分页输出
		$this -> assign('userz','User');
		$this -> assign('userList','UserIndex');
		$this -> display();
	}

	// 添加用户
	public function add(){
		$this -> assign('userz','User');
		$this -> assign('userList','UserAdd');
		$this -> display();
	}

	// 检查该用户是否已经存在
	public function checkMail(){
		$email = $_POST['email'];
		$user = M('user');
		$where['user_email'] = $email;
		$users = $user -> where($where) -> find();
		if($users){
			$this -> ajaxReturn(true);
		}else{
			$this ->ajaxReturn(false);
		}

	}

	// 执行添加用户
	public function insert(){

		$user = M('user');
		$_POST['user_pwd'] = md5($_POST['user_pwd']);
		$_POST['user_birth'] = strtotime($_POST['user_birth']);
		$_POST['user_regtime'] = time();
		if($_POST['user_pic']==''){
			unset($_POST['user_pic']);
		}
		$user->create();
		if($user->add()){
			$this->success('添加成功','index');
		}else{
			$this->error('添加失败');
		}
	}	
			
	// 修改用户
	public function save(){
		$user = M('user');
		if(IS_GET){
			$map['id'] = array('eq',$_GET['id']);
			$data = $user->where($map)->select();
			$this -> assign('user',$data[0]);
		}
		$this -> display();
	}

	// 执行修改
	public function save_doit(){
		
				
		$user = M('user');
			if($_POST['user_pic']==''){
				unset($_POST['user_pic']);
			}
			$_POST['user_birth'] = strtotime($_POST['user_birth']);
			if(!$user->create()){
				exit($user->getError());
			}else{
				$map= 'id='.$_POST['id'];

				if($user->where($map)->save()){
					$this->redirect('index');
				}else{
					$this->error('修改失败');
				};
			}

			$this -> assign('userz','User');		

	}

	// 单条禁用用户
	public function del(){
		$user = M('user');
		$map = 'id='.I('post.id');
		$cha['is_delete'] = 1;
		$users = $user->where($map)->save($cha);
		if($users){
			echo 1;
		}else{
			echo 2;
		}
	}
	// 批量禁用用户
	public function delAll(){
		if(IS_AJAX){
            $ids = I('post.id');
            $ids = implode(',', $ids);
            $m = M(CONTROLLER_NAME);
            $cha['is_delete'] = 1;
            $where['id']=array('in',$ids);
            if($m -> where($where) -> save($cha)){
                echo 1;
            }else{
                echo 0;
            }
        }
	}
}