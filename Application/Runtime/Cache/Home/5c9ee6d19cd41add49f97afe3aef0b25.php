<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会员登录_乐蜂网</title>
<link href="/newlefeng/Public/home/css/loginCenter.css" rel="stylesheet">
<!--[if (IE 7)|(IE 8)]>
<link href="/css/css3.css" rel="stylesheet" />
<![endif]--> 
<script type="text/javascript" language="javascript" src="/newlefeng/Public/home/js/jquery-1.6.4.min.js"></script>


</head>
<body class="bodyBk login" style="overflow-x: hidden;">

<!--  包含头部  -->

<!-- 导航条部分开始 -->

        <div class="Chead">
            <div class="Chead-main" id="Chead_main">
                <div class="Chead-info">
                    <!-- <a id="Chead_app" class="Chead-app" href="#" target="_blank" rel="nofollow">手机乐蜂</a> -->
                    <div class="Chead-appDown" style="display: none;">
                        <a href="#" target="_blank" rel="nofollow"></a>
                    </div> 
                    <span class="fast-f turl">|</span>   
                    <span id="Chead_save" class="Chead-save">欢迎来到乐蜂！</span>

                    <span class="fast-f turl">|</span> 
                    <a class="turl" href="/newlefeng/index.php/Home/index/index">乐蜂首页</a>
                </div>
            </div>
        </div>

<!-- 导航条部分结束 -->


<!-- logo部分开始 -->

        <div class="Logo-r">
            <div class="Logo-info-r">
                <a href="#"></a>
            </div>
        </div>

<!-- logo部分结束 -->

<!-- 主体部分开始 -->

        <div class="loginBk">
            <div class="warp">
                <form id="loginform" method="post" name="loginform" action="#">
                    <div class="css3 loginContent">
                        <div class="loginTitle">
                            <span class="lc2"></span>
                            <span class="lcr">
                                <a id="reg_link" href="/newlefeng/index.php/Home/User/register">免费注册</a>
                            </span>
                        </div>
                        <ul class="loginInput">
                    	    <div class="mailtips" id="mailtips" style="display: none;"></div>
                            <li class="mailwrap">
                                <h2>账号</h2>
                                <input type="email  " name="user_email" id="loginName" stu="1" value="" tabindex="1" autocomplete="off" class="" placeholder="请输入用户名">
                                <span style="color:red" id="span1"></span>
                            </li>
                            <li class="pwwrap">
                                <h2>密码</h2>
                                <div class="newsTips">
                                    <a target="_blank" href="/newlefeng/index.php/Home/Forgetpwd">忘记密码?</a>
                                </div>
                                <input type="password" name="user_pwd" id="passwd" stu="2" value="" tabindex="2">
                                <span id="span2"></span>
        	                </li>
                            <li class="buttonwrap">
                                <a href="" id="formSubmit">登 录</a>
                            </li>
                            <li></li>
                        </ul>            
                    </div>
                </form>
            </div>    
        </div>

<!-- 主体部分结束 -->


<!--  包含footer  -->

<!-- footer 开始 -->
<div style="width: 1200px;" class="loginfooter">
    <p>
        <a rel="nofollow" target="_blank" href="#">关于乐蜂</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">免责声明</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">隐私声明</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">版权声明</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">招聘信息</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">联系我们</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">帮助中心</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">网站联盟</a>&nbsp;
        <a target="_blank" href="#">友情链接</a>&nbsp;
        <a rel="nofollow" target="_blank" href="">商务合作</a>
    </p>
    <p>Copyright&nbsp;©2008-2014&nbsp;Lefeng.com&nbsp;All&nbsp;Rights&nbsp;Reserved.&nbsp;
        <a rel="nofollow" target="_blank" href="#">京ICP证080382号</a>&nbsp;
        <a rel="nofollow" target="_blank" href="#">京ICP备10006831号-1</a>&nbsp;京公网安备110105014183&nbsp;
        <a rel="nofollow" target="_blank" href="#">营业执照</a>
    </p>
</div> 

<!-- footer 结束 -->

<script type="text/javascript">
    $(function(){
        $('#Cheadlogin').hide();
        $('#loginName').focus();
        $('#loginName').bind('blur',function(){
            if($(this).val()){
                $('#span1').html('');
            }else{
                $('#span1').css('color','red').html('<br>账号不能为空！');
                $(this).focus();
            }
        });
        $('#passwd').focus(function(){
            if($('#loginName').val().length == 0){
                $('#loginName').focus();
            }
        })
        $('#passwd').blur(function(){
            if($(this).val().length == 0){
                $('#span2').css('color','red').html('<br>密码不能为空！');
                $(this).focus();
            }
        })

      $('#formSubmit').click(function(){
        if($('#passwd').val().length == 0){
            $('#passwd').focus();
            return false;
        }
        var url='/newlefeng/index.php/Home/User/checklogin';
        var data = $('#loginform :input').serialize();
          $.post(url,data,function(data){
            if(data.status==1){
                location.href=data.url;
            }else{
                $('#span2').css('color','red').html(data['content']);
                return false;
            }
          })

        return false;
      })

      // 键盘回车发送数据
      $(document).keyup(function(event){
          if(event.keyCode ==13){
            $("#formSubmit").trigger("click");
            }
        });
    })

</script>
    </body>
</html>