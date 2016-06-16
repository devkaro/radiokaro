<?php
function fungsiCurl($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
	 curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

$urlshoutcast2= fungsiCurl('http://radio.karo.or.id:2012/played.html');
$pecaha = explode('<table border=0 cellpadding=2 cellspacing=2>', $urlshoutcast2);
$pecah2a = explode ('</table>',$pecaha[1]);
$pecah3a = explode ('<b>', $pecah2a[0]);
$pecah4a = explode ('</b>',$pecah3a[2]);

echo '<table class="table table-hover table-striped">';
echo "<caption>Simbaru i putar</caption><thead><tr><th><b>Jam</b></td><th><b><code>Sirende</code> - <code>Judul Lagu</code></b></td></tr></thead>";
echo $pecah4a[1];
echo "</table>";
?>
