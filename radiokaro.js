$(document).ready(function() {
	$("#radiokaroonline").jPlayer({
		ready: function(event) {
			$(this).jPlayer("setMedia", {
				mp3: "https://radio.karo.or.id/;stream/1"
			});
		},
		swfPath: "http://jplayer.org/latest/dist/jplayer",
		supplied: "mp3, oga",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	ga('create', 'UA-47963537-1', 'karo.or.id');
	ga('send', 'pageview');
	$("#sangana").load("sangana.php");
	var refreshId = setInterval(function() {
		$("#sangana").load('sangana.php?randval=' + Math.random());
	}, 19000);
	$.ajaxSetup({
		cache: false
	});
	$("#rk5").load("enggolewat.php");
	var refreshId2 = setInterval(function() {
		$("#rk5").load('enggolewat.php?randval=' + Math.random());
	}, 19000);
	$.ajaxSetup({
		cache: false
	});
});