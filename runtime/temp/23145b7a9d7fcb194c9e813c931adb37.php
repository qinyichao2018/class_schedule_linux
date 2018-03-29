<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\index\note_student_list.html";i:1522159469;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <title>Title</title>
</head>
<body>
<ul class="nav nav-pills">
    <?php if($user_identity == '0'): ?>
    <li>
        <a href="<?php echo url('index'); ?>">
            返回
        </a>
    </li>
    <?php endif; if($user_identity == '1'): ?>
    <li>
        <a href="<?php echo url('user/student_index'); ?>">
            返回
        </a>
    </li>
    <?php endif; ?>
    <li>
        <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes2['week_name'],'student_name'=>$notes2['student_name'],'section_name'=>$notes2['section_name'])); ?>">
            <?php echo $title; ?>
        </a>
    </li>
</ul>
<div align="center">
    <h1>已上传的笔记</h1>

    <?php $__FOR_START_17414__=0;$__FOR_END_17414__=$num;for($i=$__FOR_START_17414__;$i < $__FOR_END_17414__;$i+=1){ ?>
    <ul class="nav nav-pills">
        <?php if($i <= $num1): ?>
        <li>

            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?>
            </a>

            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; if($i <= $num1): ?>
        <li>

            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'week_name'=>$notes[++$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?>
            </a>
            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; if($i <= $num1): ?>
        <li>
            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'week_name'=>$notes[++$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?>
            </a>
            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; if($i <= $num1): ?>
        <li>
            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'week_name'=>$notes[++$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?>
            </a>
            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; if($i <= $num1): ?>
        <li>
            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'week_name'=>$notes[++$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?>
            </a>
            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; if($i <= $num1): ?>
        <li>
            <a href="<?php echo url('note_wall',array('schedule_id'=>$notes2['schedule_id'],'week_name'=>$notes[$i]['week_name'],'week_name'=>$notes[++$i]['week_name'],'student_name'=>$notes[$i]['student_name'],'section_name'=>$notes[$i]['section_name'])); ?>">
                <?php echo $num2[$i]; ?>&nbsp;&nbsp;&nbsp;<?php echo $notes[$i]['student_name']; ?></a>
            <div><?php echo $c_u_text2[$i][0]; ?><?php echo $notes[$i]['created_at']; ?>&nbsp;&nbsp;&nbsp;</div>
            <div><?php echo $c_u_text2[$i][1]; ?><?php echo $notes[$i]['updated_at']; ?></div>
        </li>
        <?php endif; ?>
    </ul>
    <?php } ?>
</div>

</body>
</html>