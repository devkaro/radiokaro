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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47963537-1', 'karo.or.id');
  ga('send', 'pageview');

</script>
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
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
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
   $("#enggolewat").load("enggolewat.php");
   var refreshId = setInterval(function() {
      $("#enggolewat").load('enggolewat.php?randval='+ Math.random());
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
            <a id="player" class="player" href="http://get.adobe.com/flashplayer/">Download Flash Player</a>
              <script type="text/javascript" src="http://karo.or.id/radio/jwplayer/swfobject22.js"></script>
              <script type="text/javascript">
              var flashvars =
              {
              'file': 'http://radio.karo.or.id:2012/;stream.nsv',
              'title': 'Radio Karo Online',
              'type': 'sound',
              'duration': '99999',
              'frontcolor': '333333', 
              'backcolor': 'eeeeee', 
              'lightcolor': '666666', 
              'screencolor': 'cccccc', 
              'id': 'playerID',
              'autostart': 'false',
              'width' : "100%",              
              'mute': 'false',
              'image':  'http://karo.or.id/radio/thumbs/logo.png',
              'skin':   'http://karo.or.id/radio/skins/stormtrooper.zip'

              };

              var params =
              {
              'allowfullscreen': 'false',
              'allowscriptaccess': 'always',
              'bgcolor': '#FFFFFF',
              'wmode' : 'transparent'
              };

              var attributes =
              {
              'id': 'playerID',
              'name': 'playerID'
              };
              swfobject.embedSWF('http://karo.or.id/radio/jwplayer/player.swf', 'player', '420', '270', '7', false, flashvars, params, attributes)
              </script>          
        </div>
        <div class="col-md-6">
          
              <table class="table table-hover">
                  <tr>
                    <td><div id="status">Status</div></td>
                    <th>  
                    </th>
                  </tr>
                  <tr>
                    <td>Online</td>
                    <td>kalak</td>
                  </tr>
                  <tr>
                    <td>Max</td>
                    <td>kalak simbegi</td>
                  </tr>
                  <tr>
                    <td>Sangana i pasang</td>
                    <td><div id="sangana"></b></div></td>
                  </tr>
              </table>
        </div>
      </div>     
      <div class="footer">
      <p class="theader-wrapper"></p>
        <p>&copy; 2006-2014 <b>Surbakti</b></p>

      </div>

    </div> <!-- /container -->


</div>  
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
  </body>
</html>
