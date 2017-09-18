<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>整体装</title>
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
                <em id="J_region"><?php if(session('city')): echo session('city');?>
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
                <if condition="session('home_user')"><a href="/home/member/index">欢迎您,<if condition="session('home_user').name">
                <?=session('home_user')['name']?>
                </a>&nbsp;&nbsp;<a href="/home/login/logout" style="color:#d00;" id="logout">退出登录</a>
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
	<div class="top_banner">
		<div class="flexslider">
			<ul class="slides">
				<li class="list flex-active-slide"></li>
			</ul>
		</div>
		<div class="mainwd banner_posit">
			<div class="lt banner_form">
				<div class="banner_form_head">
					<p>一站式整装全包</p>
				</div>
				<div class="banner_form_body zx_form_wrap">
					<p class="title fontcl1">预算省30% 配置高30%</p>
					<div class="apply_form">
						<form action="/home/ztz/add" method="post">
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
							<input type="submit" value="立即预约" class="btn btn_sub_apply">
						</form>
					</div>
					<p class="apply_tip">已有<span class="fontcl2">1111</span>户业主预约成功</p>
				</div>
			</div>
			<div class="rt banner_advert">
				<ul>
					<li style="background-position: 0 -768px;">
						<p class="title fontcl1">极致性价比</p>
						<p class="content">同材质同工艺<br/>套餐价格净省30%</p>
					</li>
					<li style="background-position: -230px -768px;">
						<p class="title fontcl1">简单省心</p>
						<p class="content">28项精装全包<br/>装修从未如此简单</p>
					</li>
					<li style="background-position: -460px -768px;">
						<p class="title fontcl1">最强保障</p>
						<p class="content">装修全程监督<br/>价格、工期、质量<br/>多重保障</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mainwd highlights"></div>
	<div class="grayBg">
		<div class="mainwd wholeInstall">
			<h2>精选整装套餐</h2>
			<h3>包设计 包材料 包施工 一价全包</h3>
			<ul>
				<?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="wholeInstall_list">
						<div class="lt img_box">
							<div class="img_mask">
								<a href="/home/ztz/detail" target="_blank">查看详情&nbsp;></a>
							</div>
							<img src="/Uploads<?php echo ($v["bpic"]); ?>">
						</div>
						<div class="rt wz">
							<div class="wz-price"><?php echo ($v["page"]); ?><div>元/m<i>2</i></div></div>
							<div class="wz-title"><?php echo ($v["title"]); ?></div>
						</div>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
	</div>
	<div class="mainwd wholeInstall">
		<h2>最新签约</h2>
		<div class="signed_box">
			<div class="lt signed_list">
				<ul class="signed_list_header">
					<li>
						<span class="signed_city">城市</span>
						<span class="signed_name">业主称呼</span>
						<span class="signed_area">面积</span>
						<span class="signed_amount">金额</span>
						<span class="signed_company">装修公司</span>
					</li>
				</ul>

				<div class="signed_list_body swiper-container" id="swiper1">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<span class="signed_city">满城区</span>
							<span class="signed_name">任亚超</span>
							<span class="signed_area">88m<i>2</i></span>
							<span class="signed_amount">6.4万</span>
							<span class="signed_company">元洲装饰</span>
						</li>
						<li class="swiper-slide">
							<span class="signed_city">上城区</span>
							<span class="signed_name">燕丹</span>
							<span class="signed_area">67m<i>2</i></span>
							<span class="signed_amount">4.4万</span>
							<span class="signed_company">元洲装饰</span>
						</li>
						<li class="swiper-slide">
							<span class="signed_city">下城区</span>
							<span class="signed_name">张三</span>
							<span class="signed_area">29m<i>2</i></span>
							<span class="signed_amount">0.4万</span>
							<span class="signed_company">元洲装饰</span>
						</li>
						<li class="swiper-slide">
							<span class="signed_city">萧山区</span>
							<span class="signed_name">李四</span>
							<span class="signed_area">33m<i>2</i></span>
							<span class="signed_amount">1.4万</span>
							<span class="signed_company">元洲装饰</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="rt signed_comment_list_box swiper-container" id="swiper2">
				<div class="signed_comment_list swiper-wrapper">
					<div class="signed_comment swiper-slide">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="/Public/pic/pokemon.jpg" />
	                        </div>
	                        <div class="info">
	                            <span>徐先生<img class="score" src="/Public/pic/score.png" /></span><br />杭州 德信泊林春天&nbsp;89m<i>2</i>
	                        </div>
	                        <div class="date">2015/09/18</div>
	                    </div>
	                    <div class="comment">
	                        师傅手艺还是很不错的，监理过来验收的时候也说师傅手艺好。之前为了找装修公司看了很多网站，也接到了很多电话，找了几家装修公司都感觉鱼龙混杂很不靠谱，还好选了便装网，小微推荐过来的公司经过接触，都觉得还挺靠谱。
	                    </div>
	                </div>
	                <div class="signed_comment swiper-slide">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="/Public/pic/pokemon.jpg" />
	                        </div>
	                        <div class="info">
	                            <span>王先生<img class="score" src="/Public/pic/score.png" /></span><br />杭州 德鲁冬天&nbsp;69m<i>2</i>
	                        </div>
	                        <div class="date">2017/09/18</div>
	                    </div>
	                    <div class="comment">
	                        师傅手艺还是很不错的，监理过来验收的时候也说师傅手艺好。
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
	<div class="grayBg">
		<div class="mainwd wholeInstall">
			<h2>全程服务</h2>
			<div class="service_process"></div>
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
		var mySwiper1 = new Swiper('#swiper1',{
			direction : 'vertical',
			autoplay : 2000,
			loop : true,
			height:32,
			autoplayDisableOnInteraction : false
		});
		var mySwiper2 = new Swiper('#swiper2',{
			direction : 'vertical',
			autoplay : 5000,
			loop : true,
			autoplayDisableOnInteraction : false
		});
	</script>
</body>
</html>