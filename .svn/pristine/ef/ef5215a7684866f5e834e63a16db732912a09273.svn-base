<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
   	    $user = $_SESSION['user']['id'];
   	    if($user){
   	        $user = $_SESSION['user'];
   	        $this -> assign('user',$user);
   	    }
   	    //遍历购物车里面物品
   	    $this -> assign('cart',$_SESSION['cart']);
   	    // 总的物品数
   	    $sum = 0;  //数量
   	    $price = 0;  //总价格
   	    foreach($_SESSION['cart'] as $v){
   	        $sum += $v['num'];
   	        $price += $v['num']*$v['goods_price'];
   	    }    
   	    $this -> assign('sum',$sum);
   	    $this -> assign('price',$price);
        //查询网站的配置信息
        $config = M('shop_config') -> find(1);
        $this -> assign('config',$config);

        //判断网站是否关闭
        if($config['is_status']==0){
            $this->redirect('Close/index');
        }
        if($config['is_message'] == 1){
            C("COMMENT",1);
        }else{
            C("COMMENT",0);
        }
    }

    //Ajax加载的购物车
    public function mycart(){
        //遍历购物车里面物品
        $this -> assign('cart',$_SESSION['cart']);
        // 总的物品数
        $sum = 0;  //数量
        $price = 0;  //总价格
        foreach($_SESSION['cart'] as $v){
            $sum += $v['num'];
            $price += $v['num']*$v['goods_price'];
        }    
        $this -> assign('sum',$sum);
        $this -> assign('price',$price);
        $this -> display('Public:mycart');
    }


    /*
    * 上传方法，直接调用  返回带目录的文件名
    */
    public function myupload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小 
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        // $upload -> rootpath = './Public/';
        $upload->savePath  =      './Uploads/'; // 设置附件上传目录,upload类里面的rootpath改为了 ./Public/    

        // 上传文件     
        $info = $upload->upload();  
        if(!$info) {
            // 上传错误提示错误信息        
            $this->error($upload->getError());    
        }else{
            // 上传成功  
            foreach($info as $file){
            $filename = $file['savepath'].$file['savename'];
            }      
            echo $filename;    
        }
    }

    /*
    *   空操作方法，无此操作方法时跳转到首页
    */
    public function _empty(){
        $this -> redirect('Index/index');
    }
}