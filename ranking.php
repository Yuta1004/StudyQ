<?php
// Useinfo
require "util_func.php";
list($mylink, $hdmsg) = getUserMsg();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h3 style="text-align: right;"><a href=<?php echo $mylink; ?>><i><?php echo $hdmsg; ?></i></a></h3>
    </header>
    <h1 class="title" onclick="javascript:window.location='index.php';return false;"><u>Study Q</u></h1>
    <h2 class="minititle">ランキング</h2>
    <hr>
    <ul class="menubar">
        <li class="menubar">
            <div width="50%">
                <h2 class="minititle"><i>難易度順</i></h2>
                <div class="listelement">
                    <b>タイトル</b><br>
                    投稿者名: あああ<br>
                    投稿日時: 1970/01/01 00:00:00<br>
                    HELP!: <i>9999</i><br><br>
                    <u>内容</u><br>
                    あああああああああああああああああああああああああああああああああああああ…
                </div>
            </div>
        </li>
        <li class="menubar">
            <div style="background-color:gray; width:2px; height:500px; margin: 0px 50px 0px 50px;"></div>
        </li>
        <li class="menubar">
            <div width="50%">
                <h2 class="minititle"><i>回答数</i></h2>
                <div class="listelement">
                    <b>タイトル</b><br>
                    投稿者名: あああ<br>
                    投稿日時: 1970/01/01 00:00:00<br>
                    HELP!: <i>9999</i><br><br>
                    <u>内容</u><br>
                    あああああああああああああああああああああああああああああああああああああ…
                </div>
            </div>
        </li>
    </ul>
</body>

</html>