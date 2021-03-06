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

<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        工长
        <small>修改工长</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">工长</a></li>
        <li class="active">修改工长</li>
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
            <form role="form" action="/admin/examine/update?id=<?php echo ($res["uid"]); ?>" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">姓名/企业名</label>
                  <input style="width:50%;" type="text" name="e_name" required="required" class="form-control" value="<?php echo ($res["e_name"]); ?>" id="exampleInputName" placeholder="请输入姓名/企业名">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">证件号码</label>
                  <input style="width:50%;" type="text" name="number" required="required" class="form-control" value="<?php echo ($res["number"]); ?>" id="exampleInputEmail1" placeholder="请输入证件号码">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">手机号码</label>
                  <input style="width:50%;" type="text" required="required" name="e_phone" value="<?php echo ($res["e_phone"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号">
                </div>
                <br/>
                  <label for="exampleInputPassword4">审核状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="audit">
                      <option value="1" <?php if($res['audit']==1){ ?> selected="selected" <?php } ?> >未通过</option>
                      <option value="2" <?php if($res['audit']==2){ ?> selected="selected" <?php } ?> >已通过</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">证件图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic" id=""></a>
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