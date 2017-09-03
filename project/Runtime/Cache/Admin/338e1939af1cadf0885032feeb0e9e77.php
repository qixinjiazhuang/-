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
        <small>添加装修保</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">装修保</a></li>
        <li class="active">添加装修保</li>
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
            <form role="form" action="/admin/insurance/insert" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">业主用户名</label>
                  <input style="width:50%;" type="text" name="member" required="required" class="form-control" value="" id="did" placeholder="请输入业主用户名">
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputName">委托装修公司</label>
                    <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="gid">
                        <?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?> 
                    </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">联系人</label>
                  <input style="width:50%;" type="text" name="i_name" required="required" class="form-control" value="" id="exampleInputEmail1" placeholder="请输入联系人">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">联系电话</label>
                  <input style="width:50%;" type="text" required="required" name="i_phone" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入联系电话">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1">状态1</option>
                      <option value="2">状态2</option>
                      <option value="3">状态3</option>
                      <option value="4">状态4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">备注</label><br/>
                  <textarea style="resize: none;width:50%;height:80px;" required="required" name="content" id="" cols="30" rows="10"></textarea>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button id="btn" type="submit" class="btn btn-primary">添加</button>
                <script>

                    var app1 = false;

                    $('#did').on('blur',function(){

                         //获取val
                        var val = $('#did').val();
                        
                        //发送ajax
                        $.post("<?php echo U('admin/insurance/ajax');?>",{name:val},function(data){
                            console.log(data);
                            if(data==1){
                                $('#sid').css('display','none');
                                $('#sid').html('');
                                app1 = true;
                            }
                            //判断
                            if(data==2){
                                $('#sid').css('display','block');
                                $('#sid').html('该用户不存在,请重新输入');
                            }
                            
                        });
                    });

                    $('#btn').on('click',function(){
                        if(!app1){
                            return false;
                        }else{
                            return true;
                        }
                    });
                   
                </script>
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