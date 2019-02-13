$(document).ready(function() {
    $("#radiokaroonline").jPlayer({
        ready: function(event) {
            $(this).jPlayer("setMedia", {
                mp3: "http://git.ndikkar.com:8000/lagu"
            });
        },
        swfPath: "http://jplayer.org/latest/dist/jplayer",
        solution: 'html, flash',
        supplied: "mp3",
        keyEnabled: true,
    });

    $("#sangana").load("sangana.php");
    var refreshId = setInterval(function() {
        $("#sangana").load('sangana.php?randval=' + Math.random());
    }, 19000);
    $.ajaxSetup({
        cache: false
    });
});