<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\teacher_index.html";i:1521906607;}*/ ?>
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
    <li><a href="#">广场</a></li>
    <li><a href="#">下载</a></li>
    <li><a href="#">问答</a></li>
</ul>


<div style="padding-left: 80%;">
    <div class="btn-group">
        <button type="button" class="btn-xs btn-info dropdown-toggle" data-toggle="dropdown">
            <img alt="@<?php echo session('user_info.student_name'); ?>" class="avatar float-left mr-1"
                 src="/image/teacher_default.jpg" height="20" width="20">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header header-nav-current-user css-truncate">
                <strong class="css-truncate-target">教师登录<p style="color: lightseagreen">
                    <?php echo session('user_info.teacher_name'); ?></p></strong>
            </li>
            <li class="divider"></li> <!--分割线-->
            <li><a href="<?php echo url('teacher_personal_info'); ?>">个人信息</a></li>
            <li class="divider"></li> <!--分割线-->
            <li><a href="<?php echo url('management_work'); ?>">管理工作表</a></li>
            <li class="divider"></li> <!--分割线-->
            <li><a href="<?php echo url('management_class'); ?>">管理班级课表</a></li>
            <li class="divider"></li> <!--分割线-->
            <li><a href="<?php echo url('login_out'); ?>">退出登录</a></li>
        </ul>
    </div>
</div>
<!--教师工作表-->

<label class=""></label>
<table class="table table-bordered">
    <thead>
    <tr class="action">
        <th>工作时间</th>
        <th>星期一</th>
        <th>星期二</th>
        <th>星期三</th>
        <th>星期四</th>
        <th>星期五</th>
        <th>星期六</th>
        <th>星期日</th>
    </tr>
    </thead>
    <tbody>
    <tr class="success">
        <td>1</td>
        <td><?php echo (isset($mon['section_1']) && ($mon['section_1'] !== '')?$mon['section_1']:''); ?><a href="<?php echo url('note_student_list',array('id'=>1)); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($tue['section_1']) && ($tue['section_1'] !== '')?$tue['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($wed['section_1']) && ($wed['section_1'] !== '')?$wed['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($thu['section_1']) && ($thu['section_1'] !== '')?$thu['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($fri['section_1']) && ($fri['section_1'] !== '')?$fri['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($sat['section_1']) && ($sat['section_1'] !== '')?$sat['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
        <td><?php echo (isset($sun['section_1']) && ($sun['section_1'] !== '')?$sun['section_1']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a>&nbsp;<a
                href="<?php echo url('note_student_list',array('id'=>1)); ?>">工作进程</a></td>
    </tr>
    <tr class="info">
        <td>2</td>
        <td><?php echo (isset($mon['section_2']) && ($mon['section_2'] !== '')?$mon['section_2']:''); ?><a href="<?php echo url('note_student_list'); ?>">检查笔记</a></td>
        <td><?php echo (isset($tue['section_2']) && ($tue['section_2'] !== '')?$tue['section_2']:''); ?></td>
        <td><?php echo (isset($wed['section_2']) && ($wed['section_2'] !== '')?$wed['section_2']:''); ?></td>
        <td><?php echo (isset($thu['section_2']) && ($thu['section_2'] !== '')?$thu['section_2']:''); ?></td>
        <td><?php echo (isset($fri['section_2']) && ($fri['section_2'] !== '')?$fri['section_2']:''); ?></td>
        <td><?php echo (isset($sat['section_2']) && ($sat['section_2'] !== '')?$sat['section_2']:''); ?></td>
        <td><?php echo (isset($sun['section_2']) && ($sun['section_2'] !== '')?$sun['section_2']:''); ?></td>
    </tr>
    <tr class="success">
        <td>3</td>
        <td><?php echo (isset($mon['section_3']) && ($mon['section_3'] !== '')?$mon['section_3']:''); ?></td>
        <td><?php echo (isset($tue['section_3']) && ($tue['section_3'] !== '')?$tue['section_3']:''); ?></td>
        <td><?php echo (isset($wed['section_3']) && ($wed['section_3'] !== '')?$wed['section_3']:''); ?></td>
        <td><?php echo (isset($thu['section_3']) && ($thu['section_3'] !== '')?$thu['section_3']:''); ?></td>
        <td><?php echo (isset($fri['section_3']) && ($fri['section_3'] !== '')?$fri['section_3']:''); ?></td>
        <td><?php echo (isset($sat['section_3']) && ($sat['section_3'] !== '')?$sat['section_3']:''); ?></td>
        <td><?php echo (isset($sun['section_3']) && ($sun['section_3'] !== '')?$sun['section_3']:''); ?></td>
    </tr>
    <tr class="info">
        <td>4</td>
        <td><?php echo (isset($mon['section_4']) && ($mon['section_4'] !== '')?$mon['section_4']:''); ?></td>
        <td><?php echo (isset($tue['section_4']) && ($tue['section_4'] !== '')?$tue['section_4']:''); ?></td>
        <td><?php echo (isset($wed['section_4']) && ($wed['section_4'] !== '')?$wed['section_4']:''); ?></td>
        <td><?php echo (isset($thu['section_4']) && ($thu['section_4'] !== '')?$thu['section_4']:''); ?></td>
        <td><?php echo (isset($fri['section_4']) && ($fri['section_4'] !== '')?$fri['section_4']:''); ?></td>
        <td><?php echo (isset($sat['section_4']) && ($sat['section_4'] !== '')?$sat['section_4']:''); ?></td>
        <td><?php echo (isset($sun['section_4']) && ($sun['section_4'] !== '')?$sun['section_4']:''); ?></td>
    </tr>
    <tr>
        <td>午休</td>
    </tr>
    <tr class="success">
        <td>5</td>
        <td><?php echo (isset($mon['section_5']) && ($mon['section_5'] !== '')?$mon['section_5']:''); ?></td>
        <td><?php echo (isset($tue['section_5']) && ($tue['section_5'] !== '')?$tue['section_5']:''); ?></td>
        <td><?php echo (isset($wed['section_5']) && ($wed['section_5'] !== '')?$wed['section_5']:''); ?></td>
        <td><?php echo (isset($thu['section_5']) && ($thu['section_5'] !== '')?$thu['section_5']:''); ?></td>
        <td><?php echo (isset($fri['section_5']) && ($fri['section_5'] !== '')?$fri['section_5']:''); ?></td>
        <td><?php echo (isset($sat['section_5']) && ($sat['section_5'] !== '')?$sat['section_5']:''); ?></td>
        <td><?php echo (isset($sun['section_5']) && ($sun['section_5'] !== '')?$sun['section_5']:''); ?></td>
    </tr>
    <tr class="info">
        <td>6</td>
        <td><?php echo (isset($mon['section_6']) && ($mon['section_6'] !== '')?$mon['section_6']:''); ?></td>
        <td><?php echo (isset($tue['section_6']) && ($tue['section_6'] !== '')?$tue['section_6']:''); ?></td>
        <td><?php echo (isset($wed['section_6']) && ($wed['section_6'] !== '')?$wed['section_6']:''); ?></td>
        <td><?php echo (isset($thu['section_6']) && ($thu['section_6'] !== '')?$thu['section_6']:''); ?></td>
        <td><?php echo (isset($fri['section_6']) && ($fri['section_6'] !== '')?$fri['section_6']:''); ?></td>
        <td><?php echo (isset($sat['section_6']) && ($sat['section_6'] !== '')?$sat['section_6']:''); ?></td>
        <td><?php echo (isset($sun['section_6']) && ($sun['section_6'] !== '')?$sun['section_6']:''); ?></td>
    </tr>
    <tr class="success">
        <td>7</td>
        <td><?php echo (isset($mon['section_7']) && ($mon['section_7'] !== '')?$mon['section_7']:''); ?></td>
        <td><?php echo (isset($tue['section_7']) && ($tue['section_7'] !== '')?$tue['section_7']:''); ?></td>
        <td><?php echo (isset($wed['section_7']) && ($wed['section_7'] !== '')?$wed['section_7']:''); ?></td>
        <td><?php echo (isset($thu['section_7']) && ($thu['section_7'] !== '')?$thu['section_7']:''); ?></td>
        <td><?php echo (isset($fri['section_7']) && ($fri['section_7'] !== '')?$fri['section_7']:''); ?></td>
        <td><?php echo (isset($sat['section_7']) && ($sat['section_7'] !== '')?$sat['section_7']:''); ?></td>
        <td><?php echo (isset($sun['section_7']) && ($sun['section_7'] !== '')?$sun['section_7']:''); ?></td>
    </tr>
    <tr>
        <td>晚饭</td>
    </tr>
    <tr class="info">
        <td>8</td>
        <td><?php echo (isset($mon['section_8']) && ($mon['section_8'] !== '')?$mon['section_8']:''); ?></td>
        <td><?php echo (isset($tue['section_8']) && ($tue['section_8'] !== '')?$tue['section_8']:''); ?></td>
        <td><?php echo (isset($wed['section_8']) && ($wed['section_8'] !== '')?$wed['section_8']:''); ?></td>
        <td><?php echo (isset($thu['section_8']) && ($thu['section_8'] !== '')?$thu['section_8']:''); ?></td>
        <td><?php echo (isset($fri['section_8']) && ($fri['section_8'] !== '')?$fri['section_8']:''); ?></td>
        <td><?php echo (isset($sat['section_8']) && ($sat['section_8'] !== '')?$sat['section_8']:''); ?></td>
        <td><?php echo (isset($sun['section_8']) && ($sun['section_8'] !== '')?$sun['section_8']:''); ?></td>
    </tr>
    <tr class="success">
        <td>9</td>
        <td><?php echo (isset($mon['section_9']) && ($mon['section_9'] !== '')?$mon['section_9']:''); ?></td>
        <td><?php echo (isset($tue['section_9']) && ($tue['section_9'] !== '')?$tue['section_9']:''); ?></td>
        <td><?php echo (isset($wed['section_9']) && ($wed['section_9'] !== '')?$wed['section_9']:''); ?></td>
        <td><?php echo (isset($thu['section_9']) && ($thu['section_9'] !== '')?$thu['section_9']:''); ?></td>
        <td><?php echo (isset($fri['section_9']) && ($fri['section_9'] !== '')?$fri['section_9']:''); ?></td>
        <td><?php echo (isset($sat['section_9']) && ($sat['section_9'] !== '')?$sat['section_9']:''); ?></td>
        <td><?php echo (isset($sun['section_9']) && ($sun['section_9'] !== '')?$sun['section_9']:''); ?></td>
    </tr>
    <tr class="info">
        <td>10</td>
        <td><?php echo (isset($mon['section_10']) && ($mon['section_10'] !== '')?$mon['section_10']:''); ?></td>
        <td><?php echo (isset($tue['section_10']) && ($tue['section_10'] !== '')?$tue['section_10']:''); ?></td>
        <td><?php echo (isset($wed['section_10']) && ($wed['section_10'] !== '')?$wed['section_10']:''); ?></td>
        <td><?php echo (isset($thu['section_10']) && ($thu['section_10'] !== '')?$thu['section_10']:''); ?></td>
        <td><?php echo (isset($fri['section_10']) && ($fri['section_10'] !== '')?$fri['section_10']:''); ?></td>
        <td><?php echo (isset($sat['section_10']) && ($sat['section_10'] !== '')?$sat['section_10']:''); ?></td>
        <td><?php echo (isset($sun['section_10']) && ($sun['section_10'] !== '')?$sun['section_10']:''); ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>