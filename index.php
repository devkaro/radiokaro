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

//$urlshoutcast= bacaHTML('http://76.72.169.146:2012/7.html');
//$pecah = explode('<HTML><meta http-equiv="Pragma" content="no-cache"></head>', $urlshoutcast);
//$pecah3 = explode ('<body>', $pecah[1]);
//$pecah2 = explode ('</body></html>', $pecah3[1]);
//$sh = $pecah2[0];
//$pecahi = explode(",",$sh);
$urlshoutcast= bacaHTML('http://radio.karo.or.id:2012/7.html');
if ($urlshoutcast)
{
	$pecah = explode('<HTML><meta http-equiv="Pragma" content="no-cache"></head>', $urlshoutcast);
	$pecah3 = explode ('<body>', $pecah[1]);
	$pecah2 = explode ('</body></html>', $pecah3[1]);
	$sh = $pecah2[0];
	$pecahi = explode(",",$sh);	
}
else
{
	echo "la dat datana pal";
}



$urlshoutcast2= bacaHTML('http://radio.karo.or.id:2012/played.html');
if ($urlshoutcast2) { 
$pecaha = explode('<table border=0 cellpadding=2 cellspacing=2>', $urlshoutcast2);
$pecah2a = explode ('</table>',$pecaha[1]);
$pecah3a = explode ('<b>', $pecah2a[0]);
$pecah4a = explode ('</b>',$pecah3a[2]);
}
else 
{
echo 'er0r';
}

?>

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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
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
}

    </style>
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
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
                      <?php $status = $pecahi[1];
                      if ($status==1) {
                        echo "<b>Online</b>";
                      } else {
                        echo "<b>Offline</b>";
                      }
                      ?>
                    </th>
                  </tr>
                  <tr>
                    <td>Online</td>
                    <td><?php echo $pecahi[0]; ?> kalak</td>
                  </tr>
                  <tr>
                    <td>Max</td>
                    <td><?php echo $pecahi[3]; ?> kalak simbegi</td>
                  </tr>
                  <tr>
                    <td>Sangana i pasang</td>
                    <td><div id="sangana"><b><?php echo $pecahi[6]; ?></b></div></td>
                  </tr>
              </table>
   <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Aplikasi</h3>
      </div>
      <div class="panel-body">
        <a href="http://download.cnet.com/Radio-Karo-Online/3000-2168_4-75760675.html" target="_blank" title="Windows" alt="Windows"><img src="windows.png" title="Windows" alt="Sentabi" class="img-circle"></a>
        <a href="http://www.karo.or.id/aplikasi-android-radio-karo-online/" target="_blank" title="Android" alt="Android"><img src="android.png" title="Android" alt="Android" class="img-circle"></a>
<br>Perban lagu-lagu Karo si iputar jenda lenga mbue simbaru, man apai kita simbue lagu-lagu Karo-na banci i kirimndu ku email staff@karo.or.id. Adina kirim arah TIKI/JNE/POS pe banci. Gelahna erbuena variasi lagu-lagunta. Bujur
      </div>
    </div>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Kontak Admin</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Kontak Admin</h4>
      </div>
      <div class="modal-body">
        Adina lit masalah bas situs enda, ntah pe la kap banci mbegiken Radio Karo Online enda, banci kirimndu email ku staff@karo.or.id. Ras banci kam gabung ku <a href="http://www.facebook.com/groups/radiokaro/">Group Facebook Radio Karo Online</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        </div>
      </div>

<div class="row">
<br>
  <div class="col-md-8">
  <h4>Lagu simbaru i pasang</h4>
              <p id="enggolewat">
            </p>
          <td></td>
  </div>
</div>
      
<hr>
      <div class="footer">
        <p>&copy; 2006-2014 <a href="http://surbakti.com" target="_blank"><img src="mekaro.png" width="20" height="20" alt="Surbakti" title="Surbakti" class="img-circle"></a></p>
      </div>

    </div> <!-- /container -->

<div id="theader-wrapper">
  <div id="theader">
  </div>
</div>  
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
