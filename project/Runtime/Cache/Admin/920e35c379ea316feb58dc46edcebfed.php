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
        设计师管理
        <small>添加设计师</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">设计师</a></li>
        <li class="active">添加设计师</li>
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
            <form role="form" action="/admin/designer/insert" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">账号</label>
                  <input style="width:50%;" type="text" name="name" required="required" class="form-control" value="" id="exampleInputName" placeholder="请输入用户名">
                </div>
                 <div class="form-group">
                  <label for="exampleInputName">密码</label>
                  <input style="width:50%;" type="text" name="password" required="required" class="form-control" value="" id="exampleInputName" placeholder="请输入密码">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">邮箱</label>
                  <input style="width:50%;" type="email" name="email" required="required" class="form-control" value="" id="exampleInputEmail1" placeholder="请输入邮箱地址">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">真实姓名</label>
                  <input style="width:50%;" type="text" required="required" name="truename" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入真实姓名">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">毕业院校</label>
                  <input style="width:50%;" type="text" required="required" name="school" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入毕业院校">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">装修公司</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="gid">
                  <?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">QQ</label>
                  <input style="width:50%;" type="text" required="required" name="qq" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入QQ号">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">服务理念</label>
                  <input style="width:50%;" type="text" required="required" name="server" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入服务理念">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">简介</label>
                  <input style="width:50%;" type="text" required="required" name="introduce" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入简介">
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
                  <label for="exampleInputPassword4">装修风格</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="concept">
                      <option value="1">中式</option>
                      <option value="2">欧式</option>
                      <option value="3">美式</option>
                      <option value="4">简约</option>
                      <option value="5">现代</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">头像</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic" id=""></a>
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