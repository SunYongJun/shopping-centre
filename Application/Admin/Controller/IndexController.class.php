<?php
/*
*   后台首页
*   后台首页、管理员会话  Index/index
*   插入会话数据  Index/insert
*   $author 蒋永忠
*/
namespace Admin\Controller;

class IndexController extends CommonController {
    public function index(){
        //实例化
        $user = M('user');   //用户表
        $c = M('comment');  //用户评论表
        $o = M('order_action'); //订单
        $g = M('goods');    //商品数
        $s = M('sale'); //秒杀
        //订单统计
        $orderCount = $o -> count("id");
        $orderPay = $o -> where('action_status=1') -> count();
        $this -> assign('orderCount',$orderCount);
        $this -> assign('orderPay',$orderPay);
        //商品统计
        $goodsCount = $g -> count();
        $this -> assign('goodsCount',$goodsCount);
        $goodsVolume = $g -> sum('sales_volume');
        $this -> assign('goodsVolume',$goodsVolume);
        $saleCount = $s -> count('goods_id');
        $this -> assign('saleCount',$saleCount);
        //访问统计
        $clickCount = $g -> sum('goods_click');
        $this -> assign('clickCount',$clickCount);
        $commentCount = $c -> count();
        $this -> assign('commentCount',$commentCount);
        //服务器信息
        $info = array(
            'php'=>php_sapi_name(),
            'tp'=>THINK_VERSION,
            'mysql'=>mysql_get_server_info(),
            'apache'=>$_SERVER["SERVER_SOFTWARE"],
            'ip'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            'time'=>date('Y-m-d H:i:s',time())
            );
        $this -> assign('info',$info);
        //数据库名称
        $this -> assign('dbname',C('DB_NAME'));
        $this -> assign('prefix',C('DB_PREFIX'));
        $this -> assign('charset',C('DB_CHARSET'));
    	//查出最新注册的十个用户
    	$u = $user -> field('user_email,user_pic,user_regtime') -> order('user_regtime desc') -> limit(10) -> select();
    	if($u){
    		$this -> assign('user',$u);
    	}
    	//查出最新的5条评论
    	$com = $c -> field('user_id,comment_content,comment_time') -> order('comment_time desc') -> limit(5) -> select();
    	if($com){
			foreach($com as &$v){
				$cu = $user -> field('user_email,user_pic') -> where('id='.$v['user_id']) -> find();
				$v['pic'] = $cu['user_pic'];
				$v['email'] = $cu['user_email'];
    		}
    		$this -> assign('com',$com);
    	}
    	//查询管理员会话
    	$d = M('dialog');
    	$list = $d -> order('id asc') -> select();
    	//查询管理员的信息
    	foreach($list as &$n){
    		$admin = M('admin_user') -> where('id='.$n['uid']) -> field('admin_name,img') -> find();
    		$n['name'] = $admin['admin_name'];
    		$n['img'] = $admin['img'];
    	}

    	$this -> assign('list',$list);
    	//display
    	$this -> display();
    }

    /*
    *	管理员会话
    */
    Public function insert(){
    	$d = M('dialog');
    	$admin = M('admin_user');
    	$_POST['uid'] = $_SESSION['admin']['id'];
    	$_POST['time'] = time();
    	$pid = $_GET['pid'];
    	if($pid == 'undefined'){
    		$pid = M('admin_user') -> max('id');
    	}
    	
    	if($d -> create()){
    		if($id = $d -> add()){
    			//查询刚刚插入的读取出来插入到对话框内
    			$dd = $d -> where('id>'.$pid) -> select();

    			foreach($dd as &$v){
					$admin = M('admin_user') -> where('id='.$v['uid']) -> field('admin_name,img') -> find();
    				echo '<div class="itemdiv dialogdiv">
					<div class="user" rel="'.$v["id"].'">
						<img alt="" src="'.__ROOT__.'/public/'.$admin["img"].'" />
					</div>

					<div class="body">
						<div class="time">
							<i class="icon-time"></i>
							<span class="grey">'.timeNow($v["time"]).'</span>
						</div>

						<div class="name">
							<a href="">'.$admin["admin_name"].'</a>
						</div>
						<div class="text">'.$v["content"].'</div>

						<div class="tools">
							<a href="javascript:void(0)" class="btn btn-minier btn-info" del="'.$v["id"].'">
								<i class="icon-only icon-share-alt"></i>
							</a>
						</div>
					</div>
					</div>';
    			}
    			
    		}else{
    			$this -> ajaxReturn(0);
    		}
    	}else{
    		$this -> ajaxReturn(0);
    	}
    }
    /*
    *	删除对话
    */
    Public function del(){
    	$id = $_GET['id'];
    	$bool = M('dialog') -> delete($id);
    	if($bool){
    		$this -> ajaxReturn(1);
    	}else{
    		$this -> ajaxReturn(0);
    	}
    }
}