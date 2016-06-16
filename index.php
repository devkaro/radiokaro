<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Radio Karo Online, Streaming Lagu Karo, Video Karo Online, Radio Taneh Karo, Aplikasi Android Radio Karo" name="description">
    <meta content="Tommy A. Surbakti" name="author">
    <link href="https://cdn.karo.or.id/blogkaro/favicon.ico" rel="shortcut icon">
    <title>Radio Karo Online</title>
    <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="radiokaro.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><img alt="Logo Website Radio Karo" class="img-responsive" src="https://karo.or.id/radio/header.png"></div>
    <div id="theader-wrapper">
        <div id="theader"></div>
    </div>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-6">
                <div class="jp-jplayer" id="radiokaroonline"></div>
                <div aria-label="media player" class="jp-audio" id="jp_container_1" role="application">
                    <div class="jp-type-single">
                        <div class="jp-gui jp-interface">
                            <div class="jp-controls">
                                <button class="jp-play" role="button" tabindex="0">play</button> <button class="jp-stop" role="button" tabindex="0">stop</button>
                            </div>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-volume-controls">
                                <button class="jp-mute" role="button" tabindex="0">mute</button> <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value"></div>
                                </div>
                            </div>
                            <div class="jp-time-holder">
                                <div aria-label="time" class="jp-current-time" role="timer">
                                    &nbsp;
                                </div>
                                <div aria-label="duration" class="jp-duration" role="timer">
                                    &nbsp;
                                </div>
                                <div class="jp-toggles">
                                    <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                </div>
                            </div>
                        </div>
                        <div class="jp-details">
                            <div aria-label="title" class="jp-title">
                                Radio Karo Online
                            </div>
                        </div>
                        <div class="jp-no-solution">
                            <span>Perlu Update</span> Pake Google Chrome adina lang download <a href="http://get.adobe.com/flashplayer/" target="_blank">plugin Flash</a> .
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                ?>
                <table class="table table-hover">
                    <tr>
                        <td>Status Radio</td>
                        <td><?php $status = $pecahi[1];
                        if ($status==1) {
                            echo '<p class="label label-primary">Online</span>';
                        } else {
                            echo '<p class="label label-danger">Offline</span>';
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <td>Simegi-megi</td>
                        <td><b><?php echo $pecahi[0]; ?></b> <small>kalak</small></td>
                    </tr>
                    <tr class="alert-info">
                        <td colspan="2">
                            <small>Sangana i putar :</small> <b></b>
                            <p id="sangana"><b></b></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        Adina lit penungkunenndu banci lewat twitter <a href="https://twitter.com/RadioKaroOnline" target="_blank">@RadioKaroOnline</a>
                        <hr>
                        <p id="rk5"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="theader-wrapper"></p>
            <p>&copy; 2006-2016 <a href="https://dev.karo.or.id" target="_blank" title="Dev Karo"> dev.karo</a> &raquo; 
            <a href="log.html" target="_blank" title="Log Radio Karo Online">v 2.1.1</a></p>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jplayer/2.9.2/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="radiokaro.js"></script>
</body>
</html>