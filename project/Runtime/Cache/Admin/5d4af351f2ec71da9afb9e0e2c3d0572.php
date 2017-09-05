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

<link href="/Public/css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/css/global.css">
<link rel="stylesheet" href="/Public/css/dialog.css">
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/jquery.imgbox.pack.js"></script>
<script type="text/javascript" src="/Public/js/dialog.js"></script>

<style>

.page {
    margin: 10px 0;
    *zoom: 1;
}
.page:before,
.page:after {
    display: table;
    content: "";
}
.page:after {
    clear:both;
}
.page a,
.page span {
    float: left;
    margin-left: -1px;
    padding: 0 14px;
    height: 30px;
    line-height: 30px;
    color: #000;
    border-top: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    /*background-color: #4bbd00;*/
}
.page a:hover
 {
    text-decoration: none;
    background-color: #33AECC;
}
.page .current {
  border-top: 1px solid #387C0B;
}
.page .next,
.page .prev {
    font-family: "宋体";
    font-weight: bold;
}
.page .rows {
  border-right: 1px solid #CCCCCC;
}
a:link{text-decoration: none; color:blue; font-size: 14px; font-family: 微软雅黑;}
a:visited{ color:green;}
a:hover{text-decoration: underline; color:#09f; font-size: 19px;}
a:active{text-decoration: blink; color: yellow;}
</style>
<!-- Content Wrapper. Contains page content -->
  <div style="width:100%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        设计师管理
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">设计师管理</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看用户列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!--<div class="alert alert-danger">
                  
                </div>  -->  
            <form action="/admin/designer/index" method="get">
                <div class="row"> 
                    <!-- select -->
                    <div class="col-md-2">
                        <div class="form-group">
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-6">
                       <div class="input-group input-group">
                            <input value="" name="keywords" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat">搜索!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
              <table id="example2" class="table table-bordered table-hover" style="table-layout:fixed;">
                <thead>
                <tr>
                  <th style="text-align:center;">ID</th>
                  <th style="text-align:center;">城市</th>
                  <th style="text-align:center;">姓名</th>
                  <th style="text-align:center;">照片</th>
                  <th style="text-align:center;">QQ</th>
                  <th style="text-align:center;">手机</th>
                  <th style="text-align:center;">设计风格</th>
                  <th style="text-align:center;">毕业院校</th>
                  <th style="text-align:center;">所属公司</th>
                  <th style="text-align:center;">审核</th>
                  <th style="text-align:center;">状态</th> 
                  <th style="text-align:center;">操作</th>
                </tr>
                </thead>
                <tbody> 
                <?php if(is_array($res)): foreach($res as $key=>$v): if($v['delete']==1){ ?>
	                <tr class="parent">
	                  <td class="ids" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["uid"]); ?></td>
                    <td class="name" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["city"]); ?></td>
                    <td class="name" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["truename"]); ?></td>
                    <td class="name" style="text-overflow:ellipsis;text-align:center;"><a id="example<?php echo ($v["uid"]); ?>" href="/Uploads/<?php echo ($v["photo"]); ?>"><img style="width:50xp;height:50px;" src="/Uploads/<?php echo ($v["photo"]); ?>" /></a></td>
                     <script>
                      $(function(){
                            $("#example<?php echo ($v["uid"]); ?>").imgbox({
                                'speedIn'   : 0,
                                'speedOut'    : 0,
                                'alignment'   : 'center',
                                'overlayShow' : true,
                                'allowMultiple' : false
                            });
                        });
                     </script>
	                  <td class="name" style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["qq"]); ?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["phone"]); ?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?=$concept[$v['concept']]?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["school"]); ?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?php echo ($v["c_name"]); ?></td>
                    <td style="text-overflow:ellipsis;text-align:center;"><?=$audit[$v['audit']]?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;"><?=$sta[$v['status']]?></td>
	                  <td style="text-overflow:ellipsis;text-align:center;">
	                  	  <a href="/admin/designer/edit?id=<?php echo ($v["uid"]); ?>">编辑</a> | 
	                      <a onClick="javascript:del()" href="/admin/designer/delete?id=<?php echo ($v["uid"]); ?>">删除</a> 
                        <SCRIPT LANGUAGE=javascript>
                            function del() {
                            var msg = "您真的确定要删除？";
                                if (confirm(msg)==true){
                                        window.location.href="/admin/designer/delete?id=<?php echo ($v["uid"]); ?>"
                                    }else{
                                        window.location.href="/admin/designer/index"
                                }
                            }
                        </SCRIPT> 
	                  </td>
	                </tr>
                  <?php } endforeach; endif; ?>
	           

                </tbody>
                
              </table>
            <div class="page">
              <?php echo ($show); ?>
            </div>
            
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>