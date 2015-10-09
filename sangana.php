<?php

function bacaHTML($url){
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

$urlshoutcast= bacaHTML('http://radio.karo.or.id:2012/7.html');
$pecah3 = explode ('</head><body>', $urlshoutcast);
$pecah2 = explode ('</body></html>', $pecah3[1]);
$pecahi = explode(",",$pecah2[0]);
echo $pecahi[6]; 
?>
