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
$urlshoutcast= bacaHTML('http://76.72.169.146:2012/7.html');
$pecah = explode('<HTML><meta http-equiv="Pragma" content="no-cache"></head>', $urlshoutcast);
$pecah3 = explode ('<body>', $pecah[1]);
$pecah2 = explode ('</body></html>', $pecah3[1]);
$sh = $pecah2[0];
$pecahi = explode(",",$sh);

$urlshoutcast2= bacaHTML('http://76.72.169.146:2012/played.html');
$pecaha = explode('<table border=0 cellpadding=2 cellspacing=2>', $urlshoutcast2);
$pecah2a = explode ('</table>',$pecaha[1]);
$pecah3a = explode ('<b>', $pecah2a[0]);
$pecah4a = explode ('</b>',$pecah3a[2]);
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radio Karo Online - live 24 jam</title>
<link href="style.css" rel="stylesheet" type="text/css" /> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47963537-1', 'karo.or.id');
  ga('send', 'pageview');

</script>
<style>
.tlagu tr:nth-child(odd):hover td, tbody tr.odd:hover td {background:#AABED3;}
.tlagu tr:nth-child(even):hover td, tbody tr.even:hover td {background:#FF1E3C;}
.tlagu tr:nth-child(odd) td, tbody tr.odd td {background:#AABED3;}
table  thead {
    background-color: #000000;
	text-align: center;
    background-image: -moz-linear-gradient(center bottom , #000000 30%, #FF0000 100%);
	font-family:  Verdana, Arial, Helvetica, sans-serif;
    color: #FFFFFF;
    font-size: 11px;
}
td {
	font-family:  Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
</style> 
<meta name="description" content="Radio Karo Online, Radio Karo" />
<meta name="keywords" content="radio karo, karo online, mp3 karo, 24 jam, radio online" />
<meta name="author" content="Surbakti" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
	
	<img src="header.png">
	<h1>&nbsp;</h1>
<div class="row">
<!--	<div class="span2"><img src="img/c1.png"></div>
	<div class="span2"><img src="img/c2.png"></div>
	<div class="span2"> 3</div>
	<div class="span2"> 4</div>
	<div class="span2"> 5</div> -->
	
</div> <!-- end <div class="row"> -->

<div style="float:left;width:50%;">
<div style="padding-right:10px;">
	<a id="player" class="player" href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">flash </a></div>
		<script type="text/javascript" src="jwplayer/swfobject22.js"></script>
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
		'autostart': 'true',
		'mute': 'false',
		'image':  'thumbs/logo.png',
		'skin':   'skins/stormtrooper.zip'

		};

		var params =
		{
		'allowfullscreen': 'false',
		'allowscriptaccess': 'always',
		'bgcolor': '#FFFFFF'
		};

		var attributes =
		{
		'id': 'playerID',
		'name': 'playerID'
		};
		swfobject.embedSWF('jwplayer/player.swf', 'player', '420', '270', '7', false, flashvars, params, attributes)
		</script>
</div></div>
<div style="float:right;width:50%;">
<div style="padding-left:10px;">
<table>
<tr>
<td><div id="status">Status</div></td>
<th>	<?php $status = $pecahi[1];
if ($status==1) {
	echo "<b>Online</b>";
} else {
	echo "<b>Offline</b>";
}
?></th>
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
<td>Laguna</td>
<td><div id="sangana"><?php echo $pecahi[6]; ?></div></td>
</tr>
</table>
Ngenen Website Simbaru -> <a href="home.php">klik jenda</a>
</div></div>
<br style="clear:both;" /> 
<hr>
<div class="row">
	<div class="span7"><b>Mbaru i putar</b><hr>
	<p id="enggolewat">
</p>
<td></td>
	</div>
	
	<div class="span5">Karo Networks<hr>
	

 <br><br><br>
	</div>	
</div> 

<h2 class="right">Kontak admin</h2>
<table>
<tr width="65">
  <td width="30">FB</td>
  <td width="5">:</td>
  <td><a href="http://www.facebook.com/groups/radiokaro/">Group FB</a></td>
   <td width="30">Email</td>
  <td width="5">:</td>
  <td><a href="mailto:&#115;&#116;&#097;&#102;&#102;&#064;&#107;&#097;&#114;&#111;&#046;&#111;&#114;&#046;&#105;&#100;">&#115;&#116;&#097;&#102;&#102;&#064;&#107;&#097;&#114;&#111;&#046;&#111;&#114;&#046;&#105;&#100;</a></a></td>
</tr>
</table>
<hr></hr>
<div class="footer">
&copy; 2009 - Radio Karo Online v1.02
</div>
</body>

</html>
