<?php

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

define("CONSUMERKEY", "");
define("CONSUMERSECRET", "");
define("ACCESSTOKEN", "");
define("ACCESSTOKENSECRET", "");

// kirim tweet
function kirimTweet($song)
{
    if (!empty($song)) {
        $tweet = new TwitterOAuth(CONSUMERKEY, CONSUMERSECRET, ACCESSTOKEN, ACCESSTOKENSECRET);
        // isi tweet
        $message = "Sangana i putar lagu: $song https://karo.or.id/radio #radiokaro";
        // kirim
        $tweet->post('statuses/update', array('status' => $message));
    }
}
