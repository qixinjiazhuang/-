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
        轮播图
        <small>修改轮播图</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">轮播图</a></li>
        <li class="active">修改</li>
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
            <div id="sid" style="display:none" class="alert alert-danger">
            </div>
            <form role="form" action="/admin/images/update?id=<?php echo ($data["id"]); ?>" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">轮播标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="<?php echo ($data["title"]); ?>" placeholder="请输入轮播标题">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">轮播图位置</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="type" >
                      <option value="1" <?php if($data['type'] == 1){?> selected="selected" <?php } ?> >顶部轮播图</option>
                      <option value="2" <?php if($data['type'] == 2){?> selected="selected" <?php } ?> >案例轮播图</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status" >
                      <option value="1" <?php if($data['status'] == 1){?> selected="selected" <?php } ?> >显示</option>
                      <option value="2" <?php if($data['status'] == 2){?> selected="selected" <?php } ?> >隐藏</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">logo图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="logo" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">展示LOGO</label><br/>
                <img style="width:230px;height:85px;" src="/Uploads<?php echo ($data["logo"]); ?>" alt="">
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="btn" type="submit" class="btn btn-primary">修改</button>
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