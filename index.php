<?php
//www.webinfopedia.com
//http://www.webinfopedia.com/auto-tweet-with-oauth-in-php.html


$consumerKey    = 'Consumer Key';
$consumerSecret = 'Consumer Secret Key';
$oAuthToken     = 'OAuth Token';
$oAuthSecret    = 'OAuth Secret';

require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

require_once("db.php");
$sql=mysql_query("select url,title from webinfo_pre_article order by rand()");
$showfetch=mysql_fetch_array($sql);

$tweet->post('statuses/update', array('status' => ''.$showfetch['title'].'
http://www.webinfopedia.com/'.$showfetch['url'].''));
?>