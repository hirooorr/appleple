<?php

session_start();
header("content-type: text/html; charset=utf-8");

$_SESSION = array();
$_COOKIE = array();

setcookie("PHPSESSID", '', time() - 1800, '/');

session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Content-Style-Type" content="text/css">
</head>
<body>
    <h2>Twitter　アカウント　ログアウト</h2>

<?php
echo "ログアウトしました。";
echo "<a href='https://tera.appleple.blog/index.html'>ログインへ</a>";
?>

</body>
</html>