<?php 

	//验证码 检测
	//检测输入的验证码是否正确，$code为用户输入的验证码字符串
	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    //判断价格的函数，分为五档1-5代表从小到大五种价格
    function price($price){
    	switch($price){
    		case 1:
    			return  array(array('gt',0),array('lt',39));
    			break;
    		case 2:
    			return  array(array('gt',40),array('lt',79));
    			break;
    		case 3:
    			return  array(array('gt',80),array('lt',129));
    			break;
    		case 4:
    			return  array(array('gt',130),array('lt',259));
    			break;
    		case 5:
    			return  array('gt',260);
    			break;
    	}
    }