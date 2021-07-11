document.body.onload = function () { onLoad() };

let userInterval;


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function onLoad() {
    $("#main-header").fadeIn(1000);
    userInterval = setInterval(function () {
        if (document.hasFocus()) {
            $.get("./users.php", function (data) {
                $("div.count-bottom").html("from a total of " + data +" chatters");
            });
        }
    }, 45000 + (Math.random()*1000))
}

//noContext = document.getElementById("main-bg")
//noContext.addEventListener("contextmenu", e => e.preventDefault());

var anny_vid = null;
var cleanup = false;
var set_anny_state = false;
var pre_html = '';

async function anny_init() {
    pre_html = $("div.main-header-center").html()
    await anny();
}

async function anny_cleanup() {
    await sleep(1000);
    anny_vid = null;
    cleanup = false;
    $("div.main-header-center").html('<h1 class="main-header-heading">YEP? u/lilPASTA</h1>');
    $("div.main-header-center").css("height", "");
    $("div.main-header-center").fadeIn(500);
    await sleep(5000);
    $("div.main-header-center").fadeOut(500);
    await sleep(500);
    $("div.main-header-center").fadeIn(500);
    $("div.main-header-center").html(pre_html);
    $("div.main-header-center").removeAttr("style")
    return;
}

async function anny() {
    if (anny_vid !== null) { return; }

    $("div.main-header-center").fadeOut(1000);
    await sleep(1000)
    $("div.main-header-center").fadeIn(500);

    $("div.main-header-center").html('<video autoplay id="anny-video"><source src="./video/yepcock.mp4" type="video/mp4"></video>');
    $("div.main-header-center").css("height", "600px");
    $("div.main-header-center").css("background", "rgba(0, 0, 0, 0)")
    $("div.main-header-center").css("margin-top", "0")
    $("div.main-header-center").css("padding-top", "0")
    $("div.main-header-center").css("border", "0px solid #0e0e10")
    anny_vid = document.querySelector('#anny-video');
    $(anny_vid).prop("volume", 0.5);

    anny_vid.ontimeupdate = function () { anny_time(anny_vid.currentTime) }

    async function anny_time(time) {
        if (cleanup) { anny_cleanup(); cleanup = false; anny_vid.ontimeupdate = null;}
        if (time > 22.6 && time < 52.0) {
            if (!set_anny_state) {
                set_anny_state = true;
            }
        }
        else if (time > 52.0 && time < 53.0) {
            if (set_anny_state) {
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