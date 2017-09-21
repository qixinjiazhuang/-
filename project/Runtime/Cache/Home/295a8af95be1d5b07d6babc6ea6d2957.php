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
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>装修公司列表页</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/css/list.css">
<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>

    <div class="company-main clearfix">
		<div class="content-left">
			<div class="combo-screen">
				<div class="scheme-store">
					<label>装修方案</label>
					<em>></em>
					<a href="#">大宅别墅 ×</a>
				</div>
				<dl class="tag-list clearfix">
					<dt>装修类型</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">新房</a></li>
								<li><a href="#">二手房</a></li>
								<li class="active"><a href="#">大宅别墅</a></li>
								<li><a href="#">局部软装</a></li>
								<li><a href="#">工装</a></li>
							</ul>
						</div>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>装修房型</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">一房</a></li>
								<li><a href="#">二房</a></li>
								<li class="active"><a href="#">三房</a></li>
								<li><a href="#">四房</a></li>
								<li><a href="#">复式</a></li>
								<li><a href="#">别墅</a></li>
							</ul>
						</div>
					</dd>
				</dl>
				<dl class="tag-list clearfix">
					<dt>服务保障</dt>
					<dd>
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">环保装修</a></li>
								<li><a href="#">恋家宝</a></li>
							</ul>
						</div>
					</dd>
				</dl>
				<!-- <dl class="tag-list clearfix">
					<dt>服务区域</dt>
					<dd class="area-choice">
						<div class="self-adaption">
							<ul class="clearfix">
								<li><a href="#">拱墅</a></li>
								<li><a href="#">上城</a></li>
								<li><a href="#">下城</a></li>
								<li><a href="#">江干</a></li>
								<li><a href="#">滨江</a></li>
								<li><a href="#">萧山</a></li>
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
				</dl> -->
			</div>
			<div class="company-sort">
				<label class="ago">排序：</label>
				<a href="#" class="br active">口碑值</a>
				<a href="#">好评数</a>
			</div>
			<?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="company-content">
				<ul class="company-list">
					<li class="company-item">
						<div class="ordinary clearfix">
							<a href="/home/company/detail?id=<?php echo ($v["id"]); ?>" class="pany-logo fl"><img src="/Uploads<?php echo ($v["banner"]); ?>" class="lazyload"></a>
							<div class="list-middle fl">
								<h2>
									<a href="/home/company/detail?id=<?php echo ($v["id"]); ?>" target="_blank" id="shop_name"><?php echo ($v["c_name"]); ?></a>
									<div><span class="sift"></span><span class="auth"></span><span class="bao"></span></div>
								</h2>
								<div class="comment">
									<ul class="clearfix"></ul>
									<span>暂无评论</span>
								</div>
								<div class="tag-count">
									<span><em class="al">案例</em>25套</span>
									<span><em class="gd">工地</em>23个</span>
									<span><em class="sgd">施工队</em>3队</span>
									<span><em class="sjs">设计师</em>18个</span>
								</div>
								<p class="favorable"><span class="hui">惠</span><?php echo ($v["introduce"]); ?></p>
							</div>
							<div class="list-right fl">
								<div class="kbval">
									<span>口碑值</span>
									<b><?php echo ($v["m_value"]); ?></b>
								</div>
								<a href="javascript:;" class="zx-btn order-btn popup_order_button">免费预约</a>
							</div>
						</div>
					</li>
				</ul>
			</div><?php endforeach; endif; ?>
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
			<!-- <div class="R-order-form">
				<h3>预约装修公司服务</h3>
				<p class="count">今日已有<em class="day_number">1311</em>位用户成功预约</p>
				<form>
					<div class="form-content">
						<div class="line-item">
							<input type="text" name="username" class="input-text-v2">
							<span class="placeholder">姓名</span>
							<div class="verify_tips noticeUserName" style="display: none;">
								<i></i>
								<span>请输入姓名</span>
							</div>
						</div>
						<div class="line-item">
							<input type="text" name="mobile" class="input-text-v2">
							<span class="placeholder">手机</span>
							<div class="verify_tips noticeTel" style="display: none;">
								<i></i>
								<span>请输入手机号</span>
							</div>
							<input type="hidden" name="notAlert" value="1">
						</div>
						<div class="line-item">
							<input type="text" name="areaflag_name" class="place_city" readonly value="杭州">
							<div class="tab_select clearfix">
								<dl class="clearfix">
									<dt>ABCDEF</dt>
									<dd>
										<a href="javascript:;" name="beijing">北京</a>
										<a href="javascript:;" name="chongqing">重庆</a>
										<a href="javascript:;" name="chengdu">成都</a>
										<a href="javascript:;" name="changsha">长沙</a>
										<a href="javascript:;" name="changchun">长春</a>
										<a href="javascript:;" name="dalian">大连</a>
										<a href="javascript:;" name="fuzhou">福州</a>
										<a href="javascript:;" name="changzhou">常州</a>
										<a href="javascript:;" name="gddg">东莞</a>
										<a href="javascript:;" name="ahaq">安庆</a>
										<a href="javascript:;" name="hncd">常德</a>
										<a href="javascript:;" name="anshan">鞍山</a>
										<a href="javascript:;" name="jxfz">抚州</a>
										<a href="javascript:;" name="baoding">保定</a>
										<a href="javascript:;" name="gxbh">北海</a>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>GHJKLM</dt>
									<dd>
										<a href="javascript:;" name="guiyang">贵阳</a>
										<a href="javascript:;" name="hangzhou">杭州</a>
										<a href="javascript:;" name="haerbin">哈尔滨</a>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>NPQRS</dt>
									<dd>
										<a href="javascript:;" name="nanchang">南昌</a>
										<a href="javascript:;" name="nanning">南宁</a>
										<a href="javascript:;" name="nantong">南通</a>
										<a href="javascript:;" name="nanjing">南京</a>
									</dd>
								</dl>
								<dl class="clearfix">
									<dt>TWXYZ</dt>
									<dd>
										<a href="javascript:;" name="tianjin">天津</a>
										<a href="javascript:;" name="wuhan">武汉</a>
										<a href="javascript:;" name="xian">西安</a>
									</dd>
								</dl>
							</div>
							<em class="arrows"></em>
						</div>
						<div class="form-remember">
							<span id="iagreel" class="rem-box memCheck">
								<input type="checkbox" name="iagree" checked="checked" class="rem-check">
								我已阅读并同意恋家网的
							</span>
							<a href="#" class="forget-pass">用户协议</a>
						</div>
						<a href="javascript:;" onclick="apply($(this))" class="zx-btn refer-order">立即预约</a>
					</div>
				</form>
			</div> -->
			<div class="ours-serve">
				<h3 class="serve-title">我们的服务</h3>
				<dl class="clearfix">
					<dt class="gjfw"></dt>
					<dd>
						<h3>1对1管家式服务</h3>
						<p>只需一个电话或一条微信<br>管家即会为您解除困扰</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt class="jdys"></dt>
					<dd>
						<h3>5次节点验收</h3>
						<p>以专业的角度看装修<br>不合格一律整改</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt class="zjtg"></dt>
					<dd>
						<h3>20%资金托管</h3>
						<p>装修满意才付款<br>资金安全有保障</p>
					</dd>
				</dl>
				<dl class="clearfix">
					<dt class="kswq"></dt>
					<dd>
						<h3>315快速维权</h3>
						<p>不扯皮拖拉 3小时响应<br>1天出方案 5天解决</p>
					</dd>
				</dl>
				<a href="#" class="check-serve">查看恋家宝服务</a>
			</div>
			<div class="right-banner2">
				<a href="">
					<img src="/Public/images/ad1.jpg">
				</a>
			</div>
			<div class="newest-bill">
				<h3 class="bill-title">装修公司最新签单</h3>
				<div class="therd-th">
					<span class="name">业主</span>
					<span class="site">小区名称</span>
					<span class="gsmc">公司名称</span>
				</div>
				<div class="nwwest-roll">
					<ul>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
						<li>
							<span class="name">王先生</span>
							<span class="site">江干区丁桥镇</span>
							<span class="gsmc">益欧国际设计</span>
						</li>
					</ul>
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
    <script type="text/javascript" src="/Public/js/list.js"></script>
    <script type="text/javascript">
    	(function ($) {
	        $.fn.extend({
	            Scroll: function (opt, callback) {
	                //参数初始化
	                if (!opt)
	                    var opt = {};
	                var _this = this.eq(0).find("ul:first");
	                var lineH = _this.find("li:first").height(), //获取行高
	                        line  = opt.line ? parseInt(opt.line, 10) : parseInt(this.height() / lineH, 10), //每次滚动的行数，默认为一屏，即父容器高度
	                        speed = opt.speed ? parseInt(opt.speed, 10) : 500, //卷动速度，数值越大，速度越慢（毫秒）
	                        timer = opt.timer ? parseInt(opt.timer, 10) : 3000; //滚动的时间间隔（毫秒）
	                if (line == 0)
	                    line = 1;
	                var upHeight = 0 - line * lineH;
	                //滚动函数
	                scrollUp = function () {
	                    _this.animate({
	                        marginTop: upHeight
	                    }, speed, function () {
	                        for (i = 1; i <= line; i++) {
	                            _this.find("li:first").appendTo(_this);
	                        }
	                        _this.css({marginTop: 0});
	                    });
	                }
	                //鼠标事件绑定
	                _this.hover(function () {
	                    clearInterval(timerID);
	                }, function () {
	                    timerID = setInterval("scrollUp()", timer);
	                }).mouseout();
	            }
	        });
	        $(".nwwest-roll").Scroll({line: 1, speed: 1000, timer: 2000});
	    })(jQuery);
    </script>
</body>
</html>