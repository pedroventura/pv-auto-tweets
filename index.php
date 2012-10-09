<?php

$consumerKey    = 'Consumer-Key';
$consumerSecret = 'Consumer-Secret';
$oAuthToken     = 'OAuthToken';
$oAuthSecret    = 'OAuth Secret';

// incluimos la librería para usar la API OAuth
require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

# aqui tu lógica para recoger el contenido del tweet, ya sea de tu base de datos, feed, rss o fichero

$tweet->post('statuses/update', array('status' => 'Aqui contenido de tu tweet, tambien puedes enviar urls o hashtags'));
?>