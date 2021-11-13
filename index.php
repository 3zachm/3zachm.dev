<!DOCTYPE html>
<html lang="en">
<head>
    <title>3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="3zachm.dev">
    <meta property="og:title" content="3zachm.dev">
    <meta property="twitter:title" content="3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/img/old/3zachm.png">
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
    <link rel="stylesheet" type="text/css" href="css/style.css?rain?">
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
	<link rel="stylesheet" href="http://fonts.cdnfonts.com/css/torus">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header class="main-header" id="main-header" style="display: none;">
        <canvas id="main-bg"></canvas>
        <div class="video">
        </div>
        <div class="main-menu">
            <a href="/" target="_self" class="a-menu" id="logo">3zachm.dev</a>
            <div class="main-menu-sep"></div>
            <a href="#section-projects" class="a-menu" id="proj-menu">Projects</a>
            <a href="#section-social" class="a-menu" id="social-menu">Social</a>
            <a href="#section-github" class="a-menu" id="github-menu">GitHub</a>
            <a href="javascript:boots_init();" class="a-menu" id="jerma-menu">Rain?</a>
        </div>
        <div class="main-header-center">
            <h1 class="main-header-heading" id="four">Hello</h1>
        </div>
    </header>
    <section class="section" data-aos="fade-left">
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
                <div data-aos="fade-left" class="projects">
                    <div class="projects-column" id="youmu-left">
                        <div class="column-inner">
                            <img src="img/youmu2.webp" class="projects-img" alt="youmu example" id="youmu-img">
                        </div>
                    </div>
                    <div class="projects-column" id="youmu-right">
                        <div class="column-inner">
                            <h1>youmu</h1>
                            <p>A recursive timer discord bot, pinging on a set interval for as long as you aren't AFK.
                                Inspired by Anigame but has other case uses c:</p>
                            <a href="https://github.com/3zachm/recursive-reminders" id="youmu-source" target="_self"><b>Source Code</b></a></p>
                            <a href="./youmu/" id="youmu-invite" target="_self"><b>Invite</b></a></p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-right" class="projects">
                    <div class="projects-column" id="stats-left">
                        <div class="column-inner">
                            <img src="img/ranks.webp" class="projects-img" alt="osu!raks example" id="ranks-img">
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
                <div data-aos="fade-left" class="projects">
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
        </div>
    </section>
    <section class="section">
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
    <section class="section">
        <div class="section-container" id="section-github">
            <h2 class="section-title" id="section-github">GitHub</h2>
            <div class="github">
                <p>I'll hand pick repos later... or maybe auto gen idk</p>
            </div>
        </div>
    </section>
    <script src="js/main.js?rainwww"></script>
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