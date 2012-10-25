<?php

$consumerKey    = 'Consumer-Key';
$consumerSecret = 'Consumer-Secret';
$oAuthToken     = 'OAuthToken';
$oAuthSecret    = 'OAuth Secret';

# API OAuth
require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

# your code to retrieve data goes here, you can fetch your data from a rss feed or database

$tweet->post('statuses/update', array('status' => 'here the content of your tweet, you can add hashtags or links'));
?>