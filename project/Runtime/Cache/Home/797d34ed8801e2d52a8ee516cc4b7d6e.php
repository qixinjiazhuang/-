<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>整体装详情页</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/ztz.css">
	<link rel="stylesheet" type="text/css" href="/Public/plugins/swiper/swiper-3.4.2.min.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<!DOCTYPE html>
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
                <?php if(session('home_user')): ?><a href="/home/member/index">欢迎您,<if condition="session('home_user').name">
                <?=session('home_user')['name']?>
                </a>&nbsp;&nbsp;<a href="/home/Login/logout" style="color:#d00;" id="logout">退出登录</a>
                <?php else: ?>
                <a href="<?php echo U('/home/login/index');?>">登录</a>
                <a href="<?php echo U('/home/register/index');?>">注册</a><?php endif; ?>
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
                    <form action="" class="search-form fl clearfix" method="get" name="form_search">
                        <div class="search-item">
                            <span>商品<em></em></span>
                            <ul>
                                <li class="on"><a href="javascript:;">商品</a></li>
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
		<div class="top_banner2">
			<div class="nr">
				<div class="price">
					<div class="left">688</div>
					<div class="right">
						<p>元/m<i>2</i></p>
						欧式美家
					</div>
				</div>
				<p class="free">
					<span>包设计</span>
					|
					<span>包主材</span>
					|
					<span>包辅料</span>
					|
					<span>包配料</span>
					|
					<span>包施工</span>
					|
					<span>包监理</span>
				</p>
			</div>
			<a href="javascript:;" class="btn btn_main_sm">立即申请</a>
		</div>
		<div class="bottom_border">
			<div class="mainwd liuchengImg"></div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="mainwd installTitle">
					<p class="title-c">一流设计，实景体验</p>
					<p class="title-e">Class design, real experience</p>
				</div>
				<div class="eight-room-pic swiper-container" id="swiper1">
					<div class="left-part" style="width: 229.5px;">&nbsp;</div>
					<div class="right-part" style="width: 229.5px;">&nbsp;</div>
					<ul class="swiper-wrapper">
						<li class="swiper-slide" style="width: 890px;"><img width="890" height="470" src="/Public/pic/ztz_d1.jpg"></li>
						<li class="swiper-slide" style="width: 890px;"><img width="890" height="470" src="/Public/pic/ztz_d2.jpg"></li>
						<li class="swiper-slide" style="width: 890px;"><img width="890" height="470" src="/Public/pic/ztz_d3.jpg"></li>
					</ul>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
					<div class="eight-room-nav swiper-pagination"></div>
				</div>
				<div class="eight-room-con">
					<table width="100%">
						<thead>
							<tr>
								<th width="10%">包含项目</th>
								<th width="30%">品牌</th>
								<th width="10%">数量</th>
								<th width="50%">详细说明</th>
							</tr>
						</thead>
						<tbody>
							<tr></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="mainwd installTitle">
					<p class="title-c">一线主材，源头直供</p>
					<p class="title-e">Line the main material, direct supply source</p>
				</div>
				<div class="eight-pro-nav">
					<ul>
						<li>
							<i class="ico_1"></i>
							<div class="eight-pro-hover eight-pro-clicked">瓷砖</div>
						</li>
						<li>
							<i class="ico_2"></i>
							<div class="eight-pro-hover">橱柜</div>
						</li>
						<li>
							<i class="ico_3"></i>
							<div class="eight-pro-hover">内门</div>
						</li>
					</ul>
				</div>
				<div class="eight-pro-con">
					<ul>
						<li style="display: block">
							<div class="eight-pro-tab-con">
								<div class="eight-pro-tab">
									<img src="/Public/pic/ztz_x1.jpg">
									<div class="eight-pro-con-right">
										<dl>
											<dt>品牌：诺贝尔瓷砖</dt>
											<dd>
												<p class="pro-advantage">品牌力量</p>
												<p class="pro-advantage-con">
												用心体会有理想，有内涵，爱家爱生活的你。我们以实用简约的产品设计理念倡导轻松舒适的"简"生活哲学，只为满足敢于追求，热爱生活本质的你。我们坚持"简"的设计风格，以简约现代，适用实用的产品让你的生活更加简单，轻松尽享和家人团聚的时光；</p>
											</dd>
										</dl>
									</div>
								</div>
							</div>
						</li>
						<li style="display: none">
							<div class="eight-pro-tab-con">
								<div class="eight-pro-tab">
									<img src="/Public/pic/ztz_x1.jpg">
									<div class="eight-pro-con-right">
										<dl>
											<dt>品牌：欧泰卫浴</dt>
											<dd>
												<p class="pro-advantage">品牌力量</p>
												<p class="pro-advantage-con">
												用心体会有理想，有内涵，爱家爱生活的你。我们以实用简约的产品设计理念倡导轻松舒适的"简"生活哲学，只为满足敢于追求，热爱生活本质的你。我们坚持"简"的设计风格，以简约现代，适用实用的产品让你的生活更加简单，轻松尽享和家人团聚的时光；</p>
											</dd>
										</dl>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="mainwd installTitle">
					<p class="title-c">18项精装全包服务</p>
					<p class="title-e">18 hardcover turnkey services</p>
				</div>
				<div class="service-18">
					<ul class="service-con margin-left-230">
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu1.jpg">
							<div class="service-con-hover">
								<span class="service-no">01</span>
								免费设计、管理费
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu2.jpg">
							<div class="service-con-hover">
								<span class="service-no">02</span>
								水电改造工程
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu3.jpg">
							<div class="service-con-hover">
								<span class="service-no">03</span>
								基础施工
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu4.jpg">
							<div class="service-con-hover">
								<span class="service-no">04</span>
								木门不限樘数
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu5.jpg">
							<div class="service-con-hover">
								<span class="service-no">05</span>
								瓷砖不限面积
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu6.jpg">
							<div class="service-con-hover">
								<span class="service-no">06</span>
								卫浴五金四件套
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu7.jpg">
							<div class="service-con-hover">
								<span class="service-no">07</span>
								浴室柜、地柜、镜柜、石英石台面
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu8.jpg">
							<div class="service-con-hover">
								<span class="service-no">08</span>
								四维洁具
							</div>
						</li>
					</ul>
					<ul class="service-con">
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu9.jpg">
							<div class="service-con-hover">
								<span class="service-no">09</span>
								四维花洒、龙头
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu10.jpg">
							<div class="service-con-hover">
								<span class="service-no">10</span>
								厨房水槽、龙头
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu11.jpg">
							<div class="service-con-hover">
								<span class="service-no">11</span>
								多乐士乳胶漆
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu12.jpg">
							<div class="service-con-hover">
								<span class="service-no">12</span>
								西蒙开关、插座
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu13.jpg">
							<div class="service-con-hover">
								<span class="service-no">13</span>
								厨卫吊顶、不限面积
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu14.jpg">
							<div class="service-con-hover">
								<span class="service-no">14</span>
								内门锁具及五金
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu15.jpg">
							<div class="service-con-hover">
								<span class="service-no">15</span>
								卫生间灯具
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu16.jpg">
							<div class="service-con-hover">
								<span class="service-no">16</span>
								马可波罗瓷砖
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu17.jpg">
							<div class="service-con-hover">
								<span class="service-no">17</span>
								多层实木复合地板
							</div>
						</li>
						<li>
							<img width="230" height="180" src="/Public/pic/ztz_fuwu18.jpg">
							<div class="service-con-hover">
								<span class="service-no">18</span>
								窗台板不限区域面积
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="mainwd installTitle">
					<p class="title-c">18项精装全包服务</p>
					<p class="title-e">18 hardcover turnkey services</p>
				</div>
				<div class="technology-108-con">
					<div class="technology-108 swiper-container" id="technology-108-p1">
						<ul class="swiper-wrapper">
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_s1.jpg">
							</li>
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_s2.jpg">
							</li>
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_s3.jpg">
							</li>
						</ul>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					<div class="technology-108 swiper-container" id="technology-108-p2">
						<ul class="swiper-wrapper">
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_a1.jpg">
							</li>
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_a2.jpg">
							</li>
							<li class="swiper-slide">
								<img src="/Public/pic/ztz_a3.jpg">
							</li>
						</ul>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
				<div class="technology-108-nav">
					<img src="/Public/pic/te-nav.jpg" width="1180" height="72">
					<ul>
						<li style="left: 280px;top:-3px;" class="clicked">
							<img src="/Public/pic/te-nav1.jpg" width="94" height="104">
							<div class="hover">水路铺设</div>
						</li>
						<li style="left: 440px;top:5px;">
							<img src="/Public/pic/te-nav2.jpg" width="94" height="104">
							<div class="hover">电路铺设</div>
						</li>
						<li style="left: 605px;top:3px;">
							<img src="/Public/pic/te-nav3.jpg" width="94" height="104">
							<div class="hover">地砖铺贴</div>
						</li>
						<li style="left: 767px;top:-3px;">
							<img src="/Public/pic/te-nav4.jpg" width="94" height="104">
							<div class="hover">油漆涂刷</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="mainwd installTitle">
					<p class="title-c">5大费用全免</p>
					<p class="title-e">Free of charge</p>
				</div>
				<div class="free-5">
					<img src="/Public/pic/p5-pic.png" width="1180" height="564">
					<ul>
						<li>●  本方案以实测面积（现场量房从外墙线开始测算）为计价标准;</li>
						<li>●  实测面积小于90平方，按90平方计算，实测面积≥90平方，整装价格=×××元/平方米*实测面积;</li>
						<li>●  本方案标配1个卫生间，增加1个卫生间，增加6000元额外费用;</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_border">
			<div class="realTiyan">
				<div class="order-title">
					<span>688</span>元/m<i>2</i>
				</div>
				<ul class="order-text">
					<li>包设计</li>
					<li>包主材</li>
					<li>包辅料</li>
					<li>包配送</li>
					<li>包施工</li>
					<li>包监理</li>
				</ul>
				<div class="order-part">
					<a href="javascript:;" class="order-btn">立即预约</a>
					<p class="order-num">已有<span>2户</span>业主预约成功</p>
				</div>
			</div>
		</div>
		<div class="four_advantage">
			<div class="mainwd">
				<ul>
					<li>
						<i class="ico_1"></i>
						<div>
							<span>好设计</span>
							一流设计，实景体验
						</div>
					</li>
					<li>
						<i class="ico_2"></i>
						<div>
							<span>好材料</span>
							一线大牌，源头直供
						</div>
					</li>
					<li>
						<i class="ico_3"></i>
						<div>
							<span>好施工</span>
							标准工艺，严苛施工
						</div>
					</li>
					<li>
						<i class="ico_4"></i>
						<div>
							<span>好服务</span>
							装修管家，专业服务
						</div>
					</li>
				</ul>
			</div>
		</div>
	
	<script type="text/javascript" src="/Public/js/common.js"></script>
	<script type="text/javascript" src="/Public/plugins/swiper/swiper-3.4.2.min.js"></script>
	<script>
		window.onload = function(){
			var mySwiper1 = new Swiper('#swiper1',{
				loop: true,
				loopedSlides: 3,
				centeredSlides: true,
				slidesPerView: 'auto',
				pagination: '.swiper-pagination',
				paginationClickable: true,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationBulletRender: function (swiper, index, className) {
					switch (index){
						case 0 :
								index = '厨房';
								break;
						case 1 :
								index = '卫生间';
								break;
						case 2 :
								index = '卧室';
								break;
					}
			      return '<span class="' + className + '">'+index+'</span>';
			  }
			});
			var mySwiper2 = new Swiper('#technology-108-p1',{
				loop: true,
				loopedSlides: 3,
				centeredSlides: true,
				slidesPerView: 'auto',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev'
			});
			var mySwiper3 = new Swiper('#technology-108-p2',{
				loop: true,
				loopedSlides: 3,
				centeredSlides: true,
				slidesPerView: 'auto',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev'
			});
			$("#technology-108-p1").siblings().css({"display":"none"});
		}
	</script>
	<script>
		$(".eight-pro-nav li").hover(function(){
			$(this).children(".eight-pro-hover").addClass("eight-pro-clicked");
			$(this).siblings().children().removeClass("eight-pro-clicked");
			var index = $(this).index();
			$(".eight-pro-con ul li").eq(index).css("display","block").siblings().css("display","none");
		});
		$(".technology-108-nav ul li").hover(function(){
			$(this).addClass("clicked").siblings().removeClass("clicked");
			var index = $(this).index();
			$(".technology-108").eq(index).css("display","block");
			$(".technology-108").eq(index).siblings().css("display","none");
		});
	</script>
</body>
</html>