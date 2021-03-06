<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\login.html";i:1520938880;}*/ ?>
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
<div align="center">
    <h1>课表登录系统</h1>
    <img src="/image/login.jpg">
    <form method="post" action="" class="form-inline">
        <div>
            <div class="input-group">
                <span class="input-group-addon">学校</span>
                <input type="text" class="form-control" name="school_name" placeholder="灵川中学">
            </div>
            <div class="input-group">
                <span class="input-group-addon">班级</span>
                <input type="text" class="form-control" name="class_name" placeholder="班级编号，例如：172">
            </div>
        </div>
        <br>
        <div>
            <div class="input-group">
                <span class="input-group-addon">学号</span>
                <input type="text" class="form-control" name="student_number" placeholder=" 1352100509">
            </div>
            <div class="input-group">
                <span class="input-group-addon">姓名</span>
                <input type="text" class="form-control" name="student_name" placeholder="王杰">
            </div>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">密码</span>
            <input class="form-control" type="password" name="password" placeholder="password">
        </div>
        <div>
            <br>
            <div class="horizontal">
                <input class="form-control" type="text" name="verification_code" placeholder="验证码">
                <div>
                    <img id="ver_img" src="<?php echo captcha_src(); ?>">
                    <a id="kbq" href="javascript:refreshVerity();">看不清，换一张</a>
                </div>
                <br>
                <input id="login" class="btn btn-success" type="button" value="登&nbsp;录">
            </div>
        </div>
</div>
</form>
<script>

    


</script>
<script>
    $(function () {
//给登录按钮添加点击事件
        $("#login").on('click', function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('check_login'); ?>",  //设置提交数据处理的脚本文件的地址；
                data: $("form").serialize(),   //将当前表单的数据序列化后提交
                dataType: 'json',              //设置提交数据的类型为json
                success: function (data) {          //只有标志位返回为1时才进行处理

                    if (data.status == 1) {
                        alert(data.message);      //弹出提示验证成功
                        window.location.href = "<?php echo url('user/user_index'); ?>"; //允许用户进入后台
                    } else {
                        alert(data.message);      //输出错误信息
                    }
                }
            })
        })
    })
</script>
<!--//刷新验证码的脚本-->
<script>
    function refreshVerity() {
        var ts = Date.parse(new Date()) / 1000;
        $("#ver_img").attr("src", "/captcha?id=" + ts); //刷新验证码
    }
</script>
</body>
</html>