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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>设计师列表页</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/list.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="designer-main clearfix">
	    <div class="content-left">
			<div class="combo-screen">
				<div class="scheme-store">
					<label>找设计师</label>
					<em>></em>
					<a href="#">中式 ×</a>
				</div>
				<dl class="tag-list clearfix">
					<dt>擅长类型</dt>
					<dd class="area-choice">
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">简约</a></li>
								<li><a href="#">现代</a></li>
								<li class="active"><a href="#">中式</a></li>
								<li><a href="#">欧式</a></li>
								<li><a href="#">美式</a></li>
								<li><a href="#">田园</a></li>
								<li><a href="#">地中海</a></li>
								<li><a href="#">新古典</a></li>
								<li><a href="#">混搭</a></li>
								<li><a href="#">东南亚</a></li>
								<li><a href="#">宜家</a></li>
								<li><a href="#">简欧</a></li>
								<li><a href="#">北欧</a></li>
								<li><a href="#">日式</a></li>
								<li><a href="#">韩式</a></li>
							</ul>
						</div>
					</dd>
					<dd class="more-shrink">
						<a href="javascript:;" class="more"><span>更多</span><em></em></a>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>从业年限</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">0-1年</a></li>
								<li><a href="#">1-3年</a></li>
								<li><a href="#">3-5年</a></li>
								<li><a href="#">5-8年</a></li>
								<li><a href="#">8年以上</a></li>
							</ul>
						</div>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>职位</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">见习设计师</a></li>
								<li><a href="#">实习设计师</a></li>
								<li><a href="#">设计助理</a></li>
								<li><a href="#">资深设计师</a></li>
								<li><a href="#">设计总监</a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<div class="designer-content">
				<ul class="designer-list">
					<?php if(is_array($res)): foreach($res as $key=>$v): ?><li class="designer-item">
						<div class="ordinary clearfix">
							<a href="/home/designer/detail" class="pany-logo fl"><img src="/Public/images/designer1.jpg" class="lazyload"></a>
							<div class="list-middle fl">
								<h2>
									<a href="/home/designer/detail?id=<?php echo ($v["id"]); ?>" target="_blank" id="shop_name"><?php echo ($v["truename"]); ?></a>
									<div><span class="sift"></span><span class="auth"></span><span class="bao"></span></div>
								</h2>
								<p>毕业院校：<span class="zw"><?php echo ($v["school"]); ?></span></p>
								<p>案 例 数：<span class="zw"></span></p>
								<p>擅长类型：<span class="sclx"></span></p>
								<p>设计理念：<span class="cynx"></span></p>
							</div>
							<div class="list-right fl">
								<div class="kbval">
									<span>口碑值</span>
									<b>622</b>
								</div>
								<a href="javascript:;" class="zx-btn order-btn popup_order_button">立即预约</a>
							</div>
						</div>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="p_pageNav p_ListpageNav">
				<div class="p_page_inline">
					<div class="p_page">
						<span class="none">< 上一页</span>
						<span class="cur">1</span>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="changedown">下一页</a>
					</div>
				</div>
			</div>
		</div>
		<div class="content-right">
			<div class="mb10 area">
				<h3 class="side_tit">设计师排行</h3>
				<ul class="pding paihang">
					<li>
                        <span class="lt"><font class="paihang_num ph_num_cl">1</font><a href="#">陈岭</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num ph_num_cl">2</font><a href="#">陆涛</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num ph_num_cl">3</font><a href="#">彭欢声</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num">4</font><a href="#">王春燕</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num">5</font><a href="#">张珂</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num">6</font><a href="#">苏新阳</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num">7</font><a href="#">冯宁</a></span>
                        <span class="rt">已投标：<font class="fontcl2">859</font></span>
                    </li>
                    <li>
                        <span class="lt"><font class="paihang_num">8</font><a href="#"></a></span>
                        <span class="rt">已投标：<font class="fontcl2">0</font></span>
                    </li>
				</ul>
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
    <script type="text/javascript" src="/Public/js/list.js"></script>
</body>
</html>