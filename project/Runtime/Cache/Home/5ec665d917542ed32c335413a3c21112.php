<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/a.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/list.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.bxslider_e88acd1b.js"></script>
</head>
<body>
	<div class="top_nav">
    <div class="wrap clearfix">
        <div class="lt">
            <i></i>
            <span class="cities_list">
				<em id="J_region">杭州</em>
				[
				<a href="javascript:;">更换</a>
				]
            </span>
        </div>
        <div class="rt">
        	<div class="entry">
                <?php if(session('home_user')): ?><a target="_blank" href="<?php echo U('/home/login/index');?>"><?=session('home_user')['name']?></a>
                <a target="_blank" href="<?php echo U('/home/login/logout');?>">退出</a>
                <?php else: ?>
                <a target="_blank" href="<?php echo U('/home/login/index');?>">登录</a>
                <a target="_blank" href="<?php echo U('/home/register/index');?>">注册</a><?php endif; ?>
            </div>
        	<ul>
				<li class="myorder">
					<a href="javascript:;" target="_blank" class="menu_hd">
						我的恋家
						<b></b>
					</a>
					<div class="menu_bd hide">
						<a href="#">我的订单</a>
						<a href="#">我的资料</a>
					</div>
				</li>
				<li class="myorder">
					<a href="javascript:;" target="_blank" class="menu_hd">
						恋家钱包
						<b></b>
					</a>
					<div class="menu_bd hide">
						<a href="#">装修贷款</a>
					</div>
				</li>
				<li class="myorder">
					<a href="javascript:;" target="_blank" class="menu_hd">
						商户中心
						<b></b>
					</a>
					<div class="menu_bd hide">
						<a href="#">商户入驻</a>
						<a href="#">装修合伙人</a>
					</div>
				</li>
				<li class="mall_tel">
					<strong>400-880-2600</strong>
				</li>
        	</ul>
        </div>
    </div>
	</div>
	<div class="header">
    	<div class="header-main clearfix">
    		<div class="logo fl"><a href="#"><img src=""></a></div>
            <div class="fl">
                <a href="#" target="_top"><img src="/Public/images/logo.gif" alt="恋家网首页"></a>
            </div>
	        <div class="main-r clearfix">
				<div class="search-box fl clearfix">
					<form action="" class="search-form fl clearfix" method="get" name="form_search">
						<div class="search-item">
							<span>商品<em></em></span>
							<ul>
								<li><a href="javascript:;">店铺</a></li>
								<li><a href="javascript:;">图库</a></li>
								<li><a href="javascript:;">装修公司</a></li>
								<li><a href="javascript:;">论坛</a></li>                          
								<li><a href="javascript:;">资讯</a></li>
							</ul>
						</div>
						<label class="search-con">
							<input type="text" class="searchInput" autocomplete="off" name="keyword">
							<input type="submit" value="提交" class="searchBtn" onclick="TJJ.track({track:'headsearch',id: '168',name:'顶部搜索'})">
                            <ul class="Jia-search-refer">
                            </ul>
						</label>
					</form>
				</div>
	        </div>
    	</div>
    	<div class="header-bottom">
			<ul class="clearfix fst-ul">
        		<li class="fst-li current-nav">
        			<div class="ln-layer">
        				<a href="/home/index" id="nav_home" class="fst-ln">首页</a>
        			</div>
        		</li>
        		<li class="fst-li" id="nav_wyzx">
        			<div class="ln-layer">
        				<a href="#" id="nav_home" class="fst-ln">我要装修</a>
        			</div>
        		</li>	        		
        		<li class="with-sub-nav fst-li" id="nav_zzx">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">找装修</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">一站式整装</a></li>
        					<li><a href="/home/company/index">找装修公司</a></li>
        					<li><a href="#">找工人</a></li>
        					<li><a href="/home/designer/index">找设计师</a></li>
        					<li><a href="#">找监理</a></li>
        					<li><a href="#">优惠信息</a></li>
        				</ul>
        			</div>
        		</li>	        		
        		<!-- <li class="with-sub-nav fst-li" id="nav_wawj">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">我爱我家</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">小区楼盘</a></li>
        					<li><a href="#">楼盘地图</a></li>
        					<li><a href="#">在建工地</a></li>
        					<li><a href="#">团装小区</a></li>        			
        				</ul>
        			</div>
        		</li> -->
        		<li class="fst-li" id="zxsl">
        			<div class="ln-layer">
        				<a href="/home/case/index" id="nav_home" class="fst-ln">装修案例</a>
        			</div>
        		</li>
        		<li class="with-sub-nav fst-li" id="nav_xzx">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">学装修</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">装修日记</a></li>
        					<li><a href="#">知识问答</a></li>
        					<li><a href="#">装修课堂</a></li>
        				</ul>
        			</div>
        		</li>
        		<<!-- li class="with-sub-nav fst-li" id="nav_yhhd">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">优惠活动</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">优惠券</a></li>
        				</ul>
        			</div>
        		</li> -->
        		<li class="fst-li" id="nav_ztz">
        			<div class="ln-layer">
        				<a href="#" id="nav_home" class="fst-ln">整体装</a>
        			</div>
        		</li>
        		<!-- <li class="with-sub-nav fst-li" id="nav_jjsc">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">家居商城</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">商城主页</a></li>
        					<li><a href="#">商城列表</a></li>
        				</ul>
        			</div>
        		</li> -->
        	</ul>
    	</div>
    </div>
<title>修改资料</title>
<link rel="stylesheet" type="text/css" href="/Public/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" type="text/css" href="/Public/css/member.css">
	<div class="memberwrap">
		<div class="head">
			<h1 class="logo">管理中心</h1>
			<div class="nav">
				<ul class="lt">
					<li><a href="javascript:;" class="on">个人中心</a></li>
				</ul>
			</div>
		</div>
		<div class="content clearfix">
			<div class="cont_lt lt" id="ucenter_left_lay">
				<ul class="menu_lay">
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>账户管理</span>
						<ol class="sub_menu">
							<li><a href="/home/member/index">个人中心</a></li>
							<li><a href="javascript:;" class="on">修改资料</a></li>
						</ol>
					</li>
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>内容管理</span>
						<ol class="sub_menu">
							<li><a href="/home/substance/index">我的装修</a></li>
							<li><a href="/home/substance/myzxb">我的装修保</a></li>
						</ol>
					</li>
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>我的订单</span>
						<ol class="sub_menu">
							<li><a href="/home/order/index">我的招标</a></li>
							<li><a href="/home/order/company">我的预约</a></li>
						</ol>
					</li>
				</ul>
			</div>
			<div class="cont_rt rt">
				<div style="width:997px;margin:0 auto;" class="clearfix">
					<div class="ucenter_t">
						<ul>
							<li class="on"><a>基本信息</a></li>
							<li><a href="/home/member/passwd">修改密码</a></li>
							<li><a href="/home/member/mail">更换邮箱</a></li>
							<li><a href="/home/member/face">修改头像</a></li>
						</ul>
					</div>
					<div class="ucenter_c">
						<form>
							<table cellspacing="0" cellpadding="0" class="form">
								<tbody>
									<tr>
										<th>用户名：</th>
										<td><b class="blue">王者123</b></td>
									</tr>
									<tr>
										<th>邮箱：</th>
										<td>a134@sina.com<span style="margin-left: 20px;"><b class="blue">已验证</b></span></td>
									</tr>
									<tr>
										<th>手机：</th>
										<td><input type="text" name="phone" class="input"></td>
									</tr>
									<tr>
										<th>类型：</th>
										<td>
											<select name="mtype" class="select w-150">
												<option value="member" selected="selected">业主</option>
												<option value="company">公司</option>
												<option value="designer">设计师</option>
												<option value="shop">商家</option>
												<option value="mechanic">技工</option>
												<option value="gz">工长</option>
											</select>
										</td>
									</tr>
									<tr>
										<th>真实姓名：</th>
										<td><input type="text" name="realname" class="input" value="王者123"></td>
									</tr>
									<tr>
										<th>生日：</th>
										<td id="datepicker"><input type="text" name="birthday" class="input-sm form-control input"></td>
									</tr>
									<tr>
										<th>城市：</th>
										<td>
											<div class="address-li pos">
												<div><span class="location" name="province2" id="province2">省</span><i></i></div>
												<div class="select-item">
													<select id="province" data-role="none" class="pro" name="province" onchange="">
														<option>北京</option>
														<option>上海</option>
														<option>天津</option>
														<option>重庆</option>
														<option>安徽</option>
														<option>福建</option>
														<option>甘肃</option>
														<option>广东</option>
														<option>广西</option>
														<option>贵州</option>
														<option>海南</option>
														<option>河北</option>
														<option>河南</option>
														<option>黑龙江</option>
														<option>湖北</option>
														<option>湖南</option>
														<option>吉林</option>
														<option>江苏</option>
														<option>江西</option>
														<option>辽宁</option>
														<option>内蒙古</option>
														<option>宁夏</option>
														<option>青海</option>
														<option>山东</option>
														<option>山西</option>
														<option>陕西</option>
														<option>四川</option>
														<option>西藏</option>
														<option>新疆</option>
														<option>云南</option>
														<option>浙江</option>
														<option>香港</option>
														<option>澳门</option>
														<option>台湾</option>
													</select>
												</div>
											</div>
											<div class="address-li pos">
												<div><span class="location" name="city2" id="city2">市</span><i></i></div>
												<div class="select-item">
													<select id="city" data-role="none" class="city" name="city" onchange="">
														<option id="sel-pro">--请选择城市--</option>
													</select>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="/Public/js/common.js"></script>
	<script type="text/javascript" src="/Public/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/Public/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
	<script>
		$("#datepicker input").datepicker({
			language: 'zh-CN',
			autoclose: true,
			todayHighlight: true
		});
	</script>
	<script>
		$(".address-li select").change(function(){
			var val = $(this).val();
			$(this).parent().parent().find(".location").text(val);
			$(".address-li #city #sel-pro").remove();
		})
	</script>
</body>
</html>