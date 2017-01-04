<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>乐蜂网后台登陆页面</title>
	<!-- basic styles -->
	<link href="/newlefeng/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/newlefeng/Public/admin/css/font-awesome.min.css" />
	<!--[if IE 7]>
	<link rel="stylesheet" href="/newlefeng/Public/admin/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!-- page specific plugin styles -->
	<!-- ace styles -->
	<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace.min.css" />
	<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace-rtl.min.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="/newlefeng/Public/admin/css/ace-ie.min.css" />
	<![endif]-->
	<!-- inline styles related to this page -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<script type="text/javascript" language="javascript" src="/newlefeng/Public/home/js/jquery-1.6.4.min.js"></script>
</head>
<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1> <i class="icon-leaf green"></i>
								<span class="red">乐蜂网</span>
								<span class="white">后台管理</span>
							</h1>
							<h4 class="blue">&copy; 三人游</h4>
						</div>
						<div class="space-6"></div>
						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger"> <i class="icon-coffee green"></i>
											请输入您的登录信息
										</h4>

										<div class="space-6"></div>

										<form id="allform" action="" method="post">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input id="adname" type="text" class="form-control" placeholder="用户名" name="admin_name" />
														<i class="icon-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input id="pwd" type="password" class="form-control" placeholder="密码" name="admin_pwd"/>
														<i class="icon-lock"></i>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													<span id="warning"></span>
													<button id="sub" type="button" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="icon-key"></i>
														登录
													</button>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>

									</div>
									<!-- /widget-main -->

									<div class="toolbar clearfix">

										<div>
											<a href="/newlefeng/Home"  class="user-signup-link">
												返回首页
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
								<!-- /widget-body -->
							</div>
							<!-- /login-box -->
							<!-- /forgot-box -->
						</div>
						<!-- /position-relative -->
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
	</div>

</body>
<script>
	$(function(){
		$('#sub').click(function(){
			if($('#adname').val().length==0){
				$('#warning').html('<img src="/newlefeng/Public/home/images/gou5.gif">账号不能为空！').css('color','red');
			}else if($('#pwd').val().length==0){
				$('#warning').html('<img src="/newlefeng/Public/home/images/gou5.gif">密码不能为空！').css('color','red');
			}else{
				$allform = $('#allform').serialize();
				$.post('/newlefeng/index.php/Admin/Login/checklogin',$allform,function(data){
					if(data){
						window.location.href="/newlefeng/index.php/Admin/Index/index";
					}else{
						$('#warning').html('<img src="/newlefeng/Public/home/images/gou5.gif">账号或密码错误！').css('color','red');

					}
				})
			}
		})
		$('#pwd').keyup(function(){
				$('#warning').empty();
		})
		$('#adname').keyup(function(){
				$('#warning').empty();
		})

		// 键盘回车发送数据
      $(document).keyup(function(event){
          if(event.keyCode ==13){
            $("#sub").trigger("click");
            }
        });
	})
</script>	
</html>