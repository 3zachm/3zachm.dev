<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asayake Bot | 3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="Asayake Bot | 3zachm.dev">
    <meta property="og:title" content="Asayake Bot | 3zachm.dev">
    <meta property="twitter:title" content="Asayake Bot | 3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/img/old/asayake.png">
    <!-- <meta property="og:image" content="'.$META_IMG.'"> -->
    <meta name="description" content="Hello">
    <meta property="og:description" content="Hello">
    <meta property="twitter:description" content="Hello">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/asayake">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/asayake">
    <meta property="twitter:card" content="summary">

    <meta name="viewport" user-scalable="yes">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <script src="../js/granim.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css?rain?">
    <style>
        .btn {
            display: inline-block;
            margin-bottom: 0;
            border-radius: 2px;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 16px;
            line-height: 1.5;
            user-select: none;
        }

        .invite__btn {
            color: #fff;
            background-color: #000;
            margin-top: 15px;
            font-family: Manrope;
            text-decoration: none;
        }
    </style>
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/torus">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
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
            <a href="https://discord.com/api/oauth2/authorize?client_id=907538185976946720&permissions=268438528&scope=applications.commands%20bot" class="a-menu" id="proj-menu">Invite</a>
            <!-- <a href="#section-social" class="a-menu" id="social-menu">GitHub</a> -->
            <a href="https://github.com/3zachm/colors-js" class="a-menu" id="github-menu">GitHub</a>
            <a href="javascript:boots_init();" class="a-menu" id="jerma-menu">Rain?</a>
        </div>
        <div class="main-header-center">
            <img src="../img/asayake_circle.webp" alt="Asayake" class="asayake-logo" style="width: 192px; height: 192px;display: block;margin-left: auto;margin-right: auto;">
            <h1 class="main-header-heading" id="four">Asayake</h1>
            <a href="https://discord.com/api/oauth2/authorize?client_id=907538185976946720&permissions=268438528&scope=applications.commands%20bot" target="_self" class="btn invite__btn">Invite</a>
        </div>
    </header>
    <script src="./js/main.js?rainwwww"></script>
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