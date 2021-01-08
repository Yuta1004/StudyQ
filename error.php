<?php
// Message List
$msg_array = array(
    "未定義のエラーが発生しました",
    "全ての項目を入力してください",
    "パスワードが一致しません",
    "登録に失敗しました(ユーザIDが既に使用されている可能性があります)",
    "ログインに失敗しました",
    "このページにアクセスするためにはログインが必要です",
    "このページにアクセスする前にログアウトしてください",
    "情報更新に失敗しました(ユーザIDが既に使用されている可能性があります)"
);

// Check
$errno = $_GET["errno"];
if(!$errno || $errno < 0 || count($msg_array) < $errno) {
    $errno = 0;
}
$errno += 0.0;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="title" onclick="javascript:window.location='/';return false;"><u>Study Q</u></h1>
    <h2 class="minititle">エラー発生</h2>
    <p class="center"><?php echo "$msg_array[$errno]"; ?></p>
    <div class="center">
        <button style="font-size: 15px;" onclick="javascript:window.history.back(-1);return false;">もどる</button>
    </div>
</body>

</html>