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
        		<li class="with-sub-nav fst-li" id="nav_wawj">
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
        		</li>
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
        		<li class="with-sub-nav fst-li" id="nav_yhhd">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">优惠活动</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">优惠券</a></li>
        				</ul>
        			</div>
        		</li>
        		<li class="fst-li" id="nav_ztz">
        			<div class="ln-layer">
        				<a href="#" id="nav_home" class="fst-ln">整体装</a>
        			</div>
        		</li>
        		<li class="with-sub-nav fst-li" id="nav_jjsc">
        			<div class="ln-layer">
        				<a href="#" class="fst-ln">家居商城</a>
        				<i></i>
        				<ul class="snd-ul">
        					<li><a href="#">商城主页</a></li>
        					<li><a href="#">商城列表</a></li>
        				</ul>
        			</div>
        		</li>
        	</ul>
    	</div>
    </div>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>设计师详情</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/company_details.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="nav-wrap">
		<div class="crumbs_nav">
			<a href="index.html" title="恋家网">恋家网</a>
			<span class="sep">></span>
			<a href="#" title="装修设计">装修设计</a>
			<span class="sep">></span>
			<a href="#" title="杭州装修">杭州装修</a>
			<span class="sep">></span>
			<a href="#" title="杭州装修公司">杭州装修公司</a>
			<span class="sep">></span>
			<span title="至美焕新">至美焕新</span>
			<span class="sep">></span>
			<span title="设计师详情" class="curPage">设计师详情</span>
		</div>
    </div>
    <div class="zxPany-wrap">
		<div class="zxPany-txtWrap">
			<div class="txt-title">
				<ul class="clearfix">
					<li class="info clearfix">
						<div class="pic"><img src="/Public/images/designer1.jpg"></div>
						<div class="des">
							<h3 id="designer_name">陈玲</h3>
							<div class="item-des clearfix">
								<span class="i-title">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位：</span>
								<div class="i-txt i-dTxt"></div>
							</div>
							<div class="item-des clearfix">
								<span class="i-title">擅长类型：</span>
								<div class="i-txt">欧式</div>
							</div>
							<div class="item-des clearfix">
								<span class="i-title">简&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;介：</span>
								<div class="i-txt">
									<span class="s-con">设计是千变万化的，但是每个人的选择是不一样的，所以以我的专业给你最合适的答复</span>
								</div>
							</div>
						</div>
					</li>
					<li class="apply">
						<div class="t-apply">
							<div class="list">
								<p class="num">1</p>
								<p class="name">已开工工地</p>
								<span class="s-1"></span>
							</div>
							<div class="list">
								<p class="num">1</p>
								<p class="name">提供案例数</p>
								<span class="s-1"></span>
							</div>
							<div class="list">
								<p class="num">0</p>
								<p class="name">业主点评数</p>
							</div>
						</div>
						<div class="m-btn">
							<a href="javascript:;" class="company-appBtn popup_order_button">预约设计师</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="zxPany-contain">
			<div class="zxPany-list zxPany-case">
				<div class="title clearfix">
					<h5>设计案例<span class="num">（1）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="case-list">
					<ul class="clearfix">
						<li class="list">
			                <a href="#" target="_blank">
			                    <div class="pic"><img src="/Public/images/al.jpg" height="183" width="275" class="trans"></div>
			                    <div class="txt">
			                        <p class="m-t" title="凤城花苑146平">凤城花苑146平</p>
			                        <p class="s-t">
			                        	<span>四居室</span>
			                        	<i>|</i>
			                        	<span>140平米以上</span>
			                        	<i>|</i>
			                        	<span>面议</span>
			                        	<i>|</i>
			                        	<span>欧式</span>
			                        </p>
			                    </div>
			                </a>
			            </li>
					</ul>
				</div>
			</div>
			<div class="zxPany-list zxPany-place">
				<div class="title clearfix">
					<h5>装修工地<span class="num">（0）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="place-info"></div>
			</div>
			<div class="zxPany-list zxPany-infoBack">
				<div class="title clearfix">
					<h5>业主点评<span class="num">（0）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="comment-con"></div>
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
    <script type="text/javascript" src="/Public/js/common.js"></script>
    <script type="text/javascript" src="/Public/js/company_details.js"></script>
</body>
</html>