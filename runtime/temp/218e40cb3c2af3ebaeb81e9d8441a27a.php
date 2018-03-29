<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\index\search.html";i:1522070628;}*/ ?>
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
<h1>查询到的课表</h1><hr>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?>

<a href="<?php echo url('browsing',array('id'=>$vol['schedule_id'])); ?>">
    <ul class="nav nav-pills">
        <li style="list-style-type: none">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vol['school_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li style="list-style-type: none">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vol['class_name']; ?>班&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li style="list-style-type: none">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vol['schedule_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li style="list-style-type: none">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vol['founder']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li style="list-style-type: none">&nbsp;&nbsp;&nbsp;&nbsp;最后更新：<?php echo $vol['updated_at']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</li>

    </ul>
</a>
<hr>

<?php endforeach; endif; else: echo "" ;endif; ?>
<?php echo $page; ?>

</body>

</html>