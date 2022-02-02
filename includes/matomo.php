<?php

$code = "<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
  _paq.push([\"setCookieDomain\", \"*.3zachm.dev\"]);
  _paq.push([\"setDoNotTrack\", true]); <!-- No tracking done here :D -->
  _paq.push([\"disableCookies\"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=\"//matomo.3zachm.dev/\";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->";

defined('MATOMO_INCLUDED') || die("$code
<body style='color:#fff; background-color:#000; font-family: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,\"Noto Sans\",\"Liberation Sans\",sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\",\"Noto Color Emoji\";'>
    <div style='text-align:center;'>
        <h1>Woah</h1>
        <p>
          You aren't supposed to be here >:( <br> now you owe me a cookie
        </p>
      <br><img height='500px' src='https://3zachm.dev/img/sleep.gif' /><!--<img src='https://3zachm.dev/img/bounce.gif' />-->
      <br><br><a style='color:#fff;' href='/'>home</a>
    </div>
</body>
");

echo("

$code

");
