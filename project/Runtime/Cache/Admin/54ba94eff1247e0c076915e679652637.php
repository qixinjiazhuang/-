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
        招标管理
        <small>修改招标</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">招标</a></li>
        <li class="active">修改招标</li>
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
            <form role="form" action="/admin/tender/update?id=<?php echo ($res["id"]); ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="uid" value="<?php echo ($res["uid"]); ?>">
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="<?php echo ($res["title"]); ?>" id="exampleInputName" placeholder="请输入标题">
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
                  <input style="width:50%;" type="text" required="required" name="name" value="<?php echo ($res["name"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入联系人">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">手机号码</label>
                  <input style="width:50%;" type="text" required="required" name="phone" value="<?php echo ($res["phone"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号码">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">详细地址</label>
                  <input style="width:50%;" type="text" required="required" name="address" value="<?php echo ($res["address"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入详细地址">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修面积</label>
                  <input style="width:50%;" type="text" required="required" name="acreage" value="<?php echo ($res["acreage"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入装修面积(平方)">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">所在小区</label>
                  <input style="width:50%;" type="text" required="required" name="cellname" value="<?php echo ($res["cellname"]); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入所在小区">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">装修方式</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="method">
                      <option value="1" <?php if($res['method'] == 1){ ?> selected="selected" <?php } ?> >全包</option>
                      <option value="2" <?php if($res['method'] == 2){ ?> selected="selected" <?php } ?> >半包</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修类型</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="type">
                      <option value="1" <?php if($res['type'] == 1){ ?> selected="selected" <?php } ?> >家装</option>
                      <option value="2" <?php if($res['type'] == 2){ ?> selected="selected" <?php } ?> >公装</option>
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
                      <option value="1" <?php if($res['style'] == 1){ ?> selected="selected" <?php } ?> >中式</option>
                      <option value="2" <?php if($res['style'] == 2){ ?> selected="selected" <?php } ?> >欧式</option>
                      <option value="3" <?php if($res['style'] == 3){ ?> selected="selected" <?php } ?> >美式</option>
                      <option value="4" <?php if($res['style'] == 4){ ?> selected="selected" <?php } ?> >简约</option>
                      <option value="5" <?php if($res['style'] == 5){ ?> selected="selected" <?php } ?> >现代</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">装修预算</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="budget">
                      <option value="1" <?php if($res['budget'] == 1){ ?> selected="selected" <?php } ?> >三万以下</option>
                      <option value="2" <?php if($res['budget'] == 2){ ?> selected="selected" <?php } ?> >三万-五万</option>
                      <option value="3" <?php if($res['budget'] == 3){ ?> selected="selected" <?php } ?> >五万-八万</option>
                      <option value="4" <?php if($res['budget'] == 4){ ?> selected="selected" <?php } ?> >八万-十二万</option>
                      <option value="5" <?php if($res['budget'] == 5){ ?> selected="selected" <?php } ?> >十二万以上</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">服务要求</label> <br/>
                  <textarea style="resize: none;width:50%;height:80px;" name="server" id="" cols="30" rows="10"><?php echo ($res["server"]); ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">跟进状态</label>

                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1" <?php if($res['status'] == 1){ ?> selected="selected" <?php } ?> >未处理</option>
                      <option value="2" <?php if($res['status'] == 2){ ?> selected="selected" <?php } ?> >意向</option>
                      <option value="3" <?php if($res['status'] == 3){ ?> selected="selected" <?php } ?> >以签</option>
                      <option value="4" <?php if($res['status'] == 4){ ?> selected="selected" <?php } ?> >无效</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">审核</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="examine">
                      <option value="1" <?php if($res['examine'] == 1){ ?> selected="selected" <?php } ?> >发布</option>
                      <option value="2" <?php if($res['examine'] == 2){ ?> selected="selected" <?php } ?> >待审</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">户型图</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="pic" id=""></a>
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