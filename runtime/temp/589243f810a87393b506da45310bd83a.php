<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\test.html";i:1521960079;}*/ ?>
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

<div class="row">
    <div class="col-md-10 col-md-offset-1" style="background-color: #FFFFFF">
        <h1 align="center" style="color: #880000">笔记详情&nbsp;<small><?php echo (isset($edit) && ($edit !== '')?$edit:"我的笔记"); ?></small>
        </h1>

        <div id="editor">
            <?php echo (isset($note_text) && ($note_text !== '')?$note_text:""); ?>

        </div>
        <form method="post" action="">
            <textarea name="text1" id="text1" style="width:100%; height:200px;"></textarea>
            <div align="center">
                <input class="btn btn-success" id="save" type="button" value="保存">
            </div>
        </form>



    </div>
</div>


</body>

<script type="text/javascript" src="/wangEditor-3.1.0/release/wangEditor.min.js"></script>
<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    var $text1 = $('#text1')
    editor.customConfig.uploadImgShowBase64 = true
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $text1.val(html)
    }
    editor.create()
    // 初始化 textarea 的值
    $text1.val(editor.txt.html())
</script>
<script>
    $(function () {
//给登录按钮添加点击事件
        $("#save").on('click', function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('test_check'); ?>",  //设置提交数据处理的脚本文件的地址；
                data: $("form").serialize(),   //将当前表单的数据序列化后提交
                dataType: 'json',              //设置提交数据的类型为json
                success: function (data) {          //只有标志位返回为1时才进行处理

                    alert(data.message);
                }
            })
        })
    })
</script>


</html>