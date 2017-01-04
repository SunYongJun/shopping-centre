<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>乐蜂网后台管理系统</title>
		<!-- basic styles -->
		<link href="/newlefeng/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/newlefeng/Public/admin/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/newlefeng/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- ace styles -->

		<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/newlefeng/Public/admin/css/myace.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/newlefeng/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!--[if !IE]> -->
		
		<!-- <![endif]-->
		<!--[if IE]>
		<script src="/newlefeng/Public/admin/js/jquery-2.0.3.min.js"></script>
		<![endif]-->
		<script src="/newlefeng/Public/admin/js/jquery-2.0.3.min.js"></script>
		<!-- 加载layer弹窗插件 -->
		<script src="/newlefeng/Public/layer/layer.min.js"></script>
		<!-- ace settings handler -->

		<script src="/newlefeng/Public/admin/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/newlefeng/Public/admin/js/html5shiv.js"></script>
		<script src="/newlefeng/Public/admin/js/respond.min.js"></script>
		<![endif]-->
		<!-- uploadify图像上传插件 -->
		<link rel="stylesheet" href="/newlefeng/Public/uploadify/uploadify.css">
		<script src='/newlefeng/Public/uploadify/jquery.uploadify.min.js'></script>
		<!-- 百度在线编辑器 -->
		<script type="text/javascript">
    		window.UEDITOR_HOME_URL = '/newlefeng/Public/ueditor/';
		</script> 
		<script type="text/javascript" src="/newlefeng/Public/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" src="/newlefeng/Public/ueditor/ueditor.all.min.js"></script>
		<script type="text/javascript" src="/newlefeng/Public/ueditor/ueditor.parse.min.js"></script>
		<script type="text/javascript" src="/newlefeng/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
		<!-- 百度在线编辑器 结束-->
	</head>

	<body class="skin-2">
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="/newlefeng/index.php/Admin/Index/index" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							乐蜂网后台管理系统
						</small>
					</a><!-- /.brand -->
				</div>
				<!-- /.navbar-header -->
				<!-- 顶部导航栏开始 -->
				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-- 要发货的订单 -->
						<li class="purple">
							<?php echo W('Top/order');?>
						</li>

						<li class="green">
							<?php echo W('Top/message');?>
						</li>
						<!-- 登录后的用户信息 -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/newlefeng/Public/<?php echo ($_SESSION['admin']['img']); ?>" alt="<?php echo ($_SESSION['admin']['admin_name']); ?>" />
								<span class="user-info">
									<small>欢迎登录</small>
									<?php echo ($_SESSION['admin']['admin_name']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/newlefeng/index.php/Admin/ShopConfig/index">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="/newlefeng/home/" target="_blank">
										<i class="icon-home"></i>
										网站首页
									</a>
								</li>

								<li class="divider"></li>
								<li>
									<a href="/newlefeng/index.php/Admin/AdminUser/changepwd">
										<i class="icon-cog"></i>
										修改密码
									</a>
								</li>

								<li>
									<a href="/newlefeng/index.php/Admin/Login/logout">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div>
				<!-- /.navbar-header -->
				<!-- 顶部导航结束 -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<a class="btn btn-success" href="/newlefeng/index.php/Admin/Order/index" title="订单管理">
								<i class="icon-signal"></i>
							</a>

							<a class="btn btn-info" href="/newlefeng/index.php/Admin/Article/index" title="文章管理">
								<i class="icon-pencil"></i>
							</a>

							<a class="btn btn-warning" href="/newlefeng/index.php/Admin/Goods/index" title="商品管理">
								<i class="icon-group"></i>
							</a>

							<a class="btn btn-danger" href="/newlefeng/index.php/Admin/ShopConfig/index" title="系统设置">
								<i class="icon-cogs"></i>
							</a>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div>

					<!-- 左侧导航栏开始 -->
					<ul class="nav nav-list">
						<li class="active">
							<a href="/newlefeng/index.php/Admin/Index">
								<i class="icon-home"></i>
								<span class="menu-text"> 后台首页 </span>
							</a>
						</li>
						<!-- 
						<li class="<?php if(($userz) == "User"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text">会员管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li class="<?php if(($userList) == "UserIndex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/User/index">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>
								<li class="<?php if(($userList) == "UserAdd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/User/add">
										<i class="icon-double-angle-right"></i>
										添加会员
									</a>
								</li>
							</ul>
						</li>
						 -->
						<li class="<?php if(($menu) == "Goods"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 商品管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li class="<?php if(($menuList) == "Goods-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Goods/index">
										<i class="icon-double-angle-right"></i>
										商品列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "Goods-add"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Goods/add">
										<i class="icon-double-angle-right"></i>
										添加商品
									</a>
								</li>

								<li class="<?php if(($menuList) == "ShopType-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/ShopType/index">
										<i class="icon-double-angle-right"></i>
										商品分类列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "ShopType-add"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/ShopType/add">
										<i class="icon-double-angle-right"></i>
										添加商品分类
									</a>
								</li>

								<li class="<?php if(($menuList) == "Brand-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Brand/index">
										<i class="icon-double-angle-right"></i>
										品牌列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "Brand-add"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Brand/add">
										<i class="icon-double-angle-right"></i>
										添加商品品牌
									</a>
								</li>

								<li class="<?php if(($menuList) == "Comment-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Comment/index">
										<i class="icon-double-angle-right"></i>
										评论列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "Recycle-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Recycle/index">
										<i class="icon-double-angle-right"></i>
										商品回收站
									</a>
								</li>

							</ul>
						</li>
						<!-- 商品分类和商品管理 结束-->

						

						<!-- <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-briefcase"></i>
								<span class="menu-text"> 促销管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								
						
							</ul>
						</li> -->

						

					

						<!-- 订单管理 -->
						<li class="<?php if(($menu) == "Order"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text"> 订单管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li class="<?php if(($menuList) == "Orderindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Order/index">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>
								</li>
								
								<li class="<?php if(($menuList) == "Ordercancel"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Order/cancel">
										<i class="icon-double-angle-right"></i>
										已删除订单
									</a>
								</li>
								<li class="<?php if(($menuList) == "Orderbook"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Order/book">
										<i class="icon-double-angle-right"></i>
										缺货登记
									</a>
								</li>
							</ul>
						</li>
						<!-- 订单管理结束 -->
						<!-- 会员管理 -->
						<li class="<?php if(($userz) == "User"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text">会员管理</span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li class="<?php if(($userList) == "UserIndex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/User/index">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>
								<li class="<?php if(($userList) == "UserAdd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/User/add">
										<i class="icon-double-angle-right"></i>
										添加会员
									</a>
								</li>
							</ul>
						</li>
						<!-- 会员管理结束 -->
						<!-- 促销管理 -->
						<li class="<?php if(($menu) == "sale"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-bullhorn"></i>
								<span class="menu-text"> 促销管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(($menuList) == "Gift-index"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Gift/index">
										<i class="icon-double-angle-right"></i>
										赠品列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "Gift-add"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Gift/add">
										<i class="icon-double-angle-right"></i>
										添加赠品
									</a>
								</li>
								<li class="<?php if(($menuList) == "Sale-salelist"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Sale/salelist">
										<i class="icon-double-angle-right"></i>
										秒杀管理
									</a>
								</li>
							</ul>
						</li>
						<!-- 促销管理结束 -->
						
						<!-- 系统设置 -->
						<li class="<?php if(($menu) == "ShopConfig"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-cogs"></i>
								<span class="menu-text"> 系统设置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(($menuList) == "ShopConfigindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/ShopConfig/index">
										<i class="icon-double-angle-right"></i>
										商店设置
									</a>
								</li>

								<li class="<?php if(($menuList) == "PayTypeindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/PayType/index">
										<i class="icon-double-angle-right"></i>
										支付管理
									</a>
								</li>

								<li class="<?php if(($menuList) == "Shippingindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Shipping/index">
										<i class="icon-double-angle-right"></i>
										配送方式管理
									</a>
								</li>
								<!-- <li class="<?php if(($menuList) == "SetMailindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/SetMail/index">
										<i class="icon-double-angle-right"></i>
										邮件设置
									</a>
								</li> -->
								<li class="<?php if(($menuList) == "Messageindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Message/index">
										<i class="icon-double-angle-right"></i>
										我的消息
									</a>
								</li>
							</ul>
						</li>
						<!-- 系统设置 结束 -->
						<!-- 权限设置 -->
						<li class="<?php if(($admin) == "AdminUser"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-lock"></i>
								<span class="menu-text"> 权限设置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(($adminList) == "AdminUserIndex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/AdminUser/index">
										<i class="icon-double-angle-right"></i>
										管理员列表
									</a>
								</li>

								<li class="<?php if(($adminList) == "AdminUserAdd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/AdminUser/add">
										<i class="icon-double-angle-right"></i>
										添加管理员
									</a>
								</li>

								<li class="<?php if(($adminList) == "AdminUserChangepwd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/AdminUser/changepwd">
										<i class="icon-double-angle-right"></i>
										修改密码
									</a>
								</li>

								<li class="<?php if(($adminList) == "AdminUsergroup"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Rule/group">
										<i class="icon-double-angle-right"></i>
										管理员组
									</a>
								</li>

								<li class="<?php if(($adminList) == "AdminUserrule"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Rule/rule">
										<i class="icon-double-angle-right"></i>
										添加规则
									</a>
								</li>
							</ul>
						</li>
						<!-- 权限设置 结束-->
						
						<!-- 文章管理 -->
						<li class="<?php if(($menu) == "Article"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 文章管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li class="<?php if(($menuList) == "Articleindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Article/index">
										<i class="icon-double-angle-right"></i>
										文章列表
									</a>
								</li>
								<li class="<?php if(($menuList) == "Articleadd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Article/add">
										<i class="icon-double-angle-right"></i>
										添加文章
									</a>
								</li>
								<li class="<?php if(($menuList) == "ArticleTypeindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/ArticleType/index">
										<i class="icon-double-angle-right"></i>
										文章分类
									</a>
								</li>
								<li class="<?php if(($menuList) == "ArticleTypeadd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/ArticleType/add">
										<i class="icon-double-angle-right"></i>
										添加文章分类
									</a>
								</li>
							</ul>
						</li>
						<!-- 文章管理结束 -->
						
						<!-- 广告管理 开始 -->
						<li class="<?php if(($menu) == "Ad"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-facetime-video"></i>
								<span class="menu-text"> 广告管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(($menuList) == "Adindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Ad/index">
										<i class="icon-double-angle-right"></i>
										广告列表
									</a>
								</li>

								<li class="<?php if(($menuList) == "Adadd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Ad/add">
										<i class="icon-double-angle-right"></i>
										添加广告
									</a>
								</li>
							</ul>
						</li>
						<!-- 广告管理结束 -->
						<!-- 友情链接管理 -->
						<li class="<?php if(($menu) == "Flink"): ?>active open<?php endif; ?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-exchange"></i>
								<span class="menu-text"> 友情链接 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li class="<?php if(($menuList) == "Flinkindex"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Flink/index">
										<i class="icon-double-angle-right"></i>
										友情链接列表
									</a>
								</li>

								<li class="<?php if(($menuList) == "Flinkadd"): ?>active open<?php endif; ?>">
									<a href="/newlefeng/index.php/Admin/Flink/add">
										<i class="icon-double-angle-right"></i>
										添加友情链接
									</a>
								</li>
							</ul>
						</li>
						<!-- 友情链接结束 -->
						<!-- <li>
							<a href="gallery.html">
								<i class="icon-picture"></i>
								<span class="menu-text"> 商品相册 </span>
							</a>
						</li> -->
					</ul><!-- /.nav-list -->
					<!-- 左侧导航结束 -->


					<!-- 这个代码是控制收缩左侧导航栏 -->
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
						
						<!-- 页面标题 -->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="/newlefeng/index.php/Admin/Index/index">首页</a>
							</li>
							
<li class="active"><a href="/newlefeng/index.php/Admin/AdminUser/index">权限管理</a></li>
<li class="active"><a href="/newlefeng/index.php/Admin/AdminUser/add">添加管理员</a></li>

						</ul>
						<!-- 页面标题结束 -->

						<!-- 标题右侧的搜索框 -->
						<!--<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div>-->
						<!-- 标题右侧的搜索框  结束-->
					</div>
					
					<!-- 继承main -->
					

	<div class="page-content">
		<div class="page-header">
			<h1>
				添加管理员
				<small> <i class="icon-double-angle-right"></i>
					请在下面添加具体管理员信息
				</small>
			</h1>
		</div>
		<!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form id="allform" class="form-horizontal" role="form" method="post" action="/newlefeng/index.php/Admin/AdminUser/insert">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="adname">管理员名称：</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input type="text" id="adname" name="admin_name" maxlength="16" /> <i class="icon-leaf blue"></i>
							</span>
							<span id="one_warning"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="pwd">密码：</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input type="password" id="pwd" name="admin_pwd" maxlength="16" /> <i class="icon-leaf blue"></i>
							</span>
							<span id="two_warning"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="repwd">确认密码：</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input type="password" id="repwd" name="re_admin_pwd"/> <i class="icon-leaf blue"></i>
							</span>
							<span id="three_warning"></span>
						</div>
					</div>
					
					<div class="form-group ">
						<label for="sel" class="col-sm-3 control-label no-padding-right">管理员等级：</label>
						<div  class="col-sm-3">
						<select id="sel" name="admin_level">
							<option value="">--请选择--</option>
							<?php if(is_array($group)): foreach($group as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
						</select></div>
					</div>
					<div class="col-md-offset-3 col-md-9">
						<input id="sub" class="btn btn-info" type="button" value="添加">
						<span id="lastwarning"></span>
					</div>
				</form>
			</div>

		</div>
	</div>

	<script>
	$(function(){
		var adname = false;
		var pwd = false;
		var repwd = false;

		$('#adname').focus(function(){
			$('#one_warning').html('请输入由英文、数字组成的5-16位管理员名称').css('color','#666');
		});
		$('#adname').blur(function(){
			var data = $(this).val();
			if(data.length<5 || data.length>16){
				$('#one_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif" height="25">请输入由英文、数字组成的5-16位管理员名称').css('color','red');
			}else{
				var reg = /^([a-zA-Z1-9]){5,16}$/;
				var result = reg.test(data);
				if(!result){
					$('#one_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif">管理员名称格式不正确！').css('color','red');
				}else{

					$.post('/newlefeng/index.php/Admin/AdminUser/checkname',{adname:data},function(data){
						if(data){
							$('#one_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif">此账号已存在！').css('color','red');
						}else{
							adname = true;
							$('#one_warning').html('<img src="/newlefeng/Public/home/images/gou4.gif" height="25">');
						}
					})
				}

			}
		})

		$('#pwd').focus(function(){
			$('#two_warning').html('请输入6-16位的密码').css('color','#666');
		})
		$('#pwd').blur(function(){
			var data = $(this).val();
			if(data.length<6 || data.length>16){
				$('#two_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif" height="25">请输入5-16位密码').css('color','red');
			}else{
				$('#two_warning').html('<img src="/newlefeng/Public/home/images/gou4.gif" height="25">');
				pwd = true;
			}
		})

		$('#repwd').keyup(function(){
			var data = $(this).val();
			var datas = $('#pwd').val();
			if(data != datas){
				$('#three_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif" height="25">两次密码不一致').css('color','red');
			}else if(data.length==0){
				$('#three_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif" height="25">请再次确认密码').css('color','red');
			}else{
				$('#three_warning').html('<img src="/newlefeng/Public/home/images/gou4.gif" height="25">');
				repwd = true;
			}
		})

		// 
		$('#sub').click(function(){
			if($('#pwd').val() != $('#repwd').val()){
				$('#three_warning').html('<img src="/newlefeng/Public/home/images/gou5.gif" height="25">两次密码不一致').css('color','red');
				return false;

			}
			if(adname && pwd && repwd){
				var $allform = $('#allform').serialize();
				$.post('/newlefeng/index.php/Admin/AdminUser/insert',$allform,function(data){
					if(data==1){
						$('#lastwarning').html('添加错误');
						window.location.reload();
					}else if(data==2){
						layer.msg('恭喜添加管理员成功！',1,1);
						window.location.href="/newlefeng/index.php/Admin/AdminUser/index";
					}
				})
			}
		})


	})
	</script>


				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		
		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='__public__/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
 			window.jQuery || document.write("<script src='__public__/admin/js/jquery-1.10.2.min.js'>"+"<"+"script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/newlefeng/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/newlefeng/Public/admin/js/bootstrap.min.js"></script>
		<script src="/newlefeng/Public/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/newlefeng/Public/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/newlefeng/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/newlefeng/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/newlefeng/Public/admin/js/jquery.slimscroll.min.js"></script>
		<script src="/newlefeng/Public/admin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/newlefeng/Public/admin/js/jquery.sparkline.min.js"></script>
		

		<!-- ace scripts -->

		<script src="/newlefeng/Public/admin/js/ace-elements.min.js"></script>
		<script src="/newlefeng/Public/admin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		
</body>
</html>