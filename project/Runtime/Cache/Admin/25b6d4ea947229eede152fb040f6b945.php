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

<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        整体装套餐
        <small>添加套餐</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">套餐</a></li>
        <li class="active">添加套餐</li>
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
            <form role="form" action="/admin/renovation/insert" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input style="width:50%;" type="text" name="title" required="required" class="form-control" value="" id="exampleInputName" placeholder="请输入标题">
                </div>
                 <div class="form-group">
                  <label for="exampleInputName">单价</label>
                  <input style="width:50%;" type="text" name="page" required="required" class="form-control" value="" id="exampleInputName" placeholder="请输入单价">
                </div>
                 <div class="form-group">
                  <div class="form-group">
                  <label for="exampleInputPassword1">展示图</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="bpic" id=""></a>
                </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword3">简介</label>
                  <input style="width:50%;" type="text" required="required" name="introduction" value="" class="form-control" id="exampleInputPassword3" placeholder="请输入简介">
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
                <h4>选择主材</h4><br>
                <div class="form-group">
                  <label for="exampleInputPassword4">瓷砖</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="ceramic">
                      <?php if(is_array($ceramic)): foreach($ceramic as $key=>$c): ?><option value="<?php echo ($c["name"]); ?>"><?php echo ($c["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">橱柜</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="cupboard">
                      <?php if(is_array($cupboard)): foreach($cupboard as $key=>$a): ?><option value="<?php echo ($a["name"]); ?>"><?php echo ($a["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">内门</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="door">
                      <?php if(is_array($door)): foreach($door as $key=>$d): ?><option value="<?php echo ($d["name"]); ?>"><?php echo ($d["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">地板</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="floor">
                    <?php if(is_array($floor)): foreach($floor as $key=>$f): ?><option value="<?php echo ($f["name"]); ?>"><?php echo ($f["name"]); ?></option><?php endforeach; endif; ?> 
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">卫浴</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="bath">
                      <?php if(is_array($batn)): foreach($batn as $key=>$b): ?><option value="<?php echo ($b["name"]); ?>"><?php echo ($b["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">吊顶</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="ceiling">
                      <?php if(is_array($ceiling)): foreach($ceiling as $key=>$g): ?><option value="<?php echo ($g["name"]); ?>"><?php echo ($g["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">开关</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="switch">
                     <?php if(is_array($switch)): foreach($switch as $key=>$s): ?><option value="<?php echo ($s["name"]); ?>"><?php echo ($s["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">油漆</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="paint">
                      <?php if(is_array($paint)): foreach($paint as $key=>$p): ?><option value="<?php echo ($p["name"]); ?>"><?php echo ($p["name"]); ?></option><?php endforeach; endif; ?>
                  </select>
                </div>
                <br>
                <h4>设置展示图</h4><br>
                <div class="form-group">
                  <label for="exampleInputPassword1">餐厅图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="rest_pic" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">书房图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="study_pic" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">客厅图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="living_pic" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">主卧图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="bed_pic" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">次卧图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="sleep_pic" id=""></a>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">厨房图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="kitchen_pic" id=""></a>
                </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">卫生间图片</label><br/>
                  <a href="javascript:;" style="background-color:#33AECC;" class="file">选择文件<input type="file" name="bath_pic" id=""></a>
                </div> 
                
                <br/>
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