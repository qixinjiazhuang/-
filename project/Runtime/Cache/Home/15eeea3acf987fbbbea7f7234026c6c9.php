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
                <em id="J_region"><if condition="session('city')">         
                    <?php echo session('city');?>
                </em>
                [
                <a href="/home/Area/index">更换</a>
                ]
            </span>
            <div class="region_box" style="display: none;">
                <ul class="region_list">
                    <li class="cn_mark region_on">热门城市</li>
                    <li>ABCDE</li>
                    <li>FGHJ</li>
                    <li>KLMNP</li>
                    <li>QRSTW</li>
                    <li>XYZ</li>
                </ul>
                <div class="region_con region_show">
                    <ul class="clearfix">
                        <li><a href="javascript:;">北京</a></li>
                        <li><a href="javascript:;">上海</a></li>
                        <li><a href="javascript:;">广州</a></li>
                        <li><a href="javascript:;">深圳</a></li>
                        <li><a href="javascript:;">成都</a></li>
                        <li><a href="javascript:;">重庆</a></li>
                        <li><a href="javascript:;">天津</a></li>
                        <li><a href="javascript:;">武汉</a></li>
                        <li><a href="javascript:;">杭州</a></li>
                    </ul>
                </div>
                <div class="region_con">
                    <ul class="clearfix">
                        <li><a href="javascript:;">安庆</a></li>
                        <li><a href="javascript:;">北京</a></li>
                        <li><a href="javascript:;">北海</a></li>
                        <li><a href="javascript:;">长沙</a></li>
                        <li><a href="javascript:;">成都</a></li>
                        <li class="city_more"><a href="javascript:;">更多></a></li>
                    </ul>
                </div>
                <div class="region_con">
                    <ul class="clearfix">
                        <li><a href="javascript:;">福州</a></li>
                        <li><a href="javascript:;">佛山</a></li>
                        <li><a href="javascript:;">阜阳</a></li>
                        <li><a href="javascript:;">广州</a></li>
                        <li><a href="javascript:;">贵阳</a></li>
                        <li class="city_more"><a href="javascript:;">更多></a></li>
                    </ul>
                </div>
                <div class="region_con">
                    <ul class="clearfix">
                        <li><a href="javascript:;">昆明</a></li>
                        <li><a href="javascript:;">廊坊</a></li>
                        <li><a href="javascript:;">连云港</a></li>
                        <li><a href="javascript:;">兰州</a></li>
                        <li><a href="javascript:;">绵阳</a></li>
                        <li class="city_more"><a href="javascript:;">更多></a></li>
                    </ul>
                </div>
                <div class="region_con">
                    <ul class="clearfix">
                        <li><a href="javascript:;">青岛</a></li>
                        <li><a href="javascript:;">上海</a></li>
                        <li><a href="javascript:;">绍兴</a></li>
                        <li><a href="javascript:;">苏州</a></li>
                        <li><a href="javascript:;">太原</a></li>
                        <li class="city_more"><a href="javascript:;">更多></a></li>
                    </ul>
                </div>
                <div class="region_con">
                    <ul class="clearfix">
                        <li><a href="javascript:;">西安</a></li>
                        <li><a href="javascript:;">徐州</a></li>
                        <li><a href="javascript:;">襄阳</a></li>
                        <li><a href="javascript:;">扬州</a></li>
                        <li><a href="javascript:;">郑州</a></li>
                        <li class="city_more"><a href="javascript:;">更多></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rt">
            <div class="entry">
                <?php if(session('home_user')){ ?>
                <a href="/home/member/index">欢迎您,<?php echo session('home_user')['name'];?>
                </a>&nbsp;&nbsp;<a href="/home/login/logout" style="color:#d00;" id="logout">退出登录</a>
                <?php }else{?>
                <a href="/home/login/index">登录</a>
                <a href="/home/register/index">注册</a>
                <?php } ?>
            </div>
            <ul>
                <li class="myorder">
                    <a href="javascript:;" target="_blank" class="menu_hd">
                        我的恋家
                        <b></b>
                    </a>
                    <div class="menu_bd hide">
                        <a href="#">我的订单</a>
                        <a href="/home/member/index">我的资料</a>
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
                    <form action="<?php echo U('/home/index/serch');?>" class="search-form fl clearfix" method="get" name="form_search">
                     <!--    <div class="search-item">
                            <span>装修公司<em></em></span>
                            <ul>

                                <li class="on"><a href="javascript:;">装修公司</a></li>
                                <li><a href="javascript:;">工人</a></li>
                                <li><a href="javascript:;">工长</a></li>
                                <li><a href="javascript:;">设计师</a></li>
                                <li><a href="javascript:;">监理</a></li>                          
                                <li><a href="javascript:;">案例</a></li>
                            </ul>
                        </div> -->
                    <div class="search-item"><em></em>

                        <select style="border:0;appearance:none;-moz-appearance:none; -webkit-appearance:none;background: transparent;-ms-expand { display: none; }" name="sel" id="">
                            <option value="1" <?php if(session('type') == 1){ echo 123 ?> selected="selected" <?php } ?> >装修公司</option>
                            <option value="2" <?php if(session('type') == 2){ ?> selected="selected" <?php } ?> >工人</option>
                            <option value="3" <?php if(session('type') == 3){ ?> selected="selected" <?php } ?> >工长</option>
                            <option value="4" <?php if(session('type') == 4){ ?> selected="selected" <?php } ?> >设计师</option>
                            <option value="5" <?php if(session('type') == 5){ ?> selected="selected" <?php } ?> >监理</option>
                            <option value="6" <?php if(session('type') == 6){ ?> selected="selected" <?php } ?> >案例</option>
                        </select><span><em></em></span>
                    </div>
                        <label class="search-con">
                            <input type="text" class="searchInput" autocomplete="off" name="keywords">
                            <input type="submit" value="提交"  class="searchBtn" onclick="TJJ.track({track:'headsearch',id: '168',name:'顶部搜索'})" required="required">
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
                        <a href="/home/Index/index" id="nav_home" class="fst-ln">首页</a>
                    </div>
                </li>
                <li class="fst-li" id="nav_wyzx">
                    <div class="ln-layer">
                        <a href="/home/tender/index" id="nav_home" class="fst-ln">我要装修</a>
                    </div>
                </li>                   
                <li class="with-sub-nav fst-li" id="nav_zzx">
                    <div class="ln-layer">
                        <a href="#" class="fst-ln">找装修</a>
                        <i></i>
                        <ul class="snd-ul">
                            <li><a href="/home/company/index">找装修公司</a></li>
                            <li><a href="/home/mechanic/index">找工人</a></li>
                            <li><a href="/home/foreman/index">找工长</a></li>
                            <li><a href="/home/designer/index">找设计师</a></li>
                            <li><a href="#">找监理</a></li>
                        <!--     <li><a href="#">优惠信息</a></li> -->
                        </ul>
                    </div>
                </li>                   
           <!--      <li class="with-sub-nav fst-li" id="nav_wawj">
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
              <!--   <li class="with-sub-nav fst-li" id="nav_xzx">
                    <div class="ln-layer">
                        <a href="#" class="fst-ln">学装修</a>
                        <i></i>
                        <ul class="snd-ul">
                            <li><a href="#">装修日记</a></li>
                            <li><a href="#">知识问答</a></li>
                            <li><a href="#">装修课堂</a></li>
                        </ul>
                    </div>
                </li> -->
             <!--    <li class="with-sub-nav fst-li" id="nav_yhhd">
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
                        <a href="<?php echo U('/home/ztz/index');?>" id="nav_home" class="fst-ln">整体装</a>
                    </div>
                </li>
             <!--    <li class="with-sub-nav fst-li" id="nav_jjsc">
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
<script type="text/javascript" src="/Public/jquery.cityselect.js"></script> 
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/member.css">
	<div class="memberwrap">
		<div class="head">
			<h1 class="logo">管理中心</h1>
			<div class="nav">
				<ul class="lt">
					<li><a href="/home/member/index" class="on">个人中心</a></li>
					<?php if(session('home_user')['type'] == 3){ ?>
					<li><a href="/home/member/designerIndex">设计师管理</a></li>
					 <?php } ?>
					 <?php if(session('home_user')['type'] == 5){ ?>
					<li><a href="/home/member/mechanicInfo">技工管理</a></li>
					<?php } ?>
					<?php if(session('home_user')['type'] == 2){ ?>
					<li><a href="/home/member/company-index">公司管理</a></li>
					<?php } ?>
					<?php if(session('home_user')['type'] == 6){ ?>
					<li><a href="/home/member/foreman-index">工长管理</a></li>
					<?php } ?>
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
							<li><a href="javascript:;" class="on">个人中心</a></li>
							<li><a href="/home/member/info">修改资料</a></li>
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
				<div style="width:973px;padding: 12px;margin:0 auto;" class="clearfix">
					<div class="index_rt_top">
						<a href="javascript:;" class="lt"><img src="/Uploads<?=session('home_type')['photo']?>" width="120" height="120"></a>
						<div class="shop_top_lt lt">
							<p class="title"><?php echo ($user["name"]); ?></p>
							<p>帐户类型：<?=$arr[$user['type']]?></p>
							<p>邮箱地址：<a href="/home/member/mail"><?php echo ($user["email"]); ?></a>[已认证]</p>
							<p>手机号码：<a href="/home/member/mobile"><?php echo ($user["phone"]); ?></a></p>
						</div>
						<div class="shop_top_rt personal_top_rt rt">
							<p>注册时间：<span><?=date('Y-m-d H:i:s',$user['regtime'])?></span></p>
							<p>最后登录：<span><?=date('Y-m-d H:i:s',$user['lastlogin'])?></span></p>
							<p>登录地点：<span>浙江杭州</span></p>
						</div>
					</div>
					<div class="index_cont_lt lt">
						<div class="index_c_lt">
							<p class="title"><font class="index_c_lt_icon2"></font>交易统计</p>
							<p class="txt">我的预约</p>
							<p class="txt">
								<a href="/home/order/company" class="green">预约公司(0)</a>
								<a href="/home/order/designer" class="green">预约设计师(0)</a>
								<a href="/home/order/mechanic" class="green">预约技工(0)</a>
								<a href="/home/order/gz" class="green">预约工长(0)</a>
								<a href="/home/order/shop" class="green">预约商铺(0)</a>
							</p>
							<!-- <p class="txt">我的订单</p>
							<p class="txt">
								<a href="javascript:;" class="green">新订单(0)</a>
								<a href="javascript:;" class="green">待收货(0)</a>
								<a href="javascript:;" class="green">待付款(0)</a>
							</p> -->
						</div>
						<!-- <div class="index_c_lt">
							<p class="title"><font class="index_c_lt_icon3"></font>财务信息</p>
							<p class="txt">我的金币余额：<font class="red">10</font></p>
							<p>
								<a href="javascript:;" class="green">在线充值</a>
								<a href="javascript:;" class="green">收支明细</a>
							</p>
						</div> -->
					</div>
					<div class="index_cont_rt rt">
						<div class="index_c_rt">
							<p class="title"><font class="index_c_rt_icon1"></font>公告</p>
							<p class="txt"></p>
						</div>
						<div class="index_c_rt">
							<p class="title"><font class="index_c_rt_icon2"></font>平台联系方式</p>
							<p class="txt">客服电话：<font>400-880-2600</font></p>
							<p>服务时间：9:00-18:00(周一至周日)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="/Public/js/common.js"></script>
</body>
</html>