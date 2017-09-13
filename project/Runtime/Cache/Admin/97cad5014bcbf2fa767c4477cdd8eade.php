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
        案例管理
        <small>添加案例</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">案例管理</a></li>
        <li class="active">添加案例</li>
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
            <div id="sid" style="display:none" class="alert alert-danger">
            </div>
            <form role="form" action="/admin/case/update?id=<?php echo ($res["id"]); ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="<?php echo ($res["title"]); ?>" placeholder="请输入标题">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">城市</label><br/>
                  <select class="form-control" style="width:10%;float:left;" id="s_province" name="province"></select>  
                        <select class="form-control" style="width:10%;float:left;" id="s_city" name="city" ></select>  
                        <select class="form-control" style="width:10%;float:left;" id="s_county" name="county"></select>
                        <script class="resources library" src="/Public/area.js" type="text/javascript"></script>
                        <script type="text/javascript">_init_area();</script>
                </div>
                <br>
                 <div class="form-group">
                  <label for="exampleInputEmail1">所在小区</label>
                  <input style="width:50%;" type="text" name="cellname" required="required" class="form-control" value="<?php echo ($res["cellname"]); ?>" id="exampleInputEmail1" placeholder="请输入所在小区">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修公司</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="gid">
                    <?php if(is_array($com)): foreach($com as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($res['gid'] == $v['id']){ ?> selected="selected" <?php } ?> ><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">选择户型</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="type">
                      <option value="1" <?php if($res['type']==1){ ?> selected="selected" <?php } ?> >小户型</option>
                      <option value="2" <?php if($res['type']==2){ ?> selected="selected" <?php } ?> >二居</option>
                      <option value="3" <?php if($res['type']==3){ ?> selected="selected" <?php } ?> >三居</option>
                      <option value="4" <?php if($res['type']==4){ ?> selected="selected" <?php } ?> >四居</option>
                      <option value="5" <?php if($res['type']==5){ ?> selected="selected" <?php } ?> >复式</option>
                      <option value="6" <?php if($res['type']==6){ ?> selected="selected" <?php } ?> >别墅</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">审核</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="audit">
                      <option value="1" <?php if($res['audit']==1){ ?> selected="selected" <?php } ?> >未通过</option>
                      <option value="2" <?php if($res['audit']==2){ ?> selected="selected" <?php } ?>>已通过</option>
                      <option value="3" <?php if($res['audit']==3){ ?> selected="selected" <?php } ?> >拒绝</option>
                  </select>
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">展示图</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="logo[]" id=""/></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">户型图</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input multiple type="file" name="pic[]" id=""/></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">设计思路</label><br/>
                  <textarea style="resize: none;width:50%;height:80px;" required="required" name="idea" id="" cols="30" rows="10"><?php echo ($res["idea"]); ?></textarea>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="btn" type="submit" class="btn btn-primary">添加</button>
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