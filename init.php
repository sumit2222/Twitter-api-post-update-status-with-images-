<?php
require "twitteroauth-master/autoload.php";

$consumer_key='**';//API key
$consumer_secret='**';//API secret key
$access_token='**';//Access token
$access_token_secret='**';//Access token secret

//include libray

//require "../twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//connect to API

$connection=new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
$info=$connection->get("account/verify_credentials");





?>