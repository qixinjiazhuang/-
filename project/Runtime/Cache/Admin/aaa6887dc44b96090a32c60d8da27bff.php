<?php if (!defined('THINK_PATH')) exit();?>
  <link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css">
 
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
<style>

  .page {
    margin: 10px 0;
    *zoom: 1;
}
.page:before,
.page:after {
    display: table;
    content: "";
}
.page:after {
    clear:both;
}
.page a,
.page span {
    float: left;
    margin-left: -1px;
    padding: 0 14px;
    height: 30px;
    line-height: 30px;
    color: #000;
    border-top: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    /*background-color: #4bbd00;*/
}
.page a:hover
 {
    text-decoration: none;
    background-color: #33AECC;
}
.page .current {
  border-top: 1px solid #387C0B;
}
.page .next,
.page .prev {
    font-family: "宋体";
    font-weight: bold;
}
.page .rows {
  border-right: 1px solid #CCCCCC;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div style="width:100%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        会员管理
        <small>会员回收站</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">会员管理</a></li>
        <li class="active">会员回收站</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看用户会员回收站</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!--<div class="alert alert-danger">
                  
                </div>  -->  
            <form action="/admin/member/index" method="get">
                <div class="row"> 
                    <!-- select -->
                    <div class="col-md-2">
                        <div class="form-group">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-6">
                       <div class="input-group input-group">
                            <input value="" name="keywords" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat">搜索!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
              <table id="example2" class="table table-bordered table-hover" style="table-layout:fixed;">
                <thead>
                <tr>
                  <th style="text-align:center;">ID</th>
                  <th style="text-align:center;">会员名</th>
                  <th style="text-align:center;">类型</th>
                  <th style="text-align:center;">城市</th>
                  <th style="text-align:center;">邮箱</th>
                  <th style="text-align:center;">手机</th>
                  <th style="text-align:center;">生日</th>
                  <th style="text-align:center;">注册时间</th>
                  <th style="text-align:center;">最后登录时间</th>
                  <th style="text-align:center;">状态</th>   
                  <th style="text-align:center;">操作</th>
                </tr>
                </thead>
                <tbody> 
                <?php if(is_array($res)): foreach($res as $key=>$v): if($v['delete']==2){ ?>
	                <tr class="parent">
	                  <td class="ids" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["id"]); ?></td>
                    <td class="name" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["name"]); ?></td>
                    <td class="name" style="text-overflow:ellipsis;text-align:center;"><?=$arr[$v['type']]?></td>
	                  <td class="name" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["city"]); ?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["email"]); ?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["phone"]); ?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["birth"]); ?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;"><?=date('Y-m-d H:i:s',$v['regtime'])?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;"><?=date('Y-m-d H:i:s',$v['lastlogin'])?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?=$sta[$v['status']]?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;">
	                  	  <a href="/admin/member/recovery?id=<?php echo ($v["id"]); ?>">恢复</a>
	                  </td>
	                </tr>
                  <?php } endforeach; endif; ?>
	           

                </tbody>
                
              </table>
            <div class="page">
              <?php echo ($show); ?>
            </div>
            
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>