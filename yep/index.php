<?php
    require_once('includes/users.php');
    require_once(__DIR__ . '/includes/db.inc.php');
    $yep = getSum($conn, "yep");
    $cock = getSum($conn, "cock");
    $users = getUserCount($conn);
?>

<!DOCTYPE html>
<head>
    <title>YEP Counter | 3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="YEP Counter | 3zachm.dev">
    <meta property="og:title" content="YEP Counter | 3zachm.dev">
    <meta property="twitter:title" content="YEP Counter | 3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/yep/img/YEP.png">
    <!-- <meta property="og:image" content="'.$META_IMG.'"> -->
    <meta name="description" content="Counting YEPs since June 11th 2021">
    <meta property="og:description" content="Counting YEPs since June 11th 2021">
    <meta property="twitter:description" content="Counting YEPs since June 11th 2021">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/yep">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true" >

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/yep">
    <meta property="twitter:card" content="summary">

    <link rel="stylesheet" type="text/css" href="css/style.css?v=69.420">
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
	<link rel="stylesheet" href="http://fonts.cdnfonts.com/css/torus">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
</head>
<body>
    <header class="main-header" id="main-header" style="display: none;">
        <!--<canvas id="main-bg" style="background-color:#181818;"></canvas>-->
        <div class="main-menu">
            <a href="/" target="_self" class="a-menu">3zachm.dev</a>
            <div class="main-menu-sep"></div>
            <!--<a href="/" target="_self" class="a-menu">Home</a>-->
            <!--<a href="#section-chatters" class="a-menu">Chatters</a>-->
            <a href="javascript:anny_init();" class="a-menu" id="anny-menu">Secret?</a>
        </div>
        <div class="main-header-center">
            <div class="count-top"><a href="https://twitch.tv/anny">twitch.tv/anny</a></div>
            <div class="count-box">
                <div class="counter" id="yep">
                    <div class="inner-counter">
                        <img src="img/YEP.webp" class="emote-img" id="yep-img" width="100px" height="98px"><p>YEP</p>
                    </div>
                    <div>
                        <p id="yep-count"><?php echo($yep); ?></p>
                    </div>
                </div>
                <div class="counter" id="cock">
                    <div class="inner-counter">
                        <p>🐔 COCK </p>
                    </div>
                    <div>
                    <p id="cock-count"><?php echo($cock); ?></p>
                    </div>
                </div>
            </div>
            <div class="count-bottom">from a total of <?php echo($users); ?> chatters</div>
            <p>Started June 11th 2021 - Live update is an estimate, refresh for accurate count</p>
        </div>
        <div class="chat-box">
        </div>
    </header>
    <!--<section class="section">
    <div class="section-container" id="section-chatters">
            <h2 class="section-title">Chatters</h2>
            <div class="projects-container">
                <div class="projects">
                    <div>YEP</div>
                </div>
            </div>
        </div>
    </section>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="js/tmi.min.js"></script>
    <script src="js/main.js?v=69.420"></script>
    <script src="js/chat.js?v=69.420"></script>
</body>
