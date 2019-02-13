<?php
/**
* @author Tommy A. Surbakti <tommy@surbakti.com>
**/

function fungsiCurl($url)
{
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0");
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}

$url = fungsiCurl('http://git.ndikkar.com:8000/status-json.xsl');

$data = json_decode($url, true);

$dataRadio = [];

if ($url) {
    foreach ($data as $key => $value) {
        if (! $value['source']) {
            die('Server streaming die');
        }
        foreach ($value['source'] as $key => $value) {
            $dataRadio[$key] = $value;
        }
    }
} else {
    echo "ada error";
}

echo $dataRadio['title'];
