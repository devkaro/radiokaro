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

$linkUrl = fungsiCurl('https://bupati.karo.or.id:8080/played.html');

// function sienggoLewat($linkUrl) {
    $tabel = explode('<table border=0 cellpadding=2 cellspacing=2>', $linkUrl);
    $akhirTabel = explode ('</table>',$tabel[0]);
    preg_match_all("'<tr>(.*?)</tr>'si",$akhirTabel[1], $match);
    echo '<table class="table table-hover table-striped">';
    echo "<caption>Simbaru i putar</caption>
    <thead>
        <tr>
            <th><b>Jam</b></th>
            <th>Sirende - Judul Lagu</th>
        </tr>
    </thead>";
    foreach($match[1] as $val => $el)
    {
        if($val !== 0 and $val !== 1) {
        echo "<tr>" . $el."</tr>";
        }
    }
    echo "</table>";
// }

// echo sienggoLewat();


?>
