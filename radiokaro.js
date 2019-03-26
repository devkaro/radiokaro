// load adina halamenna enggo dung i load.
$(window).on('load', function() {

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

    $("#simbegi").load("api.php?listenerpeak=1");
    var refreshId = setInterval(function() {
        $("#simbegi").load('api.php?listenerpeak=1&rand=' + Math.random());
    }, 19400);

    $("#sangana").load("api.php?currentsong=1");
    var refreshId = setInterval(function() {
        $("#sangana").load('api.php?currentsong=1&rand=' + Math.random());
    }, 19300);

    $("#sienggolewat").load("api.php?history=1");
    var refreshId2 = setInterval(function() {
        $("#sienggolewat").load('api.php?history=1&rand=' + Math.random());
    }, 19200);

    $("#lanjutlaguna").load("api.php?nextsong=1");
    var refreshId3 = setInterval(function() {
        $("#lanjutlaguna").load('api.php?nextsong=1&rand=' + Math.random());
    }, 19100);
});
