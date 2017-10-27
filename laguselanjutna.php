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

$urlshoutcast= bacaHTML('https://bupati.karo.or.id:8080/index.html?sid=1');
$pecah = explode('<table cellpadding="2" cellspacing="0" border="0" align="center" style="padding-left:1em;">', $urlshoutcast);
$akhirTabel = explode ('</table>', $pecah[1]);
preg_match_all("'<td>(.*?)</td>'si",$akhirTabel[0], $match);

$data = array();
foreach($match[0] as $el)
{
    $data[] = $el;
    // echo $el;
}
echo strip_tags($data[17]);
?>