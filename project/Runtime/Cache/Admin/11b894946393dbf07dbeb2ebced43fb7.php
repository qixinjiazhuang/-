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
<script type="text/javascript"> 
function DateSelector(selYear, selMonth, selDay) { 
this.selYear = selYear; 
this.selMonth = selMonth; 
this.selDay = selDay; 
this.selYear.Group = this; 
this.selMonth.Group = this; 
// 给年份、月份下拉菜单编辑处理onchange事件的函数 
if (window.document.all != null) // IE 
{ 
this.selYear.attachEvent("onchange", DateSelector.Onchange); 
this.selMonth.attachEvent("onchange", DateSelector.Onchange); 
} 
else // Firefox 
{ 
this.selYear.addEventListener("change", DateSelector.Onchange, false); 
this.selMonth.addEventListener("change", DateSelector.Onchange, false); 
} 
if (arguments.length == 4) // 如果传入参数个数为4，最后一个参数必须为Date对象 
this.InitSelector(arguments[3].getFullYear(), arguments[3].getMonth() + 1, arguments[3].getDate()); 
else if (arguments.length == 6) // 如果传入参数个数为6，最后三个参数必须为初始的年月日数值 
this.InitSelector(arguments[3], arguments[4], arguments[5]); 
else // 默认使用当前日期 
{ 
var dt = new Date(); 
this.InitSelector(dt.getFullYear(), dt.getMonth() + 1, dt.getDate()); 
} 
} 
// 增加一个最大年份的属性 
DateSelector.prototype.MinYear = 1900; 
// 增加一个最大年份的属性 
DateSelector.prototype.MaxYear = (new Date()).getFullYear(); 
// 初始化年份 
DateSelector.prototype.InitYearSelect = function () { 
// 循环编辑OPION元素到年份select对象中 
for (var i = this.MaxYear; i >= this.MinYear; i--) { 
// 新建一个OPTION对象 
var op = window.document.createElement("OPTION"); 
// 设置OPTION对象的值 
op.value = i; 
// 设置OPTION对象的内容 
op.innerHTML = i; 
// 编辑到年份select对象 
this.selYear.appendChild(op); 
} 
} 
// 初始化月份 
DateSelector.prototype.InitMonthSelect = function () { 
// 循环编辑OPION元素到月份select对象中 
for (var i = 1; i < 13; i++) { 
// 新建一个OPTION对象 
var op = window.document.createElement("OPTION"); 
// 设置OPTION对象的值 
op.value = i; 
// 设置OPTION对象的内容 
op.innerHTML = i; 
// 编辑到月份select对象 
this.selMonth.appendChild(op); 
} 
} 
// 根据年份与月份获取当月的天数 
DateSelector.DaysInMonth = function (year, month) { 
var date = new Date(year, month, 0); 
return date.getDate(); 
} 
// 初始化天数 
DateSelector.prototype.InitDaySelect = function () { 
// 使用parseInt函数获取当前的年份和月份 
var year = parseInt(this.selYear.value); 
var month = parseInt(this.selMonth.value); 
// 获取当月的天数 
var daysInMonth = DateSelector.DaysInMonth(year, month); 
// 清空原有的选项 
this.selDay.options.length = 0; 
// 循环编辑OPION元素到天数select对象中 
for (var i = 1; i <= daysInMonth; i++) { 
// 新建一个OPTION对象 
var op = window.document.createElement("OPTION"); 
// 设置OPTION对象的值 
op.value = i; 
// 设置OPTION对象的内容 
op.innerHTML = i; 
// 编辑到天数select对象 
this.selDay.appendChild(op); 
} 
} 
// 处理年份和月份onchange事件的方法，它获取事件来源对象（即selYear或selMonth） 
// 并调用它的Group对象（即DateSelector实例，请见构造函数）提供的InitDaySelect方法重新初始化天数 
// 参数e为event对象 
DateSelector.Onchange = function (e) { 
var selector = window.document.all != null ? e.srcElement : e.target; 
selector.Group.InitDaySelect(); 
} 
// 根据参数初始化下拉菜单选项 
DateSelector.prototype.InitSelector = function (year, month, day) { 
// 由于外部是可以调用这个方法，因此我们在这里也要将selYear和selMonth的选项清空掉 
// 另外因为InitDaySelect方法已经有清空天数下拉菜单，因此这里就不用重复工作了 
this.selYear.options.length = 0; 
this.selMonth.options.length = 0; 
// 初始化年、月 
this.InitYearSelect(); 
this.InitMonthSelect(); 
// 设置年、月初始值 
this.selYear.selectedIndex = this.MaxYear - year; 
this.selMonth.selectedIndex = month - 1; 
// 初始化天数 
this.InitDaySelect(); 
// 设置天数初始值 
this.selDay.selectedIndex = day - 1; 
} 
</script> 
<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        会员
        <small>编辑会员</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/index') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">会员</a></li>
        <li class="active">编辑会员</li>
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
              <h3 class="box-title">编辑</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/member/update?id=<?php echo ($data['id']); ?>" method="post" enctype="multipart/form-data">
        
              <div class="box-body">
      
                <div class="form-group">
                  <label for="exampleInputName">账号</label>
                  <input style="width:50%;" type="text" name="name" required="required" class="form-control" value="<?php echo ($data['name']); ?>" id="exampleInputName" placeholder="请输入用户名">
                </div>
                <span id="spn" class="err" style="display:'none'; color:red; font-size:"></span>
                <div class="form-group">
                  <label for="exampleInputEmail1">邮箱</label>
                  <input style="width:50%;" type="email" name="email" required="required" class="form-control" value="<?php echo ($data['email']); ?>" id="exampleInputEmail1" placeholder="请输入邮箱地址">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">手机号</label>
                  <input style="width:50%;" type="text" required="required" name="phone" value="<?php echo ($data['phone']); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入手机号">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword3">生日</label><br/>
                  <select style="width:9%;float:left;" required="required" name="year" class="form-control" id="selYear"><option selected="selected" value="<?php echo ($data['year']); ?>"><?php echo ($data['year']); ?></option></select>&nbsp; &nbsp;
                  <select style="width:9%;float:left;" required="required" name="month"  class="form-control" id="selMonth"><option selected="selected"value="<?php echo ($data['month']); ?>"><?php echo ($data['month']); ?></option></select>&nbsp; &nbsp;
                  <select style="width:9%;float:left;" required="required" name="day"  class="form-control" id="selDay"><option selected="selected" value="<?php echo ($data['day']); ?>"><?php echo ($data['day']); ?></option></select>&nbsp; &nbsp;
                      <script type="text/javascript"> 
                      var selYear = window.document.getElementById("selYear"); 
                      var selMonth = window.document.getElementById("selMonth"); 
                      var selDay = window.document.getElementById("selDay"); 
                      // 新建一个DateSelector类的实例，将三个select对象传进去 
                      new DateSelector(selYear, selMonth, selDay, 2017, 1, 1); 
                      </script> 
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword3">真实姓名</label>
                  <input style="width:50%;" type="text" required="required" name="truename" value="<?php echo ($data['truename']); ?>" class="form-control" id="exampleInputPassword3" placeholder="请输入真实姓名">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">状态</label>
                  <select style="width:50%;" class="form-control" required="required" id="exampleInputPassword4" name="status">
                      <option value="1" <?php if($data['status'] == 1){ echo 'selected="selected"'; } ?> >正常</option>
                      <option value="2" <?php if($data['status'] == 2){ echo 'selected="selected"'; } ?> >禁言</option>
                      <option value="3" <?php if($data['status'] == 3){ echo 'selected="selected"'; } ?> >锁定</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">编辑</button>
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