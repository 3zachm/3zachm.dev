<?php

include_once(__DIR__ . '/../osuranks/includes/api/redis.inc.php');

$redis = getRedis();

$channel = $_GET['channel'];

function Curl($url, $header){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$response = curl_exec($ch);
	curl_close ($ch);
	return $response;
}

if (isset($_GET['channel'])) {
    $desc = "All third party twitch emotes for $channel";
} else {
    $desc = "List a channel's third party twitch emotes";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/patchy.php'); ?>
<head>
    <meta charset="UTF-8">
    <title>Emotes | 3zachm.dev</title>
    <!-- Titles -->
    <meta name="title" content="Emotes | 3zachm.dev">
    <meta property="og:title" content="Emotes | 3zachm.dev">
    <meta property="twitter:title" content="Emotes | 3zachm.dev">
    <meta property="twitter:image" content="https://3zachm.dev/yep/img/YEP.png">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta property="og:description" content="<?php echo $desc; ?>">
    <meta property="twitter:description" content="<?php echo $desc; ?>">

    <!-- OpenGraph/Discord -->
    <meta property="og:url" content="https://3zachm.dev/">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#b875d7" data-react-helmet="true" >

    <!-- Twitter -->
    <meta property="twitter:url" content="https://3zachm.dev/">
    <meta property="twitter:card" content="summary">

    <meta name="viewport" user-scalable="yes">
    <link rel="stylesheet" href="./css/get_emotes.css?v=yep2wwwwwwwww">
    <?php
        define('MATOMO_INCLUDED', true);
        include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/matomo.php');
    ?>
</head>
<body>
    <h1>Emotes Yep</h1>
    <form action="get_emotes.php" method="get">
        <input type="text" name="channel" placeholder="Channel Name" value="<?php echo $channel; ?>">
        <input type="submit" value="Show Emotes">
    </form>
    <p>Click emote to go to its page</p>
    <input type="checkbox" id="toggle" onclick="toggle(this)">
    <label for="toggle">Toggle names</label>
    <br><br>

    <?php

    if (isset($_GET['channel'])){
        if ($redis->exists("emotes_$channel")) {
            if ($redis->get("emotes_$channel") == "null") {
                $redis->del("emotes_$channel");
            }
        }
        if ($redis->exists("emotes_$channel")) {
            $response = json_decode($redis->get("emotes_$channel"), true);
        }
        else if ($redis->exists("emoteslimiter")) {
            $response = 'ratelimited';
        }
        else {
            $response = Curl("https://emotes.adamcy.pl/v1/channel/$channel/emotes/7tv.bttv.ffz",
                [
                    "Content-Type: application/json"
                ]
            );

            $response = json_decode($response, true);
            if (isset($response['error'])) {
                $response = 'notfound';
            } else {
                $redis->set("emotes_$channel", json_encode($response));
                $redis->expire("emotes_$channel", 900);
            }
            $redis->set("emoteslimiter", '1');
            $redis->expire("emoteslimiter", 10);
        }
        if ($response == 'ratelimited') {
            echo '<p>Global API Ratelimited (1 new lookup per 10s due to public api usage)</p>';
        }
        else if ($response == 'notfound') {
            echo '<p>Channel not found</p>';
        }
        else {
            echo "<div class='emotes'>";
            foreach ($response as $emote) {
                $imgUrls = $emote['urls'];
                $img = isset($imgUrls[2]['url']) ? $imgUrls[2]['url'] : $imgUrls[0]['url'];
                $url = '';
                $code = $emote['code'];
                if ($emote['provider'] == 1) {
                    $url = "https://7tv.app/emotes/";
                    $pageID = substr($img, 26, -3);
                    $url .= $pageID;
                }
                else if ($emote['provider'] == 2) {
                    $url = "https://betterttv.com/emotes/";
                    $pageID = substr($img, 32, -3);
                    $url .= $pageID;
                }
                else if ($emote['provider'] == 3) {
                    $url = "https://www.frankerfacez.com/emoticon/";
                    $pageID = substr($img, 35, -2);
                    $url .= $pageID . "-" . $code;
                }
                echo "<div class='emote'>
                        <a href='$url' target='_blank'>
                            <img src='$img' class='emote-img' alt='$code' title='$code'/>'
                        </a>
                        <span class='emote-name' style='display: none;'>$code</span>
                     </div>";
            }
            echo "</div>";
        }
    }
    ?>
    <script>
        function toggle(box) {
            var names = document.getElementsByClassName('emote-name');
            for(i = 0; i < names.length; i++) {
                if (box.checked) {
                    names[i].style.display = 'inline';
                } else {
                    names[i].style.display = 'none';
                }
            }
        }
    </script>
</body>
</html>