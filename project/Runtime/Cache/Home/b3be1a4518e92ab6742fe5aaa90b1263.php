<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/member.css">
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
	<div class="memberwrap">
		<div class="head">
			<h1 class="logo">管理中心</h1>
			<div class="nav">
				<ul class="lt">
					<li><a href="/home/member/index">个人中心</a></li>
					<li><a href="javascript:;" class="on">设计师管理</a></li>
				</ul>
			</div>
		</div>
		<div class="content clearfix">
			<div class="cont_lt lt" id="ucenter_left_lay">
				<ul class="menu_lay">
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>资料设置</span>
						<ol class="sub_menu">
							<li><a href="/home/ucenter/designerIndex">资料设置</a></li>
						</ol>
					</li>
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>装修案例</span>
						<ol class="sub_menu">
							<li><a href="javascript:;" class="on">案例管理</a></li>
						</ol>
					</li>
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>文章管理</span>
						<ol class="sub_menu">
							<li><a href="/home/ucenter/blogIndex">文章管理</a></li>
						</ol>
					</li>
					<li class="menu open">
						<font class="menu_open_icon"></font>
						<span>预约管理</span>
						<ol class="sub_menu">
							<li><a href="/home/ucenter/Yuyue">预约管理</a></li>
							<li><a href="/home/ucenter/TenderIndex">我要投标</a></li>
							<li><a href="/home/ucenter/TenderLook">我的竞标</a></li>
						</ol>
					</li>
				</ul>
			</div>
			<div class="cont_rt rt">
				<div style="width:997px;margin:0 auto;" class="clearfix">
					<div class="ucenter_t">
						<ul>
							<li class="on"><a>修改案例</a></li>
						</ul>
						<span class="r"><a href="/home/ucenter/designerCaseIndex">案例管理</a></span>
					</div>
					<div class="ucenter_c">
						<form>
							<table cellspacing="0" cellpadding="0" class="form">
								<tbody>
									<tr>
										<th><span class="red">*</span>标题：</th>
										<td><input type="text" name="title" class="input" value="户型图设计"></td>
									</tr>
									<tr>
										<th>小区：</th>
										<td>
											<input type="text" name="xiaoqu" class="input" value="恒大未来城">
											<a class="sbtn" id="select_home_btn">选择小区</a>
										</td>
									</tr>
									<tr id="huxing">
										<th>户型图：</th>
										<td>
											<input type="text" name="huxing" class="input" value="恒大未来城：户型图">
											<img src="/Public/images/jj.jpg" id="select_huxing_photo" class="wh-30">
											<a class="sbtn" id="select_huxing_btn">选择户型图</a>
											<span class="text">
												<a onclick="choose(1)" class="blue">切换自己上传</a>
											</span>
										</td>
									</tr>
									<tr id="upload" style="display: none;">
										<th>上传户型图：</th>
										<td>
											<img src="/Public/images/head.jpg" class="wh-30">
											<input type="file" name="file" class="input">
											<span class="text">
												<a onclick="choose(2)" class="blue">切换选择户型</a>
											</span>
										</td>
									</tr>
									<tr>
										<th>户型：</th>
										<td>
											<ul class="group-list">
												<li>
													<label title="小户型">
														<input type="radio" name="hx" checked="checked">&nbsp;小户型
													</label>
												</li>
												<li>
													<label title="二居">
														<input type="radio" name="hx">&nbsp;二居
													</label>
												</li>
												<li>
													<label title="三居">
														<input type="radio" name="hx">&nbsp;三居
													</label>
												</li>
												<li>
													<label title="四居">
														<input type="radio" name="hx">&nbsp;四居
													</label>
												</li>
												<li>
													<label title="复式">
														<input type="radio" name="hx">&nbsp;复式
													</label>
												</li>
												<li>
													<label title="别墅">
														<input type="radio" name="hx">&nbsp;别墅
													</label>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>风格：</th>
										<td>
											<ul class="group-list">
												<li>
													<label title="简约">
														<input type="checkbox" name="fg" checked="checked">&nbsp;简约
													</label>
												</li>
												<li>
													<label title="现代">
														<input type="checkbox" name="fg" checked="checked">&nbsp;现代
													</label>
												</li>
												<li>
													<label title="中式">
														<input type="checkbox" name="fg" checked="checked">&nbsp;中式
													</label>
												</li>
												<li>
													<label title="欧式">
														<input type="checkbox" name="fg">&nbsp;欧式
													</label>
												</li>
												<li>
													<label title="美式">
														<input type="checkbox" name="fg">&nbsp;美式
													</label>
												</li>
												<li>
													<label title="田园">
														<input type="checkbox" name="fg">&nbsp;田园
													</label>
												</li>
												<li>
													<label title="地中海">
														<input type="checkbox" name="fg">&nbsp;地中海
													</label>
												</li>
												<li>
													<label title="东南亚">
														<input type="checkbox" name="fg">&nbsp;东南亚
													</label>
												</li>
												<li>
													<label title="新古典主义">
														<input type="checkbox" name="fg">&nbsp;新古典主义
													</label>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>价格：</th>
										<td>
											<ul class="group-list">
												<li>
													<label title="1-5万">
														<input type="radio" name="jg" checked="checked">&nbsp;1-5万
													</label>
												</li>
												<li>
													<label title="5-10万">
														<input type="radio" name="jg">&nbsp;5-10万
													</label>
												</li>
												<li>
													<label title="10-20万">
														<input type="radio" name="jg">&nbsp;10-20万
													</label>
												</li>
												<li>
													<label title="20-50万">
														<input type="radio" name="jg">&nbsp;20-50万
													</label>
												</li>
												<li>
													<label title="50-100万">
														<input type="radio" name="jg">&nbsp;50-100万
													</label>
												</li>
												<li>
													<label title="100-200万">
														<input type="radio" name="jg">&nbsp;100-200万
													</label>
												</li>
												<li>
													<label title="200万以上">
														<input type="radio" name="jg">&nbsp;200万以上
													</label>
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>设计思路：</th>
										<td>
											<textarea class="textarea"></textarea>
										</td>
									</tr>
									<tr>
										<th>SEO标题：</th>
										<td><input type="text" class="input"></td>
									</tr>
									<tr>
										<th>SEO关键字：</th>
										<td><input type="text" class="input"></td>
									</tr>
									<tr>
										<th>SEO描述：</th>
										<td>
											<textarea class="textarea"></textarea>
										</td>
									</tr>
									<tr>
										<th></th>
										<td><input type="submit" name="refer" class="green_btn" value="提交数据"></td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="/Public/js/common.js"></script>
	<script type="text/javascript">
		function choose(val){
			if(val == 1){
				$("#upload").removeAttr("style");
				$("#huxing").css('display','none'); 
			}else if(val == 2){
				$("#huxing").removeAttr("style");
				$("#upload").css('display','none'); 
			}
		}
	</script>
</body>
</html>