<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="scclui框架">
    <meta name="description" content="scclui为轻量级的网站后台管理系统模版。">
    <title>首页</title>
    
    <link rel="stylesheet" href="/Public/common/layui/css/layui.css">
    <link rel="stylesheet" href="/Public/common/css/sccl.css">
    
  </head>
  
  <body class="login-bg">
    <div class="login-box">
        <header>
            <h1>后台管理系统</h1>
        </header>
        <div class="login-main">
            <form action="/admin/login/dologin" class="layui-form" method="post">
                <input name="__RequestVerificationToken" type="hidden" value="">                
                <div class="layui-form-item">
                    
                    <input type="text" name="name" lay-verify="userName" autocomplete="off" placeholder="这里输入登录名" class="layui-input">
                </div>
                <div class="layui-form-item">
                    
                    <input type="password" name="password" lay-verify="password" autocomplete="off" placeholder="这里输入密码" class="layui-input">
                </div>
                 <div class="layui-form-item">
                    <label class="login-icon">
                    </label>

                </div>
                  
                <div class="row">
                        <div class="layui-form-item" style="float:left">
                            
                            <input style="width:160px;" type="text" name="code" lay-verify="code" autocomplete="off" placeholder="这里输入验证码" class="layui-input">
                        </div>
                        <div class="col-xs-5" style="float:right">
                            <a onclick="javascript:re_captcha();" ><img style="width:100px;height:40px;" class="logincodeimg" src="<?php echo U('admin/code/index');?>" onclick="this.src='<?php echo U('admin/code/index');?>?'+Math.random()" /></a>
                        </div>
                    </div> 
                <div class="layui-form-item">
                    
                    <div class="pull-right">
                        <button class="layui-btn layui-btn-primary" lay-submit="" lay-filter="login">
                            <i class="layui-icon"></i> 登录
                        </button>
                    </div>
                    <div class="clear"></div>
                </div>
            </form>        
        </div>
   
    </div>

    <script type="text/html" id="code-temp">
     
    </script>
    <script src="/Public/common/layui/layui.js"></script>
    <script>
        function re_captcha() {
        $url = "<?php echo U('admin/code/index');?>";
        $url = $url + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }

        layui.use(['layer', 'form'], function () {
            var layer = layui.layer,
                $ = layui.jquery,
                form = layui.form();

            form.verify({
                userName: function (value) {
                    if (value === '')
                        return '请输入用户名';
                },
                password: function (value) {
                    if (value === '')
                        return '请输入密码';
                },
                 code: function (value) {
                    if (value === '')
                        return '请输入验证码';
                }
            });

            var errorCount = 0;

            form.on('submit(login)', function (data) {
                window.location.href = "/Publiccommon/page/index.html";
                /*if (errorCount > 5) {
                    layer.open({
                        title: '<img src="' + location.origin + '/Plugins/layui/images/face/7.gif" alt="[害羞]">输入验证码',
                        type: 1,
                        content: document.getElementById('code-temp').innerHTML,
                        btn: ['确定'],
                        yes: function (index, layero) {
                            var $code = $('#code');
                            if ($code.val() === '') {
                                layer.msg('输入验证码啦，让我知道你是人类。');
                                isCheck = false;
                            } else {
                                $('input[name=verifyCode]').val();
                                var params = data.field;
                                params.verifyCode = $code.val();
                                submit($,params);
                                layer.close(index);
                            }
                        },
                        area: ['250px', '150px']
                    });
                    $('#valiCode').off('click').on('click', function () {
                        this.src = '/manage/validatecode?v=' + new Date().getTime();
                    });
                }else{
                    submit($,data.field);
                }

                return false;*/
            });

        });
        
        /*function submit($,params){
            $.post('/manage/login',params , function (res) {
                if (!res.success) {
                    if (res.data !== undefined)
                        errorCount = res.data.errorCount
                    layer.msg(res.message,{icon:2});
                }else
                {
                    layer.msg(res.message,{icon:1},function(index){
                        layer.close(index);
                        location.href='/manage';
                    });
                }
            }, 'json');
        }*/
    </script>
  </body>
</html>