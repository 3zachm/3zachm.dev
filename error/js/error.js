document.body.onload = function () { onLoad() };

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

var boots_vid = null;
var cleanup = false;
var set_boots_state = false;

async function boots_init() {
    await boots();
}

async function boots_cleanup() {
    await sleep(1000);
    boots_vid = null;
    cleanup = false;
    $("div.main-header-center").html('<h1 class="main-header-heading" id="four">inabakumori - Rainy Boots</h1>')
    $('div.video').fadeIn(400);
    $('div.video').html("");
    $("div.main-header-center").fadeIn(400);
    return;
}

async function boots() {
    if (boots_vid !== null) { return; }

    $("#404").fadeOut(1000);
    $("div.video").fadeOut(1000);
    await sleep(1000)
    $("#four").html("");
    $("div.video").fadeIn(500);
    $("#404").fadeIn(1000);

    $("div.video").html('<video autoplay id="boots-video"><source src="../../video/boots.webm" volume=0.3 controls="false" type="video/webm"><track label="default" kind="subtitles" srclang="en" src="../../video/boots.vtt" default></video>');
    //$("#four").css('background', 'rgba(31, 31, 31, 0.6)')
    $("#four").css('font-size', '48px')
    $("#four").css('color', 'black')
    $("#four").css('font-weight', 'bold')
    $("#four").css('text-shadow', '-1px -1px 0 #b8b4b4, 0 -1px 0 #b8b4b4, 1px -1px 0 #b8b4b4, 1px 0 0 #b8b4b4, 1px 1px 0 #b8b4b4, 0 1px 0 #b8b4b4, -1px 1px 0 #b8b4b4, -1px  0 0 #b8b4b4')
    var a_sheet = document.createElement('style')
    a_sheet.innerHTML = ".a-menu, .main-menu-sep, #logo, #home-menu, #anny-menu {color: black;} .main-menu-sep {border-left: 1px solid rgb(0, 0, 0)}";
    document.body.appendChild(a_sheet);

    var video = document.querySelector('#boots-video')
    tracks = video.textTracks[0],
        tracks.mode = 'hidden', // must occur before cues is retrieved
        cues = tracks.cues;

    video.volume = 0.3;

    var replaceText = function (text) {
        $('#four').html(text);
    },

        showText = function () {
            $('#four').show();
        },

        hideText = function () {
            $('#four').hide();
        },

        cueEnter = function () {
            replaceText(this.text);
            showText();
        },

        cueExit = function () {
            hideText();
        },

        videoLoaded = function (e) {
            for (var i in cues) {
                var cue = cues[i];
                cue.onenter = cueEnter;
                cue.onexit = cueExit;
            }
        },

        playVideo = function (e) {
            video.play();
        };


    video.addEventListener('loadedmetadata', videoLoaded);
    video.addEventListener('load', playVideo);
    video.load();

    video.ontimeupdate = function () { boots_time(video.currentTime) }

    async function boots_time(time) {
        if (cleanup) { await boots_cleanup(); cleanup = false; video.ontimeupdate = null; return;}
        if (time > 116.5 && time < 117.5) {
            if (!set_boots_state) {
                console.log("yep")
                document.body.removeChild(a_sheet);
                set_boots_state = true;
            }
        }
        else if (time > 123.5 && time < 124.5) {
            document.body.appendChild(a_sheet);
        }
        else if (time > 190) {
            $("div.main-header-center").fadeOut(400);
            $('div.video').fadeOut(400);
            document.body.removeChild(a_sheet);
            cleanup = true;
        }
    }
}

function onLoad() {
    startPatchy("../img/26550t.png");
}
