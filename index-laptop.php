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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="radiokaro.css" rel="stylesheet">
    <style type="text/css">
        #theader-wrapper {
            border-bottom: 7px solid #87B4BE;
        }
        #theader {
            width: auto;
            margin: 0px auto;
        }
        .mbiring {
            height: 5px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-color: #000000;
            border-bottom: 7px solid #87B4BE;
        }
    </style>
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.3/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://files.filtagreen-global.com/jquery.jplayer.min.js"></script>
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
 $(document).ready(function() {
   $("#sangana").load("sangana.php");
   var refreshId = setInterval(function() {
      $("#sangana").load('http://karo.or.id/radio/sangana.php?randval='+ Math.random());
   }, 60);
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
                            download arah link enda <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td colspan="2">
                            <b>Online 24 Jam</b>
                        </td>
                    </tr>
                    <tr>
                        <td>Online</td>
                        <td>kalak</td>
                    </tr>
                    <tr>
                        <td colspan="2"></b>
                        </td>
                    </tr>
                </table>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a data-toggle="tab" href="#rk2">Aplikasi</a>
                </li>
                <li><a data-toggle="tab" href="#rk3">Update</a>
                </li>
                <li><a data-toggle="tab" href="#rk4">Kontak</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="rk2" class="tab-pane fade in active">
                    <p>Jenda lit piga-piga aplikasi pemutar <b>Radio Karo Online</b> si nggo ban kami man Windows ras Android</p>
                    <a href="http://download.cnet.com/Radio-Karo-Online/3000-2168_4-75760675.html" target="_blank" title="Windows" alt="Windows">
                        <img src="windows.png" title="Windows" alt="Sentabi" class="img-circle">
                    </a>
                    <a href="http://www.karo.or.id/aplikasi-android-radio-karo-online/" target="_blank" title="Android" alt="Android">
                        <img src="android.png" title="Android" alt="Android" class="img-circle">
                    </a>
                </div>
                <div id="rk3" class="tab-pane fade">
                    <h5>Radio Karo Online [RKO] versi 2.0</h5>
                    <p>Bas RKO 2.0 enda lit piga-piga si tambahi ras i kurangi emekap :
                        <ul>
                            <li>Design web ersimple na</li>
                            <li>Daftar lagu si mbaru putar i pindaken ku <a href="http://karo.or.id/radio/enggolewat.php" target="_blank">laguta ndai</a>
                            </li>
                            <li>Default HTML 5 fallback Flash Player</li>
                        </ul>
                    </p>
                    <p>RKO 2.0 enda gelar rilisna <b>Lomok-Lomok Perkis</b>.</p>
                </div>
                <div id="rk4" class="tab-pane fade">
                    <p>Adina lit masalah bas situs enda, ntah pe la kap banci mbegiken Radio Karo Online enda, banci kirimndu email ku staff@karo.or.id ntah pe akun twitter <a href="https://twitter.com/RadioKaroOnline" tar>@RadioKaroOnline</a>
                    </p>
                </div>
            </div>
            <div class="footer">
                <p class="theader-wrapper"></p>
                <p>&copy; 2006-2014 <b>Surbakti</b>
                </p>
            </div>

        </div> <!-- /container -->
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>

</html>
