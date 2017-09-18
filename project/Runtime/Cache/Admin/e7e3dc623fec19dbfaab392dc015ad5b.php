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
        装修公司管理
        <small>添加装修公司属性</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修公司</a></li>
        <li class="active">添加装修公司属性</li>
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
              <h3 class="box-title">添加</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/company/docom" method="post" enctype="multipart/form-data">
              <input type="hidden" name="gid" value="<?php echo ($id); ?>">
            
                <div class="form-group">
                  <label for="exampleInputPassword4">装修类型</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="d_type">
                      <option value="1">新房</option>
                      <option value="2">二手房</option>
                      <option value="3">大宅别墅</option>
                      <option value="4">局部软装</option>
                      <option value="5">工装</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修房型</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="h_type">
                      <option value="1">一房</option>
                      <option value="2">二房</option>
                      <option value="3">三房</option>
                      <option value="4">四房</option>
                      <option value="5">复式</option>
                      <option value="6">别墅</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">规模</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="h_type">
                      <option value="1">10万元以下</option>
                      <option value="2">10-50万</option>
                      <option value="3">50-100万</option>
                      <option value="4">100-500万</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">服务保障</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="server">
                      <option value="1">环保装修</option>
                  </select>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
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