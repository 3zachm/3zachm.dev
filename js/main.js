document.body.onload = function () { onLoad() };

var mainGradient = null;

noContext = document.getElementById("main-bg")
noContext.addEventListener("contextmenu", e => e.preventDefault());

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
    $("div.main-header-center").html('<h1 class="main-header-heading noselect" id="four">inabakumori - Rainy Boots</h1>')
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

    $("div.video").html('<video autoplay id="boots-video"><source src="video/boots.webm" volume=0.3 controls="false" type="video/webm"><track label="default" kind="subtitles" srclang="en" src="video/boots.vtt" default></video>');
    //$("#four").css('background', 'rgba(31, 31, 31, 0.6)')
    $("#four").css('font-size', '48px')
    $("#four").css('color', 'black')
    $("#four").css('font-weight', 'bold')
    $("#four").css('text-shadow', '-1px -1px 0 #b8b4b4, 0 -1px 0 #b8b4b4, 1px -1px 0 #b8b4b4, 1px 0 0 #b8b4b4, 1px 1px 0 #b8b4b4, 0 1px 0 #b8b4b4, -1px 1px 0 #b8b4b4, -1px  0 0 #b8b4b4')
    var a_sheet = document.createElement('style')
    a_sheet.innerHTML = ".a-menu, .main-menu-sep, #logo, #proj-menu, #social-menu, #github-menu {color: black;} .main-menu-sep {border-left: 1px solid rgb(0, 0, 0)}";
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

///////////////////////////////////////////////////////////////////////////////////////////////////////

class Frame {
    constructor(x, y, xOff, yOff, width, height) {
        this.x = x;
        this.y = y;
        this.xOff = xOff;
        this.yOff = yOff;
        this.width = width;
        this.height = height;
    }
}

class Animation{
    constructor(frames, speed, loop){
        this.frames = frames;
        this.speed = speed;
        this.loop = loop;
    }
}

const Direction = {
    Up: 'Up',
    Down: 'Down',
    Left: 'Left',
    Right: 'Right'
};

let chars = [];
let PATCHYSHEET = './img/26550t.png';

const Animations1 = {
    Idle: [
        new Animation([
            new Frame(10,  109, 0, -1, 54, 101),
            new Frame(70,  110, 0,  0, 54, 100),
            new Frame(130, 110, 0,  0, 53, 100),
            new Frame(189, 111, 0,  0, 53, 99),
            new Frame(248, 110, 1, -1, 51, 100),
            new Frame(305, 110, 1, -2, 50, 100),
            new Frame(361, 109, 1, -2, 49, 101),
            new Frame(416, 109, 0, -2, 50, 101),
            new Frame(472, 108, 0, -3, 51, 102),
            new Frame(529, 108, 0, -2, 52, 102),
            new Frame(587, 108, 0, -2, 53, 102),
            new Frame(646, 109, 0, -1, 54, 101),
        ], 2, true),
        new Animation([
            new Frame(1354,109, 0, -1, 54, 101),
            new Frame(1294,110, 0,  0, 54, 100),
            new Frame(1235,110, 1,  0, 53, 100),
            new Frame(1176,111, 1,  0, 53, 99),
            new Frame(1119,110, 2, -1, 51, 100),
            new Frame(1063,110, 3, -2, 50, 100),
            new Frame(1008,109, 4, -2, 49, 101),
            new Frame(952, 109, 4, -2, 50, 101),
            new Frame(895, 108, 3, -3, 51, 102),
            new Frame(837, 108, 2, -2, 52, 102),
            new Frame(778, 108, 1, -2, 53, 102),
            new Frame(719, 109, 1, -1, 54, 101),
        ], 2, true)
    ],
    Floating: [
        new Animation([
            new Frame(10,  109, 0, -1, 54, 101),
            new Frame(70,  110, 0,  0, 54, 100),
            new Frame(130, 110, 0,  0, 53, 100),
            new Frame(189, 111, 0,  0, 53, 99),
            new Frame(248, 110, 1, -1, 51, 100),
            new Frame(305, 110, 1, -2, 50, 100),
            new Frame(361, 109, 1, -2, 49, 101),
            new Frame(416, 109, 0, -2, 50, 101),
            new Frame(472, 108, 0, -3, 51, 102),
            new Frame(529, 108, 0, -2, 52, 102),
            new Frame(587, 108, 0, -2, 53, 102),
            new Frame(646, 109, 0, -1, 54, 101),
        ], 2, true),
        new Animation([
            new Frame(1354,109, 0, -1, 54, 101),
            new Frame(1294,110, 0,  0, 54, 100),
            new Frame(1235,110, 1,  0, 53, 100),
            new Frame(1176,111, 1,  0, 53, 99),
            new Frame(1119,110, 2, -1, 51, 100),
            new Frame(1063,110, 3, -2, 50, 100),
            new Frame(1008,109, 4, -2, 49, 101),
            new Frame(952, 109, 4, -2, 50, 101),
            new Frame(895, 108, 3, -3, 51, 102),
            new Frame(837, 108, 2, -2, 52, 102),
            new Frame(778, 108, 1, -2, 53, 102),
            new Frame(719, 109, 1, -1, 54, 101),
        ], 2, true)
    ],
    Walking: [
        new Animation([
            new Frame(441, 256,  0,  0, 45, 98),
            new Frame(390, 256, -1,  0, 45, 98),
            new Frame(340, 257, -1,  1, 44, 97),
            new Frame(293, 256,  1,  0, 41, 98),
            new Frame(246, 255,  1, -1, 41, 99),
            new Frame(200, 256,  0,  0, 40, 98),
            new Frame(152, 256, -1,  0, 42, 98),
            new Frame(105, 257, -1,  1, 41, 97),
            new Frame(59,  256,  1,  0, 40, 98),
            new Frame(10,  256,  1,  0, 43, 98),
        ], 2, true),
        new Animation([
            new Frame(540, 256, 0,  0, 45, 98),
            new Frame(591, 256, 1,  0, 45, 98),
            new Frame(642, 257, 2,  1, 44, 97),
            new Frame(692, 256, 3,  0, 41, 98),
            new Frame(739, 255, 3, -1, 41, 99),
            new Frame(786, 256, 5,  0, 40, 98),
            new Frame(832, 256, 4,  0, 42, 98),
            new Frame(880, 257, 5,  1, 41, 97),
            new Frame(927, 256, 4,  0, 40, 98),
            new Frame(973, 256, 1,  0, 43, 98),
        ], 2, true)
    ],
    Sitting: [
        new Animation([
            new Frame(10,  396, 0, 0, 47, 95),
            new Frame(63,  405, 0, 8, 48, 86),
            new Frame(117, 415, 0, 18, 50, 76),
            new Frame(173, 419, 0, 21, 52, 72),
            new Frame(231, 419, 1, 21, 51, 72),
        ], 2, false),
        new Animation([
            new Frame(920, 397, 0, 0, 47, 95),
            new Frame(866, 405, 0, 8, 48, 86),
            new Frame(810, 415, 0, 18, 50, 76),
            new Frame(752, 419, 0, 21, 52, 72),
            new Frame(695, 419, 0, 21, 51, 72),
        ], 2, false)
    ],
    SittingUp: [
        new Animation([
            new Frame(231, 419, 1, 21, 51, 72),
            new Frame(288, 416, 1, 18, 48, 75),
            new Frame(342, 406, 0, 8, 47, 85),
            new Frame(395, 397, 0, 1, 47, 94),
        ], 2, false),
        new Animation([
            new Frame(695, 419, 0, 21, 51, 72),
            new Frame(641, 416, 0, 18, 48, 75),
            new Frame(588, 406, 0, 8, 47, 85),
            new Frame(536, 397, 1, 0, 47, 94),
        ], 2, false)
    ],
    Falling: [
        new Animation([
            new Frame(19,  517, 30, 0, 92, 88),
            new Frame(19,  517, 30, 0, 92, 88),
            new Frame(117, 518, 30, 0, 94, 87),
            new Frame(117, 518, 30, 0, 94, 87),
            new Frame(231, 547, 30, 0, 76, 59),
            new Frame(313, 540, 30, 0, 75, 66),
            new Frame(394, 528, 30, 10, 70, 78),
            new Frame(470, 548, 30, 41, 81, 58),
            new Frame(557, 550, 32, 43, 82, 56),
            new Frame(645, 557, 32, 49, 93, 49),
            new Frame(745, 561, 32, 56, 95, 45),
            new Frame(845, 566, 32, 57, 103, 40),
            new Frame(954, 568, 32, 57, 106, 38),
            new Frame(1065,567, 32, 57, 106, 39),
        ], 2, false),
        new Animation([
            new Frame(1075,618, -30,  0,  92, 88),
            new Frame(1075,618, -30,  0,  92, 88),
            new Frame(975, 619, -30,  0,  94, 87),
            new Frame(975, 619, -30,  0,  94, 87),
            new Frame(879, 648, -30,  0,  76, 59),
            new Frame(798, 641, -30,  0,  75, 66),
            new Frame(722, 629, -30, 10,  70, 78),
            new Frame(635, 649, -30, 41,  81, 58),
            new Frame(547, 651, -32, 43,  82, 56),
            new Frame(448, 658, -32, 49,  93, 49),
            new Frame(347, 662, -32, 56,  95, 45),
            new Frame(238, 667, -32, 57, 103, 40),
            new Frame(126, 669, -32, 57, 106, 38),
            new Frame(15,  668, -32, 57, 106, 39),
        ], 2, false)
    ],
    GettingUp: [
        new Animation([
            new Frame(25,  780, 40, 53, 97, 49),
            new Frame(128, 779, 38, 53, 87, 50),
            new Frame(221, 764, 38, 33, 80, 65),
            new Frame(307, 752, 23, 20, 68, 77),
            new Frame(381, 747, 20, 16, 61, 82),
            new Frame(448, 735, 9, 6, 47, 94),
        ], 2, false),
        new Animation([
            new Frame(964, 780, -40, 53, 97, 49),
            new Frame(871, 779, -38, 53, 87, 50),
            new Frame(785, 764, -38, 33, 80, 65),
            new Frame(711, 752, -23, 20, 68, 77),
            new Frame(644, 747, -20, 16, 61, 82),
            new Frame(591, 735,  0,  6, 47, 94),
        ], 2, false)
    ],
    Dragged: [
        new Animation([
            new Frame(19,  517, 0, 0, 92, 88),
        ], 2, true),
        new Animation([
            new Frame(1075,618, 0,  0,  92, 88),
        ], 2, true)
    ],
}

class Patchouli {
    constructor(sheet, xpos, ypos, animation, animationFrame, animations, facing, canvas) {
        this.sheet = sheet;
        this.xpos = xpos;
        this.ypos = ypos;
        this.xgoal = xpos;
        this.ygoal = ypos;
        this.animation = animation;
        this.animationFrame = animationFrame;
        this.animations = animations;
        this.canvas = canvas;
        this.idleTime = 0;
        this.frameTime = 0;
        this.facing = facing;
        this.waitTime = Math.floor(Math.random() * (300 - 40 + 1)) + 40;;
        this.paused = false;
        this.dragged = false;
    }

    step() {
        if (this.dragged) {
            this.animation = this.animations.Dragged;
            return;
        }
        this.evalAction();
        this.frameTime++;
        if (this.frameTime > this.getAnimation().speed) {
            this.frameTime = 0;
            if (!this.paused) {
                this.animationFrame++;
            }
            if (this.animationFrame > this.getAnimation().frames.length - 1) {
                if (this.getAnimation().loop) {
                    this.animationFrame = 0;
                }
                else {
                    this.waitIdle();
                }
            }
        }
    }

    evalAction() {
        if (this.ypos != this.ygoal && this.animation != this.animations.Floating && this.paused == false) {
            this.setFloat();
        }
        else if (this.animation == this.animations.Idle) {
            this.idleTime++;
        }
        else if (this.animation == this.animations.Walking) {
            if (this.xpos != this.xgoal || this.ypos != this.ygoal) {
                this.walkTo(this.xgoal, this.ygoal);
            }
            else {
                let r = Math.random();
                if (r < 0.1) {
                    this.setSit();
                }
                else if (r < 0.8) {
                    this.setIdle();
                }
                else {
                    this.setFall();
                }
            }
        }
        else if (this.animation == this.animations.Sitting) {
            this.idleTime++;
            if (this.idleTime > this.waitTime) {
                this.paused = false;
                this.setSitUp();
            }
            else if (this.animationFrame == this.getAnimation().frames.length - 2) {
                this.paused = true;
            }
        }
        else if (this.animation == this.animations.Falling) {
            this.idleTime++;
            if (this.idleTime > this.waitTime) {
                this.paused = false;
                this.setGettingUp();
            }
            else if (this.animationFrame == this.getAnimation().frames.length - 2) {
                this.paused = true;
            }
        }
        else if (this.animation == this.animations.Floating){
            if (this.ypos != this.ygoal) {
                this.floatTo(this.ygoal);
            }
            else {
                let r = Math.random();
                if (r < 0.1) {
                    this.setSit();
                }
                else if (r < 0.8) {
                    this.setIdle();
                }
                else {
                    this.setFall();
                }
            }
        }

        // if  animation ends and waitTime expires, choose new animation
        if (this.idleTime >= this.waitTime && this.animationFrame == this.getAnimation().frames.length - 1) {
            this.waitTime = Math.floor(Math.random() * (300 - 40 + 1)) + 40;
            this.idleTime = 0;
            this.chooseAnimation();
        }
    }

    waitIdle() {
        this.waitTime = Math.floor(Math.random() * (150 - 40 + 1)) + 40;
        this.setIdle();
    }

    floatTo(y) {
        if (this.ypos < y) {
            this.ypos++;
        }
        else if (this.ypos > y) {
            this.ypos--;
        }
    }

    walkTo(x, y) {
        if (this.xpos < x) {
            if (this.xpos > canvas.width - this.getCurrentFrame().width) {
                this.xgoal = this.xpos;
            }
            else {
                this.xpos++;
                this.facing = Direction.Right;
            }
        }
        else if (this.xpos > x) {
            if (this.xpos < 0) {
                this.xgoal = this.xpos;
            }
            else {
                this.xpos--;
                this.facing = Direction.Left;
            }
        }
        if (this.ypos < y) {
            this.ypos++;
        }
        else if (this.ypos > y) {
            this.ypos--;
        }
    }

    chooseAnimation() {
        let r = Math.random();
        if (r < 0.2) {
            this.setSit();
        }
        else {
            this.setWalk();
        }
        // else {
        //     this.setFall();
        // }
    }

    setSitUp() {
        this.waitTime = Math.floor(Math.random() * (300 - 40 + 1)) + 40;
        this.animation = this.animations.SittingUp;
        this.animationFrame = 0;
    }

    setGettingUp() {
        this.waitTime = Math.floor(Math.random() * (300 - 40 + 1)) + 40;
        this.animation = this.animations.GettingUp;
        this.animationFrame = 0;
    }

    setFall() {
        this.animation = this.animations.Falling;
        this.animationFrame = 0;
        this.xpos -= 10;
    }

    setSit() {
        this.waitTime = Math.floor(Math.random() * (300 - 40 + 1)) + 40;
        this.animationFrame = 0;
        this.animation = this.animations.Sitting;
    }
    
    setFloat() {
        this.animation = this.animations.Floating;
        this.animationFrame = 0;
    }

    setWalk() {
        this.animationFrame = 0;
        this.animation = this.animations.Walking;
        let rng = Math.floor(Math.random() * (250 - 100 + 1)) + 100;
        if (this.xpos - 100 < 0) {
            rng = rng;
        }
        else if (this.xpos + 100 > canvas.width) {
            rng = -rng;
        }
        else if (Math.random() < 0.5) {
            rng = -rng;
        }
        this.xgoal = this.xpos + rng;
        this.walkTo(this.xgoal, this.ygoal);
    }

    setIdle() {
        if (this.animation != this.animations.Idle) {
            this.idleTime = 0;
            this.animation = this.animations.Idle;
            this.animationFrame = 0;
        }
    }

    getCurrentFrame() {
        return this.getAnimation().frames[this.animationFrame];
    }

    getDrawPosition() {
        let frame = this.getCurrentFrame();
        return [this.xpos + frame.xOff, this.ypos + frame.yOff];
    }

    getAnimation() {
        if (this.facing == Direction.Left) {
            return this.animation[1];
        }
        return this.animation[0];
    }

    getSheet() {
        return this.sheet;
    }

}

let canvas = document.querySelector('#main-bg');
let ctx = canvas.getContext('2d');
ctx.canvas.width  = window.innerWidth;
ctx.canvas.height = window.innerHeight;

function drawFrame(img, frameX, frameY, width, height, canvasX, canvasY) {
    ctx.drawImage(img,
        frameX, frameY, width, height,
        canvasX, canvasY, width * 1, height * 1);
}

function step() {
    now = window.performance.now();
    elapsed = now - then;

    if (elapsed > fpsInterval) {
        then = now - (elapsed % fpsInterval);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.canvas.width  = window.innerWidth;
        ctx.canvas.height = window.innerHeight;

        chars.forEach(element => {
            element.ygoal = canvas.height - 100;
            element.step();
            const [posX, posY] = element.getDrawPosition();
            let frame = element.getCurrentFrame();
            let img = element.getSheet();

            drawFrame(img, frame.x, frame.y, frame.width, frame.height, posX, posY);
        });
    }

    window.requestAnimationFrame(step);
}

let frameCount = 0;
let fps = 30;
let fpsInterval, startTime, now, then, elapsed;
let patchySheet = null;
let selectedPatchy = null;

const loadImage = src =>
  new Promise((resolve, reject) => {
    const img = new Image();
    img.onload = () => resolve(img);
    img.onerror = reject;
    img.src = src;
  })
;

async function onLoad() {
    $("#main-header").fadeIn(1000);

    mainGradient = new Granim({
        element: '#main-gradient',
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
    patchySheet = await loadImage(PATCHYSHEET);
    chars = [
        //new Patchouli(patchySheet, 100, canvas.height - 110, Animations1.GettingUp, 0, Animations1, Direction.Left, canvas),
        //new Patchouli(patchySheet, canvas.width - 200, canvas.height - 110, Animations1.Falling, 0, Animations1, Direction.Right, canvas),
        new Patchouli(patchySheet, canvas.width - 600, canvas.height - 100, Animations1.GettingUp, 0, Animations1, Direction.Right, canvas),
        new Patchouli(patchySheet, canvas.width - 1000, canvas.height - 100, Animations1.Falling, 0, Animations1, Direction.Right, canvas),
    ];

    fpsInterval = 1000 / fps;
    then = window.performance.now();
    startTime = then;
    window.requestAnimationFrame(step);
}

function spawn_patchy() {
    let x = Math.floor(Math.random() * (canvas.width - 100 + 1)) + 100;
    let y = Math.floor(Math.random() * (canvas.height - 100 + 1)) - 150;
    let direction = Math.random() < 0.5 ? Direction.Left : Direction.Right;
    let char = new Patchouli(patchySheet, x, y, Animations1.Idle, 0, Animations1, direction, canvas)
    chars.push(char);
}

canvas.addEventListener("mousedown",mousedown);
canvas.addEventListener("mouseup",mouseup);
canvas.addEventListener("mousemove",mousemove);
canvas.addEventListener("touchstart",touchstart);
canvas.addEventListener("touchend",touchend);
canvas.addEventListener("touchmove",touchmove);

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
        x: (evt.clientX - rect.left) / (rect.right - rect.left) * canvas.width,
        y: (evt.clientY - rect.top) / (rect.bottom - rect.top) * canvas.height
    };
}

function mousedown(e) {
    let ev = getMousePos(canvas, e);
    selectedPatchy = getSelectedPatchy(ev);
    if (selectedPatchy != null) {
        selectedPatchy.offset={
            x: ev.x - selectedPatchy.xpos,
            y: ev.y - selectedPatchy.ypos
        }
    }
}

function mousemove(e) {
    let ev = getMousePos(canvas, e);
    if (selectedPatchy != null) {
        selectedPatchy.xpos = ev.x - selectedPatchy.offset.x;
        selectedPatchy.ypos = ev.y - selectedPatchy.offset.y;
        selectedPatchy.dragged = true;
        selectedPatchy.paused = false;
        selectedPatchy.animation = selectedPatchy.animations.Dragged;
        selectedPatchy.animationFrame = 0;
    }
}

function mouseup(e) {
    if (selectedPatchy != null) {
        selectedPatchy.dragged = false;
        selectedPatchy.animation = selectedPatchy.animations.Idle;
        enableScroll();
    }
    selectedPatchy = null;
}

function touchstart(e) {
    let ev = {
        x: e.touches[0].clientX,
        y: e.touches[0].clientY
    }
    mousedown(ev);
}

function touchmove(e) {
    let ev = {
        x: e.touches[0].clientX,
        y: e.touches[0].clientY
    }
    mousemove(ev);
}

function touchend(e) {
    mouseup(e);
}

function getSelectedPatchy(e) {
    let selectedPatchy = null;
    chars.forEach(element => {
        if (e.x >= element.xpos && e.x <= element.xpos + element.getCurrentFrame().width && e.y >= element.ypos && e.y <= element.ypos + element.getCurrentFrame().height) {
            selectedPatchy = element;
            disableScroll();
        }
    });
    return selectedPatchy;
}

function disableScroll() {
    TopScroll = window.pageYOffset || document.documentElement.scrollTop;
    LeftScroll = window.pageXOffset || document.documentElement.scrollLeft,

    window.onscroll = function() { window.scrollTo(LeftScroll, TopScroll); };
}

function enableScroll() {
    window.onscroll = function() {};
 }