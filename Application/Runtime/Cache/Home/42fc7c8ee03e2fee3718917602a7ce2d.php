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
    
<link rel="stylesheet" href="/newlefeng/Public/home/css/list.css">
<style>.select a{color:red !important;}.sales{line-height: 20px;color: red;display: inline;float: left;margin-top: 11px;font-size: 16px;font-weight: bold;}.sales b{font-size: 18px;font-weight: bold;font-family: 'microsoft yahei'}.none{line-height: 40px;font-size: 16px;font-weight: bold;color: red;margin: 10px;}</style>

</head>
<body class="Wmin new">
<!-- 首页广告 -->

   
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
<div class="mainBg">
<input id="newList" type="hidden">
<div class="main" style="width: 1200px;">
<!-- 导航 -->
<div class="path"> 
    <span></span> 
    <a title="" href="/newlefeng/index.php/Home/Index/index" title="首页">首页</a>
    <?php if(!empty($path)): ?>/ <a title="" title="<?php echo ($path["name"]); ?>"><?php echo ($path["name"]); ?></a><?php endif; ?>
</div>

<!-- 左边的导航 开始-->
<div class="sidebar" id="sidebar">
    <div class="sub-nav" id="categorySearch">
        <h3><?php echo ($path["name"]); ?></h3>
        <!-- 判断是否有分类 -->
        <?php if($sp): ?><!-- 遍历出父级分类 -->
        <?php if(is_array($sp)): foreach($sp as $key=>$vsp): ?><p> <b></b> <a rel="nofollow"><?php echo ($vsp["type_name"]); ?></a> </p>
        <!-- 遍历子分类 -->
        <ul class="ClearFix">
            <?php if(is_array($pp)): foreach($pp as $key=>$vpp): if($vpp['pid'] == $vsp['id']): ?><li> <a rel="nofollow" href="/newlefeng/index.php/Home/List/index/type/<?php echo ($vpp["id"]); ?>"><?php echo ($vpp["type_name"]); ?> </a> </li><?php endif; endforeach; endif; ?>
        </ul><?php endforeach; endif; endif; ?>
    </div>
    <div class="skimbuy" id="seen_and_buy" style="" tname="护肤用品">
        <h3><em>热销商品</em><b>TOP5</b></h3>
        <?php if(is_array($top)): foreach($top as $key=>$vtop): ?><dl>
            <dt> <a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vtop["id"]); ?>"> <img src="/newlefeng/Public/<?php echo ($vtop["goods_img"]); ?>"></a> </dt>
            <dd class="nam"> <a target="_blank" href=""><?php echo ($vtop["goods_name"]); ?> </a> </dd>
            <dd class="pri"> <em>￥<?php echo ($vtop["goods_price"]); ?></em><span><i><?php echo ($vtop["sales_volume"]); ?></i>人购买</span> </dd>
        </dl><?php endforeach; endif; ?>
        
    </div>
</div>
<!-- 左边的导航 结束 -->

<div class="cont"> <a name="nav"></a>
    <div id="cont-nav-show" class="nav ClearFix">
        <!-- <div class="sel"> <span class="pathattr">已选：</span>
            请选择查询条件
            <span class="cancelCheck"><a href="#">清除条件</a></span> </div> -->
        <ul id="ul-nav-show">
            <li id="xmod" class="show">
                <b>品牌：</b>
                <span style="display: block;" class="more"><i></i>更多</span>
                <span style="display: none;" class="hide"><i></i>收起</span>
                <div class="mod" id="brand">
                    <?php if(is_array($brand)): foreach($brand as $key=>$vbrand): ?><span <?php if($vbrand['id'] == $_GET['brand'])echo 'class="select"'; ?>><a href="javascript:void(0)" rel="<?php echo ($vbrand["id"]); ?>"><?php echo ($vbrand["brand_name"]); ?><i></i></a></span><?php endforeach; endif; ?>
                </div>
            </li>
            <li class="show"><b>分类：</b>
                <span style="display: block;" class="more"><i></i>更多</span>
                <span style="display: none;" class="hide"><i></i>收起</span>
                <div class="mod" id="type">
                    <?php if(is_array($type)): foreach($type as $key=>$vtype): ?><span <?php if($vtype['id']==$_GET['type'])echo 'class="select"'; ?>><a href="javascript:void(0)" title="" rel="<?php echo ($vtype["id"]); ?>"><?php echo ($vtype["type_name"]); ?><i></i></a></span><?php endforeach; endif; ?>
                </div>
            </li>
            <li class="show"><b>价格：</b>
                <span style="display: block;" class="more"><i></i>更多</span>
                <span style="display: none;" class="hide"><i></i>收起</span>
                <div class="mod" id="price">
                    <span><a href="javascript:void(0)" title="0-39元" rel="1">0-39元<i></i></a></span>
                    <span><a href="javascript:void(0)" title="40-79元" rel="2">40-79元<i></i></a></span>
                    <span><a href="javascript:void(0)" title="80-129元" rel="3">80-129元<i></i></a></span>
                    <span><a href="javascript:void(0)" title="130-259元" rel="4">130-259元<i></i></a></span>
                    <span><a href="javascript:void(0)" title="260以上" rel="5">260以上<i></i></a></span>
                </div>
            </li>
        </ul>
        <div class="more_nav ClearFix"> <b>更多选项：</b>
            <div class="more_mod" style="line-height:28px;">
            <span class="cancelCheck"><a href="javascript:void(0)" id="clearall">清除所有条件</a></span>
            </div>
        </div>
    </div>
    <form action="" id="gsearch" style="display:none">
    品牌<input type="text" value="<?php if(!empty($_GET['brand'])): echo ($_GET['brand']); else: echo ($_POST['brand']); endif; ?>" name="brand">
    分类<input type="text" value="<?php if(!empty($_GET['type'])): echo ($_GET['type']); else: echo ($_POST['type']); endif; ?>" name="type">
    价格<input type="text" name="price">
    order<input type="text" name="order">
    <!-- limit<input type="text" value="5" name="limit"> -->
    搜索条件<input type="text" value="<?php if(!empty($_GET['search'])): echo ($_GET['search']); else: echo ($_POST['search']); endif; ?>" name="search">
    </form>
    <a name="list"></a>
    <div class="list" id="" style="padding-top: 40px;">
        <div class="sm-nav abs" id="sm-nav"> 
            <span class="order"> 
                <a rel="id desc" title="按相似度排序" class="biht-none down" href="javascript:void(0)" id="order1">默认</a> 
                <a rel="sales_volume desc" title="近期销量由高到低" class="biht-none" href="javascript:void(0)" id="order2"><b></b>热销</a> 
                <a rel="goods_click desc" title="人气由高到低" class="biht-none" href="javascript:void(0)" id="order3"><b></b>人气</a> 
                <a rel="goods_price desc" title="点击按价格由低到高" href="javascript:void(0)" class="biht-none pristate " id="order4"><b></b>价格</a> 
                <a rel="goods_time desc" title="上架时间" class="biht-none" href="javascript:void(0)" id="order5"><b></b>最新</a> 
            </span> 
        </div>
        <div class="smPruArea" id="goodsarea">
            <div class="makeup ClearFix" id="goods">
                <!-- 这里显示商品 -->
            </div>
            <!-- 这是分页 -->
            <div class='pages ClearFix' id="pager"> 
                <span>
                    <a class='downpage' href='javascript:void(0)'>查看更多商品</a>&nbsp;&nbsp;&nbsp;&nbsp;共查询到999个商品
                </span>
            </div>
            <!-- 这是分页   结束 -->
        </div>
    </div>
    <span class="blank0"></span> </div>
</div>
<div class="fwordReSea">
    <dl>
        <dd><form action="/newlefeng/index.php/Home/List/index" method="get" id="ssgood">
            <input type="text" class="text" id="sresearch" name="search" value="请输入商品名"></form>
            <a id="btn-re-search" class="button" href="javascript:void(0)"> </a> </dd>
    </dl>
    <div id="relatedQueryKeywords" class="rehotkey"></div>
</div>
</div>
<script>
    $(function(){
        //搜索
        $('#sresearch').focus(function(){
            $(this).val('');
        })
        $('#btn-re-search').click(function(){
            if($('#sresearch').val() && $('#sresearch').val() != '请输入商品名'){
                $('#ssgood').submit();
            }else{
                layer.msg('请输入商品名！',1,3);
            }
        })
        //点击购买商品
        $('#goodsarea').delegate('a[buy]','click',function(){
            var $this = $(this);
            // $this.click(function(){
                // 此时没有登录的话跳转到登录
                if(<?php echo ($user['id']?1:0); ?>){
                    var id = $this.attr('buy');
                    $.post('/newlefeng/index.php/Home/Cart/add','id='+id,function(data){
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
            // })
        })
        //页面加载完成发送Ajax请求，返回商品数据
        ajaxget();
        //导航条条件设置
        $('.order a').each(function(){
            $(this).click(function(){
                $(this).addClass('down').siblings().removeClass('down');
                $('input[name=order]').val($(this).attr('rel'));
                ajaxget();
            })
        })
        //点击品牌分类加载
        $('#brand span').each(function(){
                var $this = $(this);
                $(this).click(function(){
                    if(!$this.attr('class')){
                        $this.addClass('select').siblings().removeClass('select');
                        var brand = $this.find('a').attr('rel');
                        $('input[name=brand]').val(brand);
                    }else{
                        $this.removeClass('select');
                        $('input[name=brand]').val('');
                    }
                    ajaxget();
                })
        })
        //点击商品分类加载
        $('#type span').each(function(){
                var $this = $(this);
                $(this).click(function(){
                    if(!$this.attr('class')){
                        $this.addClass('select').siblings().removeClass('select');
                        var type = $this.find('a').attr('rel');
                        $('input[name=type]').val(type);
                    }else{
                        $this.removeClass('select');
                        $('input[name=type]').val('');
                    }
                    ajaxget();
                })
        })
        //点击价格分类加载
        $('#price span').each(function(){
                var $this = $(this);
                $(this).click(function(){
                    $this.addClass('select').siblings().removeClass('select');
                    var price = $this.find('a').attr('rel');
                    $('input[name=price]').val(price);
                    ajaxget();
                })
        })
        //清除所有条件
        $('#clearall').click(function(){
            $(':input').each(function(){
                $(this).val('');
                $('input[name="limit"]').val(5);
            })
            $('.mod').each(function(){
                $(this).find('span').each(function(){
                    $(this).removeClass('select');
                })
            })
            ajaxget();
        })
        //ajax函数，返回商品数据
        function ajaxget(){
            $.post('/newlefeng/index.php/Home/List/gsearch',$('#gsearch').serialize(),function(data){
                    var total = parseInt(data.total);
                    var sum = data.sum;
                    if(total){
                        $('#goods').empty();
                        $.each(data.goods,function(i,n){
                            var hg = "<div class='pruwrap'><dl class=''><dt><a href='/newlefeng/index.php/Home/Product/index/id/"+n.id+"' title='' target='_blank'><img alt='' src='/newlefeng/Public/"+n.goods_img+"'></a></dt><dd class='nam'><a href='/newlefeng/index.php/Home/Product/index/id/"+n.id+"' target='_blank'>"+n.goods_name+"</a></dd><dd class='pri'><span class='sales'><b>￥</b>"+n.goods_price+"</span> <del class='spri'>¥"+(n.goods_price/n.goods_sale).toFixed(2)+"</del><a class='to push' href='javascript:void(0)' buy='"+n.id+"'>加入购物车</a> </dd><dd class='mess'> <a href='#' class='buynum'>最近"+n.sales_volume+"人购买</a> <a href='#' target='_blank' class='comnum'>"+n.goods_click+"人查看</a> </dd></dl></div>";
                            $('#goods').append(hg);
                        })
                        if(total > sum){
                            $('#pager span').html("<a class='downpage' id='downpage' href='javascript:void(0)' rel='5'>查看更多商品</a>&nbsp;&nbsp;&nbsp;&nbsp;共查询到"+total+"件商品！");
                        }else if(total < 5){
                            $('#pager span').html('共查询到'+total+'件商品！');
                        }else{
                            $('#pager span').html("<a class='downpage' href='javascript:void(0)'>没有更多商品</a>&nbsp;&nbsp;&nbsp;&nbsp;共查询到"+total+"件商品！");
                        }
                    }else{
                        $('#goods').empty().append('<div class="none">没有查询到符合条件的商品！</div>');
                        // alert($('#page span').html());
                        $('#pager span').html('没有查询到商品！');
                    }
                })
        }
        //点击加载数据每次加载五条数据
        $('#pager').delegate('#downpage','click',function(){
            var rel = parseInt($(this).attr('rel'));
            var limit = rel+','+5;
            $(this).attr('rel',rel+5);
            $.post('/newlefeng/index.php/Home/List/gsearch/limit/'+limit,$('#gsearch').serialize(),function(data){
                if(data.goods){
                    $.each(data.goods,function(i,n){
                        var hg = "<div class='pruwrap'><dl class=''><dt><a href='/newlefeng/index.php/Home/Product/index/id/"+n.id+"' title='' target='_blank'><img alt='' src='/newlefeng/Public/"+n.goods_img+"'></a></dt><dd class='nam'><a href='/newlefeng/index.php/Home/Product/index/id/"+n.id+"' target='_blank'>"+n.goods_name+"</a></dd><dd class='pri'><span class='sales'><b>￥</b>"+n.goods_price+"</span> <del class='spri'>¥"+(n.goods_price/n.goods_sale).toFixed(2)+"</del><a class='to push' href='javascript:void(0)' buy='"+n.id+"'>加入购物车</a> </dd><dd class='mess'> <a href='#' class='buynum'>最近"+n.sales_volume+"人购买</a> <a href='#' target='_blank' class='comnum'>"+n.goods_click+"人查看</a> </dd></dl></div>";
                            $('#goods').append(hg);
                    })
                }
                
                if(data.sum < 5){
                    $('#pager span').html("<a class='downpage' href='javascript:void(0)'>没有更多商品</a>&nbsp;&nbsp;&nbsp;&nbsp;共查询到"+data.total+"件商品！");
                }
                if(!data.goods){
                    $('#pager span').html("<a class='downpage' href='javascript:void(0)'>没有更多商品</a>&nbsp;&nbsp;&nbsp;&nbsp;共查询到"+data.total+"件商品！");
                }
            })
        })

        //显示更多和收起
        $('.show').each(function(){
            var $this = $(this);
            $this.find('.more').click(function(){
                $this.css('height','auto');
                $(this).hide();
                $this.find('.hide').show();
            });
            $this.find('.hide').click(function(){
                $this.removeAttr('style');
                $(this).hide();
                $this.find('.more').show();
            })
        })
    })
    //list页面的固定导航栏
    /*
    *   先求出导航栏到页面顶部的距离  固定值  因为fixed以后他的距离会变的
    */
    var otop = $('#sm-nav').offset().top;
    $(document).scroll(function(){
        var abstop = $(document).scrollTop();
        if(abstop >= otop){
            $('#sm-nav').css({position:'fixed',top:'0px'})
        }else{
            $('#sm-nav').css({position:'relative',top:'none'})
        }
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