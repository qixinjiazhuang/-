<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>工长</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/list.css">
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
                            <option value="1" <?php if($type == 1){ echo 123 ?> selected="selected" <?php } ?> >装修公司</option>
                            <option value="2" <?php if($type == 2){ ?> selected="selected" <?php } ?> >工人</option>
                            <option value="3" <?php if($type == 3){ ?> selected="selected" <?php } ?> >工长</option>
                            <option value="4" <?php if($type == 4){ ?> selected="selected" <?php } ?> >设计师</option>
                            <option value="5" <?php if($type == 5){ ?> selected="selected" <?php } ?> >监理</option>
                            <option value="6" <?php if($type == 6){ ?> selected="selected" <?php } ?> >案例</option>
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
    <div class="designer-main clearfix">
	    <div class="content-left">
			<div class="combo-screen">
				<div class="scheme-store">
					<label>找工长</label>
					<em>></em>
					<a href="#">萧山区 ×</a>
				</div>
				<dl class="tag-list clearfix">
					<dt>区域</dt>
					<dd class="area-choice">
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">拱墅</a></li>
								<li><a href="#">上城</a></li>
								<li><a href="#">下城</a></li>
								<li><a href="#">江干</a></li>
								<li><a href="#">滨江</a></li>
								<li class="active"><a href="#">萧山</a></li>
								<li><a href="#">老余杭</a></li>
								<li><a href="#">富阳</a></li>
								<li><a href="#">桐庐</a></li>
								<li><a href="#">淳安</a></li>
								<li><a href="#">建德</a></li>
								<li><a href="#">临安</a></li>
								<li><a href="#">西湖</a></li>
								<li><a href="#">新余杭</a></li>
							</ul>
						</div>
					</dd>
					<dd class="more-shrink">
						<a href="javascript:;" class="more"><span>更多</span><em></em></a>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>等级</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">普通工长</a></li>
							</ul>
						</div>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>工龄</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">1-3</a></li>
								<li><a href="#">3-8</a></li>
								<li><a href="#">8年以上</a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<div class="designer-content">
				<ul class="designer-list">
					<?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="designer-item">
							<div class="ordinary clearfix">
								<a href="/home/foreman/detail?id=<?php echo ($v["id"]); ?>" target="_blank" class="pany-logo fl"><img src="/Uploads<?php echo ($v["photo"]); ?>" class="lazyload"></a>
								<div class="list-middle fl">
									<h2>
										<a href="/home/foreman/detail?id=<?php echo ($v["id"]); ?>" target="_blank" id="shop_name"><?php echo ($v["truename"]); ?></a>
										<div><span class="sift"></span><span class="auth"></span><span class="bao"></span></div>
									</h2>
									<p>案例数：<span class="anli"><?php echo ($v["count"]); ?>套</span></p>
									<p>工地：<span class="gd">0个</span></p>
									<p>服务理念：<span class="fwln"><?php echo ($v["idea"]); ?></span></p>
								</div>
								<div class="list-right fl">
									<a href="javascript:;" class="zx-btn order-btn popup_order_button">立即预约</a>
								</div>
							</div>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="p_pageNav p_ListpageNav">
				<div class="p_page_inline">
					<div class="p_page">
						<?php echo ($show); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-right">
			<div class="mb10 zbform">
				<h4>免费装修设计</h4>
				<form action="/home/index/add" method="post">
					<input type="text" name="truename" class="text full" placeholder="请输入您的姓名">
					<input type="text" name="phone" class="text full" placeholder="请输入您的手机号码">
					<div class="select clearfix">
						<div class="address-li">
							<div>
								<span class="location" name="province" id="province">省</span>
								<i></i>
							</div>
							<div class="select-item">
								<select class="form-control"  id="s_province" name="province"></select>
							</div>
						</div>
						<div class="address-li">
							<div>
								<span class="location" name="city" id="city">市</span>
								<i></i>
							</div>
							<div class="select-item">
								<select class="form-control"  id="s_city" name="city" ></select>
							</div>
						</div>
						<div class="address-li">
							<div>
								<span class="location" name="region" id="region">区</span>
								<i></i>
							</div>
							<div class="select-item">
								 <select class="form-control"  id="s_county" name="county"></select>
							</div>
							<script class="resources library" src="/Public/area.js" type="text/javascript"></script>
							<script type="text/javascript">_init_area();</script>
						</div>
					</div>
					<input type="submit" value="免费发布" class="btn btn_sub_apply">
				</form>
			</div>
			<div class="mb10 area">
				<h3 class="side_tit">工长排行</h3>
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
    
    <script type="text/javascript" src="/Public/js/common.js"></script>
    <script type="text/javascript" src="/Public/js/list.js"></script>
    <script>
    	$(".header-bottom .fst-ul .fst-li").removeClass("current-nav");
    	$("#nav_zzx").addClass("current-nav");
    </script>
</body>
</html>