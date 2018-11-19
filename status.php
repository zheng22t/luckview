<?php
require 'config.php';

//保存到数据库

$database->insert('user', [
    'username' => $_POST["name"],
    'stdid' => $_POST["stdid"]
]);
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>模拟应聘大赛现场抽奖</title>
    <link rel="stylesheet" href="./dist/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/flat-ui.min.css">
</head>

<body>
<div class="container">
    <div class="card text-center">
        <img class="card-img-top" src="./img/sdcet.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title"><? echo $_POST["name"]; ?>，报名成功</h4>
            <p class="card-text">报名成功，请等待开奖。</p>
            <p class="card-text">欢迎关注 山东电子职业技术学院招办 微信公众号</p>
        </div>
    </div>
</div>
<script src="./dist/js/vendor/jquery.min.js"></script>
<script src="./dist/js/vendor/video.js"></script>
<script src="./dist/js/flat-ui.js"></script>
<script src="./js/app.js"></script>
<script>
    jQuery(document).ready(function () {
        setTimeout('Follow()', 3000);
    });
</script>
</body>

</html>