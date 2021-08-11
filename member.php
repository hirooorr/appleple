<?php

session_start();
header("Content-type: text/html; charset=utf-8");

require_once 'config.php';
require_once './vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

if (empty($_SESSION['twAccessToken'])){
    echo 'error access token!';
    exit;
}

$objTwitterConection = new TwitterOAuth(
    $sTwitterConsumerKey,
    $sTwitterConsumerSecret,
    $_SESSION['twAccessToken']['oauth_token'],
    $_SESSION['twAccessToken']['oauth_token_secret']
);

$objTwUserInfo = $objTwitterConection->get("account/verify_credentials");
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>タイトル</title>
<meta http-equiv="Content-Style-Type" content="text/css">
</head>
<h2>Twitter アカウント ログイン完了！</h2>

<?php echo $_SERVER['REQUEST_URI']; ?><br/>
<a href="logout.php">ログアウト</a>

<pre>
<?php var_dump($_SESSION['twAccessToken']); ?>
</pre>

<pre>
<?php var_dump($objTwUserInfo); ?>
</pre>

</body>
</html>