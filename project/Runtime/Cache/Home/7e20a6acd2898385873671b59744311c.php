<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/a.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/list.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/Public/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/Public/js/jquery.bxslider_e88acd1b.js"></script>
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
                        <a href="#" id="nav_home" class="fst-ln">我要装修</a>
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
                            <li><a href="#">优惠信息</a></li>
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
                        <a href="#" id="nav_home" class="fst-ln">整体装</a>
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
    <div class="lwrap clearfix">
		<div class="above_dist clearfix">
			<div class="zx_dist">
				<div class="zx_type">
					<ul class="sec_topr_tab">
						<li class="on"><a href="javascript:;">免费设计</a></li>
						<li><a href="javascript:;">免费验房</a></li>
						<li><a href="javascript:;">免费量房</a></li>
						<li><a href="javascript:;">免费报价</a></li>
					</ul>
				</div>
				<div class="zx_form_wrap">
					<div class="form_hd">
						<p>10秒登记，免费获取专业设计方案</p>
						<p class="none">同一小区同批验房须达到10户，可安排免费验房</p>
						<p class="none">专业人员免费上门，按照行业标准严格验收</p>
						<p class="none">3套报价对比，获取最靠谱方案，拒绝超预算</p>
					</div>
					<form action="<?php echo U('/home/company/add');?>" method="post">
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
					<input type="submit" value="免费申请" class="btn btn_sub_apply">
				</form>
				</div>
			</div>
			<div class="intro_dist">
				<div class="intro_dist_l">
					<div class="slide_wrap">
						<div class="banner">    	
				            <div class="top_slide_wrap" id="top_slide_wrap">
				                <ul class="slide_box bxslider">
				                    <li><a href="#"><img src="/Public/images/ban1.jpg" width="560" height="277"/></a></li>
				                    <li><a href="#"><img src="/Public/images/ban1.jpg" width="560" height="277"/></a></li> 
				                </ul>	
				                <div class="op_btns clearfix">
				                    <a href="#" class="op_btn op_prev"><span></span></a>
				                    <a href="#" class="op_btn op_next"><span></span></a>
				                </div>        
				            </div>
				        </div>
				        <script type="text/javascript">
				        //var jq = jQuery.noConflict();
				        (function(){
				            $(".bxslider").bxSlider({
				                auto:true,
				                prevSelector:$("#top_slide_wrap .op_prev")[0],nextSelector:$("#top_slide_wrap .op_next")[0]
				            });
				        })();
				        </script>
					</div>
					<div class="intro_service">
						<div class="intro_service_wrap clearfix">
                            <a href="#" target="_blank">
                                <dl class="clearfix">
                                    <dt class="fl">
                                        <div class="service_ljb">
                                            <span></span>
                                        </div>
                                    </dt>
                                    <dd>
                                        <div class="service_solo">
                                            <h6>恋家保</h6>
                                            <p>1对1管家式服务</p>
                                        </div>
                                    </dd>
                                </dl>
                            </a>
                            <a href="#" target="_blank">
                                <dl class="clearfix">
                                    <dt class="fl">
                                        <div class="service_loan">
                                            <span></span>
                                        </div>
                                    </dt>
                                    <dd>
                                        <div class="service_solo">
                                            <h6>装修贷款</h6>
                                            <p>年利率3.6%起</p>
                                        </div>
                                    </dd>
                                </dl>
                            </a>
                            <a href="#" target="_blank">
                                <dl class="clearfix">
                                    <dt class="fl">
                                        <div class="service_jianli">
                                            <span></span>
                                        </div>
                                    </dt>
                                    <dd>
                                        <div class="service_solo">
                                            <h6>免费监理</h6>
                                            <p>5次节点验收</p>
                                        </div>
                                    </dd>
                                </dl>
                            </a>
                        </div>
					</div>
				</div>
				<div class="intro_dist_r">
					<div class="hot_dist">
						<div class="field_hot">
                            <div class="field_hot_tit"><span>恋家公告</span></div>
                            <ul id="site-notice" class="field_hot_list">
                            	<li><a href="javascript:;" target="_blank">恋家网的互联网家装野心</a></li>
                            	<li><a href="javascript:;" target="_blank">恋家大平台要“轻”运营？</a></li>
                            	<li><a href="javascript:;" target="_blank">恋家网入选“十大诚信电商品牌” </a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="v_indexBox">
		<ul class="clearfix">
			<li class="icon01">
				<a href="<?php echo U('/home/tender/index');?>" title="免费验房,钥匙入手质量检测很必要"></a>
			</li>
			<li class="icon02">
				<a href="<?php echo U('/home/tender/index');?>" title=""></a>
			</li>
			<li class="icon03">
				<a href="<?php echo U('/home/tender/index');?>" title=""></a>
			</li>
			<li class="icon04">
				<a href="<?php echo U('/home/tender/index');?>" title=""></a>
			</li>
			<li class="icon05">
				<a href="<?php echo U('/home/tender/index');?>" title=""></a>
			</li>
			<li class="icon06">
				<a href="<?php echo U('/home/tender/index');?>" title=""></a>
			</li>
		</ul>
	</div>
	<div class="fangAd">
		<ul class="clearfix">
			<li>
				<a href="#" target="_blank">
					<img src="/Public/images/1.gif" width="590" height="80">
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<img src="/Public/images/2.gif" width="590" height="80">
				</a>
			</li>
		</ul>
	</div>
	<div class="zizhu clearfix">
		<div class="zz">
			<p>自助装修<i>我的地盘我做主 自己动手 丰衣足食</i></p>
			<ul>
				<ol>
					<li class="on">
						<span>1</span>
						<font><a href="javascript:;">找案例</a></font>
						<i>7340套装修案例任你选</i>
					</li>
					<li class="">
						<span>2</span>
						<font><a href="javascript:;">找设计</a></font>
						<i>免费设计出装修方案</i>
					</li>
					<li class="">
						<span>3</span>
						<font><a href="javascript:;">找施工</a></font>
						<i>预约工地看现场</i>
					</li>
					<li class="">
						<span>4</span>
						<font><a href="javascript:;">找主材</a></font>
						<i>超底低价好建材</i>
					</li>
					<li class="">
						<span>5</span>
						<font><a href="javascript:;">找家具</a></font>
						<i>品种齐全质量有保障</i>
					</li>
				</ol>
				<dl class="dl1" style="display: block;">
					<span><cite>共有 <i class="pointcl">7340</i> 套装修案例</cite>查找现成的装修案例</span>
					<dt>
						<a href="javascript:;" target="_blank"><img src="/Public/images/zizhuImg1.jpg" alt="套装修案例"></a>
					</dt>
					<dd>
						<form method="post" action="">
							<div class="ipt">
								<input type="text" placeholder="请输入案例名称" class="input" name="kw">
								<i></i>
							</div>
							<input type="submit" value="马上获取免费设计案例" class="btn">
						</form>
					</dd>
				</dl>
				<dl class="dl2" style="display: none;">
					<span><cite>共有 <i class="pointcl">2514</i> 位设计师可以为您提供服务</cite>申请免费设计</span>
					<dt><font>免费获得3份不同的户型设计及预算方案</font> <cite>累计 <i class="pointcl">3888</i> 人申请成功</cite> <cite>已有 <i class="pointcl">238</i> 名业主找到合适的设计师</cite> </dt>
					<dd>
						<form action="" id="tenders-form1" method="post">
							<input type="hidden" name="data[from]" value="TSJ">
							<div>我的称呼：
							<input name="data[contact]" type="text" class="input">
							</div>
							<div style="width:342px;margin-right:0;">所在小区：
							<input type="text" name="data[home_name]" class="input" style="width:250px;">
							</div>
							<div style="padding-left:28px;">户型：
							<select name="data[house_type_id]">
								<option value="1" selected="selected">一居</option>
								<option value="2">二居</option>
								<option value="3">三居</option>
								<option value="0">其它</option>
							</select>
							</div> 
							<div>手机号码：
							<input name="data[mobile]" type="text" class="input">
							</div>
							<input type="submit" value="立即申请" class="btn">
						</form>
					</dd>
				</dl>
				<dl class="dl3" style="display: none;">
					<span><cite>共有 <i class="pointcl">560</i> 位工长可以为您提供服务</cite>我要找工长</span>
					<dd class="gzfw">
						<li>平价保障</li>
						<li>质量保障</li>
						<li>施工保障</li>
						<li>资金保障</li>
						<li>先行赔付</li>
					</dd>
					<dd>
						<form action="" id="tenders-form2" method="post">
							<input type="hidden" name="data[from]" value="TZS">
							<div>我的称呼：
							<input name="data[contact]" type="text" class="input">
							</div> 
							<div>装修预算：
							<select name="data[budget_id]" class="text long">
								<option value="30">12万以上</option>
								<option value="5">3万以下</option>
								<option value="6">3万-5万</option>
								<option value="7">5-8万</option>
								<option value="8">8万-12万</option>
							</select>
							</div> 
							<div style="width:200px;">手机号码：
							<input name="data[mobile]" type="text" class="input">
							</div>
							<input type="submit" value="立即申请" class="btn">
						</form>
					</dd>
				</dl>
				<dl class="dl4" style="display: none;">
					<span><cite>共有 <i class="pointcl">40300</i> 件建材产品</cite>抢购底价主材</span>
					<dt>
						<li><a href="#">厨房</a></li>
						<li><a href="#">灯饰</a></li>
						<li><a href="#">电工</a></li>
						<li><a href="#">墙地</a></li>
						<li><a href="#">装饰</a></li>
						<li><a href="#">五金</a></li>
						<li><a href="#">智能</a></li>
						<li><a href="#">节能</a></li>
						<li><a href="#">电管</a></li>
						<li><a href="#">水管</a></li>
					</dt>
					<dd class="jianc" style="text-align: center;">
						<form action="" method="post">
							<input type="submit" value="免费招标" class="btn" style="float: right;">
						</form>
					</dd>
				</dl>
				<dl class="dl5" style="display: none;">
					<span><cite>共有 <i class="pointcl">40300</i> 件建材产品</cite>抢购家具家电</span>
					<dt>
						<li><a href="#">定制</a></li>
						<li><a href="#">卧室</a></li>
						<li><a href="#">客厅</a></li>
						<li><a href="#">餐厅</a></li>
						<li><a href="#">书房</a></li>
						<li><a href="#">户外</a></li>
						<li><a href="#">商业</a></li>
						<li><a href="#">板式</a></li>
						<li><a href="#">实木</a></li>
						<li><a href="#">家用</a></li>
					</dt>
					<dd class="jianc" style="text-align: center;">
						<form action="" method="post">
							<input type="submit" value="免费招标" class="btn" style="float: right;">
						</form>
					</dd>
				</dl>
			</ul>
		</div>
		<div class="gj">
			<p>恋家网装修<i>省心 省力 省钱</i></p>
			<ul>
				<ol>
					<li><a href="#"><img src="/Public/images/icon2-0.gif" alt="免费验房">1次免费验房</a></li>
					<li><a href="#"><img src="/Public/images/icon2-1.gif" alt="设计方案">2套设计方案</a></li>
					<li><a href="#"><img src="/Public/images/icon2-2.gif" alt="透明报价">3份透明报价</a></li>
					<li><a href="#"><img src="/Public/images/icon2-3.gif" alt="监理验收">4次监理验收</a></li>
					<li><a href="#"><img src="/Public/images/icon2-4.gif" alt="质量保障">5年质量保障</a></li>
					<li><a href="#"><img src="/Public/images/icon2-5.gif" alt="建材让利">6亿建材让利</a></li>
				</ol>
				<dl>
					<dt class="dianhua">400-108-1869</dt>
					<dd>已有 <i class="pointcl">3888</i> 名业主正在接受恋家网装修服务</dd>
				</dl>
			</ul>
		</div>
	</div>
	<div class="zhuangxiu clearfix">
		<div class="zhuangxiu_left" style="height: 418px;">
			<div>
				<span>
					<a href="/home/company/index">找装修公司</a>
					<i>共有979家装修公司</i>
				</span>
			</div>
			<ul>
				<li> 
					<b><a>等级</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">普通装修公司</a>
                    <a href="javascript:;" target="_blank">黄金装修公司</a>
                    <a href="javascript:;" target="_blank">钻石装修公司</a>
               		</p>
               </li>
               <li> 
					<b><a>服务</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">家装</a>
                    <a href="javascript:;" target="_blank">公装</a>
                    <a href="javascript:;" target="_blank">局部</a>
               		</p>
               </li>
               <li> 
					<b><a>规模</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">10万元以下</a>
                    <a href="javascript:;" target="_blank">10-50万元</a>
                    <a href="javascript:;" target="_blank">50-100万元</a>
                    <a href="javascript:;" target="_blank">100-500万元</a>
               		</p>
               </li>
			</ul>
		</div>
		<div class="zhuangxiu_right" style="height: 420px;">
			<div class="do_firm_l clearfix">
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
				<a href="#" target="_blank" class="fd">
					<figure style="overflow: hidden;"><img src="/Public/images/zxgs.jpg" width="228" height="145"></figure>
					<div>
						<p>生活家装饰</p>
						<span>专属管家 贴身服务</span>
					</div>
				</a>
			</div>
			<div class="do_firm_r opacity_img">
				<a href="#" target="_blank">
					<img src="/Public/images/zxgs1.jpg">
				</a>
				<p class="bg"></p>
				<p class="text">千思装饰</p>
			</div>
		</div>
	</div>
	<div class="fang_index_case">
		<ul class="opacityImg" style="position: relative;">
			<li class="one">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case1.jpg"></a>
					<p class="bg"></p>
					<p class="text">小小朋克与工业风的基情碰撞</p>
				</div>
			</li>
			<li class="two">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case2.jpg"></a>
					<p class="bg"></p>
					<p class="text">北欧清新美屋实景案例赏析</p>
				</div>
			</li>
			<li class="three">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case3.jpg"></a>
					<p class="bg"></p>
					<p class="text">晨光国际卢女士雅居</p>
				</div>
			</li>
			<li class="four">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case4.jpg"></a>
					<p class="bg"></p>
					<p class="text">东郡国际王先生雅居</p>
				</div>
			</li>
			<li class="five">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case5.jpg"></a>
					<p class="bg"></p>
					<p class="text">简约又不乏设计之美</p>
				</div>
			</li>
			<li class="six">
				<div class="opacity_img">
					<a href="#"><img src="/Public/images/case6.jpg"></a>
					<p class="bg"></p>
					<p class="text">欧式风情演绎80后的尊贵与时尚</p>
				</div>
			</li>
			<img src="/Public/images/caseImg1.jpg" class="img1">
			<a href="/home/case/index"><img src="/Public/images/caseImg2.jpg" class="img2"></a>
		</ul>
	</div>
	<div class="zhuangxiu clearfix">
		<div class="zhuangxiu_left" style="height:358px;">
			<div>
				<span>
					<a href="/home/case/index">装修效果图</a>
					<i>共有48888张效果图</i>
				</span>
			</div>
			<ul>
				<li> 
					<b><a>户型</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">小户型</a>
                    <a href="javascript:;" target="_blank">二居</a>
                    <a href="javascript:;" target="_blank">三居</a>
                    <a href="javascript:;" target="_blank">四居</a>
                    <a href="javascript:;" target="_blank">复式</a>
                    <a href="javascript:;" target="_blank">别墅</a>
               		</p>
               </li>
               <li> 
					<b><a>风格</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">简约</a>
                    <a href="javascript:;" target="_blank">现代</a>
                    <a href="javascript:;" target="_blank">中式</a>
                    <a href="javascript:;" target="_blank">欧式</a>
                    <a href="javascript:;" target="_blank">美式</a>
                    <a href="javascript:;" target="_blank">田园</a>
                    <a href="javascript:;" target="_blank">地中海</a>
                    <a href="javascript:;" target="_blank">东南亚</a>
                    <a href="javascript:;" target="_blank">新古典主义</a>
               		</p>
               </li>
               <li> 
					<b><a>价格</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">1-5万</a>
                    <a href="javascript:;" target="_blank">5-10万</a>
                    <a href="javascript:;" target="_blank">10-20万</a>
                    <a href="javascript:;" target="_blank">20-50万</a>
                    <a href="javascript:;" target="_blank">50-100万</a>
                    <a href="javascript:;" target="_blank">100-200万</a>
                    <a href="javascript:;" target="_blank">200万以上</a>
               		</p>
               </li>
			</ul>
		</div>
		<div class="zhuangxiu_right">
			<div class="slide_wrap2">
				<div class="banner">    	
		            <div class="top_slide_wrap" id="top_slide_wrap2">
		                <ul class="slide_box bxslider2">
		                    <li><a href="#"><img src="/Public/images/zx_ban1.jpg" width="600" height="360"/></a></li>
		                    <li><a href="#"><img src="/Public/images/zx_ban2.jpg" width="600" height="360"/></a></li>
		                    <li>
		                    	<a href="#"><img src="/Public/images/zx_ban3.jpg" width="600" height="360"/></a>
		                    </li>     
		                </ul>	
		                <div class="op_btns clearfix">
		                    <a href="#" class="op_btn op_prev"><span></span></a>
		                    <a href="#" class="op_btn op_next"><span></span></a>
		                </div>        
		            </div>
		        </div>
		        <script type="text/javascript">
		        //var jq = jQuery.noConflict();
		        (function(){
		            $(".bxslider2").bxSlider({
		                auto:true,
		                prevSelector:$("#top_slide_wrap2 .op_prev")[0],nextSelector:$("#top_slide_wrap2 .op_next")[0]
		            });
		        })();
		        </script>
			</div>
			<div class="zx_right">
				<ul>
					<li>
						<div class="opacity_img">
							<a href="#"><img src="/Public/images/zx1.jpg"></a>
							<p class="bg"></p>
							<p class="text">保亿风景晨园</p>
						</div>
					</li>
					<li>
						<div class="opacity_img">
							<a href="#"><img src="/Public/images/zx2.jpg"></a>
							<p class="bg"></p>
							<p class="text">荷韵江南苑简欧式</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="fang_new">
		<div class="fang_new_lt lt">
			<h3>
				<span class="lt">最新优惠活动</span>
				<a href="#" target="_blank" class="rt">更多>></a>
				<p class="cl"></p>
			</h3>
			<div class="actityAd">
				<a href="#"><img src="/Public/images/ad.jpg"></a>
			</div>
			<ul class="acty">
				<li>
					<span class="over">报名结束</span><a href="#">C.Smart智能家居优惠让利活动进行中</a> 
				</li>
				<li><span class="over">报名结束</span><a href="#">双十二！便装网粉丝狂欢节！</a></li>
				<li><span class="over">报名结束</span><a href="#">【宜居美庭】盛大开业 三折钜献</a></li>
				<li><span class="over">报名结束</span><a href="#">裸价团购最低价</a></li>
				<li><span class="over">报名结束</span><a href="#">家居建材名品惠</a></li>
				<li><span class="over">报名结束</span><a href="#">便装网APP4.0上线发布会线上报名窗口</a> </li>
			</ul>
		</div>
		<div class="fang_new_mid lt">
			<h3>
				<span class="lt">最新装修招标</span>
				<a href="#" target="_blank" class="rt">更多>></a>
				<p class="cl"></p>
			</h3>
			<div id="box" style="overflow: hidden;">
				<ul class="index_nwod_list">
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li><li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
					<li>
						<span class="graycl">07-31</span>
						<span class="blackcl">方 ...</span>
						<span>田园</span>
						<span class="fontcl2">5-8万</span>
						<span>二室一厅</span>
					</li>
					<li class="grayBg">
						<span class="graycl">07-31</span>
						<span class="blackcl">吴 ...</span>
						<span>欧美</span>
						<span class="fontcl2">10-15万</span>
						<span>三室一厅</span>
					</li>
				</ul>
			</div>
		</div>
		<script>
		/*
		 * 时间 2016/3/31
		 * 灵飞 
		* scrollTop 0.1
		* Dependence jquery-1.7.1.js
		*/
		(function($){
		 $.fn.scrollTop = function(options){
		  var defaults = {
		   speed:30
		   }
		  var opts = $.extend(defaults,options);
		  this.each(function(){
		   var $timer;
		   var scroll_top=0;
		   var obj = $(this);
		   var $height = obj.find("ul").height();
		   obj.find("ul").clone().appendTo(obj);
		   obj.hover(function(){
		    clearInterval($timer);
		    },function(){
		     $timer = setInterval(function(){
		      scroll_top++;
		      if(scroll_top > $height){
		       scroll_top = 0;
		      }
		      obj.find("ul").first().css("margin-top",-scroll_top);
		    },opts.speed);
		    }).trigger("mouseleave");
		   })
		  }
		 })(jQuery)
		</script>
		<script>
		$(function(){
		 $("#box").scrollTop({
		  speed:50 //数值越大 速度越慢
		  });
		});
		</script>
		<div class="fang_new_rt rt">
			<h3>
				<span class="lt">最新在建工地</span>
				<a href="#" target="_blank" class="rt">更多>></a>
				<p class="cl"></p>
			</h3>
			<ul>
				<li>
					<a href="#" class="lt"><img src="/Public/images/ban2.jpg"></a>
					<div class="rt">
						<p><a href="#">尚城新小区水电</a></p>
						<p><span class="fontc12">越秀星汇尚城</span><span class="blackcl">0平米</span></p>
						<a href="#" class="btn_main_sm btn">我要参观</a>
					</div>
				</li>
				<li>
					<a href="#" class="lt"><img src="/Public/images/ban2.jpg"></a>
					<div class="rt">
						<p><a href="#">尚城新小区水电</a></p>
						<p><span class="fontc12">越秀星汇尚城</span><span class="blackcl">0平米</span></p>
						<a href="#" class="btn_main_sm btn">我要参观</a>
					</div>
				</li>
				<li>
					<a href="#" class="lt"><img src="/Public/images/ban2.jpg"></a>
					<div class="rt">
						<p><a href="#">尚城新小区水电</a></p>
						<p><span class="fontc12">越秀星汇尚城</span><span class="blackcl">0平米</span></p>
						<a href="#" class="btn_main_sm btn">我要参观</a>
					</div>
				</li>
				<li>
					<a href="#" class="lt"><img src="/Public/images/ban2.jpg"></a>
					<div class="rt">
						<p><a href="#">尚城新小区水电</a></p>
						<p><span class="fontc12">越秀星汇尚城</span><span class="blackcl">0平米</span></p>
						<a href="#" class="btn_main_sm btn">我要参观</a>
					</div>
				</li>
				<li>
					<a href="#" class="lt"><img src="/Public/images/ban2.jpg"></a>
					<div class="rt">
						<p><a href="#">尚城新小区水电</a></p>
						<p><span class="fontc12">越秀星汇尚城</span><span class="blackcl">0平米</span></p>
						<a href="#" class="btn_main_sm btn">我要参观</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="zhuangxiu clearfix">
		<div class="zhuangxiu_left" style="height: 416px;">
			<div>
				<span>
					<a href="#">本地买建材</a>
					<i>共有979处建材购买地</i>
				</span>
			</div>
			<ul>
				<li> 
					<b><a>类别</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">地板</a>
                    <a href="javascript:;" target="_blank">房门</a>
                    <a href="javascript:;" target="_blank">橱柜</a>
                    <a href="javascript:;" target="_blank">瓷砖</a>
                    <a href="javascript:;" target="_blank">家用电器</a>
                    <a href="javascript:;" target="_blank">卫浴洁具</a>
               		</p>
               </li>
			</ul>
		</div>
		<div class="zhuangxiu_right" style="border:1px solid #eee;border-bottom: none;">
			<div class="do_firm_l clearfix">
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>开关照明 <span style="color:#FF0000">恋家旺铺</span></strong>
					<p class="vice_tit">正品保障 尖货集结</p></dt>
					<dd>
					<img src="/Public/images/jc.jpg" alt="开关照明">
					</dd>
					</dl>
				</a>
			</div>
			<div class="do_firm_r opacity_img">
				<a href="#" target="_blank">
					<img src="/Public/images/zxgs1.jpg" style="height: 414px;">
				</a>
				<p class="bg"></p>
				<p class="text">千思装饰</p>
			</div>
		</div>
	</div>
	<div class="zhuangxiu clearfix">
		<div class="zhuangxiu_left" style="height: 416px;">
			<div>
				<span>
					<a href="#">买家居</a>
					<i>共有666处家居购买地</i>
				</span>
			</div>
			<ul>
				<li> 
					<b><a>类别</a></b>
     				<p> 
                	<a href="javascript:;" target="_blank">沙发</a>
                    <a href="javascript:;" target="_blank">床</a>
                    <a href="javascript:;" target="_blank">床垫</a>
                    <a href="javascript:;" target="_blank">衣柜</a>
                    <a href="javascript:;" target="_blank">餐桌</a>
                    <a href="javascript:;" target="_blank">电视柜</a>
               		</p>
               </li>
			</ul>
		</div>
		<div class="zhuangxiu_right" style="border:1px solid #eee;border-bottom: none;">
			<div class="do_firm_l clearfix">
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
				<a href="#" target="_blank" class="yd">
					<dl class="comd">
					<dt><strong>喜家家 竹炭衣物收纳袋 </strong>
					<p class="vice_tit">美观大方 持久耐用</p>
					<p class="s_price"><span>￥</span>10</p>
					</dt>
					<dd>
					<img src="/Public/images/jj.jpg" alt="喜家家 竹炭衣物收纳袋">
					</dd>
					</dl>
				</a>
			</div>
			<div class="do_firm_r opacity_img">
				<a href="#" target="_blank">
					<img src="/Public/images/zxgs1.jpg" style="height: 414px;">
				</a>
				<p class="bg"></p>
				<p class="text">千思装饰</p>
			</div>
		</div>
	</div>
	<div class="mb20">
		<h2 class="index_tit clearfix">
			<font class="lt">设计师</font>
			<a href="#" class="more rt">更多>></a>	
		</h2>
		<div class="dbz_index_content">
			<ul class="dbz_index_designer">
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head1.jpg"></a>
					</div>
					<h3><a href="#">蔡燕燕</a></h3>
					<div class="sc">设计理念：<span class="graycl"></span></div>
				</li>
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head2.jpg"></a>
					</div>
					<h3><a href="#">黄腾云</a></h3>
					<div class="sc">设计理念：<span class="graycl"></span></div>
				</li>
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head3.jpg"></a>
					</div>
					<h3><a href="#">董淑雯</a></h3>
					<div class="sc">设计理念：<span class="graycl">一切随心，用心去感悟空间。</span></div>
				</li>
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head4.jpg"></a>
					</div>
					<h3><a href="#">何婷婷</a></h3>
					<div class="sc">设计理念：<span class="graycl">用感悟生活的心态去感悟设计，用设计的目光去理解生活。</span></div>
				</li>
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head5.jpg"></a>
					</div>
					<h3><a href="#">周仕柱</a></h3>
					<div class="sc">设计理念：<span class="graycl"></span></div>
				</li>
				<li>
					<div class="pic">
						<a href="#"><img src="/Public/images/head6.jpg"></a>
					</div>
					<h3><a href="#">袁文</a></h3>
					<div class="sc">设计理念：<span class="graycl"></span></div>
				</li>
			</ul>
		</div>
	</div>
	<div class="bottomTab">
		<ul class="bottomBtnList">
	    	<li class="nowOn">友情链接</li>
	        <li class="">热门资讯</li>
	        <li class="">热门城市</li>
	        <li class="">热门问答</li>
	        <li class="">热门图集</li>
	        <li class="">热门商品</li>
	        <li class="">城市分站</li> 
        </ul>
        <div class="bottomConWrap">
			<div class="bottomTabBox nowOn">
				<ul class="clearfix">
					<li><a href="#" target="_blank">武汉公交线路</a></li>
					<li><a href="#" target="_blank">武汉兼职网</a></li>
					<li><a href="#" target="_blank">武汉二手车交易市场</a></li>
					<li><a href="#" target="_blank">武汉装修</a></li>
					<li><a href="#" target="_blank">武汉二手车</a></li>
					<li><a href="#" target="_blank">武汉分类信息网</a></li>
					<li><a href="#" target="_blank">武汉车市</a></li>
					<li><a href="#" target="_blank">唐山楼盘</a></li>
					<li><a href="#" target="_blank">武汉厂房出租</a></li>
					<li><a href="#" target="_blank">武汉百姓网</a></li>
					<li><a href="#" target="_blank">武汉家装</a></li>
					<li><a href="#" target="_blank">永川论坛</a></li>
					<li><a href="#" target="_blank">武汉公交</a></li>
					<li><a href="#" target="_blank">武汉房产</a></li>
					<li><a href="#" target="_blank">武汉装修公司</a></li>
					<li><a href="#" target="_blank">武汉二手房</a></li>
					<li><a href="#" target="_blank">襄樊旅游攻略</a></li>
					<li><a href="#" target="_blank">武汉婚纱摄影</a></li>
					<li><a href="#" target="_blank">武汉门面出租</a></li>
					<li><a href="#" target="_blank">武汉坑卒论坛</a></li>
					<li><a href="#" target="_blank">随州房产在线</a></li>
					<li><a href="#" target="_blank">塑料</a></li>
					<li><a href="#" target="_blank">武汉新闻</a></li>
					<li><a href="#" target="_blank">塑料原料价格</a></li>
					<li><a href="#" target="_blank">汽车贴膜</a></li>
					<li><a href="#" target="_blank">武汉租房网</a></li>
					<li><a href="#" target="_blank">武汉厂房招商</a></li>
					<li><a href="#" target="_blank">武商网</a></li>
					<li><a href="#" target="_blank">Android培训</a></li>
					<li><a href="#" target="_blank">武汉培训机构</a></li>
					<li><a href="#" target="_blank">武汉房产网</a></li>
					<li><a href="#" target="_blank">武汉家教网</a></li>
					<li><a href="#" target="_blank">武汉房地产</a></li>
					<li><a href="#" target="_blank">武汉装修网</a></li>
					<li><a href="#" target="_blank">租房0中介</a></li>
					<li><a href="#" target="_blank">武汉博才网</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="clearfix">
					<li style="width: 161px"><a href="#" target="_blank">客厅装修</a></li>
					<li style="width: 161px"><a href="#" target="_blank">防水验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">地平验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">屋高验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">厨房风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">餐厅风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">吧台风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">卫生间风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">楼层风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">别墅风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">建筑风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">住宅风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">阳宅风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">水电验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">墙壁验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">装修效果图</a></li>
					<li style="width: 161px"><a href="#" target="_blank">装修</a></li>
					<li style="width: 161px"><a href="#" target="_blank">电视背景墙</a></li>
					<li style="width: 161px"><a href="#" target="_blank">室内设计</a></li>
					<li style="width: 161px"><a href="#" target="_blank">客厅背景墙</a></li>
					<li style="width: 161px"><a href="#" target="_blank">厨房装修</a></li>
					<li style="width: 161px"><a href="#" target="_blank">别墅装修</a></li>
					<li style="width: 161px"><a href="#" target="_blank">卧室设计</a></li>
					<li style="width: 161px"><a href="#" target="_blank">甲醛</a></li>
					<li style="width: 161px"><a href="#" target="_blank">装修样板间</a></li>
					<li style="width: 161px"><a href="#" target="_blank">管道验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">门窗验收</a></li>
					<li style="width: 161px"><a href="#" target="_blank">装修知识</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="clearfix">
					<li style="width: 122px"><a href="#" target="_blank">成都装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">苏州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">昆山装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">哈尔滨装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">绵阳装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">温州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">兰州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">沈阳装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">长春装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">东莞装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">南昌装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">石家庄装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">福州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">无锡装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">南通装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">潍坊装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">乌鲁木齐装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">北屯装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">昆明装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">重庆装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">大连装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">上海装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">深圳装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">郑州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">广州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">武汉装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">杭州装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">天津装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">北京装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">南京装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">贵阳装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">南宁装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">长沙装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">济南装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">合肥装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">青岛装修公司</a></li>
					<li style="width: 122px"><a href="#" target="_blank">西安装修公司</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="zx_faq clearfix">
					<li style="width: 161px"><a href="#" target="_blank">整体橱柜十大排名</a></li>
					<li style="width: 161px"><a href="#" target="_blank">地暖的优缺点</a></li>
					<li style="width: 161px"><a href="#" target="_blank">木地板排名</a></li>
					<li style="width: 161px"><a href="#" target="_blank">集成灶的优缺点</a></li>
					<li style="width: 161px"><a href="#" target="_blank">壁纸品牌十大排名</a></li>
					<li style="width: 161px"><a href="#" target="_blank">家具品牌排行榜</a></li>
					<li style="width: 161px"><a href="#" target="_blank">油烟机什么牌子好</a></li>
					<li style="width: 161px"><a href="#" target="_blank">装修风格</a></li>
					<li style="width: 161px"><a href="#" target="_blank">燃气热水器哪个牌子好</a></li>
					<li style="width: 161px"><a href="#" target="_blank">甲醛中毒症状</a></li>
					<li style="width: 161px"><a href="#" target="_blank">门厅过道装修与风水</a></li>
					<li style="width: 161px"><a href="#" target="_blank">除甲醛最有效方法</a></li>
					<li style="width: 161px"><a href="#" target="_blank">净水器排名</a></li>
					<li style="width: 161px"><a href="#" target="_blank">热水器哪个牌子好</a></li>
					<li style="width: 161px"><a href="#" target="_blank">净水器哪个牌子好</a></li>
					<li style="width: 161px"><a href="#" target="_blank">空气净化器十大排名</a></li>
					<li style="width: 161px"><a href="#" target="_blank">防盗门品牌排行</a></li>
					<li style="width: 161px"><a href="#" target="_blank">马桶品牌排行榜</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="clearfix">
					<li><a href="#" target="_blank">厨房装修效果图</a></li>
					<li><a href="#" target="_blank">房子装修效果图</a></li>
					<li><a href="#" target="_blank">客厅电视背景墙效果图</a></li>
					<li><a href="#" target="_blank">卧室装修效果图小户型</a></li>
					<li><a href="#" target="_blank">地中海风格装修图片</a></li>
					<li><a href="#" target="_blank">窗帘效果图</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="clearfix">
					<li style="width: 122px"><a href="#" target="_blank">墙纸</a></li>
					<li style="width: 122px"><a href="#" target="_blank">集成吊顶</a></li>
					<li style="width: 122px"><a href="#" target="_blank">卧室门</a></li>
					<li style="width: 122px"><a href="#" target="_blank">木桶浴缸</a></li>
					<li style="width: 122px"><a href="#" target="_blank">增压花洒</a></li>
					<li style="width: 122px"><a href="#" target="_blank">整体淋浴房</a></li>
					<li style="width: 122px"><a href="#" target="_blank">按摩浴缸</a></li>
					<li style="width: 122px"><a href="#" target="_blank">普通浴缸</a></li>
				</ul>
			</div>
			<div class="bottomTabBox">
				<ul class="clearfix">
					<li><a href="#" target="_blank">成都装修</a></li>
					<li><a href="#" target="_blank">大连装修</a></li>
					<li><a href="#" target="_blank">上海装修</a></li>
					<li><a href="#" target="_blank">深圳装修</a></li>
					<li><a href="#" target="_blank">郑州装修</a></li>
					<li><a href="#" target="_blank">广州装修</a></li>
					<li><a href="#" target="_blank">武汉装修</a></li>
					<li><a href="#" target="_blank">杭州装修</a></li>
				</ul>
			</div>
        </div>
	</div>
	<div class="footer">
		<div class="footer_help">
			<div class="help_inner clearfix">
				<dl class="order_help">
					<dt>
						购物指南
					</dt>
					<dd><a href="/home/Help/hyzc" target="_blank">会员注册</a></dd>
					<dd><a href="/home/Help/order" target="_blank">如何订购</a></dd>
					<dd><a href="#" target="_blank">如何支付</a></dd>
					<dd><a href="#" target="_blank">订单处理</a></dd>
					<dd><a href="#" target="_blank">配送方式</a></dd>
				</dl>
				<dl class="fitment_help">
					<dt>
						装修服务
					</dt>
					<dd><a href="#" target="_blank">装修保</a></dd>
					<dd><a href="#" target="_blank">免费第三方监理</a></dd>
				</dl>
				<dl class="shop_protect">
					<dt>
						购物保障
					</dt>
					<dd><a href="#" target="_blank">正品保障</a></dd>
					<dd><a href="#" target="_blank">先行赔付</a></dd>
					<dd><a href="#" target="_blank">延迟赔偿</a></dd>
					<dd><a href="#" target="_blank">7天无理由退换货</a></dd>
					<dd><a href="#" target="_blank">投诉维权</a></dd>
				</dl>
				<dl class="fitment_tg">
					<dt>
						团购知识
					</dt>
					<dd><a href="#" target="_blank">团购知识</a></dd>
					<dd><a href="#" target="_blank">团购活动</a></dd>
					<dd><a href="#" target="_blank">团购价格</a></dd>
				</dl>
				<dl class="unique_serve">
					<dt>
						恋家定制服务
					</dt>
					<dd><a href="#" target="_blank">价格特搜</a></dd>
					<dd><a href="#" target="_blank">装修顾问</a></dd>
				</dl>
				<dl class="other_map">
					<dt>
						你身边的恋家
					</dt>
					<dd>
						<a href="#" target="_blank">
							<p>我们在全国主要城市设立分站</p>
							<p>提供你放心贴心的服务</p>
						</a>
					</dd>
				</dl>
			</div>
		</div>
		<div class="footer_info">
			<div class="footer_con">
				<p class="footer_link">
					<a href="/home/About/about" target="_blank">关于我们</a>
					<span class="split">|</span>
					<a href="/home/About/contact" target="_blank">联系我们</a>
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
	<div class="shortcutBox">
	    <a href="javascript:;" class="btnBox" style="height: 0;border: none;">
			<span class="topBtn"></span>
			<span class="btnBox_t">返回顶部</span>
	    </a>
	</div>
	<script type="text/javascript" src="/Public/js/common.js"></script>
	<script type="text/javascript">
		$('.zx_type .sec_topr_tab li').click(function(){
			var index = $(this).index();
			$(".form_hd p").eq(index).css({"display":"block"}).siblings().css({"display":"none"});
            $(this).addClass('on').siblings().removeClass('on');
        });
	</script>
	<script>
		$(".select_city .tab_select dl dd a").click(function(){
			var text = $(this).text();
			$(".select_city input[type='text']").val(text);
		});
	</script>
	<script>
	    $("#logout").click(function(){
	        $.ajax({
	            type: "POST",
	            url : "/home/Login/logout",
	            success: function(json){
	                if(json.status == 1){
	                    location.href = json.url;
	                }
	            }
	        })
	    });
	</script>
</body>
</html>