<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/patchy.php'); ?>
<head>
    <title>3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="3zachm.dev">
    <meta property="og:title" content="3zachm.dev">
    <meta property="twitter:title" content="3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/img/3zachm.png">
    <!-- <meta property="og:image" content="'.$META_IMG.'"> -->
    <meta name="description" content="Hello">
    <meta property="og:description" content="Hello">
    <meta property="twitter:description" content="Hello">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true" >

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/">
    <meta property="twitter:card" content="summary">

    <meta name="viewport" user-scalable="yes">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <script src="js/granim.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css?rainww">
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
	<link rel="stylesheet" href="http://fonts.cdnfonts.com/css/torus">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php
        define('MATOMO_INCLUDED', true);
        include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/matomo.php');
    ?>
</head>
<body>
    <header class="main-header" id="main-header" style="display: none;">
        <canvas id="main-gradient"></canvas>
        <div class="video"></div>
        <div class="main-header-center">
            <h1 class="main-header-heading noselect" id="four">hello</h1>
        </div>
        <canvas width="900" height="500" id="main-bg"></canvas>
        <div class="main-menu">
            <a href="/" target="_self" class="a-menu noselect" id="logo">3zachm.dev</a>
            <div class="main-menu-sep"></div>
            <a href="#section-projects" class="a-menu noselect " id="proj-menu">Projects</a>
            <a href="#section-social" class="a-menu noselect" id="social-menu">Social</a>
            <a href="#section-misc" class="a-menu noselect" id="misc-menu">Misc</a>
            <a href="javascript:boots_init();" class="a-menu noselect" id="jerma-menu">Rain?</a>
            <a href="javascript:spawn_patchy();" class="a-menu noselect" id="patchy-menu">Patchouli</a>
        </div>
    </header>
    <section class="section" data-aos="fade-right">
        <div class="section-container" id="section-projects">
            <h2 class="section-title">Projects</h2>
            <div class="projects-container">
            <div data-aos="fade-right" class="projects">
                <div class="projects-column" id="asayake-left">
                    <div class="column-inner">
                        <img src="img/asayake2.webp" class="projects-img" alt="asayake example" id="asayake-img">
                    </div>
                </div>
                <div class="projects-column" id="asayake-right">
                    <div class="column-inner">
                        <h1>asayake</h1>
                        <p>User-role color bot inspired by Hex (which has gone offline).
                        Wrriten in node.js, meant for smaller servers as it's role based.</p>
                        <a href="https://github.com/3zachm/colors-js" id="asayake-source" target="_self"><b>Source Code</b></a></p>
                        <a href="./asayake/" id="asayake-invite" target="_self"><b>Invite</b></a></p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" class="projects">
                <div class="projects-column" id="youmu-left">
                    <div class="column-inner">
                        <img src="img/youmu2.webp" class="projects-img" alt="youmu example" id="youmu-img">
                    </div>
                </div>
                <div class="projects-column" id="youmu-right">
                    <div class="column-inner">
                        <h1>youmu</h1>
                        <p>A recursive timer discord bot, pinging on a set interval for as long as you aren't AFK.
                            Created for a personal need and is a bit of a mess imo, but it works</p>
                        <a href="https://github.com/3zachm/recursive-reminders" id="youmu-source" target="_self"><b>Source Code</b></a></p>
                        <a href="./youmu/" id="youmu-invite" target="_self"><b>Invite</b></a></p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" class="projects">
                <div class="projects-column" id="stats-left">
                    <div class="column-inner">
                        <img src="img/ranks2.webp" class="projects-img" alt="osu!raks example" id="ranks-img">
                    </div>
                </div>
                <div class="projects-column" id="stats-right">
                    <div class="column-inner">
                        <h1>osu!ranks</h1>
                        <p>Simple tool that displays all API user stats for all 4 gamemodes</p>
                        <a href="./osuranks/" target="_self"><b>Website</b></a></p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" class="projects">
                <div class="projects-column" id="discord-left">
                    <div class="column-inner">
                        <img src="img/discord-preview2.webp" class="projects-img" alt="discord pfp crop example" id="discord-img">
                    </div>
                </div>
                <div class="projects-column" id="discord-right">
                    <div class="column-inner">
                        <h1>discord previewer</h1>
                        <p>Another small thing that allows you to crop, export, and preview it in most contexts on discord</p>
                        <a href="./discord/" target="_self"><b>Website</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" data-aos="fade-right">
        <div class="section-container" id="section-social">
            <h2 class="section-title" id="title-social">Social</h2>
            <div class="social">
                <div class="social-container" data-aos="flip-up">
                    <div id="social-avatar">
                        <div id="avatar"></div>
                    </div>
                    <div class="social-sep"></div>
                    <div id="social-center">
                        <div class="social-item" id="social-twitter">
                            <img class="social-logo" id="logo-twitter" alt="Twitter" src="./img/icons/twitter.png">
                            <a href="https://twitter.com/3zachm/" class="social-link">@3zachm</a>
                        </div>
                        <div class="social-item" id="social-youtube">
                            <img class="social-logo" id="logo-youtube" alt="YouTube" src="./img/icons/youtube.png">
                            <a href="http://youtube.com/c/3zachm/" class="social-link">c/3zachm</a>
                        </div>
                        <div class="social-item" id="social-twitch">
                            <img class="social-logo" id="logo-twitch" alt="Twitch" src="./img/icons/twitch.png">
                            <a href="https://www.twitch.tv/3zachm/" class="social-link">3zachm</a>
                        </div>
                        <div class="social-item" id="social-discord">
                            <img class="social-logo" id="logo-discord" alt="Discord" src="./img/icons/discord.png">
                            <a href="https://3zachm.dev/" onclick="copySocial(this)" class="social-link">3zachm#9999</a>
                        </div>
                        <div class="social-item" id="social-osu">
                            <img class="social-logo" id="logo-osu" alt="osu!" src="./img/icons/osu.png">
                            <a href="https://osu.ppy.sh/users/8630110" class="social-link">u/3zachm</a>
                        </div>
                        <div class="social-item" id="social-steam">
                            <img class="social-logo" id="logo-steam" alt="Steam" src="./img/icons/steam.png">
                            <a href="https://steamcommunity.com/id/3zachm/" class="social-link">id/3zachm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section" data-aos="fade-right">
        <div class="section-container" id="section-github">
            <h2 class="section-title" id="title-github">GitHub</h2>
            <div class="github">
                <p>I'll hand pick repos later... or maybe auto gen idk</p>
            </div>
        </div>
    </section> -->
    <section class="section" data-aos="fade-right">
        <div class="section-container" id="section-misc">
            <h2 class="section-title" id="title-misc">Random</h2>
            <div class="projects-container" style="margin-top:50px;">
                <div class="projects">
                    <div class="projects-column" id="ascii-left">
                        <div class="column-inner">
                            <a href='https://twitter.com/NKNK_NGRMS'><img src="img/boot.webp" class="projects-img" alt="boots" style="width: 60%;"></a>
                            <!-- <textarea readonly class="patchy-text" rows="21" cols="100" spellcheck="false">　　　　　　　 　__,,,..　-──- ､.,_
　　　く ＼ｧ'"´　　,-─-､＿＿　 ｀ヽ　lヽ
　　 l二＼ |ア´￣]-──ヽ.,__ ｀ヽﾄ _ﾝ　 }/｀∧
　　　i´￣__ト─'"´::::/::::::::::::::::::｀ヽゝ,__,..ｲ.／　}
　　 r'ヽ/:::::::::/:::::::::;'|;;;;;;/ |::::::::::::::::::::::｀ヽ｀「￣
　　 {　7:::::::　|!:::::::::|.|､::/ _|:::::::,|.|ヽ:::::::|::::∨、
　　 ｿ .|:::::::::::|l:::::::::f斤ｱT !;;;;;/|」-| |::::ﾊ:::}._」
　 　 ヽ|:::::::::::||:::::::::| 弋_ﾘ　 　　 fﾃｒ|/::::|./
　　　　|:::::::::::||:::::::::|""　　　　 . 弋j };;;;;」
　　　　|:::::::::::||:::::::::|　　　　　　　　"| | |
　　　　|.:::::::::八:::::::ﾄ､　　　　´　 　人! |　　　　 　 ／）
　　 　 |!::::::::::::,ﾊ:::::∨＞ ､.,__,,. イ::::::|| |　 　 　 ／ /、
　　 　 |l:::::　,ｲ　|:::::::}＼　 「r ヽ |:::::::|!.|　　　r/　 ｀つﾊ
　　 　 ||::ア´￣｀!:::::ﾘﾄ-､ヽﾚﾍ　」:::::::| |　　ｒﾍ　　ノ-イ
　　　　!/　　　　|::::/＼　 }ム ﾊ. |:::::::| |　 /＼{＼＿||
　　　　;　　　 ／{]、　 ∨　.}l{ 　／ｱ三ミヽ、　＼＿/
　　　r'　　　く__/_」_r-､| 　 {l}／／　　　 ＼Ｘ´,三三ヽ
　　　ヽr‐ﾍ￣￣　　 ∨　 ／／　　　　 ／／　　　／
　　　　|￣ | 　　 　 　 ヽく∠＿/´! ／´ﾊ　　　 ／
.　　　　'　　'､　　　　-─／　| {　 ｀'　 //ト-- '
　　　 　 ヽ. /＼　　　 ｒ'　　　ヽヽ　　 　ｲ}
                            </textarea> -->
                        </div>
                    </div>
                    <div class="projects-column" id="ascii-right">
                        <div class="column-inner">
                            <h2>Other Pages</h2>
                            <a href="./misc/frame/" target="_self"><h3>Video Frame Exporter</h3></a>
                            <a href="./yep/" target="_self"><h3>YEP Counter</h3></a>
                            <a href="./swf/" target="_self"><h3>SWFs</h3></a>
                        </div>
                    </div>
                </div>
                <a class="noselect" href="./includes/matomo.php" target="_self" style="color:#000;animation:none;margin:0;height:20px;">
                    <h3>------------</h3>
                </a>
            </div>
        </div>
    </section>
    <section class="section" data-aos="fade-right">
        <div class="section-container" id="section-patchy">
        <h2 class="section-title"> </h2>
        <div class="patchy">
            <p>might be loud cause I can't control flash volume pls be careful</p>
            <div class="flash-center" id="section-patchy-flash"></div>
            <div class="patchy">
                <div class="walky-patchy">
                    <a href="https://www.youtube.com/watch?v=3sOAkdu3tRo" target="_blank"><img src="img/walky.gif" alt="walky" id="walky-img" /></a>
                </div>
            </div>
        </div>
    </section>
    <script src="js/patchy.js?rainw"></script>
    <script src="js/main.js?wwwwwwwwwwrain"></script>
    <script>
        window.RufflePlayer = window.RufflePlayer || {};
        window.RufflePlayer.config = {
            // Options affecting the whole page
            "publicPath": undefined,
            "polyfills": true,

            // Options affecting files only
            "autoplay": "off",
            "unmuteOverlay": "visible",
            "backgroundColor": "#000000",
            "letterbox": "off",
            "warnOnUnsupportedContent": true,
            "contextMenu": true,
            "showSwfDownload": false,
            "upgradeToHttps": window.location.protocol === "https:",
            "maxExecutionDuration": {"secs": 15, "nanos": 0},
            "logLevel": "error",
            "base": null,
            "menu": true,
            "salign": "",
            "scale": "showAll",
            "quality": "high",
        };
        window.addEventListener("load", async (event) => {
            const ruffle = window.RufflePlayer.newest();
            const player = ruffle.createPlayer();
            const container = document.getElementById("section-patchy-flash");
            container.appendChild(player);
            await new Promise(r => setTimeout(r, 2000));
            player.load("swf/rhythm heaven new.swf");
            // player.style.width = "500px";
        });
    </script>
    <script src="wasm/ruffle/ruffle.js"></script>
    <script>
        function copySocial(social) {
            event.preventDefault()
            navigator.clipboard.writeText(social.innerHTML).then(() => {
                return true;
            }, () => {
                return false;
            });
        }
    </script>
</body>
</html>