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
        招标管理
        <small>添加招标</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo U('/admin/index/index');?>"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="/admin/tender/index">招标</a></li>
        <li class="active">添加招标</li>
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
            <form role="form" action="/admin/tender/insert" method="post" enctype="multipart/form-data">
              
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="" id="exampleInputName" placeholder="请输入标题">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">会员</label>
                  <input id="did" style="width:50%;" type="text" name="member" required="required" class="form-control" value="" placeholder="请输入会员用户名">
                </div>
                <script>

                    var app1 = false;

                    $('#did').on('blur',function(){

                         //获取val
                        var val = $('#did').val();
                        
                        //发送ajax
                        $.post("<?php echo U('admin/tender/ajax');?>",{name:val},function(data){
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
                   
                </script> 
                 <div class="form-group">
                  <label for="exampleInputPassword3">联系人</label>
                  <input style="width:50%;" type="text" required="required" name="name" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入联系人">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">手机号码</label>
                  <input style="width:50%;" type="text" required="required" name="phone" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号码">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">详细地址</label>
                  <input style="width:50%;" type="text" required="required" name="address" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入详细地址">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修面积</label>
                  <input style="width:50%;" type="text" required="required" name="acreage" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入装修面积(平方)">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">所在小区</label>
                  <input style="width:50%;" type="text" required="required" name="cellname" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入所在小区">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">装修公司</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="cid">
                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">装修方式</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="method">
                      <option value="1">全包</option>
                      <option value="2">半包</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修类型</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="type">
                      <option value="1">家装</option>
                      <option value="2">公装</option>
                  </select>
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
                  <label for="exampleInputPassword4">风格</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="style">
                      <option value="1">中式</option>
                      <option value="2">欧式</option>
                      <option value="3">美式</option>
                      <option value="4">简约</option>
                      <option value="5">现代</option>
                  </select>
                </div>
                 <br/>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修预算</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="budget">
                      <option value="1">三万以下</option>
                      <option value="2">三万-五万</option>
                      <option value="3">五万-八万</option>
                      <option value="4">八万-十二万</option>
                      <option value="5">十二万以上</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">服务要求</label> <br/>
                  <textarea style="resize: none;width:50%;height:80px;" required="required" name="server" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">跟进状态</label>

                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1">未处理</option>
                      <option value="2">意向</option>
                      <option value="2">以签</option>
                      <option value="2">无效</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">审核</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="examine">
                      <option value="1">发布</option>
                      <option value="2">待审</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">户型图</label><br/>
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