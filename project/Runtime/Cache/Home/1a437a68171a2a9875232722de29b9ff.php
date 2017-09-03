<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/zebra_dialog.css">
	<title>登录</title>
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="wrap">
			<div class="logo">
				<a href="#"><img src="/Public/"></a>
			</div>
			<p class="title">欢迎登录</p>
		</div>
	</div>
	<div class="rel-wrap">
		<div class="wrap clearfix">
			<div class="form-box relBox clearfix">
				<div class="rel-left fl">
					<img src="/Public/images/lr.jpg">
				</div>
				<div class="rel-right fl">
					<form action="/index.php/Home/Login/dologin" method="post">
		            <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
		              <tr height="50" valign="top">
		              	<td width="55">&nbsp;</td>
		                <td>
		                	<span class="fl" style="font-size:24px;">登录</span>
		                    <span class="fr">还没有商城账号，<a href="<?php echo U('/home/register/index');?>" style="color:#ff4e00;">立即注册</a></span>
		                </td>
		              </tr>
		              <tr>
		              	<td colspan="2" id="dir" style="color:red;text-align:center;"></td>
		              </tr>
		              <tr>
		              	<td colspan="2"></td>
		              </tr>
		              <tr height="70">
		                <td>用户名</td>
		                <td><input type="text" name="name" id="did" value="<?=cookie('remember')['phone']?>" class="l_user" placeholder="手机号  /账户名  /邮箱" /></td>
		              </tr>
		              <tr height="70">
		                <td>密&nbsp;&nbsp;&nbsp;码</td>
		                <td><input type="password" value="<?=cookie('remember')['password']?>" name="password" class="l_pwd" placeholder="密码" /></td>
		              </tr>
		              <tr>
		              	<td>&nbsp;</td>
		                <td style="font-size:12px; padding-top:20px;">
		                	<span style="font-family:'宋体';" class="fl">
		                    	<label class="r_rad"><input type="checkbox" id="info" name="remember_me" /></label>
		                    	<label class="r_txt" for="info">记住我</label>
		                    </span>
		                    <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
		                </td>
		              </tr>
		              <tr height="60">
		              	<td>&nbsp;</td>
		                <td><input type="submit" value="登录" class="log_btn" /></td>
		              </tr>
		            </table>
		            </form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer_info">
			<div class="footer_con">
				<p class="footer_link">
					<a href="#" target="_blank">关于我们</a>
					<span class="split">|</span>
					<a href="#" target="_blank">联系我们</a>
					<span class="split">|</span>
					<a href="#" target="_blank">媒体报道</a>
					<span class="split">|</span>
					<a href="#" target="_blank">法律声明</a>
					<span class="split">|</span>
					<a href="#" target="_blank">企业文化</a>
					<span class="split">|</span>
					<a href="#" target="_blank">友情链接</a>
					<span class="split">|</span>
					<a href="#" target="_blank">加入我们</a>
					<span class="split">|</span>
					<a href="#" target="_blank">诚聘英才</a>
					<span class="split">|</span>
					<a href="#" target="_blank">网站地图</a>
					<span class="split">|</span>
					<a href="#" target="_blank">帮助中心</a>
				</p>
			</div>
			<p>恋家网 版权所有Copyright © 2017-2028 www.lian.com All rights reserved</p>
			<p>浙ICP备13002314号 浙B2-20090108 组织机构代码证：66439109—1</p>
			<p>中国互联网协会信用评价中心网信认证 网信编码:1664391091 举报电话：021-69108618</p>
		</div>
	</div>
</body>
<script>
var dd = false;

	//用户名移出事件
	$('#did').on('blur',function(){

		//获取输入的值
		var val = $(this).val();

		//发送ajax
		$.post('/home/login/ajax',{name:val},function(data){
			if(data == 2){
  				$('#dir').text('该用户不存在');
  				$('#dir').css('display','');
  			}

  			if(data == 1){
  				// dd = true;
  				$('#dir').css('display','none').html('');
  			}

		});
	});
</script>
</html>