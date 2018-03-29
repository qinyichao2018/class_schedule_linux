<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\phpStudy\WWW\class_schedule\public/../application/index\view\user\new_schedule.html";i:1522053439;}*/ ?>
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
    <li><a href="<?php echo url('student_index'); ?>">&nbsp;&nbsp;返&nbsp;&nbsp;回&nbsp;&nbsp;</a></li>
</ul>
<!--我的课表-->


<form method="post" action="" class="inline">

    <label class=""></label>
    <table class="table table-bordered">
        <thead>
        <tr class="action">
            <th>上课时间</th>
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
            <td>
                第一节
            </td>
            <td><input type="text" name="mon1" value="<?php echo (isset($mon['section_1']) && ($mon['section_1'] !== '')?$mon['section_1']:''); ?>"></td>
            <td><input type="text" name="tue1" value="<?php echo (isset($tue['section_1']) && ($tue['section_1'] !== '')?$tue['section_1']:''); ?>"></td>
            <td><input type="text" name="wed1" value="<?php echo (isset($wed['section_1']) && ($wed['section_1'] !== '')?$wed['section_1']:''); ?>"></td>
            <td><input type="text" name="thu1" value="<?php echo (isset($thu['section_1']) && ($thu['section_1'] !== '')?$thu['section_1']:''); ?>"></td>
            <td><input type="text" name="fri1" value="<?php echo (isset($fri['section_1']) && ($fri['section_1'] !== '')?$fri['section_1']:''); ?>"></td>
            <td><input type="text" name="sat1" value="<?php echo (isset($sat['section_1']) && ($sat['section_1'] !== '')?$sat['section_1']:''); ?>"></td>
            <td><input type="text" name="sun1" value="<?php echo (isset($sun['section_1']) && ($sun['section_1'] !== '')?$sun['section_1']:''); ?>"></td>
        </tr>
        <td>
            第二节
        </td>
        <td><input type="text" name="mon2" value="<?php echo (isset($mon['section_2']) && ($mon['section_2'] !== '')?$mon['section_2']:''); ?>"></td>
        <td><input type="text" name="tue2" value="<?php echo (isset($tue['section_2']) && ($tue['section_2'] !== '')?$tue['section_2']:''); ?>"></td>
        <td><input type="text" name="wed2" value="<?php echo (isset($wed['section_2']) && ($wed['section_2'] !== '')?$wed['section_2']:''); ?>"></td>
        <td><input type="text" name="thu2" value="<?php echo (isset($thu['section_2']) && ($thu['section_2'] !== '')?$thu['section_2']:''); ?>"></td>
        <td><input type="text" name="fri2" value="<?php echo (isset($fri['section_2']) && ($fri['section_2'] !== '')?$fri['section_2']:''); ?>"></td>
        <td><input type="text" name="sat2" value="<?php echo (isset($sat['section_2']) && ($sat['section_2'] !== '')?$sat['section_2']:''); ?>"></td>
        <td><input type="text" name="sun2" value="<?php echo (isset($sun['section_2']) && ($sun['section_2'] !== '')?$sun['section_2']:''); ?>"></td>
        </tr>
        <tr class="success">
            <td>
                第三节
            </td>
            <td><input type="text" name="mon3" value="<?php echo (isset($mon['section_3']) && ($mon['section_3'] !== '')?$mon['section_3']:''); ?>"></td>
            <td><input type="text" name="tue3" value="<?php echo (isset($tue['section_3']) && ($tue['section_3'] !== '')?$tue['section_3']:''); ?>"></td>
            <td><input type="text" name="wed3" value="<?php echo (isset($wed['section_3']) && ($wed['section_3'] !== '')?$wed['section_3']:''); ?>"></td>
            <td><input type="text" name="thu3" value="<?php echo (isset($thu['section_3']) && ($thu['section_3'] !== '')?$thu['section_3']:''); ?>"></td>
            <td><input type="text" name="fri3" value="<?php echo (isset($fri['section_3']) && ($fri['section_3'] !== '')?$fri['section_3']:''); ?>"></td>
            <td><input type="text" name="sat3" value="<?php echo (isset($sat['section_3']) && ($sat['section_3'] !== '')?$sat['section_3']:''); ?>"></td>
            <td><input type="text" name="sun3" value="<?php echo (isset($sun['section_3']) && ($sun['section_3'] !== '')?$sun['section_3']:''); ?>"></td>
        </tr>
        <tr class="info">
            <td>
                第四节
            </td>
            <td><input type="text" name="mon4" value="<?php echo (isset($mon['section_4']) && ($mon['section_4'] !== '')?$mon['section_4']:''); ?>"></td>
            <td><input type="text" name="tue4" value="<?php echo (isset($tue['section_4']) && ($tue['section_4'] !== '')?$tue['section_4']:''); ?>"></td>
            <td><input type="text" name="wed4" value="<?php echo (isset($wed['section_4']) && ($wed['section_4'] !== '')?$wed['section_4']:''); ?>"></td>
            <td><input type="text" name="thu4" value="<?php echo (isset($thu['section_4']) && ($thu['section_4'] !== '')?$thu['section_4']:''); ?>"></td>
            <td><input type="text" name="fri4" value="<?php echo (isset($fri['section_4']) && ($fri['section_4'] !== '')?$fri['section_4']:''); ?>"></td>
            <td><input type="text" name="sat4" value="<?php echo (isset($sat['section_4']) && ($sat['section_4'] !== '')?$sat['section_4']:''); ?>"></td>
            <td><input type="text" name="sun4" value="<?php echo (isset($sun['section_4']) && ($sun['section_4'] !== '')?$sun['section_4']:''); ?>"></td>
        </tr>
        <tr>
            <td>午休</td>
        </tr>
        <tr class="success">
            <td>
                第五节
            </td>
            <td><input type="text" name="mon5" value="<?php echo (isset($mon['section_5']) && ($mon['section_5'] !== '')?$mon['section_5']:''); ?>"></td>
            <td><input type="text" name="tue5" value="<?php echo (isset($tue['section_5']) && ($tue['section_5'] !== '')?$tue['section_5']:''); ?>"></td>
            <td><input type="text" name="wed5" value="<?php echo (isset($wed['section_5']) && ($wed['section_5'] !== '')?$wed['section_5']:''); ?>"></td>
            <td><input type="text" name="thu5" value="<?php echo (isset($thu['section_5']) && ($thu['section_5'] !== '')?$thu['section_5']:''); ?>"></td>
            <td><input type="text" name="fri5" value="<?php echo (isset($fri['section_5']) && ($fri['section_5'] !== '')?$fri['section_5']:''); ?>"></td>
            <td><input type="text" name="sat5" value="<?php echo (isset($sat['section_5']) && ($sat['section_5'] !== '')?$sat['section_5']:''); ?>"></td>
            <td><input type="text" name="sun5" value="<?php echo (isset($sun['section_5']) && ($sun['section_5'] !== '')?$sun['section_5']:''); ?>"></td>
        </tr>
        <tr class="info">
            <td>
                第六节
            </td>
            <td><input type="text" name="mon6" value="<?php echo (isset($mon['section_6']) && ($mon['section_6'] !== '')?$mon['section_6']:''); ?>"></td>
            <td><input type="text" name="tue6" value="<?php echo (isset($tue['section_6']) && ($tue['section_6'] !== '')?$tue['section_6']:''); ?>"></td>
            <td><input type="text" name="wed6" value="<?php echo (isset($wed['section_6']) && ($wed['section_6'] !== '')?$wed['section_6']:''); ?>"></td>
            <td><input type="text" name="thu6" value="<?php echo (isset($thu['section_6']) && ($thu['section_6'] !== '')?$thu['section_6']:''); ?>"></td>
            <td><input type="text" name="fri6" value="<?php echo (isset($fri['section_6']) && ($fri['section_6'] !== '')?$fri['section_6']:''); ?>"></td>
            <td><input type="text" name="sat6" value="<?php echo (isset($sat['section_6']) && ($sat['section_6'] !== '')?$sat['section_6']:''); ?>"></td>
            <td><input type="text" name="sun6" value="<?php echo (isset($sun['section_6']) && ($sun['section_6'] !== '')?$sun['section_6']:''); ?>"></td>
        </tr>
        <tr class="success">
            <td>
                第七节
            </td>
            <td><input type="text" name="mon7" value="<?php echo (isset($mon['section_7']) && ($mon['section_7'] !== '')?$mon['section_7']:''); ?>"></td>
            <td><input type="text" name="tue7" value="<?php echo (isset($tue['section_7']) && ($tue['section_7'] !== '')?$tue['section_7']:''); ?>"></td>
            <td><input type="text" name="wed7" value="<?php echo (isset($wed['section_7']) && ($wed['section_7'] !== '')?$wed['section_7']:''); ?>"></td>
            <td><input type="text" name="thu7" value="<?php echo (isset($thu['section_7']) && ($thu['section_7'] !== '')?$thu['section_7']:''); ?>"></td>
            <td><input type="text" name="fri7" value="<?php echo (isset($fri['section_7']) && ($fri['section_7'] !== '')?$fri['section_7']:''); ?>"></td>
            <td><input type="text" name="sat7" value="<?php echo (isset($sat['section_7']) && ($sat['section_7'] !== '')?$sat['section_7']:''); ?>"></td>
            <td><input type="text" name="sun7" value="<?php echo (isset($sun['section_7']) && ($sun['section_7'] !== '')?$sun['section_7']:''); ?>"></td>
        </tr>
        <tr>
            <td>晚饭</td>
        </tr>
        <tr class="info">
            <td>
                第八节
            </td>
            <td><input type="text" name="mon8" value="<?php echo (isset($mon['section_8']) && ($mon['section_8'] !== '')?$mon['section_8']:''); ?>"></td>
            <td><input type="text" name="tue8" value="<?php echo (isset($tue['section_8']) && ($tue['section_8'] !== '')?$tue['section_8']:''); ?>"></td>
            <td><input type="text" name="wed8" value="<?php echo (isset($wed['section_8']) && ($wed['section_8'] !== '')?$wed['section_8']:''); ?>"></td>
            <td><input type="text" name="thu8" value="<?php echo (isset($thu['section_8']) && ($thu['section_8'] !== '')?$thu['section_8']:''); ?>"></td>
            <td><input type="text" name="fri8" value="<?php echo (isset($fri['section_8']) && ($fri['section_8'] !== '')?$fri['section_8']:''); ?>"></td>
            <td><input type="text" name="sat8" value="<?php echo (isset($sat['section_8']) && ($sat['section_8'] !== '')?$sat['section_8']:''); ?>"></td>
            <td><input type="text" name="sun8" value="<?php echo (isset($sun['section_8']) && ($sun['section_8'] !== '')?$sun['section_8']:''); ?>"></td>
        </tr>
        <tr class="success">
            <td>
                第九节
            </td>
            <td><input type="text" name="mon9" value="<?php echo (isset($mon['section_9']) && ($mon['section_9'] !== '')?$mon['section_9']:''); ?>"></td>
            <td><input type="text" name="tue9" value="<?php echo (isset($tue['section_9']) && ($tue['section_9'] !== '')?$tue['section_9']:''); ?>"></td>
            <td><input type="text" name="wed9" value="<?php echo (isset($wed['section_9']) && ($wed['section_9'] !== '')?$wed['section_9']:''); ?>"></td>
            <td><input type="text" name="thu9" value="<?php echo (isset($thu['section_9']) && ($thu['section_9'] !== '')?$thu['section_9']:''); ?>"></td>
            <td><input type="text" name="fri9" value="<?php echo (isset($fri['section_9']) && ($fri['section_9'] !== '')?$fri['section_9']:''); ?>"></td>
            <td><input type="text" name="sat9" value="<?php echo (isset($sat['section_9']) && ($sat['section_9'] !== '')?$sat['section_9']:''); ?>"></td>
            <td><input type="text" name="sun9" value="<?php echo (isset($sun['section_9']) && ($sun['section_9'] !== '')?$sun['section_9']:''); ?>"></td>
        </tr>
        <tr class="info">
            <td>
                第十节
            </td>
            <td><input type="text" name="mon10" value="<?php echo (isset($mon['section_10']) && ($mon['section_10'] !== '')?$mon['section_10']:''); ?>"></td>
            <td><input type="text" name="tue10" value="<?php echo (isset($tue['section_10']) && ($tue['section_10'] !== '')?$tue['section_10']:''); ?>"></td>
            <td><input type="text" name="wed10" value="<?php echo (isset($wed['section_10']) && ($wed['section_10'] !== '')?$wed['section_10']:''); ?>"></td>
            <td><input type="text" name="thu10" value="<?php echo (isset($thu['section_10']) && ($thu['section_10'] !== '')?$thu['section_10']:''); ?>"></td>
            <td><input type="text" name="fri10" value="<?php echo (isset($fri['section_10']) && ($fri['section_10'] !== '')?$fri['section_10']:''); ?>"></td>
            <td><input type="text" name="sat10" value="<?php echo (isset($sat['section_10']) && ($sat['section_10'] !== '')?$sat['section_10']:''); ?>"></td>
            <td><input type="text" name="sun10" value="<?php echo (isset($sun['section_10']) && ($sun['section_10'] !== '')?$sun['section_10']:''); ?>"></td>
        </tr>


        </tbody>
    </table>
    <div class="col-md-1">
        <p name="schedule_id">课表ID:<?php echo $schedule_id; ?></p>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <input name="schedule_name" class="form-control" type="text" placeholder="课表名">
            <span class="input-group-btn">
            <button class="btn btn-success" id="save" type="button">保存课表</button>
        </span>
        </div>
    </div>
</form>
</body>

<script>
    $(function () {
//给登录按钮添加点击事件
        $("#save").on('click', function (event) {
            $.ajax({
                type: "POST",
                url: "<?php echo url('new_edit_save'); ?>",  //设置提交数据处理的脚本文件的地址；
                data: $("form").serialize(),   //将当前表单的数据序列化后提交
                dataType: 'json',              //设置提交数据的类型为json
                success: function (data) {          //只有标志位返回为1时才进行处理

                    if (data.status == 0){
                        alert(data.message);      //弹出提示验证成功
                    }else{
                        console.log(data.message);
                        alert(data.message);
                        window.location.href = "<?php echo url('schedule_list'); ?>"; //允许用户进入后台
                    }



                }
            })
        })
    })
</script>
</html>