<?php
function bacaHTML($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
	 curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$urlshoutcast= bacaHTML('http://radio.karo.or.id:2012/7.html');
$pecah = explode('<HTML><meta http-equiv="Pragma" content="no-cache"></head>', $urlshoutcast);
$pecah3 = explode ('<body>', $pecah[1]);
$pecah2 = explode ('</body></html>', $pecah3[1]);
$sh = $pecah2[0];
$pecahi = explode(",",$sh);

$urlshoutcast2= bacaHTML('http://radio.karo.or.id:2012/played.html');
$pecaha = explode('<table border=0 cellpadding=2 cellspacing=2>', $urlshoutcast2);
$pecah2a = explode ('</table>',$pecaha[1]);
$pecah3a = explode ('<b>', $pecah2a[0]);
$pecah4a = explode ('</b>',$pecah3a[2]);

//echo rand();
//echo "<b>mbaru i putar</b>";
echo '<table class="table table-hover">';
echo "<tr><th><b>Jam</b></td><th><b>Sirende/Judul Lagu</b></td></tr>";
echo $pecah4a[1];
echo "</table>";
?>
