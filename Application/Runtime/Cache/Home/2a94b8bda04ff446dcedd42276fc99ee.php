<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($config["shop_name"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["shop_key"]); ?>">
    <meta name="description" content="<?php echo ($config["shop_desc"]); ?>">   
    <link rel="stylesheet" type="text/css" href="/newlefeng/Public/home/css/home.css">
	<link rel="stylesheet" type="text/css" href="/newlefeng/Public/home/css/mylefeng.css">
    <link href="/newlefeng/Public/home/css/bus.css" rel="stylesheet" type="text/css" class="lefeng-lazy" charset="utf-8">
    <script src="/newlefeng/Public/home/js/jquery.min.js"></script>
    <script src="/newlefeng/Public/home/js/mylefeng.js"></script>
    <!-- 加载layer弹窗插件 -->
    <script src="/newlefeng/Public/layer/layer.min.js"></script>
    
    <script src="/newlefeng/Public/home/js/grap.js"></script>
    <script src="/newlefeng/Public/home/js/unslider.js"></script>
    <style>
    .banner {position: relative;width: 100%;overflow: auto;text-shadow: 0 0 1px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.3);background: #fff;box-shadow: 0 1px 2px rgba(0,0,0,.25);text-align: center}
    .banner ul {list-style: none;width: 300%;}
    .banner ul li {display: block;float: left;width: 33%;height: 300px;-o-background-size: 100% 100%;-ms-background-size: 100% 100%;-moz-background-size: 100% 100%;-webkit-background-size: 100% 100%;background-size: 100% 100%;box-shadow: inset 0 -3px 6px rgba(0,0,0,.1);}
    .banner .dots {position: absolute;left: 0;right: 0;bottom: 20px;}
    .banner .dots li {display: inline-block;width: 8px;height: 8px;margin: 0 4px;text-indent: -999em;border: 2px solid #fff;border-radius: 8px;cursor: pointer;opacity: .4;-webkit-transition: background .5s, opacity .5s;-moz-transition: background .5s, opacity .5s;transition: background .5s, opacity .5s;}
    .banner .dots li.active {background: #fff;opacity: 1;}
    #ad{width: 100%;height: 67px;overflow: hidden;}
    #ad div{width: 1000px;height: 67px;margin: 0px auto;}
    #ad div a{float:right;}
    .fad{width:1000px;height: 67px;margin: 0px auto;}
    </style>

</head>
<body class="Wmin new">
<!-- 首页广告 -->

<?php if(!empty($ad)): ?><div id="ad" style="background:url(/newlefeng/Public/<?php echo ($ad["ad_picture"]); ?>) center no-repeat">
        <div><a href="javascript:;" class="adclose"><img src="/newlefeng/Public/home/images/close.png" alt=""></a></div>
    </div><?php endif; ?>

   
<!-- header 开始 -->
<div class="Chead">
        <div class="Chead-info" id="Chead_info">
            <div class="Chead-info-box">
                <a id="Chead_app" class="Chead-app" href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">手机乐蜂</a>
                <div class="Chead-appDown" style="display: none;">
                    <div>
                        <img src="/newlefeng/Public/home/images/xz_icon_for_lf.jpg" width="112" height="112">
                        <h6><b class="i1"></b><b class="i2"></b>客户端</h6>
                        <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">立即下载 </a>
                    </div>
                    <span class="fast-nav turl" style="color: rgb(102, 102, 102);"><a class="Chead-app" href="#" target="_blank" rel="nofollow">手机乐蜂</a></span>
                </div>
                <span id="Chead_save" class="Chead-save" style="color: rgb(102, 102, 102);">收藏乐蜂</span>
                <span id="Chead_fastnav" class="fast-nav turl" style="color: rgb(102, 102, 102);">快速导航<i></i></span>
                <div class="Chead-floatmenu" style="display: none;">
                    <div>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">礼品卡</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">帮助中心</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">乐蜂校园</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">推荐好友</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">猜你喜欢</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">合作专区</a>
                        <a href="/newlefeng/index.php/Home/Article/articleList" rel="nofollow">清仓打折</a>
                    </div>
                    <span class="fast-nav turl" style="color: rgb(102, 102, 102);">快速导航<i></i></span>
                </div>
                <a class="turl" href="/newlefeng/index.php/Home/Article/articleList" target="_blank" id="fxbmain" style="color: rgb(102, 102, 102);">蜂向标社区<i></i></a>
                <div class="Chead-fxb" style="display: none;">
                    <a class="turl" href="/newlefeng/index.php/Home/Article/articleList" target="_blank" style="color: rgb(102, 102, 102);">蜂向标社区<i></i></a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">达人</a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">试用</a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">口碑</a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">逛街</a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank" rel="nofollow">美丽俏佳人</a>
                </div>
                <a class="turl" href="/newlefeng/index.php/Home/Article/articleList" id="Chuafen" style="color: rgb(102, 102, 102);">花粉商城</a>
                <a class="turl" id="Chead_myhome_btn" href="/newlefeng/index.php/Home/Article/articleList" style="color: rgb(102, 102, 102);">我的订单<i></i></a>
                <div class="Chead-myhome" style="display: none;">
                    <a class="turl" href="#" style="color: rgb(102, 102, 102);">我的订单<i></i></a>
                    <a href="/newlefeng/index.php/Home/Center/index" rel="nofollow">我的蜂巢</a>
                    <a href="/newlefeng/index.php/Home/Center/like" rel="nofollow">我的收藏</a>
                    <a href="/newlefeng/index.php/Home/Center/comment" rel="nofollow">我的评价</a>
                </div>
                <?php if($user['id'] == ''): ?><span class="Chead-welcome" id="Cheadlogin">欢迎来到乐蜂，请&nbsp;
                    <a href="/newlefeng/index.php/Home/User/login" id="qiehuan">登录</a>&nbsp;<a href="/newlefeng/index.php/Home/User/register">免费注册</a>
                </span>
                <?php else: ?>
                <span class="Chead-welcome" id="Cheadlogin">嗡，欢迎来乐蜂，
                    <a href="/newlefeng/index.php/Home/Center/index" id="qiehuan"><?php echo ($user["user_email"]); ?></a>&nbsp;|&nbsp;<a id="logout" href="javascript:;">退出登录</a>
                </span><?php endif; ?>
                乐蜂网，专注为您！<a href="#" class="areaSellBtn">&nbsp;</a>
            </div>
        </div>
        
        <div class="chead-bk">
			<a href="#" target="_blank"><dl class="b1"></dl></a>
			<a href="#" target="_blank"><dl class="b2"></dl></a>
			<a href="#" target="_blank"><dl class="b3"></dl></a>
		</div>
        

		<!--购物车 s-->
        <div class="Chead-info-box">
            <div class="Chead-shopping" id="Chead-shopping">
                <div class="shopping-btn">
                    <strong id="cartbuy"><?php echo ($sum); ?></strong>
                </div>
                <div class="shopping-list" id="shopping_list" style="display: none;">
                    <div class="shopping-list-title"><strong><?php echo ($sum); ?></strong></div>
                    <?php if($sum == 0): ?><!-- 没有商品显示这个 -->
                    <div class="shopping-list-pro noshop"><i></i><b></b>您的购物车还没有商品，<br>赶紧去选购吧！</div>
                    <!-- 没有商品显示这个结束 -->
                    <!-- 有商品显示这个 读取session的数据-->
                    <?php else: ?>
                    <div class="shopping-list-pro">
                        <i></i>
                        <div class="shopping-list-bar" id="shopping_list_info">
                            <!-- dl遍历购物车里面的商品 -->
                            <?php if(is_array($cart)): foreach($cart as $key=>$mycart): ?><dl>
                                <dt>
                                    <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($mycart["id"]); ?>" target="_blank" title="">
                                        <img src="/newlefeng/Public/<?php echo ($mycart["goods_img"]); ?>">
                                    </a>
                                </dt>
                                <dd class="shopping-pro">
                                    <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($mycart["id"]); ?>" target="_blank"><?php echo ($mycart["goods_name"]); ?>
                                    </a>
                                </dd>
                                <dd class="shopping-price">
                                    <em>￥<?php echo ($mycart["goods_price"]); ?></em>×<?php echo ($mycart["num"]); ?>
                                    <a href="/newlefeng/index.php/Home/Cart/delete/id/<?php echo ($mycart["id"]); ?>">删除</a>
                                </dd>
                            </dl><?php endforeach; endif; ?>
                        </div>
                        <p>共<b><?php echo ($sum); ?></b>件商品</p>
                        <p>
                            <span>共计：<b>
                            <em>￥</em><?php echo ($price); ?></b>
                            </span>
                        </p>
                        <a class="goshopping" href="/newlefeng/index.php/Home/Cart/index">去购物车结算</a>
                    </div>
                    <!-- 有商品显示这个结束 --><?php endif; ?>
                </div>
            </div>
        </div>

        <div class="Chead-logo"><a href="/newlefeng/index.php/Home/Index/index"></a></div>
        <div class="Cnav-main" id="Cnav_main">
            <div class="Chead-info-box">
                <!--navone s-->

                <!-- 搜索框 -->
                <div id="Chead_search_t" class="Chead-search-t">
                    <div class="search-input-t"><form action="/newlefeng/index.php/Home/List/index" method="get" id="sbrand">
                        <strong id="search-submit-t" class="search-submit-t"></strong>
                        <input id="search-t" val="" autocomplete="off" name="search" value="输入商品名" type="text"></form>
                    </div>
                    <!-- 搜索的下拉列表 -->
                    <div id="auto-t" class="searchtip-t" style="display: none;">
                        <span>&nbsp;</span>
                        <strong>蜂友最爱搜</strong>
                        <div>
                        <!-- 这里按商品数遍历所有的品牌信息及他的商品数 -->    
                        <?php echo W('Menu/SearchBrand');?>
                        </div>
                    </div>
                </div>
                <div class="Cnav-one" id="Cnav-one">
                    <a href="/newlefeng/index.php/Home/Index/index" class="on">
                        乐蜂首页 </a>
                    <a href="javascript:void(0)" target="_blank">
                        美妆商城<i></i> </a>
                    <a href="/newlefeng/index.php/Home/Article/articleList" target="_blank">
                        文章精选 </a>
                    <a href="/newlefeng/index.php/Home/List/index" target="_blank" class="cnav-919"><img src="/newlefeng/Public/home/images/nav-ms.png"></a>
                </div>
				<!-- 所有商品的下拉菜单 -->
                <div class="float-list" id="float-list" style="display: none;">

                    <a href="#" target="_blank" class="float-list-btn">全部商品分类
                        <i></i><b></b>
                    </a>
                    <div id="orderDivId" class="orderDivId">
                        <?php echo W('Menu/index');?>
                    </div>
                </div>
            </div>
        </div>
</div>    
<!-- header 结束 -->


	<!-- 主体部分开始 -->
<!-- 轮播图片 开始 -->
<div class="banner">
<ul>
    <li><img src="/newlefeng/Public/home/images/lunbo1.jpg" alt="" height="300"></li>
    <li><img src="/newlefeng/Public/home/images/lunbo2.jpg" alt="" height="300"></li>
    <li><img src="/newlefeng/Public/home/images/lunbo3.jpg" alt="" height="300"></li>
</ul>
</div>

<!-- 轮播图片 结束 -->

<!--zys clip s-->
<div class="cuxiao">
</div>
<!--zys clip e -->

<!-- 主体页面开始 -->
<div class="main clearfloat">
	<!-- <div class="productTitle" id="tabnews">
        <h1	 class="title1">&nbsp;</h1>
        <h4>这里是公告内容</h4>
    </div> -->

	<!-- 限时秒杀 开始 -->
	<div class="seckill">
		<div class="seckill-title">
			<h1></h1>
			<div class="seckill-datebar">
				<dl>
                    <?php if(is_array($sale)): foreach($sale as $key=>$vsale): ?><dd class=""><?php echo ($vsale["brand_name"]); ?></dd><?php endforeach; endif; ?>
                    <!-- <dd id="dsk2_b" class="">奥迪</dd> -->
                    <!-- <dd id="dsk3_b" class="">迪奥</dd> -->
                </dl>
			</div>
		</div>
		<div class="seckill-box">
            <?php if(is_array($sale)): foreach($sale as $key=>$vsale): ?><dl id="1472641" style="display: none;">
                <dd>
                    <a href="javascript:;" target="_blank">
                        <img src="/newlefeng/Public/<?php echo ($vsale["goods_img"]); ?>" alt="" width="620" height="360">
                    </a>
                </dd>
                <dt>
                    <?php if(($vsale['sale_start'] < $vsale['now']) AND $vsale['sale_end'] > $vsale['now']): ?><!-- 抢购显示这个 -->
                    <div class="secTime" >
                        <span start="<?php echo ($vsale["now"]); ?>" end="<?php echo ($vsale["sale_end"]); ?>" class="saletime">
                            <b class="t1">0</b>
                            <b class="t2">0</b>
                            <b class="t3">0</b>
                            <b class="t4">0</b>
                        </span>
                        <i></i>
                    </div>
                    <?php else: ?>
                    <!-- 抢购结束显示这个 -->
                    <div class="secTime" style="display:block">
                        <b class="seckillEnd">已结束，下次下手要快哦</b>
                        <!-- 这里的ID要设置成一样的 -->
                        <span id="dsk" b="2014-11-29 08:00:00" e="2014-11-29 09:59:59" bj="1417219200" class="seckillhide" style="display: none;">
                            <b class="t1">0</b>
                            <b class="t2">00</b>
                            <b class="t3">00</b>
                            <b class="t4">04</b>
                        </span>
                        <i class="endSec"></i>
                    </div><?php endif; ?>
                    <div class="secText">
                        <a href="javascript:;" target="_blank">
                            <b><?php echo (round($vsale[sale] / $vsale[goods_price] * 10 ,1)); ?>折/</b> <?php echo ($vsale["goods_name"]); ?>
                        </a>
                    </div>
                    <?php if(($vsale['sale_start'] < $vsale['now']) AND $vsale['sale_end'] > $vsale['now']): ?><!-- 抢购显示这个 -->
                    <div class="secPrice">
                        <a href="javascript:void(0)" title="加入购物车"  buy="<?php echo ($vsale["gid"]); ?>" sale="<?php echo ($vsale["sale"]); ?>">立即秒杀</a>
                        <span><?php echo ($vsale["sale"]); ?></span>
                        <b><?php echo ($vsale["goods_price"]); ?></b>
                    </div>
                    <?php else: ?>
                    <!-- 抢购结束显示这个 -->
                    <div class="secPrice" style="display:block">
                        <a href="javascript:void(0)" target="_blank" class="end">已结束</a>
                        <span><?php echo ($vsale["sale"]); ?></span>
                        <b><?php echo ($vsale["goods_price"]); ?></b>
                    </div><?php endif; ?>
                    <div class="secNow">
                        <i><?php echo ($vsale["sales_volume"]); ?>人已购买</i>
                    </div>
                </dt>
            </dl><?php endforeach; endif; ?>
        </div>
	</div>
	<!-- 限时秒杀  结束 -->

	<!-- pp s -->
	<div class="productTitle" id="tabnews">
		<h1 class="title1">
			&nbsp;
		</h1>
		<h4><!-- 这里是公告内容 -->
            <i></i>
            <dd class="on" style="height: 15px; top: -4px;">
                <?php if(is_array($news)): foreach($news as $key=>$vnews): ?><a target="_blank" href="/newlefeng/index.php/Home/Article/index/id/<?php echo ($vnews["id"]); ?>"><?php echo (mb_substr($vnews["article_title"],0,10,'utf-8')); ?></a><?php endforeach; endif; ?>
            </dd>
        </h4>
	</div>
	<!-- pp e -->
	
    <!-- 品牌特卖  开始   adv list s -->
    <div class="first-ad clearfloat">
    	<!-- <div class="ad-right"></div> -->
    	<div class="ad-left" id="ad-list">
            <?php if(is_array($brand)): foreach($brand as $key=>$vbrand): ?><a href="/newlefeng/index.php/Home/List/index/brand/<?php echo ($vbrand["id"]); ?>" target="_blank">
                <img src="/newlefeng/Public/<?php echo ($vbrand["brand_logo"]); ?>" alt="">
                <div class="ad-tips">
                    <h1><?php echo ($vbrand["brand_name"]); ?>化妆品特卖专场</h1>
                    <h2><?php echo ($vbrand["brand_desc"]); ?></h2>
                    <!-- <h3>2.3折起 满179减30</h3> -->
                    <!-- <div class="d1417399199" b="1417140000">
                        <i></i>
                        <b>1</b>天
                        <b>23</b>小时
                        <b>25</b>分钟
                        <b>33</b>秒
                    </div> -->
                </div>
            </a><?php endforeach; endif; ?>
        </div>
    </div>
    <!-- 品牌特卖 结束  adv list e -->
    
    <!-- 最新爆款  开始 s -->
    <div class="productTitle" id="smallnav">
        <h1 class="title2">&nbsp;</h1>
<!--         <ul>
            这里追加分类内容
        </ul> -->
    </div>
    <div class="bigimg-box clearfloat" id="commodity-list">
        <?php if(is_array($new)): foreach($new as $key=>$vnew): ?><dl class="p1" id="i184023" num="0">
            <div class="new_added">
            <a goods_sn="<?php echo ($vnew["goods_sn"]); ?>" num="1" href="javascript:void(0)" title="加入购物车" data-img="<?php echo ($vnew["goods_img"]); ?>" buy="<?php echo ($vnew["id"]); ?>">加入购物车
            </a>
            </div>
            <dt>
                <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vnew["id"]); ?>" class="commodity-img" target="_blank"><img src="/newlefeng/Public/<?php echo ($vnew["goods_img"]); ?>" width="310" height="310" alt="">
                </a>
            </dt>
            <dd>
                <h4><a target=""><b><?php echo ($vnew["goods_sale"]); ?>折/</b> <?php echo ($vnew["goods_name"]); ?></a>
                </h4>
                <div class="t_price_box_L">
                    <div class="t_price_L">
                        <span><?php echo ($vnew["goods_price"]); ?></span>
                        <b><?php echo (round($vnew[goods_price] / $vnew[goods_sale] ,2)); ?></b>
                    </div>
                </div>
                <div class="c-info d1417399199" o="">
                    销量<b><?php echo ($vnew["sales_volume"]); ?></b><a href="/newlefeng/index.php/Home/List/index/brand/<?php echo ($vnew["brand_id"]); ?>" target="_blank"><?php echo ($vnew["brand_name"]); ?></a>
                </div>
                <div class="t_buy_pople">
                    <b><?php echo ($vnew["goods_click"]); ?></b>人已查看
                </div>
            </dd>
            <div class="d1_tips"></div>
        </dl><?php endforeach; endif; ?>  
    </div>
    <!-- 最新爆款  结束 e -->
    
    <!-- 最后疯抢  开始 s -->
    <div class="productTitle">
        <h1 class="title3">&nbsp;</h1>
    </div>
    <div class="bigimg-box clearfloat" id="commodity-list-end">
        <!-- 开始遍历所有商品 -->
        <?php if(is_array($end)): foreach($end as $key=>$vend): ?><dl class="p492" id="i127230" num="4">
            <div class="new_added">
                <a goods_sn="<?php echo ($vend["goods_sn"]); ?>" num="1" href="javascript:void(0)" title="加入购物车" data-img="<?php echo ($vend["goods_img"]); ?>" buy="<?php echo ($vend["id"]); ?>">加入购物车</a>
            </div>
            <dt>
                <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vend["id"]); ?>" class="commodity-img" target="_blank">
                    <img src="/newlefeng/Public/<?php echo ($vend["goods_img"]); ?>" width="310" height="310" alt="">
                </a>
            </dt>
            <dd>
                <h4>
                    <a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vend["id"]); ?>">
                        <b><?php echo ($vend["goods_sale"]); ?>折/</b> <?php echo ($vend["goods_name"]); ?>
                    </a>
                </h4>
                <div class="t_price_box_L">
                    <div class="t_price_L">
                        <span><?php echo ($vend["goods_price"]); ?></span>
                        <b><?php echo (round($vend[goods_price] / $vend[goods_sale] ,2)); ?></b>
                    </div>
                </div>
                <div class="c-info d1417312799" o="">
                    销量<b><?php echo ($vend["sales_volume"]); ?></b><a href="/newlefeng/index.php/Home/List/index/brand/<?php echo ($vend["brand_id"]); ?>" target="_blank"><?php echo ($vend["brand_name"]); ?></a>
                </div>
                <div class="t_buy_pople">
                    <b><?php echo ($vend["goods_click"]); ?></b>人已查看
                </div>
            </dd>
            <div class="d1_tips"></div>
        </dl><?php endforeach; endif; ?>
        <!-- 开始遍历所有商品 -->
        
    </div>
    <!-- 最后疯抢结束 e -->
    <!-- 底部广告 -->
    <?php if(!empty($fad)): ?><div class="fad" style="background:url(/newlefeng/Public/<?php echo ($fad["ad_picture"]); ?>) center no-repeat">    
        <a href="javascript:;" style="float:right" ><img src="/newlefeng/Public/home/images/close.png" alt=""></a>
    </div><?php endif; ?>
 <!-- 友情链接 s-->
 <div class="productTitle">
     <h1 class="title4">&nbsp;</h1>
 </div>
 
 <div class="fxb-box">
    <!-- 文字链接 -->
    <div class="module1">
        <ul>
            <?php if(is_array($text)): foreach($text as $key=>$vtext): ?><li><a href="http://<?php echo ($vtext["link_url"]); ?>"><?php echo ($vtext["link_name"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <!-- 图片链接 -->
    <div class="module2">
        <ul>
            <?php if(is_array($fimg)): foreach($fimg as $key=>$vimg): ?><li><a href="http://<?php echo ($vimg["link_url"]); ?>"><img src="/newlefeng/Public/<?php echo ($vimg["link_logo"]); ?>" alt="<?php echo ($vimg["link_name"]); ?>" height="40" width="150"></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
 </div>
 <!-- 友情链接 e -->
</div>
<!-- 底部的搜索框 -->
<div class="Cfooter-search">
 	<h1>更多心仪商品快速搜索:</h1>
	<div id="Chead_search" class="Chead-search">
        <div class="search-input"><form action="/newlefeng/index.php/Home/List/index" method="get" id="ssgood">
            <strong id="search-submit" class="search-submit">搜索</strong>
            <input autocomplete="off" name="search" value="请输入商品名" type="text" id="sresearch"></form>
        </div>
        <p>热门：
            <a id="searchKey1" href="#">面膜</a> 
            <a id="searchKey2" href="#">BB霜</a> 
            <a id="searchKey3" href="#">山羊奶</a>&nbsp; 
            <a id="searchKey4" href="#">百雀羚</a> 
            <a id="searchKey5" href="#">御泥坊</a>
            <a id="searchKey6" href="#">金镶玉</a>
        </p>
    </div>
</div>
<!-- 搜索框结束 -->
<!-- 主体部分结束 -->
<!-- <div id="dsk2">asd</div> -->
<!-- 首页轮播图片 -->
<script>
    $(function(){
        //点击关闭广告
        $('.adclose').click(function(){
            $('#ad').slideUp('slow');
        })
        $('.fad a').click(function(){
            $('.fad').slideUp('slow');
        })
        //搜索
        $('#sresearch').focus(function(){
            $(this).val('');
        })
        $('#search-submit').click(function(){
            if($('#sresearch').val() && $('#sresearch').val() != '请输入商品名'){
                $('#ssgood').submit();
            }else{
                layer.msg('请输入商品名！',1,3);
            }
        })
        //点击购买按钮
        $('a[buy]').each(function(){
            var $this = $(this);
            $this.click(function(){
                // 此时没有登录的话跳转到登录
                if(<?php echo ($user['id']?1:0); ?>){
                    var id = $this.attr('buy');
                    var data = 'id='+id;
                    if($this.attr('sale')){
                        var sale = $this.attr('sale');
                        data = 'id='+id+'&sale='+sale;
                    }
                    $.post('/newlefeng/index.php/Home/Cart/add',data,function(data){
                        if(data.status == 1){
                            layer.msg(data.content,1,function(){
                                // location.reload();
                                $('#Chead-shopping').empty().load('/newlefeng/index.php/Home/Common/mycart');
                            })
                        }else{
                            layer.msg(data.content,1,3);
                        }
                    })
                }else{
                    layer.msg('请先登录！',2,function(){
                        location.href = '/newlefeng/index.php/Home/User/Login';
                    })
                }
            })
        })
        // 鼠标移上出先购买图标
        $('#commodity-list dl,#commodity-list-end dl').each(function(){
            var $this = $(this);
            $(this).hover(function(){
                $this.addClass('hov');
            },function(){
                $this.removeClass('hov');
            })
        })
        // 轮播
        /*$('#bq li').each(function(index){
            var i = index;
            var $this = $(this);
            $(this).mouseover(function(){
                $this.addClass('on').siblings().removeClass('on');
                $('.first-show div:eq('+i+')').show().siblings().not('ul').hide();
            })
        })*/

        //抢购
        $('.saletime').each(function(){
            
            timer($(this));
        })
        // timer($('#dsk2'));
        $('.seckill-datebar dl dd:eq(0)').addClass('on');
        $('.seckill-box dl:eq(0)').show();

        /*$('.seckill-datebar dl dd').each(function(i){
            var $this = $(this);
            $(this).click(function(){
                $this.addClass('on').siblings().removeClass('on');
                $('.seckill-box dl:eq('+i+')').show().siblings().hide();
            })
        })*/
        var i = 1;
        var grap = setInterval(function(){
            $('.seckill-datebar dl dd:eq('+i+')').addClass('on').siblings().removeClass('on');
            $('.seckill-box dl:eq('+i+')').fadeIn().siblings().hide();
            i++;
            $('.seckill-datebar dl dd').each(function(n){
                var $this = $(this);
                $this.click(function(){
                    $this.addClass('on').siblings().removeClass('on');
                    $('.seckill-box dl:eq('+n+')').show().siblings().hide();
                    i = n;
                })
            })
            var size = $('.seckill-datebar dl dd').size();
            if(i == size){
                i = 0;
            }
        },5000)
        //改的新banner轮播
        $('.banner').unslider({
            speed: 800,  //滚动速度
            delay: 7000,    //切换时间
            keys: true,     //键盘控制
            dots: true,     //显示点导航
            fluid: false    //支持响应式布局
        });
    })
</script>



<!-- footer -->
<div id="Cfooter" class="Cfooter">	
	<div class="Cfooter-service" id="Cfooter_service">
		<div>
    		<dl>
    	       <dt style="display: block; background-position: -174px -432px;"></dt>
    	       <dd><b>免运费</b>网付69元 全场满99</dd>
            </dl>
    		<dl>
    	       <dt style="display: block; background-position: -174px -492px;"></dt>
    	       <dd><b>全正品</b>正品发票 假一赔十</dd>
            </dl>
    		<dl>
    	       <dt style="display: block; background-position: -174px -552px;"></dt>
    	       <dd><b>最放心</b>无条件 退换货</dd>
            </dl>
    		<dl>
    	       <dt style="display: block; background-position: -174px -612px;"></dt>
    	       <dd><b>限时达</b>限时到达 超时赔付</dd>
            </dl>
		</div>
	</div>
	
    <!-- 底部导航 -->
	<div class="Cfooter-info" id="Cfooter_info">
		<dl>
			<dt>
				<div class="Cfooter-tel"><strong></strong><em>客服 7x24小时 (全年无休)</em></div>
				<p>客服电话：<a href="#"><?php echo ($config["shop_phone"]); ?></a></p>
				<p>客服邮箱：<a href="#"><?php echo ($config["shop_mail"]); ?></a></p>
			</dt>
			<dd>
                <strong>新手指南</strong> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">购物流程</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">会员计划及花粉</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">优惠券规则</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">联系客服</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">常见问题</a>
            </dd>
            <dd>
                <strong>付款方式</strong> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">在线支付</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">礼品卡支付</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">货到付款</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">银行汇款</a> 
            </dd>
            <dd>
                <strong>配送服务</strong>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">配送时效及运费</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">超时赔付</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">验货与签收</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">配送信息跟踪</a>
            </dd>
            <dd>
                <strong>售后服务</strong>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">退换货政策</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">上门退换货服务</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">退换货网上办理</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">退款时限</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">先行赔付</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">发票说明</a>
            </dd>
            <dd>
                <strong>特色服务</strong> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">礼品卡</a> 
                <a target="_blank" href="/newlefeng/index.php/Home/Article/articleList">产品试用</a> 
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">花粉中心</a>
                <a rel="nofollow" target="_blank" href="/newlefeng/index.php/Home/Article/articleList">推荐好友</a>
            </dd>
            <dd class="f-sao1"><strong>乐蜂网微信</strong><b></b></dd>
            <dd class="f-sao2"><strong>达人问妆</strong><b></b></dd>
		</dl>
	</div>
    <!-- 版权信息等等等 -->
	<div class="Cfooter-copyright" id="Cfooter_copyright">
        <a target="_blank" href="javascript:void(0)">关于乐蜂</a>　
        <a target="_blank" href="javascript:void(0)">免责声明</a>　
        <a target="_blank" href="javascript:void(0)">隐私声明</a>　
        <a target="_blank" href="javascript:void(0)">版权声明</a>　
        <a target="_blank" href="javascript:void(0)">招聘信息</a>　
        <a target="_blank" href="javascript:void(0)">联系我们</a>　
        <a target="_blank" href="javascript:void(0)">帮助中心</a>　
        <a target="_blank" href="javascript:void(0)">网站联盟</a>　
        <a target="_blank" href="javascript:void(0)">友情链接</a>　
        <a href="javascript:void(0)" target="_blank">商务合作</a>
        <br>
		<span class="carial">Copyright <b>©</b> 2008-2014 Lefeng.com All Rights Reserved.</span>
        <a target="_blank" href="javascript:void(0)"><?php echo ($config["shop_icp"]); ?></a>&nbsp;&nbsp;
        <span><?php echo ($config["shop_area"]); echo ($config["shop_address"]); ?></span>　
        <a rel="nofollow" target="_blank" href="javascript:void(0)">营业执照</a>
		<div class="Cfooter-copyright-img">
    		<a class="szfw" target="_blank"></a>
            <a id="cnnic_url" target="_blank" href="javascript:void(0);" ></a>
            <a class="itrust" target="_blank" >中国互联网信用评价中心</a>
            <a href="javascript:void(0)" target="_blank" class="xfwq"></a>
            <a href="javascript:void(0)" target="_blank" class="jybz"></a>
        </div>
	</div>
</div>

<!-- 滚到顶部按钮 -->
<div class="topdown" id="top_down" title="回到顶部">&nbsp;</div>
</body>
<script>
    $('#search-submit-t').click(function(){
        if($('#search-t').val()=='输入商品名'){$('#search-t').val('')}
        if($('#search-t').val()){
            $('#sbrand').submit();
        }else{
            layer.msg('请输入搜索条件！',1,3);
        }
    })
    $('#logout').click(function(){
        $.post('/newlefeng/index.php/Home/user/loginout','',function(data){
            if(data){
                var sp = "欢迎来到乐蜂，请&nbsp;<a href='/newlefeng/index.php/Home/User/login' id='qiehuan'>登录&nbsp;</a><a href='/newlefeng/index.php/Home/User/register'>免费注册</a>";
                $('#Cheadlogin').empty().append(sp);
                window.location.reload();
            }else{
                layer.msg('失败');
            }
        })
    })
</script>
</html>