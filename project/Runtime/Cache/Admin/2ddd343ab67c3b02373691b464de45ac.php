<?php if (!defined('THINK_PATH')) exit();?>
  <!-- <link rel="stylesheet" href="/Public/dist/css/AdminLTE.css"> -->
  <link rel="stylesheet" href="/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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

<script src="/Public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/Public/jquery.cityselect.js"></script> 
<script type="text/javascript" src="/Public/jquery.cityselect.js"></script> 

<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        装修招标管理
        <small>查看招标</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修招标</a></li>
        <li class="active">查看招标</li>
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
              <h3 class="box-title">查看招标</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="sid" style="display:none" class="alert alert-danger">
            </div>
            <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">查看招标</div>
            <!-- Table -->
            <table class="table table-bordered table-hover" style="table-layout:fixed;">
              <tr> 
                <td style="text-overflow:ellipsis;text-align:center;">进度一</td>
                <td style="text-overflow:ellipsis;text-align:center;"><a href="/admin/process/see?pid=<?php echo ($pid); ?>&process=1">查看</a> | <a href="/admin/process/addjindu?pid=<?php echo ($pid); ?>&process=1">添加</a></td>
        
              </tr>
            <tr> 
                <td style="text-overflow:ellipsis;text-align:center;">进度二</td>
                <td style="text-overflow:ellipsis;text-align:center;"><a href="/admin/process/see?pid=<?php echo ($pid); ?>&process=2">查看</a> | <a href="/admin/process/addjindu?pid=<?php echo ($pid); ?>&process=2">添加</a></td>
            </tr>
            <tr>
                <td style="text-overflow:ellipsis;text-align:center;">进度三</td>
                <td style="text-overflow:ellipsis;text-align:center;"><a href="/admin/process/see?pid=<?php echo ($pid); ?>&process=3">查看</a> | <a href="/admin/process/addjindu?pid=<?php echo ($pid); ?>&process=3">添加</a></td>

            </tr>
            <tr>
                <td style="text-overflow:ellipsis;text-align:center;">进度四</td>
                <td style="text-overflow:ellipsis;text-align:center;"><a href="/admin/process/see?pid=<?php echo ($pid); ?>&process=4">查看</a> | <a href="/admin/process/addjindu?pid=<?php echo ($pid); ?>&process=4">添加</a></td>
            </tr>
            <tr>
                <td style="text-overflow:ellipsis;text-align:center;">进度五</td>
                <td style="text-overflow:ellipsis;text-align:center;"><a href="/admin/process/see?pid=<?php echo ($pid); ?>&process=5">查看</a> | <a href="/admin/process/addjindu?pid=<?php echo ($pid); ?>&process=5">添加</a></td>
            </tr>
              </tr>
            </table>
          </div>
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