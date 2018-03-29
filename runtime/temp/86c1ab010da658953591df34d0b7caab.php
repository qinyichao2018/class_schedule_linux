<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\personal_info.html";i:1521454448;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Title</title>
</head>
<body>
<h1>个人信息</h1>
<hr>
    <ul>
        <li style="list-style-type: none"><p style="color: #008800">学校名：<?php echo $post_data['school_name']; ?></p></li>
        <li style="list-style-type: none"><p style="color: #008800">班级编号：<?php echo $post_data['class_name']; ?></p></li>
        <li style="list-style-type: none"><p style="color: #008800">姓名：<?php echo $post_data['student_name']; ?></p></li>
        <li style="list-style-type: none"><p style="color: #008800">学号：<?php echo $post_data['student_number']; ?></p></li>
        <li style="list-style-type: none"><p style="color: #008800">注册编号：<?php echo $post_data['student_id']; ?></p></li>
        <li style="list-style-type: none"><p style="color: #008800">注册时间：<?php echo $post_data['created_at']; ?></p></li>
    </ul>


</body>

</html>