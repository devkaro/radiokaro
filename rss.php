<?php
require_once('simplepie_1.3.1.mini.php');
//$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . 'cache');
$feed = new SimplePie();
$feed->set_feed_url('http://karo.or.id/feed');
$feed->init();
$feed->handle_content_type();
?>

