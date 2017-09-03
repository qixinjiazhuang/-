<?php if (!defined('THINK_PATH')) exit();?>
  <link rel="stylesheet" href="/Public/dist/css/AdminLTE.min.css">
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
        <small>修改装修公司</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修公司</a></li>
        <li class="active">修改装修公司</li>
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
            <form role="form" action="/admin/company/update" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo ($res["uid"]); ?>">
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">账号</label>
                  <input style="width:50%;" type="text" name="name" required="required" class="form-control" value="<?php echo ($res["name"]); ?>" id="exampleInputName" placeholder="请输入用户名">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">公司名称</label>
                  <input style="width:50%;" type="text" name="c_name" required="required" class="form-control" value="<?php echo ($res["c_name"]); ?>" id="exampleInputEmail1" placeholder="请输入公司名称">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">公司简介</label>
                  <input style="width:50%;" type="text" required="required" name="introduce" value="<?php echo ($res["introduce"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入公司简介">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">联系人</label>
                  <input style="width:50%;" type="text" required="required" name="contacts" value="<?php echo ($res["contacts"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入联系人">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">QQ</label>
                  <input style="width:50%;" type="text" required="required" name="qq" value="<?php echo ($res["qq"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入QQ号">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">手机号码</label>
                  <input style="width:50%;" type="text" required="required" name="c_phone" value="<?php echo ($res["c_phone"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号">
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
                  <label for="exampleInputPassword4">等级</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="level">
                      <option value="1" <?php if($res['level']==1){ ?> selected="selected" <?php } ?> >普通级别</option>
                      <option value="2" <?php if($res['level']==2){ ?> selected="selected" <?php } ?> >钻石级别</option>
                  </select>
                </div>
                <div class="form-group">
                <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputPassword4">状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1" <?php if($res['status']==1){ ?> selected="selected" <?php } ?> >正常</option>
                      <option value="2" <?php if($res['status']==2){ ?> selected="selected" <?php } ?> >禁言</option>
                      <option value="2" <?php if($res['status']==3){ ?> selected="selected" <?php } ?> >锁定</option>
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