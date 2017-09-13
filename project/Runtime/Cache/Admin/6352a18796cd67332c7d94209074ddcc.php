<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>首页</title>
	
	<link rel="stylesheet" href="/Public/common/css/sccl.css">
	<link rel="stylesheet" type="text/css" href="/Public/common/skin/qingxin/skin.css" id="layout-skin"/>

    
  </head>
  
  <body>
	<div class="layout-admin">
		<header class="layout-header">
			<span class="header-logo"></span> 
			<a class="header-menu-btn" href="javascript:;"><i class="icon-font">&#xe600;</i></a>
			<ul class="header-bar">
				<li class="header-bar-role"><a href="javascript:;">超级管理员</a></li>
				<li class="header-bar-nav">
					<a href="javascript:;"><?=session('user')['name']?><i class="icon-font" style="margin-left:5px;">&#xe60c;</i></a>
					<ul class="header-dropdown-menu">
						<li><a href="<?php echo U('admin/login/logout');?>">退出</a></li>
					</ul>
				</li>
				<li class="header-bar-nav"> 
					<a href="javascript:;" title="换肤"><i class="icon-font">&#xe608;</i></a>
					<ul class="header-dropdown-menu right dropdown-skin">
						<li><a href="javascript:;" data-val="qingxin" title="清新">清新</a></li>
						<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="javascript:;" data-val="molv" title="墨绿">墨绿</a></li>
						
					</ul>
				</li>
			</ul>
		</header>
		<aside class="layout-side">
			<ul class="side-menu">
				<li class='menu-header'>会员</li>
			  	<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>会员管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/member/add");?>'>
						  	<i class='icon-font'>添加用户</i>
				  		</a>
				  		<a href='<?php echo U("/admin/member/index");?>'>
						  	<i class='icon-font'>会员列表</i>
				  		</a>
				  		<a href='<?php echo U("/admin/member/recycle");?>'>
						  	<i class='icon-font'>会员回收站</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>技工管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("/admin/mechanic/index");?>'>
						  	<i class='icon-font'>技工列表</i>
				  		</a>
						<a href='<?php echo U("/admin/mechanic/add");?>'>
						  	<i class='icon-font'>添加技工</i>
				  		</a>
				  		<a href='<?php echo U("/admin/mechanic/appointment");?>'>
						  	<i class='icon-font'>预约技工</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>设计师管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("/admin/designer/index");?>'>
						  	<i class='icon-font'>设计师列表</i>
				  		</a>
				  		<a href='<?php echo U("admin/designer/add");?>'>
						  	<i class='icon-font'>添加设计师</i>
				  		</a>
				  		<a href='<?php echo U("admin/designer/appointment");?>'>
						  	<i class='icon-font'>预约设计师</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>工长管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/foreman/index");?>'>
						  	<i class='icon-font'>工长列表</i>
				  		</a>
				  		<a href='<?php echo U("admin/foreman/add");?>'>
						  	<i class='icon-font'>添加工长</i>
				  		</a>
				  		<a href='<?php echo U("admin/foreman/appointment");?>'>
						  	<i class='icon-font'>预约工长</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>监理管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/supervisor/index");?>'>
						  	<i class='icon-font'>监理列表</i>
				  		</a>
				  		<a href='<?php echo U("admin/supervisor/add");?>'>
						  	<i class='icon-font'>添加监理</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>认证管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/examine/index");?>'>
						  	<i class='icon-font'>认证管理</i>
				  		</a>
				  		<a href='<?php echo U("admin/examine/staindex");?>'>
						  	<i class='icon-font'>审核认证</i>
				  		</a>
				  	</ul>
				</li>
			</ul>
			<ul class="side-menu">
				<li class='menu-header'>商家</li>
			  	<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>装修公司</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/company/index");?>'>
						  	<i class='icon-font'>装修公司</i>
				  		</a>
				  		<a href='<?php echo U("admin/company/staindex");?>'>
						  	<i class='icon-font'>待审公司</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>商家管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/business/index");?>'>
						  	<i class='icon-font'>商家管理</i>
				  		</a>
				  		<a href='<?php echo U("admin/cate/index");?>'>
						  	<i class='icon-font'>分类管理</i>
				  		</a>
				  		<a href=''>
						  	<i class='icon-font'>属性管理</i>
				  		</a>

				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>订单管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href=''>
						  	<i class='icon-font'>订单管理</i>
				  		</a>
				  		<a href=''>
						  	<i class='icon-font'>预约管理</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>商家结算</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href=''>
						  	<i class='icon-font'>商家余额</i>
				  		</a>
				  		<a href=''>
						  	<i class='icon-font'>收支日志</i>
				  		</a>
				  	</ul>
				</li>
			</ul>
			<ul class="side-menu">
				<li class='menu-header'>模块</li>
			  	<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>装修招标</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/process/index");?>'>
						  	<i class='icon-font'>装修进程</i>
				  		</a>
						<a href='<?php echo U("admin/tender/small");?>'>
						  	<i class='icon-font'>意向业主</i>
				  		</a>
						<a href='<?php echo U("admin/tender/index");?>'>
						  	<i class='icon-font'>招标管理</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>装修保</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/insurance/index");?>'>
						  	<i class='icon-font'>装修保管理</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>整体装</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/renovation/index");?>'>
						  	<i class='icon-font'>整体装套餐</i>
				  		</a>
				  		<a href=''>
						  	<i class='icon-font'>预约管理</i>
				  		</a>
				  		<a href='<?php echo U("admin/material/index");?>'>
						  	<i class='icon-font'>主材管理</i>
				  		</a>

				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>装修案例</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/case/index");?>'>
						  	<i class='icon-font'>案例管理</i>
				  		</a>
				  	</ul>
				</li>
			</ul>
			<ul class="side-menu">
				<li class='menu-header'>运营</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>广告管理</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/advert/index");?>'>
						  	<i class='icon-font'>广告列表</i>
				  		</a>
				  		<a href='<?php echo U("admin/advert/index");?>'>
						  	<i class='icon-font'>轮播图</i>
				  		</a>
				  	</ul>
				</li>
			  	<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>关于我们</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/aboutus/index");?>'>
						  	<i class='icon-font'>内容列表</i>
				  		</a>
				  	</ul>
				</li>
				<li>
				  	<a>
					  	<i style="color:black" class='icon-font'>友情链接</i>
					  	<i class='icon-font icon-right'>&#xe60b;</i>
				  	</a>
					<ul class='menu-item-child'>
						<a href='<?php echo U("admin/friendlink/index");?>'>
						  	<i class='icon-font'>友情链接列表</i>
				  		</a>
				  		<a href='<?php echo U("admin/friendlink/add");?>'>
						  	<i class='icon-font'>添加友情链接</i>
				  		</a>
				  	</ul>
				</li>
			</ul>
		</aside>
		
		<div class="layout-side-arrow"><div class="layout-side-arrow-icon"><i class="icon-font">&#xe60d;</i></div></div>
		
		<section class="layout-main">
			<div class="layout-main-tab">
				
            
                
			</div>
			<div class="layout-main-body">
				<iframe class="body-iframe" name="iframe0" width="100%" height="99%" src="" frameborder="0" data-id="home.html" seamless></iframe>
			</div>
		</section>
		<div class="layout-footer"></div>
	</div>
	<script type="text/javascript" src="/Public/common/lib/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/common/js/sccl.js"></script>
	<script type="text/javascript" src="/Public/common/js/sccl-util.js"></script>
  </body>
</html>