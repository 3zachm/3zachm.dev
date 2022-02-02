<?php
    if (isset($_GET["n"])) {
        $error = $_GET["n"];
    }
    else {
        $error = "404";
    }
?>
<!DOCTYPE html>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/patchy.php'); ?>
<head>
    <title><?php echo($error) ?> | 3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="<?php echo($error) ?> | 3zachm.dev">
    <meta property="og:title" content="<?php echo($error) ?> | 3zachm.dev">
    <meta property="twitter:title" content="<?php echo($error) ?> | 3zachm.dev">
    <!--  <meta property="twitter:image" content="https://3zachm.dev/404"> -->
    <!-- <meta property="og:image" content="'.$META_IMG.'"> -->
    <meta name="description" content="<?php echo($error) ?>. Doesn't necessarily mean nothing...">
    <meta property="og:description" content="<?php echo($error) ?>. Doesn't necessarily mean nothing...">
    <meta property="twitter:description" content="<?php echo($error) ?>. Doesn't necessarily mean nothing...">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/error?n=<?php echo($error) ?>">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true" >

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/error?n=<?php echo($error) ?>">
    <meta property="twitter:card" content="summary">

    <link rel="stylesheet" href="css/error.css?wrainw">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
    <?php
        define('MATOMO_INCLUDED', true);
        include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/matomo.php');
    ?>
</head>
<body>
    <header class="main-header" id="main-header">
        <div class="video"></div>
        <div class="main-header-center">
            <p id="four"><?php echo($error) ?></p>
        </div>
        <canvas width="900" height="500" id="main-bg"></canvas>
        </div>
        <div class="main-menu">
            <a href="/" target="_self" class="a-menu" id="logo">3zachm.dev</a>
            <div class="main-menu-sep"></div>
            <a href="/" target="_self" class="a-menu" id="home-menu">Home</a>
            <a href="javascript:boots_init();" class="a-menu" id="anny-menu">Rain</a>
            <a href="javascript:spawn_patchy();" class="a-menu noselect" id="patchy-menu">Patchouli</a>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vtt.js/0.12.1/vtt.min.js" integrity="sha384-al9I19ONGTJ5nA5SlGvEeUl5youezo+vWKHI7u307OomzK/mSVtWphp6wSdSSNSD" crossorigin="anonymous"></script>
    <script src="../js/patchy.js?rainwwwwwwwwwwwwwwwwwww"></script>
    <script src="js/error.js?wrainwwwwwwwww"></script>
</body>