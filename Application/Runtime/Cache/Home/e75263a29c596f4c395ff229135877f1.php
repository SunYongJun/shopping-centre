<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>乐蜂网</title> 
    <link href="/newlefeng/Public/home/css/mylefeng.css" rel="stylesheet" type="text/css">
    <link href="/newlefeng/Public/home/css/common.css" rel="stylesheet" type="text/css">
    <link href="/newlefeng/Public/home/css/cart.css" rel="stylesheet" type="text/css">
    
    <link href="/newlefeng/Public/home/css/bus.css" rel="stylesheet" type="text/css" class="lefeng-lazy" charset="utf-8">
    <script src="/newlefeng/Public/home/js/jquery.min.js"></script>
     <script src="/newlefeng/Public/layer/layer.min.js"></script>

    

</head>
<body class="Wmin new">
    
        <!-- header 开始 -->
<div class="Chead">
    <div class="Chead-main" id="Chead-main">
        <div class="Chead-logo"><a href="/newlefeng/index.php/Home/Index/index"></a></div>
        
        <div class="Chead-info">
            <a id="Chead_app" class="Chead-app" href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">手机乐蜂</a>
            <div class="Chead-appDown"><a href="" target="_blank" rel="nofollow"></a></div>
            
            <span id="Chead_save" class="Chead-save">收藏乐蜂</span>
            <span id="Chead_fastnav" class="fast-nav turl">快速导航<i></i></span>
            <div class="Chead-floatmenu">
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">礼品卡</a>
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">帮助中心</a>
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">乐蜂校园</a>
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">推荐好友</a>
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">猜你喜欢</a>
                <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">合作专区</a>
            </div>
            <a class="turl" href="/newlefeng/index.php/Home/Article/articleList" id="Chuafen">花粉商城</a>
            <a class="turl" id="Chead_myhome_btn" href="/newlefeng/index.php/Home/Center/index">我的蜂巢<i></i></a>
            <div class="Chead-myhome">
                <i>#&amp;160;</i>
        
                <a href="/newlefeng/index.php/Home/Center/mycoin" rel="nofollow">我的花粉</a>
                <a href="/newlefeng/index.php/Home/Center/like" rel="nofollow">我的收藏</a>
                <a href="/newlefeng/index.php/Home/Center/comment" rel="nofollow">我的评价</a>
                <!--<a href="" rel="nofollow">我的空间</a>-->
            </div>
            
            <a class="turl" href="/newlefeng/index.php/Home/MyOrder/order" rel="nofollow">我的订单</a>
            <span class="Chead-welcome" id="Cheadlogin">嗡，欢迎来乐蜂，<a href="/newlefeng/index.php/Home/Center"><?php echo ($_SESSION['user']['user_email']); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<!-- <a href="/newlefeng/index.php/Home/User/loginout">退出</a> --></span>
        </div>
        
        <p class="jd1"><b class="d">我的购物车</b><b>确认订单信息</b><b>成功提交订单</b></p>
    </div>
</div>
    <!-- header 结束 -->


	<link rel="stylesheet" href="/newlefeng/Public/home/css/cart_confirm.css">
	<link rel="stylesheet" href="/newlefeng/Public/home/css/shop-order.css">
	<!--头部结束-->
	<div class="content-wrap">

		<div class="pay-wrap gwrap gheader">

			<p class="text"> <b></b>
				订单提交成功，请您尽快付款！
			</p>
			<div class="info">
				<p class="order-mes pay bank-type">
					<!-- 在线支付区域开始 -->
					<span>
						订单号：<?php echo ($confirm["acti"]); ?> <b class="pay-money">应付金额： <em><i>￥</i>
								<?php echo ($confirm["action_count"]); ?></em></b> 
					</span>

					<!-- 在线支付区域结束 -->
				</p>
			</div>

		</div>

		<p class="notice">&nbsp;&nbsp;&nbsp;&nbsp;为及时处理您的订单，请尽快完成付款</p>

		<div class="bank-wrap gwrap gheader">

			<p class="text">

				<b></b>
				只差一步，请尽快支付！
			</p>

			<div class="info">

				<div class="bank-list" id="ptpay">
					<h3>支付平台</h3>

					<ul class="clearfix">
						<?php if(is_array($pay)): foreach($pay as $key=>$vo): ?><li name="bank" <?php echo ($vo["che"]); ?> > <i></i>
								<b></b>
								<a href="javascript:void(0);" platformid="0" >
									<img src="/newlefeng/Public<?php echo ($vo["pay_logo"]); ?>" alt="<?php echo ($pay["pay_name"]); ?>" style="height:40px;width:140px"></a>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>

			</div>

			<div class="pay-for">
				<a class="" id="goPay" href="javascript:;" ></a>
				<span> <em id="gopayMoney"><i>￥</i>
						<?php echo ($confirm["action_count"]); ?></em> 
					待支付总额：
				</span>
			</div>
			<div id="lock" style="display:none;"></div>
			<div style="display:none; top: 200px;" id="path_wind" class="pathadd">
			<br>
				<span>请输入支付密码</span>
				<p><input type="password" name="pwd"><br></p>
				<span id="shipwind_optbutton" opt="add" class="save">确认支付</span><span id="msg"></span>
			</div>
			<script>
			$(function() {
				$('li[name="bank"]').eq(0).addClass('chked');
				$('li[name="bank"]').bind('click',function() {
					$('li[name="bank"]').removeClass('chked');
					$(this).addClass('chked');
				})

				$('#goPay').bind('click',function() {
					$('#path_wind,#lock').show();
				})

				$('#shipwind_optbutton').bind('click',function() {
					$.post('/newlefeng/index.php/Home/Order/pwdch',{pwd:$(this).prev().children('input').val()},function(data) {
						if(data){
							window.location.href="/newlefeng/index.php/Home/Order/pay/id/<?php echo ($confirm["id"]); ?>";
						}else{
							$('#msg').css('color','red').html('　支付密码错误！');
						}
					})
				})

			})

			</script>

		


    <!-- footer -->
    <div id="Cfooter" class="Cfooter">
        <div class="Cfooter">
            <div class="Cfooter-copyright">
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">关于lefeng　</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">免责声明　</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">隐私声明　</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">版权声明　</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">招聘信息　</a>
                <!--<a rel="nofollow" target="_blank" href="">网站地图</a>
            -->
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">联系我们　</a>
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">帮助中心　</a>
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">网站联盟　</a>
            <a target="_blank" href="/newlefeng/index.php/Home/Article/articleList">友情链接　</a>
            <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">商务合作　</a>
            <br>
            <span class="carial">
                Copyright　
                <b>©</b>
                2008-2014 Lefeng.com All Rights Reserved.　
            </span>
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">京ICP证080382号　</a>
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">京ICP备10006831号-1　</a>
            <span>京公网安备11010502014183　</span>
            <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">营业执照　</a>
        </div>

    </div>


<!-- 滚到顶部按钮 -->
<div class="topdown" id="top_down" title="回到顶部">&nbsp;</div>
</body>

</html>