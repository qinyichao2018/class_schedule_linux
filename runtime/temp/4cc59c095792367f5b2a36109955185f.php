<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\schedule_list.html";i:1522161138;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--下拉按钮-->

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <title>Title</title>
</head>
<body>
<ul class="nav nav-pills">
    <li><a href="<?php echo url('student_index'); ?>">返回</a></li>
</ul>

<h1>拥有的课表</h1>
<hr>
<div class="col-md-2">
    <p style="text-align: center">学校</p>
    <hr>
</div>
<div class="col-md-1">
    <p style="text-align: center">班级</p>
    <hr>
</div>
<div class="col-md-2">
    <p style="text-align: center">课程表名</p>
    <hr>
</div>
<div class="col-md-1">
    <p style="text-align: center">创建人</p>
    <hr>
</div>

<div class="col-md-2">
    <p style="text-align: center">最后更新</p>
    <hr>
</div>
<div class="col-md-4">
    <p style="text-align: center">操作</p>
    <hr>
</div>

<form method="post" action="">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?>


    <ul class="nav nav-pills">
        <?php if($vol['schedule_name'] != ''): ?>
        <li class="col-md-2" style="list-style-type: none"><p style="text-align: center"><?php echo $vol['school_name']; ?></p></li>
        <li class="col-md-1" style="list-style-type: none"><p style="text-align: center"><?php echo $vol['class_name']; ?>班</p></li>
        <li class="col-md-2" style="list-style-type: none"><p style="text-align: center"><?php echo $vol['schedule_name']; ?></p></li>
        <li class="col-md-1" style="list-style-type: none"><p style="text-align: center"><?php echo $vol['founder']; ?></p></li>
        <li class="col-md-2" style="list-style-type: none"><p style="text-align: center"><?php echo $vol['updated_at']; ?></p></li>

        <li class="col-md-1" style="list-style-type: none"><a style="text-align: center"
                                                              href="<?php echo url('edit_sche',array('if_default'=>'no','id'=>$vol['schedule_id'])); ?>">编辑</a>
        </li>
            <li class="col-md-1" style="list-style-type: none"><a style="text-align: center"
                                                                  onclick="delete_list(this,'<?php echo $vol['schedule_id']; ?>','<?php echo $default_schedule; ?>')"
                                                                  href="javascript:;">删除</a></li>

        <?php if($vol['schedule_id'] != $default_schedule): ?>
        <li class="col-md-1" style="list-style-type: none"><a style="text-align: center;width:100px"
                                                              onclick="enable(this,'<?php echo $vol['schedule_id']; ?>')"
                                                              href="javascript:;">启用默认</a></li>
        <?php endif; if($vol['schedule_id'] == $default_schedule): ?>
        <li class="col-md-1" style="list-style-type: none;height: 40px">
            <p style="color: #880000;line-height: 40px;background-color: #4288ce;text-align: center;">
                默认课表
            </p>
        </li>
        <?php endif; endif; ?>
    </ul>
    <hr>


    <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $page; ?>
    <hr>
</form>
</body>
<script>


    function enable(obj, id) {
        var url;
        url = window.location.href;
        $.get("<?php echo url('en_default'); ?>", {id: id});
        // alert('默认课表更改成功！');
        window.location.href = url; //允许用户进入后台
    }

    function delete_list(obj, id, flag1) {
        var url;
        url = window.location.href;

        if (flag1 == id) {
            alert('当前选中课表为默认课表，请解除默认再操作');
        } else {
            $.get("<?php echo url('delete_list'); ?>", {id: id});
            alert('删除成功');
            window.location.href = url; //允许用户进入后台
        }

    }
</script>
</html>