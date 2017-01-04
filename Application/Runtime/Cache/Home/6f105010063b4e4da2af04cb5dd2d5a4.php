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



	<input id="quantity" name="quantity" value="1" type="hidden">
	<input id="loginName" name="loginName" value="41**@qq.com" type="hidden">
	<!-- 登陆名称 -->
	<input id="islogin" name="islogin" value="true" type="hidden">
	<!-- 是否登陆 -->
	<input id="type" name="type" value="" type="hidden">
	<!-- 登陆窗口跳转类型 -->
	<input id="typeValue" name="typeValue" value="" type="hidden">
	<!-- 登陆窗口跳转前后传递的值-->
	<input id="parameters" name="parameters" value="" type="hidden">
	<!-- 购物车 -->
	<div id="MARK" style="display: none"></div>
	<div class="inStock_box">
		<div class="timeReminder"> 
			<span>
				请提交订单
			</span> 
		</div>
		<div class="inStock" id="inStock" style="display: none;">
			<p>由于商品库存有限，我们只能暂为您保留20分钟</p>
			<p>超时后可继续结算，有货的商品将自动放入购物车</p>
		</div>
	</div>

	</div>
	<dl id="mainCart" class="shopping-main">

		<dt class="shopping-main-tit">
			<i></i>
			<span>满99元免运费</span>
			乐蜂自营
		</dt>
		<dt> <b class="colspan1"><input name="vendorCheckbox" checked="checked" type="checkbox">
				<i class="checkbox checked allcheck"></i>
				全选</b> 
			<b class="colspan2">商品名称</b>
			<b class="colspan3">单价</b>
			<b class="colspan4">数量</b>
			<b class="colspan5">赠送花粉</b>
			<b class="colspan6">库存情况</b> 
			<b class="colspan7">操作</b>
		</dt>
		<dd>
			<div class="shop">
				<table border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<?php if(is_array($_SESSION['cart'])): foreach($_SESSION['cart'] as $key=>$vo): ?><tr freepkgid="0" pkgitemids="pkgItemIds" limitbuyquantity="" quantity="1" itemkey="36164_0_0_0_0___0_0" skuextrapriceid="0" usepoints="0" jiagou="" skuid="36164" productid="33504">
								<td class="p-check">
									<input name="itemCheckbox" checked="checked" type="checkbox" gid="<?php echo ($vo["id"]); ?>">
									<i class="checkbox checked cartche"></i>
								</td>
								<td class="p-info">
									<a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vo["id"]); ?>" class="p-img" title="{vo.goods_brief}">
										<img src="/newlefeng/Public<?php echo ($vo["goods_img"]); ?>"></a>
									<div class="middle-div">
										<a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vo["id"]); ?>" class="p-img" title="{vo.goods_brief}">
											<span><?php echo ($vo["goods_name"]); ?></span>
										</a>
									</div>
								</td>

								<td class="p-price">¥<span class="gprice" pr="<?php echo ($vo["id"]); ?>"><?php echo ($vo["goods_price"]); ?></span></td>

								<td class="p-number">
									<i go="<?php echo ($vo["id"]); ?>">
										<b class="n-left" action="minus"></b>
										<input name="num" value="<?php echo ($vo["num"]); ?>" size="2" action="goto" type="text" gid="<?php echo ($vo["id"]); ?>" readonly>
										<b class="n-right" action="add"></b>
									</i> 

								</td>

								<td class="p-hf coin" coin="<?php echo ($vo["goods_coin"]); ?>"><?php echo ($vo["goods_coin"]); ?></td>

								<td class="p-path">有货</td>
								<td class="p-dlt">
									<b class="del"><a href="/newlefeng/index.php/Home/Cart/delete/id/<?php echo ($key); ?>">删除</a></b>
									<b class="save" name="favorite" data="<?php echo ($vo["id"]); ?>">收藏</b>
								</td>
							</tr><?php endforeach; endif; ?>

					</tbody>
				</table>
			</div>
		</dd>

		<dd class="shop ddmj">
			<table width="100%" border="0" cellpadding="0" cellspacing="0"></table>
		</dd>

		<dd>
			<div class="goconfirm">
				<p>
					<input name="cartCheckbox" checked="checked" type="checkbox">
					<i class="checkbox checked allcheck"></i>
					<b>全选</b>
					<b name="batchDelete">删除</b>
					<a href="javascript:window.history.go(-1);">继续购物</a>
				</p>
				<div>
					<b>
						赠送花粉 :
						<i id="coins">0</i>
					</b>
					<b>
						总价（已免运费）: <em>¥
							<i id="moneys">0.00</i></em> 
					</b>
					<a id="go-confirm" href="javascript:;">确认结算</a><p style="font-size:12px;"></p>
				</div>
			</div>
		</dd>
	</dl>
	<div class="recommend" name="tuijian">
		<h4>为您推荐</h4>
		<div class="cont" style="display:block">
			<b class="btn-l"></b>
			<b class="btn-r"></b>
			<div id="out">
			<div>
				<?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><dl skuid="5520908">
						<dt>
							<a href="__MODUME__/Product/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
								<img src="/newlefeng/Public<?php echo ($vo["goods_img"]); ?>" alt="<?php echo ($vo["goods_brief"]); ?>"></a>
						</dt>
						<dd>
							<a title="<?php echo ($vo["goods_name"]); ?>" target="_blank" href=""><?php echo ($vo["goods_name"]); ?></a>
						</dd>
						<dd class="price">
							¥
							<b><?php echo ($vo["goods_price"]); ?></b>
						</dd>
						<dd class="push" gid="<?php echo ($vo["id"]); ?>">加入购物车</dd>
					</dl><?php endforeach; endif; ?>
			</div>
			</div>
		</div>
	</div>
	
	<script>

	$(function() {
		coinc();
		coins();
		prices();
		
		//单商品花粉
		function coinc() {
			$('input[action="goto"]').each(function() {
				var gco = $(this).parent().parent().next().attr('coin');
				$(this).parent().parent().next().html($(this).val() * gco);
			})
		}

		//共计花粉
		function coins() {
			var coun = 0;
			var chec = $('input[name="itemCheckbox"]').filter('input[checked]').parent().next().next().next().next();
			$.each(chec, function(i, v) {
				coun += parseInt(v.innerHTML);
			})
			$('#coins').html(coun);
		}

		//价格总计
		function prices() {
			var money = 0;
			var chepri = $('input[name="itemCheckbox"]').filter('input[checked]').parent().next().next().children('span');
			$.each(chepri,function(i,v) {
				var num = $(this).parent().next().children().children('input').val();				
				money += parseFloat(v.innerHTML) * num;
			})
		    money = money.toFixed(2);
			$('#moneys').html(money);
		}

		//数量减少
		$('b[action="minus"]').bind('click',function() {
			//单击加减按钮让该条checked;
			var chec = $(this).parent().parent().prev().prev().prev().children('i').addClass('checked');
			var chec = $(this).parent().parent().prev().prev().prev().children('input').prop('checked',true);

			var id = $(this).parent().attr('go');
			var th = $(this);
			$.post('/newlefeng/index.php/Home/Cart/minus',{id:id},function(data) {
				if(data){
					th.next().val(data);
					coinc();
					coins();
					prices();
				}
			})			
		})

		//数量增加
		$('b[action="add"]').bind('click',function() {
			//单击加减按钮让该条checked;
			var chec = $(this).parent().parent().prev().prev().prev().children('i').addClass('checked');
			var chec = $(this).parent().parent().prev().prev().prev().children('input').prop('checked',true);

			var id = $(this).parent().attr('go');
			var th = $(this);
			$.post('/newlefeng/index.php/Home/Cart/plur',{id:id},function(data) {
				
				if(data){
					th.prev().val(data);
					coinc();
					coins();
					prices();
				}else{
					layer.msg('该商品无库存',1,3);
				}
			})
		})

		//规范checked元素		
		$('.cartche').each(function() {
			if(!$(this).hasClass('checked')) {
				$(this).addClass('checked');
			}
		});
		$('input[name="itemCheckbox"]').each(function() {

			if(!$(this).prop('checked')){
				$(this).prop('checked',true);
			}
			coins();
			prices();
		})
		
		//checkbox元素选择
		$('.cartche').bind('click',function() {
			if($(this).hasClass('checked') ) {
				$(this).removeClass('checked');
				$(this).prev().prop('checked',false);
				$('.allcheck').removeClass('checked');
				$('.allcheck').prev().prop('checked',false);
			}else{
				$(this).addClass('checked');
				$(this).prev().prop('checked',true);
			}
			coins();
			prices();
		})

		//全选
		$('.allcheck').click(function() {
			$('.allcheck').addClass('checked');
			$.each($('.cartche'),function() {
				if(!$(this).hasClass('cheched')) {
					$(this).addClass('checked');
					$(this).prev().prop('checked',true);
				}
			})
			coins();
			prices();
		})

		//结算跳转
		$('#go-confirm').bind('click',function() {
			if($('input[name="itemCheckbox"]:checked').length == 0) {
				$(this).next().html('您没有选中任何商品');
				return;
			}else{
				var bca = $('input[name="itemCheckbox"]:not(:checked)');
				if(bca.length > 0 ){
					$.each(bca,function() {
						$.post('/newlefeng/index.php/Home/Cart/bakcart',{id:$(this).attr('gid')},function(data) {
							if(data) {
								location.href = "/newlefeng/index.php/Home/Order/index";
							}else{
								layer.msg('结算失败！',1,2)
							}
						})
					})					
				}else{
					location.href = "/newlefeng/index.php/Home/Order/index";
				}
			}

			
			
		})

		//为您推荐切换recommend
		$('.btn-r').bind('click',function() {		
			$('#out').delay();			
			if($('#out').offset().left > -900) {
				$('#out').animate({left: '-=900px'},'slow');
			}			
		})

		$('.btn-l').bind('click',function() {

			$('#out').delay();
			
			if($('#out').offset().left < 0) {
				$('#out').animate({left: '+=900px'},'slow');
			}
		})

		//为您推荐加入购物车
		$('.push').bind('click',function() {
			$.post('/newlefeng/index.php/Home/Cart/add',{id:$(this).attr('gid')},function(data) {
				if(data.status) {
					layer.msg('加入购物车成功',1,1,function() {
						window.location.reload();
					});					
				}else{
					layer.msg(data.content,1,3);
				}
			})
		})

		//购物车商品数量输入
		$('input[name="num"]').bind('blur',function() {
			$.post('/newlefeng/index.php/Home/Cart/keynum',{id:$(this).attr('gid'),num:$(this).val()},function(data) {
				if(data) {
					console.log(parseInt(data));
					$(this).val(parseInt(data));
				}
			})
		})

	})

	//添加收藏
        $('.save').click(function(){
            var gd = 'id='+$(this).attr('data');
            $.post('/newlefeng/index.php/Home/Collect/insert',gd,function(data){
                if(data.status == 0){
                    // alert('123');
                    layer.confirm('您还未登录，是否前去登录？',function(){
                        location.href = '/newlefeng/index.php/Home/User/login';
                    });
                }else{
                    layer.msg(data['content'],1,1);
                }
            });
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