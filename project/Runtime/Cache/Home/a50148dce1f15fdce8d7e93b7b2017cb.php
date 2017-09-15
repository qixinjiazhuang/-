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
                            <option value="1">装修公司</option>
                            <option value="2">工人</option>
                            <option value="3">工长</option>
                            <option value="4">设计师</option>
                            <option value="5">监理</option>
                            <option value="6">案例</option>
                        </select><span><em></em></span>
                    </div>
                        <label class="search-con">
                            <input type="text" class="searchInput" autocomplete="off" name="keywords">
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
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>装修公司详情</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/css/company_details.css">
<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>

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
			<span title="至美焕新" class="curPage"><?php echo ($res["c_name"]); ?></span>
		</div>
    </div>
    <div class="zxPany-wrap">
		<div class="zxPany-txtWrap">
			<div class="txt-title">
				<ul class="clearfix">
					<li class="info clearfix">
						<div class="pic"><img src="/Uploads<?php echo ($res["banner"]); ?>"></div>
						<div class="des">
							<h3>
								<span id="shop_name_val"><?php echo ($res["c_name"]); ?></span>
								<!-- <span class="icon">
									<i class="z-i" title="恋家认证商家"></i>
									<i class="b-i" title="恋家宝服务"></i>
								</span> -->
							</h3>
							<div class="item-des clearfix">
								<span class="i-title">服务区域：</span>
								<div class="i-txt i-dTxt">拱墅、上城、下城、江干、滨江、西湖、新余杭</div>
							</div>
							<div class="item-des clearfix">
								<span class="i-title">擅长类型：</span>
								<div class="i-txt">局装、三房、二手房</div>
							</div>
							<div class="item-des clearfix">
								<span class="i-title">公司简介：</span>
								<div class="i-txt">
									<span class="s-con"><?php echo ($res["introduce"]); ?></span>
									<span class="zx-expand zx-expandMore" style="display: inline;">
										更多<i class="arrow s-more"></i>
									</span>
									<span class="zx-expand zx-expandLess" style="display: none;">
										收起<i class="arrow c-more"></i>
									</span>
									<a href="javascript:;" id="h-book">查看店铺资质 ></a>
								</div>
								<textarea class="txt-con hide">
									<?php echo ($res["introduce"]); ?>
								</textarea>
							</div>
						</div>
					</li>
					<li class="apply">
						<div class="t-apply">
							<div class="list">
								<p class="num"><?php echo ($vcompany["m_value"]); ?></p>
								<p class="name">口碑值</p>
								<span class="s-1"></span>
							</div>
							<!-- <div class="list">
								<p class="num">暂无评论</p>
								<p class="name">好评率</p>
								<span class="s-1"></span>
							</div> -->
							<!-- <div class="list">
								<p class="num">407</p>
								<p class="name">以服务业主</p>
							</div>
 -->						</div>
						<div class="m-btn">
							<a href="javascript:;" class="company-appBtn popup_order_button" id="fast_apply">免费设计与报价</a>
						</div>
						<a href="javascript:;" class="app-tel">
							<i></i>
							预约热线
							<span>400-</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="zxPany-contain">
			<div class="comFix-nav-wrap">
				<div class="comFix-nav">
					<div class="navCon-rel">
						<div class="nav-a clearfix">
							<a href="#" class="active">首页</a>
							<a href="#">设计案例</a>
							<a href="#">装修工地</a>
							<!-- <a href="#">促销活动</a> -->
							<!-- <a href="#">业主评论</a> -->
							<a href="#">设计团队</a>
							<a href="#">工长团队</a>
						</div>
					</div>
				</div>
			</div>
			<div class="zxPany-list zxPany-ser">
				<ul class="clearfix">
					<li class="ser-l fl">
						<div class="title clearfix">
							<h5>
								最新申请设计服务
								<a href="javascript:;" class="apply-pop popup_order_button" id="new_design_service_apply">我要申请</a>
							</h5>
						</div>
						<dl>
							<dt>
								<span class="item">业主</span>
								<span class="item">区域</span>
								<span class="item">户型</span>
								<span class="item">面积</span>
								<span class="item">预算</span>
							</dt>
							<dd>
								<span class="item">曾令梅</span>
								<span class="item">润达花园</span>
								<span class="item">三房</span>
								<span class="item">127m²</span>
								<span class="item">10-12万</span>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
			<div class="zxPany-list zxPany-case">
				<div class="title clearfix">
					<h5>设计案例<span class="num">（<?php echo ($case_count); ?>）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="case-list">
					<ul class="clearfix">
					<?php if(is_array($case)): foreach($case as $key=>$val): ?><li class="list">
			                <a href="#" target="_blank">
			                    <div class="pic"><img src="/Uploads<?php echo ($val["logo"]); ?>" height="183" width="275" class="trans"></div>
			                    <div class="txt">
			                        <p class="m-t" title="<?php echo ($val["title"]); ?>"><?php echo ($val["title"]); ?></p>
			                        <p class="s-t">
			                        	<span><?=$type[$val['type']]?></span>
			                        	<!-- <i>|</i>
			                        	<span>130平米</span>
			                        	<i>|</i>
			                        	<span>欧式</span> -->
			                        </p>
			                    </div>
			                </a>
			            </li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			<div class="zxPany-list zxPany-person">
				<div class="title clearfix">
					<h5>设计团队<span class="num">（<?php echo ($des_count); ?>）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="person-info">
					<ul class="clearfix">
					<?php if(is_array($designer)): foreach($designer as $key=>$des): ?><li class="list">
							<a href="#">
								<img src="/Uploads<?php echo ($des["photo"]); ?>" width="120" height="120">
								<p class="name"><?php echo ($des["truename"]); ?></p>
								<p class="position">主任设计师</p>
							</a>
						</li><?php endforeach; endif; ?>	
					</ul>
				</div>
			</div>
			<div class="zxPany-list zxPany-person">
				<div class="title clearfix">
					<h5>工长团队<span class="num">（<?php echo ($for_count); ?>）</span></h5>
					<a href="#" class="m-l">更多></a>
				</div>
				<div class="person-info">
					<ul class="clearfix">
						<?php if(is_array($foreman)): foreach($foreman as $key=>$f): ?><li class="list">
							<a href="#">
								<img src="/Uploads<?php echo ($f["photo"]); ?>" width="120" height="120">
								<p class="name"><?php echo ($f["truename"]); ?></p>
								<p class="position"></p>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			<div class="zxPany-list zxPany-case zxPany-c" style="display: none;">
				<div class="case-list">
					<ul class="clearfix">
						<li class="list">
							<a href="#" target="_blank">
								<div class="pic">
									<img src="/Public/images/case6.jpg" width="275" height="183" class="trans">
								</div>
								<div class="txt">
									<p class="m-t" title="美式工业">美式工业</p>
									<p class="s-t"></p>
								</div>
							</a>
						</li>
						<li class="list">
							<a href="#" target="_blank">
								<div class="pic">
									<img src="/Public/images/case6.jpg" width="275" height="183" class="trans">
								</div>
								<div class="txt">
									<p class="m-t" title="美式工业">美式工业</p>
									<p class="s-t"></p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="zxPany-list zxPany-place zxPany-placePage" style="display: none;">
				<div class="place-info">
					<dl class="info-list">
						<dt><a href="#"><img src="/Public/images/zxgd.jpg" width="210" height="165" class="trans"></a></dt>
						<dd>
							<p class="name"><a href="#">袁先生/女士家的工地直播</a></p>
							<p class="txt">
								<span>类型：新房装修</span>
								<span>方式：全包</span>
								<span>户型：一房</span>
								<span>风格：简约</span>
								<span>造价：97000元</span>
							</p>
							<div class="proccess">
								<ul class="clearfix">
									<li class="pred"><i></i><span>准备开工</span></li>
									<li><i></i><span>水电阶段</span></li>
									<li><i></i><span>泥木阶段</span></li>
									<li><i></i><span>油漆阶段</span></li>
									<li><i></i><span>竣工阶段</span></li>
								</ul>
							</div>
							<div class="btm-txt clearfix">
								<p class="w-txt fl"><span>（监理）发布新动态：</span>开门大吉</p>
								<div class="t-txt fr">
									<span class="p-num">8</span>
									<span class="p-c">3</span>
									<span class="p-t">2017年07月30日</span>
								</div>
							</div>
							<a href="#" class="place-link">查看工地</a>
						</dd>
					</dl>
				</div>
			</div>
			<div class="desInfo-con" style="display: none;">
				<div class="con-list">
					<ul class="clearfix">
						<li class="con-left">
							<div class="person-info">
								<a href="#" class="photo"><img src="/Public/images/designer1.jpg" width="100" height="100"></a>
								<div class="name-txt">
									<p class="name">陈玲</p>
									<p class="pos">青年设计师</p>
									<a href="#" class="des-designer">了解详情 ></a>
								</div>
								<div class="skill">擅长：美式、欧式</div>
							</div>
							<div class="skill-des">
								<div class="year-txt">
									<span class="t-s">5年</span>
									<span>从业年限</span>
								</div>
								<div class="case-txt">
									<span class="t-s">0套</span>
									<span>案例个数</span>
								</div>
							</div>
						</li>
						<li class="con-right">
							<div class="img-wrap">
								<div class="img-list">
									<a href="#">
										<img src="/Public/images/zxgs.jpg" title="欧式风格">
										<span class="p-bg"></span>
										<p>欧式风格</p>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="gzTeam-wrap" style="display: none;">
				<ul class="clearfix">
					<li class="team-list">
						<div class="pic"><img src="/Public/images/gz.jpg"></div>
						<p class="name">yuanfeng</p>
						<div class="exp-info clearfix">
							<div class="year-des">
								<span class="y-s">15年</span>
								<span class="y-t">从业年限</span>
							</div>
							<div class="info-sep"></div>
							<div class="gd-des">
								<span class="y-s">0个</span>
								<span class="y-t">工地个数</span>
							</div>
						</div>
						<a href="#">了解详情</a>
					</li>
				</ul>
			</div>
			<div class="p_pageNav p_ListpageNav" style="display: none;">
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