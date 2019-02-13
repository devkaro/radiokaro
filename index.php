<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Radio Karo Online, Streaming Lagu Karo, Video Karo Online, Radio Taneh Karo, Aplikasi Android Radio Karo" name="description">
    <meta content="Tommy A. Surbakti" name="author">
    <link href="favicon.png" rel="shortcut icon">
    <title>Radio Karo Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <table class="table table-hover">
                    <tr>
                        <td>Status Radio</td>
                        <td><p class="label label-primary">Online</p></td>
                    </tr>
                    <tr>
                        <td>Simegi-megi</td>
                        <td><b></b> <small>kalak</small></td>
                    </tr>
                    <tr class="alert-info">
                        <td colspan="2">
                            <small>Sangana i putar :</small>
                            <p id="sangana"></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <small>Dung e lagu</small>
                            <p id="lanjutlaguna"></p>
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
            <p>&copy; 2006-2019 <a href="https://dev.karo.or.id" target="_blank" title="Dev Karo"> dev.karo</a> &raquo;
            <a href="log.html" target="_blank" title="Log Radio Karo Online">v2.8</a></p>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jplayer/2.9.2/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="radiokaro.js?v2.6"></script>
</body>
</html>