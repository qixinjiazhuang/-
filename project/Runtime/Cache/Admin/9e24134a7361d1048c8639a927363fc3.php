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
        装修案例管理
        <small>修改装修案例属性</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修案例</a></li>
        <li class="active">修改装修案例属性</li>
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
            <form role="form" action="/admin/case/updatecase?id=<?php echo ($data["id"]); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputPassword4">装修风格</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="style">
                      <option value="1" <?php if($data['style'] == 1){ ?> selected="selected" <?php } ?> >简约</option>
                      <option value="2" <?php if($data['style'] == 2){ ?> selected="selected" <?php } ?> >现代</option>
                      <option value="3" <?php if($data['style'] == 3){ ?> selected="selected" <?php } ?> >中式</option>
                      <option value="4" <?php if($data['style'] == 4){ ?> selected="selected" <?php } ?> >欧式</option>
                      <option value="5" <?php if($data['style'] == 5){ ?> selected="selected" <?php } ?> >美式</option>
                      <option value="6" <?php if($data['style'] == 6){ ?> selected="selected" <?php } ?> >田园</option>
                      <option value="7" <?php if($data['style'] == 7){ ?> selected="selected" <?php } ?> >地中海</option>
                      <option value="8" <?php if($data['style'] == 8){ ?> selected="selected" <?php } ?> >东南亚</option>
                      <option value="9" <?php if($data['style'] == 9){ ?> selected="selected" <?php } ?> >新古典主义</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">价格</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="page">
                      <option value="1" <?php if($data['page'] == 1){ ?> selected="selected" <?php } ?> >1-5万</option>
                      <option value="2" <?php if($data['page'] == 2){ ?> selected="selected" <?php } ?> >5-10万</option>
                      <option value="3" <?php if($data['page'] == 3){ ?> selected="selected" <?php } ?> >10-20万</option>
                      <option value="4" <?php if($data['page'] == 4){ ?> selected="selected" <?php } ?> >20-50万</option>
                      <option value="5" <?php if($data['page'] == 5){ ?> selected="selected" <?php } ?> >50-100万</option>
                      <option value="6" <?php if($data['page'] == 6){ ?> selected="selected" <?php } ?> >100-200万</option>
                      <option value="7" <?php if($data['page'] == 7){ ?> selected="selected" <?php } ?> >200万以上</option>
                  </select>
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