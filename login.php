<?php

session_start();
header("content-type: text/html; charset=utf-8");


require_once 'config.php';
require './vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;


$objTwitterConection = new TwitterOAuth($sTwitterConsumerKey, $sTwitterConsumerSecret);

$aTwitterRequestToken = $objTwitterConection->oauth('oauth/request_token', array('oauth_callback' => $sTwitterCallBackUrl));


$_SESSION['twOauthToken'] = $aTwitterRequestToken['oauth_token'];
$_SESSION['twOauthTokenSecret'] = $aTwitterRequestToken['oauth_token_secret'];

$sTwitterRequestUrl = $objTwitterConection->url('oauth/authenticate', array('oauth_token' => $_SESSION['twOauthToken']));

header('location: '.$sTwitterRequestUrl);

?>