<?php
/**
* @author Tommy A. Surbakti <tommy@surbakti.com>
* Parsing data shoutcast 2
* contoh http://localhost:9090/api.php?currentsong=1&nextsong=1&history=1
**/

$serverShoutcast = 'http://SERVER:PORT';

if (!empty($_GET)) {
    if (!empty($_GET['currentsong'])) {
        $getCurrentSong = file_get_contents("$serverShoutcast/currentsong?sid=1");
        $getCurrentSongFromFile = file_get_contents("currentsong.txt");
        echo "$getCurrentSong";

        if ($getCurrentSong != $getCurrentSongFromFile) {
            // adina la seri judulna, simpan ku file currentsong.txt
            $currentSongtoFile = fopen("currentsong.txt", "w");
            fwrite($currentSongtoFile, $getCurrentSong);
            fclose($currentSongtoFile);
        }
    }

    if (!empty($_GET['nextsong'])) {
        $getNextSong = file_get_contents("$serverShoutcast/nextsong?sid=1");
        echo $getNextSong;
    }

    if (!empty($_GET['history'])) {
        $getHistory = file_get_contents("$serverShoutcast/played.html?sid=1");
        $tabel = explode('<table border=0 cellpadding=2 cellspacing=2>', $getHistory);
        $akhirTabel = explode('</table>', $tabel[0]);
        preg_match_all("'<tr>(.*?)</tr>'si", $akhirTabel[1], $match);
        echo '<table class="table table-hover table-striped">';
        echo "<caption>Lagu si enggo lewat</caption>
        <thead>
            <tr>
                <th>Jam</th>
                <th>Sirende - Judul Lagu</th>
            </tr>
        </thead>";
        foreach ($match[1] as $val => $el) {
            if ($val !== 0 and $val !== 1) {
                echo "<tr>" . $el."</tr>";
            }
        }
        echo "</table>";
    }

    if (!empty($_GET['listenerpeak'])) {
        $getListener = file_get_contents("$serverShoutcast/index.html?sid=1");
        $getListenerPage = explode("Listener Peak: ", $getListener);
        $getListenerLastPage = explode("</td></tr>", $getListenerPage[1]);
        $maxListener = preg_replace("/[^0-9]/", '', $getListenerLastPage[0]);
        echo $maxListener;
    }
}
