<?php if (!defined('THINK_PATH')) exit();?>  <link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css">
 
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/Public/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/Public/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/Public/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/Public/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/Public/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link href="/Public/bootstrap/time/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

  <link href="/Public/bootstrap/css/main.css" rel="stylesheet">
  <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .file {
      position: relative;
      display: inline-block;
      background: #D0EEFF;
      border: 1px solid #99D3F5;
      border-radius: 4px;
      padding: 4px 12px;
      overflow: hidden;
      color: #1E88C7;
      text-decoration: none;
      text-indent: 0;
      line-height: 20px;
    }
    .file input {
      position: absolute;
      font-size: 100px;
      right: 0;
      top: 0;
      opacity: 0;
    }
    .file:hover {
      background: #AADFFD;
      border-color: #78C3F3;
      color: #004974;
      text-decoration: none;
    }
    #put{
      height: 300px;
      position: absolute;
      right: 50%;
      display: none;
      text-align: center;
    }
    #zhan{
      height: 140px;
    }
    
  </style>
<!-- Morris.js charts -->
<script src="/Public/bootstrap/js/raphael-min.js"></script>
<script src="/Public/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/Public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/Public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/Public/bootstrap/js/moment.min.js"></script>
<script src="/Public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/Public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/Public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/Public/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/Public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/dist/js/demo.js"></script>
<script src="/Public/bootstrap/time/js/bootstrap-datetimepicker.js"></script>
<script src="/Public/bootstrap/time/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>

<script src="/Public/bootstrap/js/jquery.cxselect.min.js"></script>
<script src="/Public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/Public/jquery.cityselect.js"></script> 
<script type="text/javascript" src="/Public/jquery.cityselect.js"></script> 

<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商家管理
        <small>修改商家</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商家</a></li>
        <li class="active">修改商家</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">修改</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/business/update" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo ($res["uid"]); ?>">
              <div class="box-body">
      
                 <div class="form-group">
                  <label for="exampleInputEmail1">店铺标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="<?php echo ($res["title"]); ?>" id="exampleInputEmail1" placeholder="请输入店铺标题">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">商店名称</label>
                  <input style="width:50%;" type="text" required="required" name="b_name" value="<?php echo ($res["b_name"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入商店名称">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">传真</label>
                  <input style="width:50%;" type="text" required="required" name="fax" value="<?php echo ($res["fax"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入传真">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">QQ</label>
                  <input style="width:50%;" type="text" required="required" name="qq" value="<?php echo ($res["qq"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入QQ号">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">手机号码</label>
                  <input style="width:50%;" type="text" required="required" name="b_phone" value="<?php echo ($res["b_phone"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">公司邮箱</label>
                  <input style="width:50%;" type="text" required="required" name="email" value="<?php echo ($res["email"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入公司邮箱">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">营业时间</label>
                  <input style="width:50%;" type="text" required="required" name="bushour" value="<?php echo ($res["bushour"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入营业时间">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">公告</label>
                  <input style="width:50%;" type="text" required="required" name="notice" value="<?php echo ($res["notice"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入公告">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">店铺介绍</label>
                  <input style="width:50%;" type="text" required="required" name="introduce" value="<?php echo ($res["introduce"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入店铺介绍">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">城市</label><br/>
                  <select class="form-control" style="width:10%;float:left;" id="s_province" name="province"></select>  
                        <select class="form-control" style="width:10%;float:left;" id="s_city" name="city" ></select>  
                        <select class="form-control" style="width:10%;float:left;" id="s_county" name="county"></select>
                        <script class="resources library" src="/Public/area.js" type="text/javascript"></script>
                        <script type="text/javascript">_init_area();</script>
                </div>
                <br/>
                <div class="form-group">
                  <label for="exampleInputPassword4">分类</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="type">
                      <option value="1"<?php if($res['b_type']==1){ ?> selected="selected" <?php } ?>>基础建材</option>
                      <option value="2"<?php if($res['b_type']==2){ ?> selected="selected" <?php } ?>>家具</option>
                      <option value="3"<?php if($res['b_type']==3){ ?> selected="selected" <?php } ?>>家电</option>
                      <option value="4"<?php if($res['b_type']==4){ ?> selected="selected" <?php } ?>>软装配饰</option>
                      <option value="5"<?php if($res['b_type']==5){ ?> selected="selected" <?php } ?>>其他</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">等级</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="level">
                      <option value="1"<?php if($res['level']==1){ ?> selected="selected" <?php } ?>>普通商家</option>
                      <option value="2"<?php if($res['level']==2){ ?> selected="selected" <?php } ?>>钻石商家</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">公司banner</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic1" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">长方形LOGO</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic2" id=""></a>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">正方形LOGO</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic3" id=""></a>
                </div>

              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">修改</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->  
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<!-- /.content-wrapper -->