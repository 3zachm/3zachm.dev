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
    <meta name="theme-color" content="#b875d7" data-react-helmet="true">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/yep">
    <meta property="twitter:card" content="summary">

    <link rel="stylesheet" type="text/css" href="css/style.css?v=6ff?">
    <link rel="preload" href="https://fonts.cdnfonts.com/s/51361/TorusRegular.734ed3ae.woff" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira Mono">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/torus">
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
            <a href="#history" class="a-menu">History</a>
            <a href="javascript:anny_init();" class="a-menu" id="anny-menu">Secret?</a>
        </div>
        <div class="main-header-center">
            <div class="count-top"><a href="https://twitch.tv/anny">twitch.tv/anny</a></div>
            <div class="count-box">
                <div class="counter" id="yep">
                    <div class="inner-counter">
                        <img src="img/YEP.webp" class="emote-img" id="yep-img" width="100px" height="98px">
                        <p>YEP</p>
                    </div>
                    <div>
                        <p id="yep-count"><?php echo ($yep); ?></p>
                    </div>
                </div>
                <div class="counter" id="cock">
                    <div class="inner-counter">
                        <p>🐔 COCK </p>
                    </div>
                    <div>
                        <p id="cock-count"><?php echo ($cock); ?></p>
                    </div>
                </div>
            </div>
            <div class="count-bottom">from a total of <?php echo ($users); ?> chatters</div>
            <p>Started June 11th 2021 - Live update is an estimate, refresh for accurate count</p>
        </div>
        <div class="chat-box">
        </div>
    </header>
    <section class="section">
        <div class="section-container" id="history">
            <h2 class="section-title">History</h2>
            <div class="projects-container">
                <div class="projects">
                    <div id="graph-container">
                        <div id="graph"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://twemoji.maxcdn.com/v/13.1.0/twemoji.min.js" integrity="sha384-gPMUf7aEYa6qc3MgqTrigJqf4gzeO6v11iPCKv+AP2S4iWRWCoWyiR+Z7rWHM/hU" crossorigin="anonymous"></script>
    <script src="js/tmi.min.js"></script>
    <script src="js/main.js?v=1?"></script>
    <script src="js/chat.js?v=1?"></script>
    <script src='https://cdn.plot.ly/plotly-2.4.2.min.js'></script>
    <script>
        let xData = []
        let yYData = []
        let yCData = []
        $.getJSON("./history.php", function(data) {
            var items = [];
            $.each(data, function(key, val) {
                xData.push(val['time']);
                yYData.push(val['yep']);
                yCData.push(val['cock']);
            });
            var dataY = {
                x: xData,
                y: yYData,
                type: 'scatter',
                mode: 'lines',
                name: 'YEP',
                line: {
                    color: '#17BECF'
                }
            };
            var dataC = {
                x: xData,
                y: yCData,
                type: 'scatter',
                mode: 'lines',
                name: 'Cock',
                line: {
                    color: '#FFF'
                }
            };
            var layout = {
                plot_bgcolor: "#181818",
                paper_bgcolor: "#181818",
                font: {
                    color: "#fff",
                },
                xaxis: {fixedrange: true},
                yaxis: {fixedrange: true}
            };
            Plotly.newPlot('graph', [dataY, dataC], layout);
        });
    </script>
</body>
