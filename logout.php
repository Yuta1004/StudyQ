<?php
require "util_func.php";
requireLogin();
setcookie("studyq_userid", $userid, 1);     // (´・ω・｀)
setcookie("studyq_nickname", $userinfo["nickname"], 1);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="title" onclick="javascript:window.location='index.php';return false;"><u>Study Q</u></h1>
    <h2 class="minititle">ログアウト</h2>
    <p class="center">正常にログアウトが完了しました</p>
    <div class="center">
        <button style="font-size: 15px;" onclick="javascript:window.location='index.php';return false;">トップページへ</button>
    </div>
</body>

</html>