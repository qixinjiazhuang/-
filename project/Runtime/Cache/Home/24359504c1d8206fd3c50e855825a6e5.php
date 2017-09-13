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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>我要装修</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/tenders.css">
	<script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
</head>
<body>

    <div class="mainwd">
		<div class="mbt tenders_zb">
			<ul class="tenders_zb_list clearfix">
				<li rel="TZB" class="current">免费招标</li>
				<li rel="TJC">建材招标</li>
				<li rel="TSJ">免费设计</li>
				<li rel="TBJ">免费报价</li>
				<li rel="TLF">免费量房</li>
				<li><a href="/Public/javascript:;">装修保</a></li>
			</ul>
			<div class="tenders_zb_box">
				<div class="tenders_zb_box_con clearfix" style="display: block;">
					<img src="/Public/images/tenders_pic1.jpg" class="lt">
					<div class="tenders_zb_form pding rt">
						<h3>我要招标</h3>
						<form class="" method="">
							<table>
								<tbody>
									<tr>
										<td class="title"><font class="pointcl">*</font>您的姓名</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的姓名"></td>
										<td class="title"><font class="pointcl">*</font>联系电话</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的联系方式"></td>
									</tr>
									<tr>
										<td class="title">招标类型</td>
										<td>
											<select class="text long">
												<option value="1">家装</option>
												<option value="2">公装</option>
											</select>
										</td>
										<td class="title">装修预算</td>
										<td>
											<select class="text long">
												<option value="30">12万以上</option>
												<option value="5">3万以下</option>
												<option value="6">3万-5万</option>
												<option value="7">5-8万</option>
												<option value="8">8万-12万</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="title">装修面积</td>
										<td><input type="text" name="" class="text long" placeholder="请输入装修面积，单位为平米"></td>
										<td class="title">小区名称</td>
										<td><input type="text" name="" class="text long" placeholder="请输入小区名称"></td>
									</tr>
									<tr>
										<td class="title">所在地区</td>
										<td colspan="3">
											<region>
												<select class="text short" province="1" name="">
													<option value="0">-请选择省份-</option>
												</select>
												<select class="text short" city="8" name="">
													<option value="0">-请选择城市-</option>
												</select>
												<select class="text short" area="0" name="">
													<option value="0">-请选择区-</option>
												</select>
											</region>
										</td>
									</tr>
									<tr>
										<td class="title">详细地址</td>
										<td colspan="3"><input type="text" name="" class="text all"></td>
									</tr>
									<tr>
										<td class="title">备注要求</td>
										<td colspan="3"><textarea class="text"></textarea></td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="file" name="huxing">
											<p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p>
										</td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="submit" name="" class="btn_sub_tuan btn" value="免费发布招标">
											<span class="tel">或拨打<b class="fontcl2">400-800-2600</b></span>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con clearfix" style="display: none;">
					<img src="/Public/images/tenders_pic2.jpg" class="lt">
					<div class="tenders_zb_form pding rt">
						<h3>建材招标</h3>
						<form class="" method="">
							<table>
								<tbody>
									<tr>
										<td class="title"><font class="pointcl">*</font>您的姓名</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的姓名"></td>
										<td class="title"><font class="pointcl">*</font>联系电话</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的联系方式"></td>
									</tr>
									<tr>
										<td class="title">地墙面：</td>
										<td colspan="3">
											<ul class="group-list" style="width: 100%;">
												<li style="width: 80px;">
													<label title="地板">
														<input type="checkbox" name="">地板
													</label>
												</li>
												<li style="width: 80px;">
													<label title="油漆">
														<input type="checkbox" name="">油漆
													</label>
												</li>
												<li style="width: 80px;">
													<label title="门窗">
														<input type="checkbox" name="">门窗
													</label>
												</li>
												<li style="width: 80px;">
													<label title="瓷砖">
														<input type="checkbox" name="">瓷砖
													</label>
												</li>
												<li style="width: 80px;">
													<label title="墙纸">
														<input type="checkbox" name="">墙纸
													</label>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<td class="title">装修面积</td>
										<td><input type="text" name="" class="text long" placeholder="请输入装修面积，单位为平米"></td>
										<td class="title">小区名称</td>
										<td><input type="text" name="" class="text long" placeholder="请输入小区名称"></td>
									</tr>
									<tr>
										<td class="title">所在地区</td>
										<td colspan="3">
											<region>
												<select class="text short" province="1" name="">
													<option value="0">-请选择省份-</option>
												</select>
												<select class="text short" city="8" name="">
													<option value="0">-请选择城市-</option>
												</select>
												<select class="text short" area="0" name="">
													<option value="0">-请选择区-</option>
												</select>
											</region>
										</td>
									</tr>
									<tr>
										<td class="title">详细地址</td>
										<td colspan="3"><input type="text" name="" class="text all"></td>
									</tr>
									<tr>
										<td class="title">备注要求</td>
										<td colspan="3"><textarea class="text"></textarea></td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="submit" name="" class="btn_sub_tuan btn" value="免费发布招标">
											<span class="tel">或拨打<b class="fontcl2">400-800-2600</b></span>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con clearfix" style="display: none;">
					<img src="/Public/images/tenders_pic3.jpg" class="lt">
					<div class="tenders_zb_form pding rt">
						<h3>免费设计</h3>
						<form class="" method="">
							<table>
								<tbody>
									<tr>
										<td class="title"><font class="pointcl">*</font>您的姓名</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的姓名"></td>
										<td class="title"><font class="pointcl">*</font>联系电话</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的联系方式"></td>
									</tr>
									<tr>
										<td class="title">招标类型</td>
										<td>
											<select class="text long">
												<option value="20">全包</option>
												<option value="19">半包</option>
												<option value="18">清包</option>
											</select>
										</td>
										<td class="title">装修预算</td>
										<td>
											<select class="text long">
												<option value="30">12万以上</option>
												<option value="5">3万以下</option>
												<option value="6">3万-5万</option>
												<option value="7">5-8万</option>
												<option value="8">8万-12万</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="title">装修面积</td>
										<td><input type="text" name="" class="text long" placeholder="请输入装修面积，单位为平米"></td>
										<td class="title">小区名称</td>
										<td><input type="text" name="" class="text long" placeholder="请输入小区名称"></td>
									</tr>
									<tr>
										<td class="title">所在地区</td>
										<td colspan="3">
											<region>
												<select class="text short" province="1" name="">
													<option value="0">-请选择省份-</option>
												</select>
												<select class="text short" city="8" name="">
													<option value="0">-请选择城市-</option>
												</select>
												<select class="text short" area="0" name="">
													<option value="0">-请选择区-</option>
												</select>
											</region>
										</td>
									</tr>
									<tr>
										<td class="title">详细地址</td>
										<td colspan="3"><input type="text" name="" class="text all"></td>
									</tr>
									<tr>
										<td class="title">备注要求</td>
										<td colspan="3"><textarea class="text"></textarea></td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="file" name="huxing">
											<p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p>
										</td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="submit" name="" class="btn_sub_tuan btn" value="免费发布招标">
											<span class="tel">或拨打<b class="fontcl2">400-800-2600</b></span>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con clearfix" style="display: none;">
					<img src="/Public/images/tenders_pic4.jpg" class="lt">
					<div class="tenders_zb_form pding rt">
						<h3>免费报价</h3>
						<form class="" method="">
							<table>
								<tbody>
									<tr>
										<td class="title"><font class="pointcl">*</font>您的姓名</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的姓名"></td>
										<td class="title"><font class="pointcl">*</font>联系电话</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的联系方式"></td>
									</tr>
									<tr>
										<td class="title">招标类型</td>
										<td>
											<select class="text long">
												<option value="20">全包</option>
												<option value="19">半包</option>
												<option value="18">清包</option>
											</select>
										</td>
										<td class="title">装修预算</td>
										<td>
											<select class="text long">
												<option value="30">12万以上</option>
												<option value="5">3万以下</option>
												<option value="6">3万-5万</option>
												<option value="7">5-8万</option>
												<option value="8">8万-12万</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="title">装修面积</td>
										<td><input type="text" name="" class="text long" placeholder="请输入装修面积，单位为平米"></td>
										<td class="title">小区名称</td>
										<td><input type="text" name="" class="text long" placeholder="请输入小区名称"></td>
									</tr>
									<tr>
										<td class="title">所在地区</td>
										<td colspan="3">
											<region>
												<select class="text short" province="1" name="">
													<option value="0">-请选择省份-</option>
												</select>
												<select class="text short" city="8" name="">
													<option value="0">-请选择城市-</option>
												</select>
												<select class="text short" area="0" name="">
													<option value="0">-请选择区-</option>
												</select>
											</region>
										</td>
									</tr>
									<tr>
										<td class="title">详细地址</td>
										<td colspan="3"><input type="text" name="" class="text all"></td>
									</tr>
									<tr>
										<td class="title">备注要求</td>
										<td colspan="3"><textarea class="text"></textarea></td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="file" name="huxing">
											<p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p>
										</td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="submit" name="" class="btn_sub_tuan btn" value="免费发布招标">
											<span class="tel">或拨打<b class="fontcl2">400-800-2600</b></span>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con clearfix" style="display: none;">
					<img src="/Public/images/tenders_pic5.jpg" class="lt">
					<div class="tenders_zb_form pding rt">
						<h3>免费量房</h3>
						<form class="" method="">
							<table>
								<tbody>
									<tr>
										<td class="title"><font class="pointcl">*</font>您的姓名</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的姓名"></td>
										<td class="title"><font class="pointcl">*</font>联系电话</td>
										<td><input type="text" name="" class="text long" placeholder="请输入您的联系方式"></td>
									</tr>
									<tr>
										<td class="title">招标类型</td>
										<td>
											<select class="text long">
												<option value="20">全包</option>
												<option value="19">半包</option>
												<option value="18">清包</option>
											</select>
										</td>
										<td class="title">装修预算</td>
										<td>
											<select class="text long">
												<option value="30">12万以上</option>
												<option value="5">3万以下</option>
												<option value="6">3万-5万</option>
												<option value="7">5-8万</option>
												<option value="8">8万-12万</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="title">装修面积</td>
										<td><input type="text" name="" class="text long" placeholder="请输入装修面积，单位为平米"></td>
										<td class="title">小区名称</td>
										<td><input type="text" name="" class="text long" placeholder="请输入小区名称"></td>
									</tr>
									<tr>
										<td class="title">所在地区</td>
										<td colspan="3">
											<region>
												<select class="text short" province="1" name="">
													<option value="0">-请选择省份-</option>
												</select>
												<select class="text short" city="8" name="">
													<option value="0">-请选择城市-</option>
												</select>
												<select class="text short" area="0" name="">
													<option value="0">-请选择区-</option>
												</select>
											</region>
										</td>
									</tr>
									<tr>
										<td class="title">详细地址</td>
										<td colspan="3"><input type="text" name="" class="text all"></td>
									</tr>
									<tr>
										<td class="title">备注要求</td>
										<td colspan="3"><textarea class="text"></textarea></td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="file" name="huxing">
											<p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p>
										</td>
									</tr>
									<tr>
										<td class="title"></td>
										<td colspan="3">
											<input type="submit" name="" class="btn_sub_tuan btn" value="免费发布招标">
											<span class="tel">或拨打<b class="fontcl2">400-800-2600</b></span>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="mbt tenders_step">
			<ul>
				<li>
					<h3><b>免费发布招标</b></h3>
					<p>免费发布招标，获得恋家网全程装修管家服务</p>
				</li>
				<li>
					<h3><b>3套方案PK</b></h3>
					<p>业主对比3套设计方案，选出最优方案</p>
				</li>
				<li>
					<h3><b>3家公司免费量房</b></h3>
					<p>3家公司上门免费量房并提供设计预算方案</p>
				</li>
				<li>
					<h3><b>选择签订公司</b></h3>
					<p>选择方案最优，价格合理的公司签定装修合同</p>
				</li>
				<li class="last">
					<p class="tel">400-880-2600</p>
					<h3><b>获得装修保障</b></h3>
					<p>提交合同或拨打恋家网热线电话获得装修保障</p>
				</li>
			</ul>
		</div>
		<div class="mbt">
			<h1 class="zb_ten_Tit"><span>装修小贴士</span></h1>
			<ul class="ten_tieshi">
				<li>
					<img src="/Public/images/xiaotieshi_01.jpg" class="lt">
					<div class="lt tieshi_text">
						<h3>
							<span class="ts">贴士1</span>
							<font>1分钟发布招标</font>
							，3家正规装修公司免费上门服务
						</h3>
						<p>在恋家网装修网发布装修招标只需要1分钟，让您能够花最短的时间找到最适合的装修公司，恋家网为您 提供的都是经过严格资格认证的正规装修公司，保证后期施工质量以及资金安全，业主可以放心选择。</p>
					</div>
				</li>
				<li>
					<img src="/Public/images/xiaotieshi_02.jpg" class="lt">
					<div class="lt tieshi_text">
						<h3>
							<span class="ts">贴士2</span>
							<font>免费量房、出设计及报价</font>
							，零成本找到装修公司
						</h3>
						<p>己在市面上找装修公司，您可能需要东奔西跑进行选择比较，费时费力，恋家网针对您的需求为您提供装修公司，免费量房，免费出设计方案和报价，让您可以足不出户就能找到心仪的公司。不需要您支付任何费用。</p>
					</div>
				</li>
				<li>
					<img src="/Public/images/xiaotieshi_03.jpg" class="lt">
					<div class="lt tieshi_text">
						<h3>
							<span class="ts">贴士3</span>
							<font>免费赠送第三方监理</font>
							，分节点严控施工质量
						</h3>
						<p>装修要小心，一着不慎后患无穷，尤其是隐蔽工程，如果不过关，后期出了问题，不仅影响生活，整改也很麻烦，还需要花费大量的时间金钱 ，劳心劳力，所以有很多业主都选择第三方监理把控装修质量。</p>
					</div>
				</li>
				<li>
					<img src="/Public/images/xiaotieshi_04.jpg" class="lt">
					<div class="lt tieshi_text">
						<h3>
							<span class="ts">贴士4</span>
							<font>装修保障体系</font>
							，最大化维护业主权益
						</h3>
						<p>线下找装修公司，一般工程过半装修款已支付90%，如果后期装修公司拖延工期，施工质量不过关，业主 难以牵制，更有甚者，装修公司卷款逃款，业主求助无门。</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="mbt">
			<h1 class="zb_ten_Tit"><span>装修预算常见猫腻</span></h1>
			<ul class="zb_ten_mn clearfix">
				<li>
					<h3>装修报价、工艺模糊</h3>
					<p>一些不良的装修公司多采取“模糊报价、低价切入”的方式。消费者要留意装修公司提供的报价单，应清楚表达每个部位的尺寸、做法、用料(包括品牌、型号)、单价以及工艺标准。</p>
				</li>
				<li>
					<h3>报价单恶意增项</h3>
					<p>有些合同里，装修公司对材料写得含糊其辞,实际装修时,可能用假冒伪劣的材料。当业主追究时,装修公司便拿出当初的合同,称业主没有指定材料品牌。一旦业主要求使用高品质、环保的装修材料，装修公司便会要求加价。</p>
				</li>
				<li>
					<h3>水电工程藏猫腻</h3>
					<p>水电改造是家装公司最赚钱的项目，业主应该把好这一关。业主要注意询问水电改造费用是否包含在总报价之内，开关盒、开关面板、小配件等以及安装是否另外收费，而且，线埋在墙里和走外线，价格也不一样。</p>
				</li>
				<li>
					<h3>预算测量动手脚</h3>
					<p>一些不良的装修公司多采取“模糊报价、低价切入”的方式。消费者要留意装修公司提供的报价单，应清楚表达每个部位的尺寸、做法、用料(包括品牌、型号)、单价以及工艺标准。</p>
				</li>
				<li>
					<h3>装修工艺偷工减料</h3>
					<p>有些公司会采取省略某个程序、减少某项工艺的方法牟取暴利：有些施工队做木龙骨时，省略了刷防水、防火涂料的程序，为日后埋下安全隐患。</p>
				</li>
				<li>
					<h3>隐蔽工程多报数量</h3>
					<p>隐蔽工程，如电的暗装布线、水管的地下铺设、下水道的改造等，由于装修完成会被外皮及地砖遮盖，不易被发现。有些施工队在施工时会偷工。</p>
				</li>
			</ul>
		</div>
		<div class="mbt">
			<h2><b>最新装修招标订单</b></h2>
			<div class="tenders_order">
				<p class="tenders_order_tit tit">
					<span>发布日期</span>
					<span>业主</span>
					<span>类型</span>
					<span class="long">面积（平方米）</span>
					<span>预算</span>
					<span>查看详情</span>
				</p>
				<div id="box" class="tenders_order_box">
					<ul class="">
						<li>
							<span class="graycl">07-31</span>
							<span class="blackcl">方 ...</span>
							<span>招标</span>
							<span class="long">0</span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li class="grayBg">
							<span class="graycl">07-31</span>
							<span class="blackcl">吴 ...</span>
							<span>招标</span>
							<span class="long"></span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li>
							<span class="graycl">07-31</span>
							<span class="blackcl">方 ...</span>
							<span>招标</span>
							<span class="long">0</span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li class="grayBg">
							<span class="graycl">07-31</span>
							<span class="blackcl">吴 ...</span>
							<span>招标</span>
							<span class="long"></span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li>
							<span class="graycl">07-31</span>
							<span class="blackcl">方 ...</span>
							<span>招标</span>
							<span class="long">0</span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li class="grayBg">
							<span class="graycl">07-31</span>
							<span class="blackcl">吴 ...</span>
							<span>招标</span>
							<span class="long"></span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li>
							<span class="graycl">07-31</span>
							<span class="blackcl">方 ...</span>
							<span>招标</span>
							<span class="long">0</span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li class="grayBg">
							<span class="graycl">07-31</span>
							<span class="blackcl">吴 ...</span>
							<span>招标</span>
							<span class="long"></span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li>
							<span class="graycl">07-31</span>
							<span class="blackcl">方 ...</span>
							<span>招标</span>
							<span class="long">0</span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
						<li class="grayBg">
							<span class="graycl">07-31</span>
							<span class="blackcl">吴 ...</span>
							<span>招标</span>
							<span class="long"></span>
							<span></span>
							<a href="/Public/javascript:;"><span class="fontcl2">查看</span></a>
						</li>
					</ul>
				</div>
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
					<dd><a href="/Public/#" target="_blank">会员注册</a></dd>
					<dd><a href="/Public/#" target="_blank">如何订购</a></dd>
					<dd><a href="/Public/#" target="_blank">如何支付</a></dd>
					<dd><a href="/Public/#" target="_blank">订单处理</a></dd>
					<dd><a href="/Public/#" target="_blank">配送方式</a></dd>
				</dl>
				<dl class="fitment_help">
					<dt>
						装修服务
					</dt>
					<dd><a href="/Public/#" target="_blank">装修宝</a></dd>
					<dd><a href="/Public/#" target="_blank">免费第三方监理</a></dd>
				</dl>
				<dl class="shop_protect">
					<dt>
						购物保障
					</dt>
					<dd><a href="/Public/#" target="_blank">正品保障</a></dd>
					<dd><a href="/Public/#" target="_blank">先行赔付</a></dd>
					<dd><a href="/Public/#" target="_blank">延迟赔偿</a></dd>
					<dd><a href="/Public/#" target="_blank">7天无理由退换货</a></dd>
					<dd><a href="/Public/#" target="_blank">投诉维权</a></dd>
				</dl>
				<dl class="fitment_tg">
					<dt>
						团购知识
					</dt>
					<dd><a href="/Public/#" target="_blank">团购知识</a></dd>
					<dd><a href="/Public/#" target="_blank">团购活动</a></dd>
					<dd><a href="/Public/#" target="_blank">团购价格</a></dd>
				</dl>
				<dl class="unique_serve">
					<dt>
						恋家定制服务
					</dt>
					<dd><a href="/Public/#" target="_blank">价格特搜</a></dd>
					<dd><a href="/Public/#" target="_blank">装修顾问</a></dd>
				</dl>
				<dl class="other_map">
					<dt>
						你身边的恋家
					</dt>
					<dd>
						<a href="/Public/#" target="_blank">
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
					<a href="/Public/#" target="_blank">关于我们</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">联系我们</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">媒体报道</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">法律声明</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">企业文化</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">友情链接</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">加入我们</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">诚聘英才</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">网站地图</a>
					<span class="split">|</span>
					<a href="/Public/#" target="_blank">帮助中心</a>
				</p>
			</div>
			<p>恋家网 版权所有Copyright © 2017-2028 www.lian.com All rights reserved</p>
			<p>浙ICP备13002314号 浙B2-20090108 组织机构代码证：66439109—1</p>
			<p>中国互联网协会信用评价中心网信认证 网信编码:1664391091 举报电话：021-69108618</p>
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
    <script type="text/javascript" src="/Public/js/common.js"></script>
    <script>
    	$(".tenders_zb_list li").click(function(){
    		var index = $(this).index();
    		$(this).addClass("current").siblings().removeClass("current");
    		$(".tenders_zb_box_con").eq(index).css({"display":"block"}).siblings().css({"display":"none"});
    	});
    </script>
</body>
</html>