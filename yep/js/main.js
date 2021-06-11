document.body.onload = function () { onLoad() };

var mainGradient = null;

async function onLoad() {
    $("#main-header").fadeIn(1000);
    mainGradient = new Granim({
        element: '#main-bg',
        direction: 'left-right',
        isPausedWhenNotInView: true,
        stateTransitionSpeed: 200,
        states: {
            "default-state": {
                gradients: [
                    ['#9D50BB', '#6E48AA'],
                    ['#4776E6', '#8E54E9']
                ],
                transitionSpeed: 7000
            },
            "anny-state": {
                gradients: [
                    ['#9D50BB', '#6E48AA'],
                    ['#4776E6', '#8E54E9']
                ],
                transitionSpeed: 300
            }
        }
    });
    AOS.init();
}

noContext = document.getElementById("main-bg")
noContext.addEventListener("contextmenu", e => e.preventDefault());

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

var anny_vid = null;
var cleanup = false;
var set_anny_state = false;

async function anny_init() {
    await anny();
}

async function anny_cleanup() {
    await sleep(1000);
    anny_vid = null;
    cleanup = false;
    $("div.main-header-center").html('<h1 class="main-header-heading">YEP? u/lilPASTA</h1>');
    $("div.main-header-center").css("height", "");
    $("div.main-header-center").fadeIn(500);
    return;
}

async function anny() {
    if (anny_vid !== null) { return; }

    $("div.main-header-center").fadeOut(1000);
    await sleep(1000)
    $("div.main-header-center").fadeIn(500);

    $("div.main-header-center").html('<video autoplay id="anny-video"><source src="./video/yepcock.mp4" type="video/mp4"></video>');
    $("div.main-header-center").css("height", "600px");
    anny_vid = document.querySelector('#anny-video');
    $(anny_vid).prop("volume", 0.5);

    anny_vid.ontimeupdate = function() {anny_time(anny_vid.currentTime)}

    async function anny_time(time) {
        if (cleanup) { anny_cleanup(); }
        if (time > 22.0 && time < 52.0) {
            if (!set_anny_state) {
                mainGradient.changeState('anny-state');
                set_anny_state = true;
            }
        }
        else if (time > 52.0 && time < 53.0) {
            if (set_anny_state) {
                mainGradient.changeState('default-state');
                set_anny_state = false;
            }
        }
        else if (parseInt(time) == 54) {
            $("div.main-header-center").fadeOut(400);
            cleanup = true;
        }
        else {
            return false;
        }
    }
}