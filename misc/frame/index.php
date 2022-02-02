<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frame Exporter | 3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="Frame Exporter | 3zachm.dev">
    <meta property="og:title" content="Frame Exporter | 3zachm.dev">
    <meta property="twitter:title" content="Frame Exporter | 3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/img/patch.jpg">
    <!-- <meta property="og:image" content="'.$META_IMG.'"> -->
    <meta name="description" content="Simple frame exporter">
    <meta property="og:description" content="Simple frame exporter">
    <meta property="twitter:description" content="Simple frame exporter">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/misc/frame">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/misc/frame">
    <meta property="twitter:card" content="summary">

    <link rel="stylesheet" type="text/css" href="css/style.css?v=wwwwwwwwwwww?">
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira Mono">
    <!-- <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/torus"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <?php
        define('MATOMO_INCLUDED', true);
        include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/matomo.php');
    ?>
</head>

<body>
    <header class="main-header" id="main-header">
        <!--<canvas id="main-bg" style="background-color:#181818;"></canvas>-->
        <div class="main-menu">
            <a href="/" target="_self" class="a-menu">3zachm.dev</a>
            <div class="main-menu-sep"></div>
            <a href="/includes/matomo.php" class="a-menu" id="funny-menu">yo</a>
        </div>
        <div class="main-header-center" id="div-main">
            <input type="file" id="input" accept="video/mp4, video/webm" />
            <video id="video" width="720" controls style="display: none;"></video>
            <p id="message"></p>
            <button onclick="getFrame()">Get Current Frame</button>
            <p>or insert timestamp like "00:00:00.000"</p>
            <div id="frame-input">
                <input type="text" name="timestamp" id="text-input" placeholder="timestamp" />
                <button onclick="getFrame(document.getElementById('text-input').value)">Get Frame</button>
            </div>
            
        </div>
    </header>
    <!-- <section class="section">
        <div class="section-container" id="section-output">
            <img id="frame" src="" alt="" />
        </div>
    </section> -->
    <script src="https://cdn.jsdelivr.net/npm/@ffmpeg/ffmpeg@0.10.1/dist/ffmpeg.min.js" integrity="sha384-vJ12z8qjc9IvmbQhtnLlwaI2yoAeszHxbXWoJ/+22jwUyAnQ9oU4djfranqRyxeg" crossorigin="anonymous"></script>
    <!-- <script src="./js/ffprobe-wasm.js"></script> -->
    <script>
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        function formatTime(milliseconds) {
            var seconds = Math.floor(milliseconds / 1000);
            var hours = Math.floor(seconds / 3600);
            var minutes = Math.floor((seconds - (hours * 3600)) / 60);
            var seconds = seconds - (hours * 3600) - (minutes * 60);

            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            return hours + ':' + minutes + ':' + seconds + '.' + milliseconds.toString().substr(milliseconds.toString().length - 3, 3);
        }

        let reqId;
        let milliseconds = 0;

        let startTracking = function() {
            milliseconds = Math.round(video.currentTime * 1000);
            reqId = requestAnimationFrame(function play() {
                milliseconds = Math.round(video.currentTime * 1000);
                reqId = requestAnimationFrame(play);
                console.log(formatTime(milliseconds));
            });
        };

        let stopTracking = function () {
        if (reqId) {
            cancelAnimationFrame(reqId);
        }
        };

        video.addEventListener('play', startTracking);

        video.addEventListener('pause', stopTracking);

        video.addEventListener('seeked', async (event) => {
            startTracking();
            await sleep(10);
            stopTracking();
        });
        document.getElementById("input").addEventListener("change", function() {
            let media = URL.createObjectURL(this.files[0]);
            let video = document.getElementById("video");
            video.src = media;
            video.style.display = "block";
            video.play();
        });

        const { createFFmpeg, fetchFile } = FFmpeg;
        const ffmpeg = createFFmpeg({ log: true });

        const getFrame = async (timeStamp = "-1") => {
            if (timeStamp == "-1") {
                timeStamp = formatTime(milliseconds);
            }
            const files = document.getElementById("input").files;

            const message = document.getElementById('message');
            const { name } = files[0];
            message.innerHTML = 'Loading ffmpeg-core.js';
            if (!ffmpeg.isLoaded()) {
                await ffmpeg.load();
                message.innerHTML = 'ffmpeg-core.js loaded';
            }
            message.innerHTML = 'Start trimming';
            ffmpeg.FS('writeFile', name, await fetchFile(files[0]));
            await ffmpeg.run('-i', name, '-ss', timeStamp, '-vframes', '1', 'output.png');
            message.innerHTML = 'Complete';
            const data = ffmpeg.FS('readFile', 'output.png');

            const frame = document.getElementById('frame');
            const frameURL = URL.createObjectURL(new Blob([data.buffer], { type: 'image/png' }));
            // frame.src = frameURL;
            window.open(frameURL, '_blank').focus();
        };
    </script>
</body>

</html>