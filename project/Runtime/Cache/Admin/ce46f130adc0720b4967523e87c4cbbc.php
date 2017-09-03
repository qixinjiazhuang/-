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
        装修保管理
        <small>修改装修保</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修保</a></li>
        <li class="active">修改装修保</li>
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
            <form role="form" action="/admin/insurance/update?id=<?php echo ($res["id"]); ?>" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputName">委托装修公司</label>
                    <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="gid">
                        <?php if(is_array($com)): foreach($com as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($v['id'] == $res['gid']){ ?> selectede="selected" <?php } ?> ><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?> 
                    </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">联系人</label>
                  <input style="width:50%;" type="text" name="i_name" required="required" class="form-control" value="<?php echo ($res["i_name"]); ?>" id="exampleInputEmail1" placeholder="请输入联系人">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">联系电话</label>
                  <input style="width:50%;" type="text" required="required" name="i_phone" value="<?php echo ($res["i_phone"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入联系电话">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1" <?php if($res['status'] == 1){ ?> selectede="selected" <?php } ?> >状态1</option>
                      <option value="2" <?php if($res['status'] == 2){ ?> selectede="selected" <?php } ?> >状态2</option>
                      <option value="3" <?php if($res['status'] == 3){ ?> selectede="selected" <?php } ?> >状态3</option>
                      <option value="4" <?php if($res['status'] == 4){ ?> selectede="selected" <?php } ?> >状态4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">备注</label><br/>
                  <textarea style="resize: none;width:50%;height:80px;" required="required" name="content" id="" cols="30" rows="10"><?php echo ($res["content"]); ?></textarea>
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