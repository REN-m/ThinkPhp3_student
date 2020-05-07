<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/Styles/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript"src="http://localhost/thinkphp3/Public/Admin/Js/jquery-1.8.2.js"></script>
</head>
<body style="background: #278296;color:white">

<form method="post" action="<?php echo U('Login/validate');?>" onsubmit="return validate()">
    <table cellspacing="0" cellpadding="0" style="margin-top:100px" align="center">
        <tr>
            <td>
                <img src="http://localhost/thinkphp3/Public/Admin/Images/login.png" width="178" height="256" border="0" alt="ECSHOP" />
            </td>
            <td style="padding-left: 50px">
                <table>
                    <tr>
                        <td>管理员姓名：</td>
                        <td>
                            <input type="text" name="username" />
                        </td>
                    </tr>
                    <tr>
                        <td>管理员密码：</td>
                        <td>
                            <input type="password" name="password" />
                        </td>
                    </tr>
                    <tr>
                        <td>验证码：</td>
                        <td>
                            <input type="text" name="captcha" class="capital" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <img src="<?php echo U('verify/index');?>" onclick="javascript:this.src='<?php echo U("verify/index");?>'" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="checkbox" value="1" name="remember" id="remember" />
                            <label for="remember">请保存我这次的登录信息。</label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" value="进入管理中心" class="button" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
  <input type="hidden" name="act" value="signin" />
</form>
<script type="text/javascript">
   $( function () {
       //当我们点击进入管理中心的时候,就要发送ajax异步请求
       $(".button").click(function () {
           //开始发送异步请求
           $username=$("#username").val();
           $password=$("#password").val();
           $.ajax({
               type:"post",
               url:"<?php echo U('Login/validate');?>",
               data:$('from').serialize(),
               dataType:'json',
               success: function (data) {
                   console.log(data);
                   $("#username_msg").text("");
                   $("#password_msg").text("");
                   $("#capital_msg").text("");
                   if (data.status ==-1) {
                       $("#username_msg").text(data.msg);
                   }else if (data.status ==-2) {
                       $("#password_msg").text(data.msg);
                   }else if (data.status ==-3) {
                       $("#capital_msg").text(data.msg);
                   }else {
                       location.href = data.url;
                   }
               }
           })
       })
   })
</script>
</body>