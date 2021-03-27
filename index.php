<!DOCTYPE html>
<head>
    <title>3zachm.dev</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/granim.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1.02">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header class="main-header" id="main-header" style="display: none;">
        <canvas id="main-bg"></canvas>
        <div class="main-menu">
            <p class="p-menu" id="web-title">3zachm.dev</p>
            <div class="main-menu-sep"></div>
            <a href="#section-projects" class="a-menu">Projects</a>
            <a href="#section-social" class="a-menu">Social</a>
            <a href="#section-github" class="a-menu">GitHub</a>
            <a href="javascript:jerma_init();" class="a-menu" id="jerma-menu">Secret?</a>
        </div>
        <div class="main-header-center">
            <h1 class="main-header-heading">Hello</h1>
        </div>
    </header>
    <section class="section">
        <div class="section-container" id="section-projects">
            <h2 class="section-title">Projects</h2>
            <div class="projects-container">
                <div data-aos="fade-right" class="projects">
                    <div class="projects-column" id="youmu-left">
                        <div class="column-inner">
                            <img src="img/youmu2.png" class="projects-img" id="youmu-img">
                        </div>
                    </div>
                    <div class="projects-column" id="youmu-right">
                        <div class="column-inner">
                            <h1><u>youmu</u></h1>
                            <p>A recursive timer discord bot, pinging on a set interval for as long as you aren't AFK.
                                Inspired by Anigame but has other case uses c:</p>
                            <a href="https://github.com/3zachm/recursive-reminders" id="youmu-source" target="_self"><b>Source Code</b></a></p>
                            <a href="./youmu/" id="youmu-invite" target="_self"><b>Invite</b></a></p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="projects">
                    <div class="projects-column" id="stats-left">
                        <div class="column-inner">
                            <img src="img/ranks.png" class="projects-img" id="ranks-img">
                        </div>
                    </div>
                    <div class="projects-column" id="stats-right">
                        <div class="column-inner">
                            <h1><u>osu!ranks</u></h1>
                            <p>Simple tool that displays all API user stats for all 4 gamemodes</p>
                            <a href="./osuranks/" target="_self"><b>Website</b></a></p>
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
                            <img class="social-logo" id="logo-twitter" src="./img/icons/twitter.png">
                            <a href="https://twitter.com/3zachm/" class="social-link">@3zachm</a>
                        </div>
                        <div class="social-item" id="social-youtube">
                            <img class="social-logo" id="logo-youtube" src="./img/icons/youtube.png">
                            <a href="http://youtube.com/c/3zachm/" class="social-link">c/3zachm</a>
                        </div>
                        <div class="social-item" id="social-twitch">
                            <img class="social-logo" id="logo-twitch" src="./img/icons/twitch.png">
                            <a href="https://www.twitch.tv/3zachm/" class="social-link">3zachm</a>
                        </div>
                        <div class="social-item" id="social-discord">
                            <img class="social-logo" id="logo-discord" src="./img/icons/discord.png">
                            <a  class="social-link">3zachm#9999</a>
                        </div>
                        <div class="social-item" id="social-osu">
                            <img class="social-logo" id="logo-osu" src="./img/icons/osu.png">
                            <a href="https://osu.ppy.sh/users/8630110" class="social-link">u/3zachm</a>
                        </div>
                        <div class="social-item" id="social-steam">
                            <img class="social-logo" id="logo-steam" src="./img/icons/steam.png">
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
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/main.js?v=1.02"></script>
</body>
