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
            "jerma-state": {
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

var jerma_vid = null;
var cleanup = false;
var set_jerma_state = false;

async function jerma_init() {
    await jerma();
}

async function jerma_cleanup() {
    await sleep(1000);
    jerma_vid = null;
    cleanup = false;
    $("div.main-header-center").html('<h1 class="main-header-heading">Jerma?</h1>');
    $("div.main-header-center").css("height", "");
    $("div.main-header-center").fadeIn(500);
    return;
}

async function jerma() {
    if (jerma_vid !== null) { return; }

    $("div.main-header-center").fadeOut(1000);
    await sleep(1000)
    $("div.main-header-center").fadeIn(500);

    $("div.main-header-center").html('<video autoplay id="jerma-video"><source src="./video/noise.mp4" type="video/mp4"></video>');
    $("div.main-header-center").css("height", "600px");
    jerma_vid = document.querySelector('#jerma-video');

    jerma_vid.ontimeupdate = function() {jerma_time(jerma_vid.currentTime)}

    async function jerma_time(time) {
        if (cleanup) { jerma_cleanup(); }
        if (time > 9.4 && time < 10.0) {
            if (!set_jerma_state) {
                mainGradient.changeState('jerma-state');
                set_jerma_state = true;
            }
        }
        else if (time > 11.5 && time < 12.0) {
            if (set_jerma_state) {
                mainGradient.changeState('default-state');
                set_jerma_state = false;
            }
        }
        else if (parseInt(time) == 25) {
            $("div.main-header-center").fadeOut(400);
            cleanup = true;
        }
        else {
            return false;
        }
    }
}