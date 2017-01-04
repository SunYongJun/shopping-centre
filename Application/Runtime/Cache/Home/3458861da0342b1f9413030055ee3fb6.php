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
    
<link rel="stylesheet" href="/newlefeng/Public/home/css/product.css">
<script src="/newlefeng/Public/home/js/jqzoom.js"></script>
<style>#mlens_wrapper_0{width:400px;}</style>

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
<div class="bgcolor">
    <div class="main mauto">
        <!-- 主体的导航 -->
        <p class="path">
        <span class="fr" style="float:right">商品编码：<?php echo ($goods["goods_sn"]); ?></span>
        <a href="/newlefeng/index.php/Home/Index/index">首页</a>
        &nbsp;/&nbsp;
        <?php if(is_array($path)): foreach($path as $key=>$vpath): ?><a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vpath["pid"]); ?>"><?php echo ($vpath["type_name"]); ?></a>
        &nbsp;/&nbsp;<?php endforeach; endif; ?>
        <?php echo ($goods["goods_name"]); ?> </p>
        <div class="mianA">
            <div class="info-left proInfobox">
                <dl id="imgshow">
                    <dt>
                    <img class="jqzoom" alt="" id="juzoom" src="/newlefeng/Public/<?php echo ($goods["goods_img"]); ?>" >
                    <!-- 放大的图片显示在这里 -->
                    <!-- <div class="zoomdiv" style="top: 0px; left: 400px; width: 460px; height: 478px; display: none;"><img class="bigimg" src="#"></div> -->
                    <a class="btn-bigimg" href="/newlefeng/index.php/Home/Picture/index/id/<?php echo ($goods["id"]); ?>" style="display: block;" target="_blank">查看大图</a>
                    </dt>
                    <dd>
                    <div class="spec-wrap">
                        <div class="spec-item">
                            <!--图片滚动-->
                            <a class="imgselect" supsrc="#" bigsrc="#" href="javascript:void(0)" group="0">
                            <img src="/newlefeng/Public/<?php echo ($goods["goods_img"]); ?>" alt="">
                            </a>
                            <?php if(is_array($goods['img_url'])): foreach($goods['img_url'] as $key=>$img): if(($img) != ""): ?><a class="" supsrc="#" bigsrc="#" href="javascript:void(0)" group="1">
                            <img src="/newlefeng/Public/<?php echo ($img["img_url"]); ?>" alt="">
                            </a><?php endif; endforeach; endif; ?>
                        </div>
                    </div>
                    </dd>
                </dl>
            </div>
            <div class="info-right">
                <h1><span class="pname"><?php echo ($goods["goods_name"]); ?></span></h1>
                <div class="pos05">
                    <p class="specials">
                    <span class="zshf">赠送花粉：<?php echo ($goods["goods_coin"]); ?><i></i></span>
                    <font style="font-size:20px;font-weight:bold">￥<?php echo ($goods["goods_price"]); ?></font>
                    <del>市场价：￥<?php echo ($goods["mprice"]); ?></del>
                    </p>
                    <div class="hfsm"><b class="tip_flag"></b>
                        <p>购物1元得1个花粉，100花粉价值1元</p>
                    </div>
                    <p></p>
                    <div class="sale">
                        <div class="cuxiao">
                            <div class="pos"><em class="zeng1">赠品</em>
                                <div class="row">
                                    <dl class="sa2">
                                        <?php if(!empty($gift["id"])): ?><dt class="manzeng">
                                        <div class="cx_n"><?php echo ($gift["gift_name"]); ?>
                                        <label>￥<?php echo ($gift["gift_price"]); ?></label>
                                        <!-- <span></span> --></div>
                                        <div class="zengpin" style="display:none"><b class="tip_flag"></b>
                                            <h3>商品的名字名字啊男士大宝</h3>
                                            <ul>
                                                <li><a href="#" target="_blank" title="#"><img src="/newlefeng/Public/<?php echo ($goods["goods_img"]); ?>" ></a>
                                                </li>
                                            </ul>
                                        </div>
                                        </dt>
                                        <?php else: ?>
                                        <dt  class="manzeng"><div class="cx_n">该商品暂无赠品！</dt><?php endif; ?>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- promotion -->
                    <div class="line"></div>
                    <p class="messagenu">评　价：<b><em style="width: <?php echo ($ranks); ?>%;"></em></b><a href="#pingjia"><?php echo ($pjs); ?>人评价</a>
                    </p>
                    <div class="line"></div>
                    <!-- color -->
                    <!-- color -->
                </div>
                <div class="bg_gray">
                    <div class="number" style="">数　量：
                        <div>
                            <span>
                            <a id="min" href="javascript:void(0)">-</a>
                            <b id="quantity">
                            <input type="text" value="1" id="num" readonly="true">
                            </b>
                            <a id="max" href="javascript:void(0)">+</a>
                            </span>
                            <em class="tip_wm2"></em>
                        </div>
                    </div>
                    <div id="hf_buy" class="hf_buy">查看数：<span><?php echo ($goods["goods_click"]); ?></span></div>
                    <!-- add cart button -->
                    <div class="heig">
                        <a class="join" style="" goods="<?php echo ($goods["id"]); ?>">加入购物车</a>
                        <!-- 下面这货为到货通知 -->
                        <a class="hasalarm" style="display: none;" href="#"></a>
                        <a class="save" data="<?php echo ($goods["id"]); ?>" href="javascript:void(0)"><span></span></a>
                        <div class="fshareBox">
                            <div class="fShareTitle">分享</div>
                            <span class="share" style="display: none;">
                            <a href="#" title="分享到新浪微博" class="sina" style="background-position: -159px -116px;"></a>
                            <a href="#" title="分享到腾讯微博" class="qqt" style="background-position: -181px -116px;"></a>
                            <a title="分享到QQ空间" class="qqz" style="background-position: -203px -116px;"></a>
                            <a title="分享到人人网" class="renren" style="background-position: -225px -116px;"></a>
                            <a title="分享到开心网" class="kaixin" style="background-position: -247px -116px;"></a>
                            <a title="分享到搜狐微博" class="sohu" style="background-position: -269px -116px;"></a>
                            <a title="分享到网易微博" class="t163" style="background-position: -291px -116px;"></a>
                            <a title="分享到豆瓣" class="douban" style="background-position: -313px -116px;"></a>
                            <b class="tip_flag"></b>
                            </span>
                        </div>
                    </div>
                    <!-- notenough button -->
                    <div class="oosarea" style="display: none;">
                        <div class="ooslist">
                            <div class="oosmore">为您推荐其它同类热销商品：</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sekuai"></div>
            <div class="clear"></div>
        </div>
        <div class="baozhang">
            <div class="bz"><img src="/newlefeng/Public/home/images/bz-1.jpg"><span>免运费<em>网付69全场99</em></span></div>
            <div class="bz"><img src="/newlefeng/Public/home/images/bz-2.jpg"><span>全正品<em>正品承诺假一赔十</em></span></div>
            <div class="bz"><img src="/newlefeng/Public/home/images/bz-3.jpg"><span>最放心<em>45天无条件退换货</em></span></div>
            <div class="bz"><img src="/newlefeng/Public/home/images/bz-4.jpg"><span>限时达<em>限时到达超时赔付</em></span></div>
            <div class="qijian_box">
                <div class="qijian">
                    <a href="/newlefeng/index.php/Home/List/index/brand/<?php echo ($goods["brand_id"]); ?>" target="_blank">
                        <img src="/newlefeng/Public/<?php echo ($goods["brand_logo"]); ?>">
                        <b><?php echo ($goods["brand_name"]); ?></b>
                        <span>搜索<br><?php echo ($goods["brand_name"]); ?>商品</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="more-pro" id="proGroupInfo">
            <!-- 推荐组合，同品牌最多三个商品推荐 -->
            <h3><a href="javascript:void(0)" class="down">推荐组合</a>
            </h3>
            <div id="hotInfo" style="" class="more-cont">
                <h4></h4>
                <div class="pro-child">
                    <div class="cont-left">
                        <div class="proslide" style="width: 495px;">
                            <?php if(is_array($tj)): foreach($tj as $key=>$vtj): ?><dl>
                                <b class="pro-ico2">+</b>
                                <dt><a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vtj["id"]); ?>"><img src="/newlefeng/Public/<?php echo ($vtj["goods_img"]); ?>"></a>
                                </dt>
                                <dd class="nam"><a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($vtj["id"]); ?>"><?php echo ($vtj["goods_name"]); ?></a>
                                </dd>
                                <dd class="pri">￥<?php echo ($vtj["goods_price"]); ?></dd>
                            </dl><?php endforeach; endif; ?>
                        </div>
                    </div>
                    <div class="cont-right">
                        <b>推荐组合</b>
                        <i><?php echo ($goods["brand_name"]); ?> </i>
                        <p class="price1">市场价：<del><span>￥<?php echo ($msum); ?></span></del></p>
                        <p class="price2">优惠价：<span>￥<?php echo ($psum); ?></span></p>
                        <div class="zuhe">
                            <a class="buy" href="javascript:void(0)" rel="<?php echo ($ids); ?>"></a>
                        </div>
                        <em class="pro-ico3">=</em>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="sidebar">
                <!-- 浏览该商品的用户还浏览了 -->
                <h3 id="seeandsee" style="">同类最热销商品</h3>
                <div>
                    <?php if($hgood != ''): if(is_array($hgood)): foreach($hgood as $key=>$hgood): ?><dl>
                        <dt><a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($hgood["id"]); ?>" title="<?php echo ($hgood["goods_name"]); ?>"><img src="/newlefeng/Public/<?php echo ($hgood["goods_img"]); ?>"></a>
                        </dt>
                        <dd class="nam"><a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($hgood["id"]); ?>"><?php echo ($hgood["goods_name"]); ?></a>
                        </dd>
                        <dd class="pri"><del class="fr mark_price">￥<?php echo ($hgood["mprice"]); ?></del>￥<?php echo ($hgood["goods_price"]); ?></dd>
                    </dl><?php endforeach; endif; endif; ?>
                </div>
                <h3 id="brandhot" style="">同品牌最热销商品</h3>
                <div>
                    <?php if($tgood != ''): if(is_array($tgood)): foreach($tgood as $key=>$tgood): ?><dl>
                        <dt><a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($tgood["id"]); ?>" title="<?php echo ($tgood["goods_name"]); ?>"><img src="/newlefeng/Public/<?php echo ($tgood["goods_img"]); ?>"></a>
                        </dt>
                        <dd class="nam"><a target="_blank" href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($tgood["id"]); ?>" title=""><?php echo ($tgood["goods_name"]); ?></a>
                        </dd>
                        <dd class="pri"><del class="fr mark_price">￥<?php echo ($tgood["mprice"]); ?></del>￥<?php echo ($tgood["goods_price"]); ?></dd>
                    </dl><?php endforeach; endif; endif; ?>
                </div>
            </div>
            <div id="detail" class="detail">
                <h3 class="sie">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td><a tag="tabc" class="startnode down">商品详情</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </h3>
            </div>
            <!-- 商品详情 -->
            <div id="detail2" class="detail">
                <!-- product content -->
                <div class="cont tabc">
                    <div class="dtl_msg">
                        <?php echo ($goods["goods_desc"]); ?>
                    </div>
                </div>
            </div>
            <div id="detail" class="detail">
                <h3 class="sie">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="pingjia">
                    <tbody>
                        <tr>
                            <td><a tag="tabc" class="startnode down">商品评价</a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </h3>
            </div>
            <!-- 商品评价 -->
            <div id="detail2" class="detail">
                <!-- product content -->
                <div class="cont tabc">
                    <?php if(is_array($pingjia)): foreach($pingjia as $key=>$pingjia): ?><div class="photo ClearFix">
                        <div class="pho_left" style="float:left">
                            <img width="64px;" height="64px;" src="/newlefeng/Public/<?php echo ($pingjia["pic"]); ?>">                            
                            <p><?php echo ($pingjia["username"]); ?></p>
                            <span><?php echo (date('Y-m-d',$pingjia["comment_time"])); ?></span>
                        </div>
                        <div class="pho_rignt hui" style="float:right">
                            <div class="star_big">
                                评分：<?php echo ($pingjia["comment_rank"]); ?> 分
                                <span class="xing5"></span>
                                <div class="koubei">2014-8-16 16:29:47</div>
                            </div>
                            <div class="pj_text">
                                <?php echo ($pingjia["comment_content"]); ?>
                            </div>
                            <div class="infor_img ClearFix">
                                <?php if(!empty($pingjia["reply"])): ?><p>
                                    管理员回复：<span style="color:#C9AF67">[<?php echo (date('Y-m-d',$pingjia["reply_time"])); ?>]</span><?php echo ($pingjia["reply"]); ?>
                                </p><?php endif; ?>
                                <div class="zy_bt">
                                    <span>
                                        <a href="javascript:void(0);">
                                            
                                        </a>
                                        <input type="hidden" value="0" id="coment_vote_14704106" name="coment_vote_14704106">                            
                                        <a target="_blank" class="reply_bt" href="#">
                                            
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="reply_box" style="display:none;"> <b></b>
                            </div>
                        </div>
                        <div class="jian3 hui2"></div>
                    </div>
                    <div class="clearfix"></div><?php endforeach; endif; ?>
                </div>
            </div>
            <!-- 评价框 -->
                <!-- 没有登录的时候不显示 -->
            <?php if(!empty($user['id'])): if($ispj == 0): ?><div class="detail mytail" id="pjk">
                <h3 class="mych">我的评价</h3>
                <form action="" method="post">
                    <table class="mypj">
                        <tr>
                            <td class="mylt">选择星级</td>
                            <td class="xingji">
                                <p>
                                    <b id="bxj">
                                        <em style="width: 100%;" val="100" id="pxj"></em>
                                    </b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="mylt">评价内容</td>
                            <td>
                                <textarea name="" id="mytext"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a class="mybtn" ids="<?php echo ($goods["id"]); ?>"></a>
                                <span class="waning">请输入评价内容！</span>
                            </td>
                        </tr>
                    </table>
                </form>
            </div><?php endif; endif; ?>
            </div>
        </div>
    </div>
</div>
    <script>
    $(function(){
        //评价的星级
        $('#bxj').bind('click',function(e){
            var h = $('#bxj').width();
            var ml = e.pageX - $(this).offset().left;
            // var bw = $(this).offset().left;
            var bfb = Math.round(ml/89*100);//算出百分比
            //超过90%就算是100%。
            if(bfb > 90){
                bfb = 100;
            }
            $('#pxj').css('width',bfb+'%').attr('val',bfb);
        })
        //ajax发送评价的内容
        $('.mybtn').bind('click',function(){
            if(!$('#mytext').val()){
                $('.waning').show().css('color','red');
                return;
            }
            var data = 'comment_rank='+$('#pxj').attr('val')+'&goods_id='+$(this).attr('ids')+'&comment_content='+$('#mytext').val();
            $.post('/newlefeng/index.php/Home/Collect/comment',data,function(data){
                if(data.status == 1){
                    layer.msg(data.content,1,function(){
                        $('#pjk').slideUp(function(){
                            location.reload();
                        });
                    });
                }else{
                    layer.msg(data.content,2,0);
                }
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
        //推荐组合去掉最后一个+号
        $('.pro-ico2:eq('+($('.pro-ico2').size()-1)+')').empty();
        // remove($('.pro-ico2:eq('+i+')'));
        //增减购买的数量
    	$('#min').click(function(){
    		var quan = $('#quantity').find('input').val();
    		if(quan -1 <= 0){
    			return false;
    		}
    		$('#quantity').find('input').val(quan - 1);
    	})
    	$('#max').click(function(){
    		var quan = $('#quantity').find('input').val();
    		$('#quantity').find('input').val(parseInt(quan) + 1);
    	})

        /*$('.manzeng').hover(function(){
            $('.zengpin').toggle();
        })*/
    
        
        // 图片替换
        $('.spec-item a').each(function(){
        	$(this).click(function(){
        		// var ssimg = $(this).find('img').attr('src');
        		var ssimg = $(this).find('img').attr('src');
        		$(this).addClass('imgselect').siblings().removeClass('imgselect').find('img').removeClass('imgselect');
        		// ssimg.addClass('imgselect').parent().siblings().find('img').removeClass('imgselect');
        		$('#juzoom').attr('src',ssimg);
        		$('#juzoom').attr('data-big',ssimg);
        		$('#zoomimg').css('background-image','url('+ssimg+')')
        		// $('#zoomimg').attr('ssimg','123')
        	})
        })
        //放大镜
        $("#juzoom").mlens({
			imgSrc: $("#juzoom").attr("data-big"),
 			lensShape: "circle",
			lensSize: 100,
			borderSize: 1,
			borderColor: "#fff"
		})
        //选择花粉购按钮
        $('#hf_buy').find('em').click(function(){
            $(this).toggleClass('gou');
        })
        //加入购物车点击跳出已加入购物车
        $('.join').click(function(){
            // 判断是否登陆
            if(<?php echo ($user['id']?1:0); ?>){
                var goodid = $(this).attr('goods');
                var buy = $('#num').val();
                var data = {'id':goodid,'num':buy};
                $.post('/newlefeng/index.php/Home/Cart/add',data,function(data){
                    if(data.status == 1){
                        layer.msg(data.content,1,function(){
                            // location.reload();
                            $('#Chead-shopping').empty().load('/newlefeng/index.php/Home/Common/mycart');
                        })
                        //$('#alt-succ').show(); //这一行弹出加入成功
                    }else{
                        layer.msg(data.content,1,3);
                    }
                })
            }else{
                layer.msg('请先登录！',2,function(){
                    location.href = '/newlefeng/index.php/Home/User/Login';
                })
            }
            // alert(goodid);
            //$('#alt-succ').show(); //这一行弹出加入成功
        })
        //购买组合
        $('.buy').click(function(){
            if(<?php echo ($user['id']?1:0); ?>){
                var data = 'id='+$(this).attr('rel');
                $.post('/newlefeng/index.php/Home/Cart/add',data,function(data){
                    if(data.status == 1){
                        layer.msg(data.content,1,function(){
                            // location.reload();
                            $('#Chead-shopping').empty().load('/newlefeng/index.php/Home/Common/mycart');
                        })
                        //$('#alt-succ').show(); //这一行弹出加入成功
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
        //显示分享
        $('.fShareTitle').mouseenter(function(){
            $(this).next().show();

        }).mouseleave(function(){
            if ($(this).next().is('hidden')) {
                $(this).next().slideUp(100);
            }
        })
        $('.fShareTitle').next().mouseleave(function(){
            $(this).slideUp(100);
        })
    })
    </script>
<!-- 主体部分结束 -->



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