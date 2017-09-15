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
        预约管理
        <small>添加预约</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">预约</a></li>
        <li class="active">添加预约</li>
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
            <form role="form" action="/admin/designer/appinsert" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputPassword3">业主联系电话</label>
                  <input style="width:50%;" type="text" required="required" name="uphone" value="" class="form-control" id="did" placeholder="请输入业主">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword3">设计师联系电话</label>
                  <input style="width:50%;" type="text" required="required" name="gphone" value="" class="form-control" id="did2" placeholder="请输入设计师">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">联系人</label>
                  <input style="width:50%;" type="text" required="required" name="name" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入联系人">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">手机号</label>
                  <input style="width:50%;" type="text" required="required" name="phone" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号">
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
                  <label for="exampleInputPassword3">留言</label><br/>
                  <textarea style="resize:none;width:50%;height:100px;" name="content" id="" cols="30" rows="10"></textarea>
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
<script>
    var app1 = false;
    var app2 = false;
    $('#did').on('blur',function(){

        //获取val
        var val = $(this).val();
        $.post("<?php echo U('admin/designer/ajax');?>",{phone:val},function(data){
            if(data==2){
                $('#sid').css('display','block');
                $('#sid').html('该业主不存在,请重新输入');
            }
            if(data==1){
                $('#sid').css('display','none');
                $('#sid').html('');
                app1 = true;
            }
        });
    });

    $('#did2').on('blur',function(){
        //获取val
        var num = $(this).val();
        $.post("<?php echo U('admin/designer/ajax1');?>",{phone:num},function(data){
            if(data == 2){
                $('#sid').css('display','block');
                $('#sid').html('该设计师不存在，请重新输入');
            }else{
                $('#sid').css('display','none');
                $('#sid').html('');
                app2 = true;
            }
        });
    });

    $('#btn').on('click',function(){
        if(app1 && app2){
            return true;
        }else{
            return false;
        }
    });
</script>