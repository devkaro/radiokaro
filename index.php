<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Radio Karo Online, Streaming Lagu Karo, Video Karo Online, Radio Taneh Karo, Aplikasi Android Radio Karo">
    <meta name="author" content="Tommy A. Surbakti">
    <link rel="shortcut icon" href="http://cdn.karo.or.id/blogkaro/favicon.ico">
    <title>Radio Karo Online</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="radiokaro.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.3/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.3/jquery.jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#jquery_jplayer_1").jPlayer({
                ready: function (event) {
                    $(this).jPlayer("setMedia", {
                        mp3: "http://radio.karo.or.id:2012/;stream/1"
                    });
                },
                swfPath: "http://jplayer.org/latest/js",
                supplied: "mp3"
            });
        });
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47963537-1', 'karo.or.id');
  ga('send', 'pageview');

</script>

<script>
 $(document).ready(function() {
   $("#sangana").load("sangana.php");
   var refreshId = setInterval(function() {
      $("#sangana").load('sangana.php?randval='+ Math.random());
   }, 19000);
   $.ajaxSetup({ cache: false });
});
</script>
<script>
 $(document).ready(function() {
     $("#rk5").load("enggolewat.php");
   var refreshId = setInterval(function() {
      $("#rk5").load('enggolewat.php?randval='+ Math.random());
   }, 19000);
   $.ajaxSetup({ cache: false });
});
</script>
</head>

<body>
    <div class="container">
        <img src="http://karo.or.id/radio/header.png" class="img-responsive" alt="Logo Website Radio Karo">
    </div>
    <div id="theader-wrapper">
        <div id="theader">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-6">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                <div id="jp_container_1" class="jp-audio">
                    <div class="jp-type-single">
                        <div class="jp-gui jp-interface">
                            <ul class="jp-controls">
                                <li><a href="javascript:;" class="jp-play" tabindex="1">play</a>
                                </li>
                                <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a>
                                </li>
                                <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a>
                                </li>
                                <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a>
                                </li>
                                <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a>
                                </li>
                                <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a>
                                </li>
                            </ul>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                            <div class="jp-time-holder">
                                <div class="jp-current-time"></div>
                                <div class="jp-duration"></div>
                                <ul class="jp-toggles">
                                    <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a>
                                    </li>
                                    <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp-details">
                            <ul>
                                <li><span class="jp-title"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="jp-no-solution">
                            <span>Lenga lit flash playerndu</span>
                            download arah link enda <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash</a>.
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
                        <td>
                            <?php $status = $pecahi[1];
if ($status==1) {
    echo "<b>Online</b>";
} else {
    echo "<b>Offline</b>";
}
?>
                        </td>
                    </tr>
                    <tr>
                        <td>Simegi-megi</td>
                        <td><b><?php echo $pecahi[0]; ?> </b> <small>kalak</small></td>
                    </tr>
                    <tr class="alert-info">
                        <td colspan="2"><small>Sangana i putar : </small><b><p id="sangana"></p></b>
                        </td>
                    </tr>
                </table>
            </div>
                    <div class="col-md-12">
                      
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h3 class="panel-title"></h3>
                                    </div>
                                    <div class="panel-body">
                                    Adina lit penungkunenndu banci lewat twitter <a href="https://twitter.com/RadioKaroOnline" target="_blank">@RadioKaroOnline</a>
                                    <hr>
                                    <b>Simbaru i putar</b>
                                    <p id="rk5"></p>
                                    <hr>
                                     <p>Jenda lit piga-piga aplikasi pemutar <b>Radio Karo Online</b> si nggo ban kami man Windows ras Android</p>
                            <a href="http://download.cnet.com/Radio-Karo-Online/3000-2168_4-75760675.html" target="_blank" title="Windows" alt="Windows">
                                <img src="windows.png" title="Windows" alt="Sentabi" class="img-circle">
                            </a>
                            <a href="http://www.karo.or.id/aplikasi-android-radio-karo-online/" target="_blank" title="Android" alt="Android">
                                <img src="android.png" title="Android" alt="Android" class="img-circle">
                            </a>                    
                                    </div>
                                </div>

                    </div>
            </div>
            <div class="footer">
                <p class="theader-wrapper"></p>
                <p>&copy; 2015 <a href="https://dev.karo.or.id" title="Dev Karo" target="_blank">dev.karo</a> &raquo; <a href="log.html" title="Log RKO" target="_blank">v 2.02</a>
                </p>
            </div>

        </div> <!-- /container -->
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>

</html>
