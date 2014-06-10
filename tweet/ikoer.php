<?php
require_once('twitteroauth.php');
// Twitter Connection Data
$tConsumerKey       = 'Bt9xlXhYR9PFqTz21xsw';
$tConsumerSecret    = '8fF9dsyRNPnM5JV2DoftP1YG9WvbaKmPvumrqfnxA';
$tAccessToken       = '108877351-kopyj8tK4WP9j4UZiaTzOPJhFHKaUN1wrcCHBtop';
$tAccessTokenSecret = 'ubGpfaPZdHxxilDbU4a3tGn3KzsKOmAfcEtbG69A';
 
// start connection
$tweet = new TwitterOAuth($tConsumerKey, $tConsumerSecret, $tAccessToken, $tAccessTokenSecret);
 
// the message
$message = "Mungkin aja contoh #tweet #radiokaro";
 
// send to twitter
$msg = $tweet->post('statuses/update', array('status' => $message));
?>
