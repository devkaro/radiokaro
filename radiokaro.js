$(document).ready(function() {
    $("#radiokaroonline").jPlayer({
        ready: function(event) {
            $(this).jPlayer("setMedia", {
                title: "Radio Karo Online",
                mp3: "http://radio.karo.or.id:2012/;stream/1"
            });
        },
        swfPath: "http://jplayer.org/latest/dist/jplayer",
        supplied: "mp3",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
    });

    $("#sangana").load("sangana.php");
    var refreshId = setInterval(function() {
        $("#sangana").load('sangana.php?randval=' + Math.random());
    }, 19000);
    $.ajaxSetup({
        cache: false
    });
});