<?php

function fungsiCurl($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     curl_setopt($data, CURLOPT_HEADER, false); 
	 curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
     $hasil = curl_exec($data);
     curl_error($data);
     curl_close($data);
     return $hasil;
}

$URL= fungsiCurl('https://radio.karo.or.id/7.html');
$pecah3 = explode ('</head><body>', $URL);
$pecahi = explode(",",$pecah3[1]);
echo strip_tags($pecahi[6]);
?>
