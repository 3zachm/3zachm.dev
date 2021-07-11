<!DOCTYPE html>
<html lang="en-US" id="main-html" style="font-size: 100%" class="full-motion theme-dark platform-web newBrand" data-rh="lang,style,class">

<head>
    <meta charset="utf-8">
    <title>Discord Crop Previewer | 3zachm.dev</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=5">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/cropperjs" integrity="sha384-kbvjDm1Ra/JEuPb3eiXyo/o5M0OTFxIONPHzkujQEDGdxqVjrX3ViDMtAFRMqWBh" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
</head>

</html>

<body>
    <div id="app-mount" class="appMount-3lHmkl"><svg viewBox="0 0 1 1" aria-hidden="true" style="position: absolute; pointer-events: none; top: -1px; left: -1px; width: 1px; height: 1px;">
            <mask id="svg-mask-squircle" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <path fill="white" d="M0 0.464C0 0.301585 0 0.220377 0.0316081 0.158343C0.0594114 0.103776 0.103776 0.0594114 0.158343 0.0316081C0.220377 0 0.301585 0 0.464 0H0.536C0.698415 0 0.779623 0 0.841657 0.0316081C0.896224 0.0594114 0.940589 0.103776 0.968392 0.158343C1 0.220377 1 0.301585 1 0.464V0.536C1 0.698415 1 0.779623 0.968392 0.841657C0.940589 0.896224 0.896224 0.940589 0.841657 0.968392C0.779623 1 0.698415 1 0.536 1H0.464C0.301585 1 0.220377 1 0.158343 0.968392C0.103776 0.940589 0.0594114 0.896224 0.0316081 0.841657C0 0.779623 0 0.698415 0 0.536V0.464Z"></path>
            </mask>
            <mask id="svg-mask-header-bar-badge" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" x="0" y="0" width="1" height="1"></rect>
                <circle fill="black" cx="0.75" cy="0.75" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-voice-user-summary-item" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" width="1" height="1"></rect>
                <circle fill="black" cx="1.2083333333333333" cy="0.5" r="0.5416666666666666"></circle>
            </mask>
            <mask id="svg-mask-vertical-fade" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <linearGradient id="svg-mask-vertical-fade-gradient" gradientTransform="rotate(90)" x1="0" x2="1" y1="0" y2="0">
                    <stop offset="0%" stop-color="white"></stop>
                    <stop offset="100%" stop-color="black"></stop>
                </linearGradient>
                <rect fill="url(#svg-mask-vertical-fade-gradient)" x="0" y="0" width="1" height="1"></rect>
            </mask>
            <mask id="svg-mask-panel-button" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" x="0" y="0" width="1" height="1"></rect>
                <circle fill="black" cx="0.75" cy="0.75" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-channel-call-control-button" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.8214285714285714" cy="0.8214285714285714" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-channel-call-control-button-badge-16" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.6428571428571429" y="-0.07142857142857142" width="0.42857142857142855" height="0.42857142857142855" rx="0.21428571428571427" ry="0.21428571428571427"></rect>
            </mask>
            <mask id="svg-mask-channel-call-control-button-badge-22" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.5357142857142857" y="-0.07142857142857142" width="0.5357142857142857" height="0.42857142857142855" rx="0.21428571428571427" ry="0.21428571428571427"></rect>
            </mask>
            <mask id="svg-mask-channel-call-control-button-badge-29" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.4107142857142857" y="-0.07142857142857142" width="0.6607142857142857" height="0.42857142857142855" rx="0.21428571428571427" ry="0.21428571428571427"></rect>
            </mask>
            <mask id="svg-mask-avatar-default" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-round-16" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.8125" cy="0.8125" r="0.3125"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-16" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.5" y="0.3125" width="0.625" height="0.8125" rx="0.1625" ry="0.1625"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-16" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.21875" y="0.5" width="1.1875" height="0.625" rx="0.3125" ry="0.3125"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-round-24" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.8333333333333334" cy="0.8333333333333334" r="0.2916666666666667"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-24" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.5416666666666666" y="0.375" width="0.5833333333333334" height="0.75" rx="0.15" ry="0.15"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-24" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.2916666666666667" y="0.5416666666666666" width="1.0833333333333333" height="0.5833333333333334" rx="0.2916666666666667" ry="0.2916666666666667"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-round-32" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.84375" cy="0.84375" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-32" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.59375" y="0.4375" width="0.5" height="0.65625" rx="0.13125" ry="0.13125"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-32" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.359375" y="0.59375" width="0.96875" height="0.5" rx="0.25" ry="0.25"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-round-40" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.85" cy="0.85" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-40" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.6" y="0.45" width="0.5" height="0.65" rx="0.13" ry="0.13"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-40" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.375" y="0.6" width="0.95" height="0.5" rx="0.25" ry="0.25"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-round-80" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.85" cy="0.85" r="0.175"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-80" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.675" y="0.575" width="0.35" height="0.45" rx="0.09" ry="0.09"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-80" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.525" y="0.675" width="0.65" height="0.35" rx="0.175" ry="0.175"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-round-120" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.8333333333333334" cy="0.8333333333333334" r="0.16666666666666666"></circle>
            </mask>
            <mask id="svg-mask-avatar-status-mobile-120" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.6666666666666666" y="0.5666666666666667" width="0.3333333333333333" height="0.43333333333333335" rx="0.08666666666666667" ry="0.08666666666666667"></rect>
            </mask>
            <mask id="svg-mask-avatar-status-typing-120" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.5166666666666667" y="0.6666666666666666" width="0.6333333333333333" height="0.3333333333333333" rx="0.16666666666666666" ry="0.16666666666666666"></rect>
            </mask>
            <mask id="svg-mask-status-online-mobile" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" x="0" y="0" width="1" height="1" rx="0.1875" ry="0.125"></rect>
                <rect fill="black" x="0.125" y="0.16666666666666666" width="0.75" height="0.5"></rect>
                <ellipse fill="black" cx="0.5" cy="0.8333333333333334" rx="0.125" ry="0.08333333333333333"></ellipse>
            </mask>
            <mask id="svg-mask-status-online" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
            </mask>
            <mask id="svg-mask-status-idle" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.25" cy="0.25" r="0.375"></circle>
            </mask>
            <mask id="svg-mask-status-dnd" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <rect fill="black" x="0.125" y="0.375" width="0.75" height="0.25" rx="0.125" ry="0.125"></rect>
            </mask>
            <mask id="svg-mask-status-offline" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.5" cy="0.5" r="0.25"></circle>
            </mask>
            <mask id="svg-mask-status-streaming" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <polygon fill="black" points="0.35,0.25 0.78301275,0.5 0.35,0.75"></polygon>
            </mask>
            <mask id="svg-mask-status-typing" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" cx="0" cy="0" width="1" height="1" ry="0.5" rx="0.2"></rect>
            </mask>
            <mask id="svg-mask-avatar-voice-call-80" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.85" cy="0.85" r="0.2"></circle>
            </mask>
            <mask id="svg-mask-avatar-call-icon" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <circle fill="white" cx="0.5" cy="0.5" r="0.5"></circle>
                <circle fill="black" cx="0.85" cy="0.15" r="0.2"></circle>
            </mask>
            <mask id="svg-mask-sticker-rounded-rect" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <path d="M0 0.26087C0 0.137894 0 0.0764069 0.0382035 0.0382035C0.0764069 0 0.137894 0 0.26087 0H0.73913C0.862106 0 0.923593 0 0.961797 0.0382035C1 0.0764069 1 0.137894 1 0.26087V0.73913C1 0.862106 1 0.923593 0.961797 0.961797C0.923593 1 0.862106 1 0.73913 1H0.26087C0.137894 1 0.0764069 1 0.0382035 0.961797C0 0.923593 0 0.862106 0 0.73913V0.26087Z" fill="white"></path>
            </mask>
            <mask id="svg-mask-chat-input-button-notification" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect width="1" height="1" fill="white"></rect>
                <circle cx="0.85" cy="0.85" r="0.25" fill="black"></circle>
            </mask>
            <mask id="svg-mask-sticker-shop-notification" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect width="1" height="1" fill="white"></rect>
                <circle cx="0.9" cy="0.9" r="0.5" fill="black"></circle>
            </mask>
            <mask id="svg-mask-autocomplete-emoji-upsell-emoji" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <rect fill="white" width="1" height="1"></rect>
                <circle fill="black" cx="1.33" cy="0.5" r="0.5833333333333334"></circle>
            </mask>
            <mask id="svg-mask-event-ticket" maskContentUnits="objectBoundingBox" viewBox="0 0 1 1">
                <path d="M0 0.12C0 0.0779961 0 0.0569941 0.00408726 0.0409507C0.00768251 0.0268386 0.0134193 0.015365 0.0204754 0.00817451C0.028497 0 0.038998 0 0.06 0H0.94C0.961002 0 0.971503 0 0.979525 0.00817451C0.986581 0.015365 0.992318 0.0268386 0.995913 0.0409507C1 0.0569941 1 0.0779961 1 0.12V0.45C0.986193 0.45 0.975 0.472386 0.975 0.5C0.975 0.527614 0.986193 0.55 1 0.55V0.88C1 0.922004 1 0.943006 0.995913 0.959049C0.992318 0.973161 0.986581 0.984635 0.979525 0.991826C0.971503 1 0.961002 1 0.94 1H0.0600001C0.0389981 1 0.028497 1 0.0204754 0.991826C0.0134193 0.984635 0.00768251 0.973161 0.00408726 0.959049C0 0.943006 0 0.922004 0 0.88V0.55C0.0138071 0.55 0.025 0.527614 0.025 0.5C0.025 0.472386 0.0138071 0.45 0 0.45V0.12Z" fill="white"></path>
            </mask>
        </svg><svg viewBox="0 0 1 1" aria-hidden="true" style="position: absolute; pointer-events: none; top: -1px; left: -1px; width: 1px; height: 1px;">
            <linearGradient id="66375bd5-530c-4af3-b749-58765fcf00dd">
                <stop stop-color="#738ef5"></stop>
                <stop offset="1" stop-color="#b3aeff"></stop>
            </linearGradient>
            <linearGradient id="a12a2087-218d-4bd1-b84c-d9189dd6a71d">
                <stop stop-color="#b473f5"></stop>
                <stop offset="1" stop-color="#e292aa"></stop>
            </linearGradient>
            <linearGradient id="5cf6849c-4390-4e56-859c-986270c4a2dc">
                <stop stop-color="#3e70dd"></stop>
                <stop offset="1" stop-color="#b377f3"></stop>
            </linearGradient>
        </svg>
        <div style="position: fixed; opacity: 0; pointer-events: none;"></div>
        <div class="app-1q1i1E">
            <div class="app-2rEoOp">
                <div class="bg-h5JY_x"></div>
                <div class="layers-3iHuyZ layers-3q14ss">
                    <div aria-hidden="false" class="layer-3QrUeG baseLayer-35bLyl">
                        <div class="container-2lgZY8">
                            <nav class="wrapper-3NnKdC guilds-1SWlCJ" aria-label="Servers sidebar">
                                <ul role="tree" tabindex="0" data-list-id="guildsnav" aria-orientation="vertical" data-jump-section="global" class="tree-2wKJdG">
                                    <div class="unreadMentionsIndicatorTop-2-tcdU">
                                        <div class="bar-30k2ka unreadMentionsBar-1Bu1dC unread-1xRYoj active-1SSsBb" aria-hidden="true" style="transform: translateY(-180%);"><span class="text-2e2ZyG"></span></div>
                                    </div>
                                    <div class="scroller-1Bvpku none-2Eo-qx scrollerBase-289Jih" dir="ltr" style="overflow: hidden scroll; padding-right: 0px;">
                                        <div class="tutorialContainer-2sGCg9">
                                            <div class="listItem-GuPuDH">
                                                <div class="pill-3N7f9r wrapper-sa6paO" aria-hidden="true"></div>
                                                <div class="listItemWrapper-KhRmzM">
                                                    <div class="wrapperSimple-19ogV2 wrapper-25eVIn"><svg width="48" height="48" viewBox="0 0 48 48" class="svg-1X37T1" overflow="visible">
                                                            <foreignObject mask="url(#923a3faa-145c-464e-9532-c911755cee9f)" x="0" y="0" width="48" height="48">
                                                                <div class="wrapper-1BJsBx" role="listitem" data-list-item-id="guildsnav___home" tabindex="-1" href="" aria-label="Home">
                                                                    <div class="childWrapper-anI2G9"><svg class="homeIcon-FuNwkv" aria-hidden="false" width="28" height="20" viewBox="0 0 28 20">
                                                                            <path fill="currentColor" d="M23.0212 1.67671C21.3107 0.879656 19.5079 0.318797 17.6584 0C17.4062 0.461742 17.1749 0.934541 16.9708 1.4184C15.003 1.12145 12.9974 1.12145 11.0283 1.4184C10.819 0.934541 10.589 0.461744 10.3368 0.00546311C8.48074 0.324393 6.67795 0.885118 4.96746 1.68231C1.56727 6.77853 0.649666 11.7538 1.11108 16.652C3.10102 18.1418 5.3262 19.2743 7.69177 20C8.22338 19.2743 8.69519 18.4993 9.09812 17.691C8.32996 17.3997 7.58522 17.0424 6.87684 16.6135C7.06531 16.4762 7.24726 16.3387 7.42403 16.1847C11.5911 18.1749 16.408 18.1749 20.5763 16.1847C20.7531 16.3332 20.9351 16.4762 21.1171 16.6135C20.41 17.0369 19.6639 17.3997 18.897 17.691C19.3052 18.4993 19.7718 19.2689 20.3021 19.9945C22.6677 19.2689 24.8929 18.1364 26.8828 16.6466H26.8893C27.43 10.9731 25.9665 6.04728 23.0212 1.67671ZM9.68041 13.6383C8.39754 13.6383 7.34085 12.4453 7.34085 10.994C7.34085 9.54272 8.37155 8.34973 9.68041 8.34973C10.9893 8.34973 12.0395 9.54272 12.0187 10.994C12.0187 12.4453 10.9828 13.6383 9.68041 13.6383ZM18.3161 13.6383C17.0332 13.6383 15.9765 12.4453 15.9765 10.994C15.9765 9.54272 17.0124 8.34973 18.3161 8.34973C19.6184 8.34973 20.6751 9.54272 20.6543 10.994C20.6543 12.4453 19.6184 13.6383 18.3161 13.6383Z"></path>
                                                                        </svg></div>
                                                                </div>
                                                            </foreignObject>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listItem-GuPuDH">
                                            <div class="guildSeparator-33mFX6"></div>
                                        </div>
                                        <div aria-label="Servers">
                                            <div class="listItem-GuPuDH">
                                                <div class="pill-1z4sAY wrapper-sa6paO" aria-hidden="true"><span class="item-2hkk8m" style="opacity: 1; height: 40px; transform: none;"></span></div>
                                                <div>
                                                    <div class="blobContainer-pmnxKB" draggable="true">
                                                        <div class="wrapper-25eVIn"><svg width="48" height="48" viewBox="0 0 48 48" class="svg-1X37T1" overflow="visible">
                                                                <defs>
                                                                    <path d="M0 24C0 16.5449 0 12.8174 1.21793 9.87706C2.84183 5.95662 5.95662 2.84183 9.87706 1.21793C12.8174 0 16.5449 0 24 0C31.4551 0 35.1826 0 38.1229 1.21793C42.0434 2.84183 45.1582 5.95662 46.7821 9.87706C48 12.8174 48 16.5449 48 24C48 31.4551 48 35.1826 46.7821 38.1229C45.1582 42.0434 42.0434 45.1582 38.1229 46.7821C35.1826 48 31.4551 48 24 48C16.5449 48 12.8174 48 9.87706 46.7821C5.95662 45.1582 2.84183 42.0434 1.21793 38.1229C0 35.1826 0 31.4551 0 24Z" id="4d325db5-ee24-4aa0-b535-163bbb08b720-blob_mask"></path>
                                                                </defs>
                                                                <mask id="4d325db5-ee24-4aa0-b535-163bbb08b720" fill="black" x="0" y="0" width="48" height="48">
                                                                    <use href="#4d325db5-ee24-4aa0-b535-163bbb08b720-blob_mask" fill="white"></use>
                                                                </mask>
                                                                <foreignObject mask="url(#4d325db5-ee24-4aa0-b535-163bbb08b720)" x="0" y="0" width="48" height="48">
                                                                    <div class="wrapper-1BJsBx selected-bZ3Lue" role="treeitem" data-list-item-id="guildsnav___844328994177417267" tabindex="-1" href="" aria-label="  3zachm's server"><img class="icon-27yU2q" src="assets/wall.png" alt="" width="48" height="48" aria-hidden="true"></div>
                                                                </foreignObject>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="wrapper-2q53zr" aria-hidden="true"><span class="edge-1lOOiT"></span><span class="middle-2H7H6R"></span><span class="edge-1lOOiT"></span></div>
                                            </div>
                                            <div class="listItem-GuPuDH">
                                                <div class="pill-1aYSec">
                                                    <div class="wrapper-sa6paO" aria-hidden="true"></div>
                                                </div>
                                                <div class="listItemWrapper-KhRmzM">
                                                    <div class="wrapperSimple-19ogV2 wrapper-25eVIn"><svg width="48" height="48" viewBox="0 0 48 48" class="svg-1X37T1" overflow="visible">
                                                            <foreignObject mask="url(#76d76576-8633-4129-94bb-7e2dd8d9ddc9)" x="0" y="0" width="48" height="48">
                                                                <div class="circleIconButton-1QV--U circleButtonBase-2DCxIZ" aria-label="Explore Public Servers" role="listitem" data-list-item-id="guildsnav___guild-discover-button" tabindex="-1"><svg aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M12 10.9C11.39 10.9 10.9 11.39 10.9 12C10.9 12.61 11.39 13.1 12 13.1C12.61 13.1 13.1 12.61 13.1 12C13.1 11.39 12.61 10.9 12 10.9ZM12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM14.19 14.19L6 18L9.81 9.81L18 6L14.19 14.19Z"></path>
                                                                    </svg></div>
                                                            </foreignObject>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="listItem-GuPuDH">
                                                <div class="guildSeparator-33mFX6"></div>
                                            </div>
                                            <div class="listItem-GuPuDH">
                                                <div class="pill-1aYSec">
                                                    <div class="wrapper-sa6paO" aria-hidden="true"></div>
                                                </div>
                                                <div class="listItemWrapper-KhRmzM">
                                                    <div class="wrapperSimple-19ogV2 wrapper-25eVIn"><svg width="48" height="48" viewBox="0 0 48 48" class="svg-1X37T1" overflow="visible">
                                                            <foreignObject mask="url(#6474ec46-b61f-41d8-a2b1-748c1259f198)" x="0" y="0" width="48" height="48">
                                                                <div class="circleIconButton-1QV--U circleButtonBase-2DCxIZ" aria-label="Download Apps" role="listitem" data-list-item-id="guildsnav___app-download-button" tabindex="-1"><svg class="circleIcon-1-oi1i" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.293 9.293L17.707 10.707L12 16.414L6.29297 10.707L7.70697 9.293L11 12.586V2H13V12.586L16.293 9.293ZM18 20V18H20V20C20 21.102 19.104 22 18 22H6C4.896 22 4 21.102 4 20V18H6V20H18Z"></path>
                                                                    </svg></div>
                                                            </foreignObject>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div aria-hidden="true" style="position: absolute; pointer-events: none; min-height: 0px; min-width: 1px; flex: 0 0 auto; height: 0px;"></div>
                                        </div>
                                        <div class="unreadMentionsIndicatorBottom-2mDYbI">
                                            <div class="bar-30k2ka unreadMentionsBar-1Bu1dC unread-1xRYoj active-1SSsBb" aria-hidden="true" style="transform: translateY(180%);"><span class="text-2e2ZyG"></span></div>
                                        </div>
                                </ul>
                            </nav>
                            <div class="base-3dtUhz">
                                <div class="content-98HsJk">
                                    <div class="sidebar-2K8pFh">
                                        <nav class="container-3w7J-x" aria-label="3zachm's server (server)">
                                            <div class="container-1taM1r clickable-25tGDB" aria-controls="popout_2" aria-expanded="false" role="button" tabindex="0">
                                                <header class="header-2V-4Sw">
                                                    <h1 class="name-1jkAdW">3zachm.dev</h1><svg width="18" height="18" class="button-1w5pas">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="M0 0h18v18H0"></path>
                                                            <path stroke="currentColor" d="M4.5 4.5l9 9" stroke-linecap="round"></path>
                                                            <path stroke="currentColor" d="M13.5 4.5l-9 9" stroke-linecap="round"></path>
                                                        </g>
                                                    </svg>
                                                </header>
                                            </div>
                                            <div class="positionedContainer-3LNR6L">
                                                <div class="unreadTop-3rAB3r unread-15xhX5 container-35XQWE">
                                                    <div class="bar-30k2ka unreadBar-3t3sYc unread-1xRYoj active-1SSsBb" aria-hidden="true" style="transform: translateY(-180%);"><span class="text-2e2ZyG">New Unreads</span></div>
                                                </div>
                                            </div>
                                            <div class="scroller-RmtA4e thin-1ybCId scrollerBase-289Jih fade-2kXiP2" aria-label="Channels" orientation="vertical" id="channels" tabindex="0" data-jump-section="global" style="overflow: hidden scroll; padding-right: 0px;">
                                                <div class="content-3YMskv" style="height: 238px;">
                                                    <div style="height: 0px;"></div>
                                                    <div class="containerDefault-3tr_sE" draggable="true">
                                                        <div class="iconVisibility-fhcwiH wrapper-PY0fhH clickable-536fPF" role="listitem">
                                                            <div class="mainContent-2h-GEV" tabindex="-1" data-list-item-id="channels___844328994694496266" aria-label="Text Channels (category)" aria-expanded="true" role="button"><svg class="arrow-gKvcEx icon-2yIBmh" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.59 8.59004L12 13.17L7.41 8.59004L6 10L12 16L18 10L16.59 8.59004Z"></path>
                                                                </svg>
                                                                <h2 class="name-3l27Hl container-2ax-kl">
                                                                    <div class="overflow-WK9Ogt">Text Channels</div>
                                                                </h2>
                                                            </div>
                                                            <div class="children-L002ao"><button aria-label="Create Channel" tabindex="-1" type="button" class="addButton-3bLyEA forceVisible-2L54of button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                    <div class="contents-18-Yxp"><svg class="addButtonIcon-2CbG1X" aria-hidden="false" width="18" height="18" viewBox="0 0 18 18">
                                                                            <polygon fill-rule="nonzero" fill="currentColor" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8"></polygon>
                                                                        </svg></div>
                                                                </button></div>
                                                        </div>
                                                    </div>
                                                    <div class="containerDefault--pIXnN" draggable="true">
                                                        <div class="iconVisibility-sTNpHs wrapper-2jXpOf" role="listitem">
                                                            <div class="content-1x5b-n"><a href="" role="link" class="mainContent-u_9PKf" data-list-item-id="channels___844329176474976288" tabindex="-1" aria-label="general (text channel)">
                                                                    <div aria-label="Text" class="iconContainer-1BBaeJ"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-1DeIlz">
                                                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.88657 21C5.57547 21 5.3399 20.7189 5.39427 20.4126L6.00001 17H2.59511C2.28449 17 2.04905 16.7198 2.10259 16.4138L2.27759 15.4138C2.31946 15.1746 2.52722 15 2.77011 15H6.35001L7.41001 9H4.00511C3.69449 9 3.45905 8.71977 3.51259 8.41381L3.68759 7.41381C3.72946 7.17456 3.93722 7 4.18011 7H7.76001L8.39677 3.41262C8.43914 3.17391 8.64664 3 8.88907 3H9.87344C10.1845 3 10.4201 3.28107 10.3657 3.58738L9.76001 7H15.76L16.3968 3.41262C16.4391 3.17391 16.6466 3 16.8891 3H17.8734C18.1845 3 18.4201 3.28107 18.3657 3.58738L17.76 7H21.1649C21.4755 7 21.711 7.28023 21.6574 7.58619L21.4824 8.58619C21.4406 8.82544 21.2328 9 20.9899 9H17.41L16.35 15H19.7549C20.0655 15 20.301 15.2802 20.2474 15.5862L20.0724 16.5862C20.0306 16.8254 19.8228 17 19.5799 17H16L15.3632 20.5874C15.3209 20.8261 15.1134 21 14.8709 21H13.8866C13.5755 21 13.3399 20.7189 13.3943 20.4126L14 17H8.00001L7.36325 20.5874C7.32088 20.8261 7.11337 21 6.87094 21H5.88657ZM9.41045 9L8.35045 15H14.3504L15.4104 9H9.41045Z"></path>
                                                                        </svg></div>
                                                                    <div class="name-23GUGE overflow-WK9Ogt" aria-hidden="true">
                                                                        <div class="channelName-2YrOjO">general</div>
                                                                    </div>
                                                                </a>
                                                                <div class="children-3rEycc">
                                                                    <div class="iconItem-F7GRxr iconBase-3LOlfs" aria-label="Create Invite" tabindex="0" role="button">
                                                                        <div><svg class="actionIcon-PgcMM2" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                                                                                <path fill="currentColor" d="M14 2H16V3H14V5H13V3H11V2H13V0H14V2Z"></path>
                                                                                <path fill="currentColor" d="M6.5 8.00667C7.88 8.00667 9 6.88667 9 5.50667C9 4.12667 7.88 3.00667 6.5 3.00667C5.12 3.00667 4 4.12667 4 5.50667C4 6.88667 5.12 8.00667 6.5 8.00667Z"></path>
                                                                                <path fill="currentColor" d="M6.5 8.34C3.26 8.34 1 9.98666 1 12.34V13.0067H12V12.34C12 9.98 9.74 8.34 6.5 8.34Z"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="iconItem-F7GRxr iconBase-3LOlfs" tabindex="0" aria-label="Edit Channel" role="button"><svg class="actionIcon-PgcMM2" aria-hidden="false" width="16" height="16" viewBox="0 0 16 16">
                                                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M14 7V9C14 9 12.5867 9 12.5733 9.00667C12.42 9.58667 12.1733 10.1267 11.84 10.6067L12.74 11.5067L11.4933 12.7533L10.5933 11.8533C10.1133 12.1867 9.57334 12.44 8.99334 12.5867V14H6.99334V12.58C6.41334 12.4333 5.87334 12.18 5.39334 11.8467L4.49333 12.7467L3.24667 11.5L4.14667 10.6C3.81333 10.1267 3.56 9.58 3.41333 9H2V7H3.41333C3.56 6.42 3.81333 5.88 4.14667 5.4L3.24667 4.5L4.5 3.24667L5.4 4.14667C5.87334 3.81333 6.42 3.56 7 3.41333V2H9V3.41333C9.58 3.56667 10.12 3.81333 10.6 4.14667L11.5067 3.25333L12.7533 4.5L11.8533 5.4C12.1867 5.87334 12.44 6.42 12.5867 7H14ZM8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"></path>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="containerDefault--pIXnN selected-3LIHYU" draggable="true">
                                                        <div class="iconVisibility-sTNpHs wrapper-2jXpOf modeSelected-346R90" role="listitem">
                                                            <div class="content-1x5b-n"><a href="" role="link" class="mainContent-u_9PKf" data-list-item-id="channels___844329116529459260" tabindex="-1" aria-label="testing (text channel)">
                                                                    <div aria-label="Text" class="iconContainer-1BBaeJ"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-1DeIlz">
                                                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.88657 21C5.57547 21 5.3399 20.7189 5.39427 20.4126L6.00001 17H2.59511C2.28449 17 2.04905 16.7198 2.10259 16.4138L2.27759 15.4138C2.31946 15.1746 2.52722 15 2.77011 15H6.35001L7.41001 9H4.00511C3.69449 9 3.45905 8.71977 3.51259 8.41381L3.68759 7.41381C3.72946 7.17456 3.93722 7 4.18011 7H7.76001L8.39677 3.41262C8.43914 3.17391 8.64664 3 8.88907 3H9.87344C10.1845 3 10.4201 3.28107 10.3657 3.58738L9.76001 7H15.76L16.3968 3.41262C16.4391 3.17391 16.6466 3 16.8891 3H17.8734C18.1845 3 18.4201 3.28107 18.3657 3.58738L17.76 7H21.1649C21.4755 7 21.711 7.28023 21.6574 7.58619L21.4824 8.58619C21.4406 8.82544 21.2328 9 20.9899 9H17.41L16.35 15H19.7549C20.0655 15 20.301 15.2802 20.2474 15.5862L20.0724 16.5862C20.0306 16.8254 19.8228 17 19.5799 17H16L15.3632 20.5874C15.3209 20.8261 15.1134 21 14.8709 21H13.8866C13.5755 21 13.3399 20.7189 13.3943 20.4126L14 17H8.00001L7.36325 20.5874C7.32088 20.8261 7.11337 21 6.87094 21H5.88657ZM9.41045 9L8.35045 15H14.3504L15.4104 9H9.41045Z"></path>
                                                                        </svg></div>
                                                                    <div class="name-23GUGE overflow-WK9Ogt" aria-hidden="true">
                                                                        <div class="channelName-2YrOjO">icon-testing</div>
                                                                    </div>
                                                                </a>
                                                                <div class="children-3rEycc">
                                                                    <div class="iconItem-F7GRxr iconBase-3LOlfs" aria-label="Create Invite" tabindex="0" role="button"><svg class="actionIcon-PgcMM2" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                                                                            <path fill="currentColor" d="M14 2H16V3H14V5H13V3H11V2H13V0H14V2Z"></path>
                                                                            <path fill="currentColor" d="M6.5 8.00667C7.88 8.00667 9 6.88667 9 5.50667C9 4.12667 7.88 3.00667 6.5 3.00667C5.12 3.00667 4 4.12667 4 5.50667C4 6.88667 5.12 8.00667 6.5 8.00667Z"></path>
                                                                            <path fill="currentColor" d="M6.5 8.34C3.26 8.34 1 9.98666 1 12.34V13.0067H12V12.34C12 9.98 9.74 8.34 6.5 8.34Z"></path>
                                                                        </svg></div>
                                                                    <div class="iconItem-F7GRxr iconBase-3LOlfs" tabindex="0" aria-label="Edit Channel" role="button"><svg class="actionIcon-PgcMM2" aria-hidden="false" width="16" height="16" viewBox="0 0 16 16">
                                                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M14 7V9C14 9 12.5867 9 12.5733 9.00667C12.42 9.58667 12.1733 10.1267 11.84 10.6067L12.74 11.5067L11.4933 12.7533L10.5933 11.8533C10.1133 12.1867 9.57334 12.44 8.99334 12.5867V14H6.99334V12.58C6.41334 12.4333 5.87334 12.18 5.39334 11.8467L4.49333 12.7467L3.24667 11.5L4.14667 10.6C3.81333 10.1267 3.56 9.58 3.41333 9H2V7H3.41333C3.56 6.42 3.81333 5.88 4.14667 5.4L3.24667 4.5L4.5 3.24667L5.4 4.14667C5.87334 3.81333 6.42 3.56 7 3.41333V2H9V3.41333C9.58 3.56667 10.12 3.81333 10.6 4.14667L11.5067 3.25333L12.7533 4.5L11.8533 5.4C12.1867 5.87334 12.44 6.42 12.5867 7H14ZM8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"></path>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="containerDefault-3tr_sE" draggable="true">
                                                        <div class="iconVisibility-fhcwiH wrapper-PY0fhH clickable-536fPF" role="listitem">
                                                            <div class="mainContent-2h-GEV" tabindex="-1" data-list-item-id="channels___844328994694496267" aria-label="Voice Channels (category)" aria-expanded="true" role="button"><svg class="arrow-gKvcEx icon-2yIBmh" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.59 8.59004L12 13.17L7.41 8.59004L6 10L12 16L18 10L16.59 8.59004Z"></path>
                                                                </svg>
                                                                <h2 class="name-3l27Hl container-2ax-kl">
                                                                    <div class="overflow-WK9Ogt">Voice Channels</div>
                                                                </h2>
                                                            </div>
                                                            <div class="children-L002ao"><button aria-label="Create Channel" tabindex="-1" type="button" class="addButton-3bLyEA forceVisible-2L54of button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                    <div class="contents-18-Yxp"><svg class="addButtonIcon-2CbG1X" aria-hidden="false" width="18" height="18" viewBox="0 0 18 18">
                                                                            <polygon fill-rule="nonzero" fill="currentColor" points="15 10 10 10 10 15 8 15 8 10 3 10 3 8 8 8 8 3 10 3 10 8 15 8"></polygon>
                                                                        </svg></div>
                                                                </button></div>
                                                        </div>
                                                    </div>
                                                    <div class="containerDefault--pIXnN" draggable="true">
                                                        <div>
                                                            <div class="iconVisibility-sTNpHs wrapper-2jXpOf modeConnected-3IsKId" role="listitem">
                                                                <div class="content-1x5b-n"><a role="link" class="mainContent-u_9PKf" data-list-item-id="channels___844328994694496269" tabindex="-1" aria-label="General (voice channel), 1 user">
                                                                        <div aria-label="Voice" class="iconContainer-1BBaeJ"><svg class="icon-1DeIlz" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M11.383 3.07904C11.009 2.92504 10.579 3.01004 10.293 3.29604L6 8.00204H3C2.45 8.00204 2 8.45304 2 9.00204V15.002C2 15.552 2.45 16.002 3 16.002H6L10.293 20.71C10.579 20.996 11.009 21.082 11.383 20.927C11.757 20.772 12 20.407 12 20.002V4.00204C12 3.59904 11.757 3.23204 11.383 3.07904ZM14 5.00195V7.00195C16.757 7.00195 19 9.24595 19 12.002C19 14.759 16.757 17.002 14 17.002V19.002C17.86 19.002 21 15.863 21 12.002C21 8.14295 17.86 5.00195 14 5.00195ZM14 9.00195C15.654 9.00195 17 10.349 17 12.002C17 13.657 15.654 15.002 14 15.002V13.002C14.551 13.002 15 12.553 15 12.002C15 11.451 14.551 11.002 14 11.002V9.00195Z" aria-hidden="true"></path>
                                                                            </svg></div>
                                                                        <div class="name-23GUGE overflow-WK9Ogt" aria-hidden="true">
                                                                            <div class="channelName-2YrOjO">General</div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="children-3rEycc">
                                                                        <div class="iconItem-F7GRxr iconBase-3LOlfs" aria-label="Create Invite" tabindex="0" role="button"><svg class="actionIcon-PgcMM2" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                                                                                <path fill="currentColor" d="M14 2H16V3H14V5H13V3H11V2H13V0H14V2Z"></path>
                                                                                <path fill="currentColor" d="M6.5 8.00667C7.88 8.00667 9 6.88667 9 5.50667C9 4.12667 7.88 3.00667 6.5 3.00667C5.12 3.00667 4 4.12667 4 5.50667C4 6.88667 5.12 8.00667 6.5 8.00667Z"></path>
                                                                                <path fill="currentColor" d="M6.5 8.34C3.26 8.34 1 9.98666 1 12.34V13.0067H12V12.34C12 9.98 9.74 8.34 6.5 8.34Z"></path>
                                                                            </svg></div>
                                                                        <div class="iconItem-F7GRxr iconBase-3LOlfs" tabindex="0" aria-label="Edit Channel" role="button"><svg class="actionIcon-PgcMM2" aria-hidden="false" width="16" height="16" viewBox="0 0 16 16">
                                                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M14 7V9C14 9 12.5867 9 12.5733 9.00667C12.42 9.58667 12.1733 10.1267 11.84 10.6067L12.74 11.5067L11.4933 12.7533L10.5933 11.8533C10.1133 12.1867 9.57334 12.44 8.99334 12.5867V14H6.99334V12.58C6.41334 12.4333 5.87334 12.18 5.39334 11.8467L4.49333 12.7467L3.24667 11.5L4.14667 10.6C3.81333 10.1267 3.56 9.58 3.41333 9H2V7H3.41333C3.56 6.42 3.81333 5.88 4.14667 5.4L3.24667 4.5L4.5 3.24667L5.4 4.14667C5.87334 3.81333 6.42 3.56 7 3.41333V2H9V3.41333C9.58 3.56667 10.12 3.81333 10.6 4.14667L11.5067 3.25333L12.7533 4.5L11.8533 5.4C12.1867 5.87334 12.44 6.42 12.5867 7H14ZM8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-2luk8a list-SuzGBZ listDefault-3ir5aS" role="group">
                                                            <div class="draggable-2E_4tJ" draggable="true">
                                                                <div class="voiceUser-1K6Xox clickable-1lCRLF userSmall-YJ5L9_" tabindex="0" role="button">
                                                                    <div class="content-1Wq3SX">
                                                                        <div class="preview avatarContainer-28iYmV avatar-3tNQiO avatarSmall-1PJoGO">
                                                                            <img src='assets/default.png' style='height: 24px; width: 24px;'>
                                                                        </div>
                                                                        <div class="usernameFont-23TX-h username-3KYl0N">3zachm</div>
                                                                        <div class="icons-1dXQdz">
                                                                            <div aria-label="Muted" class="iconSpacing-3eO9xt"><svg class="icon-2IuuZd" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                                    <path d="M6.7 11H5C5 12.19 5.34 13.3 5.9 14.28L7.13 13.05C6.86 12.43 6.7 11.74 6.7 11Z" fill="currentColor"></path>
                                                                                    <path d="M9.01 11.085C9.015 11.1125 9.02 11.14 9.02 11.17L15 5.18V5C15 3.34 13.66 2 12 2C10.34 2 9 3.34 9 5V11C9 11.03 9.005 11.0575 9.01 11.085Z" fill="currentColor"></path>
                                                                                    <path d="M11.7237 16.0927L10.9632 16.8531L10.2533 17.5688C10.4978 17.633 10.747 17.6839 11 17.72V22H13V17.72C16.28 17.23 19 14.41 19 11H17.3C17.3 14 14.76 16.1 12 16.1C11.9076 16.1 11.8155 16.0975 11.7237 16.0927Z" fill="currentColor"></path>
                                                                                    <path d="M21 4.27L19.73 3L3 19.73L4.27 21L8.46 16.82L9.69 15.58L11.35 13.92L14.99 10.28L21 4.27Z" fill="currentColor"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="unreadBottom-1_LF_w unread-15xhX5 container-35XQWE">
                                                <div class="bar-30k2ka unreadBar-3t3sYc unread-1xRYoj active-1SSsBb" aria-hidden="true" style="transform: translateY(180%);"><span class="text-2e2ZyG">New Unreads</span></div>
                                            </div>
                                        </nav>
                                        <section class="panels-j1Uci_" aria-label="User area">
                                            <div class="wrapper-24pKcD">
                                                <div class="container-1giJp5">
                                                    <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6 connection-3KRENF" style="flex: 1 1 auto;">
                                                        <div class="inner-tyMogq">
                                                            <div>
                                                                <div class="rtcConnectionStatus-2-jIsi rtcConnectionQualityFine-2J6i8z"><svg class="ping-2NgC8E" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24" aria-label="14 ms">
                                                                        <path d="M7.19999 18C7.19999 17.3364 6.77 16.8 6.24019 16.8H3.3598C2.82999 16.8 2.39999 17.3364 2.39999 18V20.4C2.39999 21.0636 2.82999 21.6 3.3598 21.6H6.23923C6.76904 21.6 7.19903 21.0636 7.19903 20.4V18H7.19999Z" fill="currentColor" class="pingForeground-2uAOZ3"></path>
                                                                        <path d="M14.4 10.6909C14.4 10.0876 13.9699 9.6 13.44 9.6H10.56C10.0301 9.6 9.60001 10.0876 9.60001 10.6909V20.5091C9.60001 21.1124 10.0301 21.6 10.56 21.6H13.44C13.9699 21.6 14.4 21.1124 14.4 20.5091V10.6909Z" fill="currentColor" class="pingForeground-2uAOZ3"></path>
                                                                        <path d="M21.6 3.46667C21.6 2.8768 21.1699 2.4 20.64 2.4H17.76C17.2301 2.4 16.8 2.8768 16.8 3.46667V20.5333C16.8 21.1232 17.2301 21.6 17.76 21.6H20.64C21.1699 21.6 21.6 21.1232 21.6 20.5333V3.46667Z" fill="currentColor" class="pingForeground-2uAOZ3"></path>
                                                                    </svg>
                                                                    <div class="labelWrapper-Pniq53"><button type="button" class="statusWithPopout-3ZfFol rtcConnectionStatusConnected-VRZDjy rtcConnectionStatusLabel-1wk4tH button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                            <div class="contents-18-Yxp">Voice Connected</div>
                                                                        </button></div>
                                                                </div><a class="" href="">
                                                                    <div class="size12-3cLvbJ subtext-3CDbHg channel-1TmDQ6">General / 3zachm.dev</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignStretch-DpGPf3 noWrap-3jynv6" style="flex: 0 0 auto;"><button aria-label="Disconnect" type="button" class="button-14-BFJ enabled-2cQ-u7 button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                <div class="contents-18-Yxp"><svg aria-hidden="false" width="20" height="20" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M21.1169 1.11603L22.8839 2.88403L19.7679 6.00003L22.8839 9.11603L21.1169 10.884L17.9999 7.76803L14.8839 10.884L13.1169 9.11603L16.2329 6.00003L13.1169 2.88403L14.8839 1.11603L17.9999 4.23203L21.1169 1.11603ZM18 22H13C6.925 22 2 17.075 2 11V6C2 5.447 2.448 5 3 5H7C7.553 5 8 5.447 8 6V10C8 10.553 7.553 11 7 11H6C6.063 14.938 9 18 13 18V17C13 16.447 13.447 16 14 16H18C18.553 16 19 16.447 19 17V21C19 21.553 18.553 22 18 22Z"></path>
                                                                    </svg></div>
                                                            </button></div>
                                                    </div>
                                                    <div class="actionButtons-14eAc_"><button onclick="$('#main-html').toggleClass('theme-dark theme-light');" aria-controls="popout_19" aria-expanded="false" type="button" class="button-1YfofB buttonColor-7qQbGO button-38aScr lookFilled-1Gx00P colorBrand-3pXr91 sizeSmall-2cSMqn grow-q77ONN button-1YfofB">
                                                            <div class="contents-18-Yxp">
                                                                <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 1 1 auto;"><svg class="buttonIcon-Od8mYw withText-10pQhr" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M21.526 8.149C21.231 7.966 20.862 7.951 20.553 8.105L18 9.382V7C18 5.897 17.103 5 16 5H4C2.897 5 2 5.897 2 7V17C2 18.104 2.897 19 4 19H16C17.103 19 18 18.104 18 17V14.618L20.553 15.894C20.694 15.965 20.847 16 21 16C21.183 16 21.365 15.949 21.526 15.851C21.82 15.668 22 15.347 22 15V9C22 8.653 21.82 8.332 21.526 8.149Z"></path>
                                                                    </svg>
                                                                    <p id="theme-selector-text">Theme</p>
                                                                </div>
                                                            </div>
                                                        </button><button type="button" onclick="exportImage()" class="button-1YfofB buttonColor-7qQbGO button-38aScr lookFilled-1Gx00P colorBrand-3pXr91 sizeSmall-2cSMqn grow-q77ONN button-1YfofB">
                                                            <div class="contents-18-Yxp">
                                                                <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 1 1 auto;"><svg class="buttonIcon-Od8mYw withText-10pQhr" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.5C2 3.397 2.897 2.5 4 2.5H20C21.103 2.5 22 3.397 22 4.5V15.5C22 16.604 21.103 17.5 20 17.5H13V19.5H17V21.5H7V19.5H11V17.5H4C2.897 17.5 2 16.604 2 15.5V4.5ZM13.2 14.3375V11.6C9.864 11.6 7.668 12.6625 6 15C6.672 11.6625 8.532 8.3375 13.2 7.6625V5L18 9.6625L13.2 14.3375Z"></path>
                                                                    </svg>
                                                                    <p id="export-image-text">Export</p>
                                                                </div>
                                                            </div>
                                                        </button></div>
                                                </div>
                                            </div>
                                            <div class="container-3baos1">
                                                <div class="avatarWrapper-2yR4wp" aria-controls="popout_4" aria-expanded="false" aria-label="Set Status" role="button" tabindex="0">
                                                    <div class="avatar-SmRMf2 wrapper-3t9DeA" role="img" aria-label="3zachm, Do Not Disturb" aria-hidden="false" style="width: 32px; height: 32px;"><svg width="40" height="32" viewBox="0 0 40 32" class="mask-1l8v16 svg-2V3M55" aria-hidden="true">
                                                            <foreignObject x="0" y="0" width="32" height="32" mask="url(#svg-mask-avatar-status-round-32)">
                                                                <div class="avatarStack-2Dr8S9">
                                                                    <img src="assets/default.png" id="bottom-left-avatar" alt=" " class="avatar-VxgULZ" aria-hidden="true">
                                                                </div>
                                                            </foreignObject>
                                                            <rect width="10" height="10" x="22" y="22" fill="#ed4245" mask="url(#svg-mask-status-dnd)" class="pointerEvents-2zdfdO"></rect>
                                                        </svg></div>
                                                </div>
                                                <div class="nameTag-3uD-yy canCopy-2VBT7N" aria-label="Click to copy username" role="button" tabindex="0">
                                                    <div class="colorStandard-2KCXvj size14-e6ZScH usernameContainer-1fp4nu">
                                                        <div class="size14-e6ZScH title-eS5yk3">3zachm</div>
                                                    </div>
                                                    <div class="size12-3cLvbJ subtext-3CDbHg">#9999</div>
                                                </div>
                                                <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignStretch-DpGPf3 noWrap-3jynv6" style="flex: 0 1 auto;"><button aria-label="Mute" role="switch" aria-checked="true" type="button" class="button-14-BFJ enabled-2cQ-u7 button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                        <div class="contents-18-Yxp"><svg aria-hidden="false" width="20" height="20" viewBox="0 0 24 24">
                                                                <path d="M6.7 11H5C5 12.19 5.34 13.3 5.9 14.28L7.13 13.05C6.86 12.43 6.7 11.74 6.7 11Z" fill="currentColor"></path>
                                                                <path d="M9.01 11.085C9.015 11.1125 9.02 11.14 9.02 11.17L15 5.18V5C15 3.34 13.66 2 12 2C10.34 2 9 3.34 9 5V11C9 11.03 9.005 11.0575 9.01 11.085Z" fill="currentColor"></path>
                                                                <path d="M11.7237 16.0927L10.9632 16.8531L10.2533 17.5688C10.4978 17.633 10.747 17.6839 11 17.72V22H13V17.72C16.28 17.23 19 14.41 19 11H17.3C17.3 14 14.76 16.1 12 16.1C11.9076 16.1 11.8155 16.0975 11.7237 16.0927Z" fill="currentColor"></path>
                                                                <path d="M21 4.27L19.73 3L3 19.73L4.27 21L8.46 16.82L9.69 15.58L11.35 13.92L14.99 10.28L21 4.27Z" class="strikethrough-1n4ekb" fill="currentColor"></path>
                                                            </svg></div>
                                                    </button><button aria-label="Deafen" role="switch" aria-checked="false" type="button" class="button-14-BFJ enabled-2cQ-u7 button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                        <div class="contents-18-Yxp"><svg aria-hidden="false" width="20" height="20" viewBox="0 0 24 24"><svg width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M12 2.00305C6.486 2.00305 2 6.48805 2 12.0031V20.0031C2 21.1071 2.895 22.0031 4 22.0031H6C7.104 22.0031 8 21.1071 8 20.0031V17.0031C8 15.8991 7.104 15.0031 6 15.0031H4V12.0031C4 7.59105 7.589 4.00305 12 4.00305C16.411 4.00305 20 7.59105 20 12.0031V15.0031H18C16.896 15.0031 16 15.8991 16 17.0031V20.0031C16 21.1071 16.896 22.0031 18 22.0031H20C21.104 22.0031 22 21.1071 22 20.0031V12.0031C22 6.48805 17.514 2.00305 12 2.00305Z" fill="currentColor"></path>
                                                                </svg></svg></div>
                                                    </button><button aria-label="User Settings" type="button" class="button-14-BFJ enabled-2cQ-u7 button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                        <div class="contents-18-Yxp"><svg aria-hidden="false" width="20" height="20" viewBox="0 0 24 24">
                                                                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M19.738 10H22V14H19.739C19.498 14.931 19.1 15.798 18.565 16.564L20 18L18 20L16.565 18.564C15.797 19.099 14.932 19.498 14 19.738V22H10V19.738C9.069 19.498 8.203 19.099 7.436 18.564L6 20L4 18L5.436 16.564C4.901 15.799 4.502 14.932 4.262 14H2V10H4.262C4.502 9.068 4.9 8.202 5.436 7.436L4 6L6 4L7.436 5.436C8.202 4.9 9.068 4.502 10 4.262V2H14V4.261C14.932 4.502 15.797 4.9 16.565 5.435L18 3.999L20 5.999L18.564 7.436C19.099 8.202 19.498 9.069 19.738 10ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"></path>
                                                            </svg></div>
                                                    </button></div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="chat-3bRxxu">
                                        <div class="uploadArea-1qnBZm uploadArea-3QgLtW">
                                            <div class="uploadDropModal-2kTwbc">
                                                <div class="bgScale-1otPtc"></div>
                                                <div class="inner-3nWsbo">
                                                    <div class="icons-1w691d">
                                                        <div class="wrapOne-14G98n">
                                                            <div class="icon-kyxXVr one-2crnLX"></div>
                                                        </div>
                                                        <div class="wrapThree-1CNQ42">
                                                            <div class="icon-kyxXVr three-27ScFD"></div>
                                                        </div>
                                                        <div class="wrapTwo-mQGI3R">
                                                            <div class="icon-kyxXVr two-3BBQI9"></div>
                                                        </div>
                                                    </div>
                                                    <div class="title-2Vtl4y">Upload to <strong>#testing</strong></div>
                                                    <div class="instructions-2Du9gG">
                                                        <pre>You can add comments before uploading.
                                                            Hold shift to upload directly.</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="title-3qD0b- container-1r6BKw themed-ANHk51" aria-label="Channel header">
                                            <div class="children-19S4PO">
                                                <div class="iconWrapper-2OrFZ1" role="button" aria-label="Text Channel" tabindex="-1"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-22AiRD">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M5.88657 21C5.57547 21 5.3399 20.7189 5.39427 20.4126L6.00001 17H2.59511C2.28449 17 2.04905 16.7198 2.10259 16.4138L2.27759 15.4138C2.31946 15.1746 2.52722 15 2.77011 15H6.35001L7.41001 9H4.00511C3.69449 9 3.45905 8.71977 3.51259 8.41381L3.68759 7.41381C3.72946 7.17456 3.93722 7 4.18011 7H7.76001L8.39677 3.41262C8.43914 3.17391 8.64664 3 8.88907 3H9.87344C10.1845 3 10.4201 3.28107 10.3657 3.58738L9.76001 7H15.76L16.3968 3.41262C16.4391 3.17391 16.6466 3 16.8891 3H17.8734C18.1845 3 18.4201 3.28107 18.3657 3.58738L17.76 7H21.1649C21.4755 7 21.711 7.28023 21.6574 7.58619L21.4824 8.58619C21.4406 8.82544 21.2328 9 20.9899 9H17.41L16.35 15H19.7549C20.0655 15 20.301 15.2802 20.2474 15.5862L20.0724 16.5862C20.0306 16.8254 19.8228 17 19.5799 17H16L15.3632 20.5874C15.3209 20.8261 15.1134 21 14.8709 21H13.8866C13.5755 21 13.3399 20.7189 13.3943 20.4126L14 17H8.00001L7.36325 20.5874C7.32088 20.8261 7.11337 21 6.87094 21H5.88657ZM9.41045 9L8.35045 15H14.3504L15.4104 9H9.41045Z"></path>
                                                    </svg></div>
                                                <h3 role="button" class="title-29uC1r base-1x0h_U size16-1P40sf">testing</h3>
                                            </div>
                                            <div class="toolbar-1t6TWx">
                                                <div class="iconWrapper-2OrFZ1 clickable-3rdHwn" role="switch" aria-label="Mute channel testing" aria-checked="false" tabindex="0"><svg x="0" y="0" class="icon-22AiRD" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M18 9V14C18 15.657 19.344 17 21 17V18H3V17C4.656 17 6 15.657 6 14V9C6 5.686 8.686 3 12 3C15.314 3 18 5.686 18 9ZM11.9999 21C10.5239 21 9.24793 20.19 8.55493 19H15.4449C14.7519 20.19 13.4759 21 11.9999 21Z"></path>
                                                    </svg></div>
                                                <div class="iconWrapper-2OrFZ1 clickable-3rdHwn" role="button" aria-label="Pinned Messages" tabindex="0"><svg x="0" y="0" class="icon-22AiRD" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M22 12L12.101 2.10101L10.686 3.51401L12.101 4.92901L7.15096 9.87801V9.88001L5.73596 8.46501L4.32196 9.88001L8.56496 14.122L2.90796 19.778L4.32196 21.192L9.97896 15.536L14.222 19.778L15.636 18.364L14.222 16.95L19.171 12H19.172L20.586 13.414L22 12Z"></path>
                                                    </svg></div>
                                                <div class="iconWrapper-2OrFZ1 clickable-3rdHwn selected-1GqIat" role="button" aria-label="Member List" tabindex="0"><svg x="0" y="0" class="icon-22AiRD" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M14 8.00598C14 10.211 12.206 12.006 10 12.006C7.795 12.006 6 10.211 6 8.00598C6 5.80098 7.794 4.00598 10 4.00598C12.206 4.00598 14 5.80098 14 8.00598ZM2 19.006C2 15.473 5.29 13.006 10 13.006C14.711 13.006 18 15.473 18 19.006V20.006H2V19.006Z"></path>
                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M14 8.00598C14 10.211 12.206 12.006 10 12.006C7.795 12.006 6 10.211 6 8.00598C6 5.80098 7.794 4.00598 10 4.00598C12.206 4.00598 14 5.80098 14 8.00598ZM2 19.006C2 15.473 5.29 13.006 10 13.006C14.711 13.006 18 15.473 18 19.006V20.006H2V19.006Z"></path>
                                                        <path fill="currentColor" d="M20.0001 20.006H22.0001V19.006C22.0001 16.4433 20.2697 14.4415 17.5213 13.5352C19.0621 14.9127 20.0001 16.8059 20.0001 19.006V20.006Z"></path>
                                                        <path fill="currentColor" d="M14.8834 11.9077C16.6657 11.5044 18.0001 9.9077 18.0001 8.00598C18.0001 5.96916 16.4693 4.28218 14.4971 4.0367C15.4322 5.09511 16.0001 6.48524 16.0001 8.00598C16.0001 9.44888 15.4889 10.7742 14.6378 11.8102C14.7203 11.8418 14.8022 11.8743 14.8834 11.9077Z"></path>
                                                    </svg></div>
                                                <div class="search-36MZv-">
                                                    <div class="search-2oPWTC">
                                                        <div class="searchBar-3dMhjb" role="combobox" aria-label="Search" aria-owns="search-results" aria-expanded="false">
                                                            <div class="DraftEditor-root">
                                                                <div class="public-DraftEditorPlaceholder-root">
                                                                    <div class="public-DraftEditorPlaceholder-inner" id="placeholder-1n9h2" style="white-space: pre-wrap;">Search</div>
                                                                </div>
                                                                <div class="DraftEditor-editorContainer">
                                                                    <div aria-describedby="placeholder-1n9h2" class="notranslate public-DraftEditor-content" contenteditable="true" role="textbox" spellcheck="false" style="outline: none; user-select: text; white-space: pre-wrap; overflow-wrap: break-word;">
                                                                        <div data-contents="true">
                                                                            <div class="" data-block="true" data-editor="1n9h2" data-offset-key="fs31p-0-0">
                                                                                <div data-offset-key="fs31p-0-0" class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr"><span data-offset-key="fs31p-0-0"><br data-text="true"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-38sknP iconLayout-1WxHy4 small-1lPjda" tabindex="-1" aria-hidden="true" aria-label="Clear search" role="button">
                                                                <div class="iconContainer-O4O2CN"><svg class="icon-3cZ1F_ visible-3V0mGj" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M21.707 20.293L16.314 14.9C17.403 13.504 18 11.799 18 10C18 7.863 17.167 5.854 15.656 4.344C14.146 2.832 12.137 2 10 2C7.863 2 5.854 2.832 4.344 4.344C2.833 5.854 2 7.863 2 10C2 12.137 2.833 14.146 4.344 15.656C5.854 17.168 7.863 18 10 18C11.799 18 13.504 17.404 14.9 16.314L20.293 21.706L21.707 20.293ZM10 16C8.397 16 6.891 15.376 5.758 14.243C4.624 13.11 4 11.603 4 10C4 8.398 4.624 6.891 5.758 5.758C6.891 4.624 8.397 4 10 4C11.603 4 13.109 4.624 14.242 5.758C15.376 6.891 16 8.398 16 10C16 11.603 15.376 13.11 14.242 14.243C13.109 15.376 11.603 16 10 16Z"></path>
                                                                    </svg><svg class="icon-3cZ1F_" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M18.4 4L12 10.4L5.6 4L4 5.6L10.4 12L4 18.4L5.6 20L12 13.6L18.4 20L20 18.4L13.6 12L20 5.6L18.4 4Z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iconWrapper-2OrFZ1 clickable-3rdHwn" role="button" aria-label="Inbox" tabindex="0"><svg x="0" y="0" class="icon-22AiRD" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M19 3H4.99C3.88 3 3.01 3.89 3.01 5L3 19C3 20.1 3.88 21 4.99 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3ZM19 15H15C15 16.66 13.65 18 12 18C10.35 18 9 16.66 9 15H4.99V5H19V15Z" fill="currentColor"></path>
                                                    </svg></div><a tabindex="-1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://support.discord.com" rel="noreferrer noopener" target="_blank">
                                                    <div class="iconWrapper-2OrFZ1 clickable-3rdHwn" role="button" aria-label="Help" tabindex="0"><svg x="0" y="0" class="icon-22AiRD" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M12 2C6.486 2 2 6.487 2 12C2 17.515 6.486 22 12 22C17.514 22 22 17.515 22 12C22 6.487 17.514 2 12 2ZM12 18.25C11.31 18.25 10.75 17.691 10.75 17C10.75 16.31 11.31 15.75 12 15.75C12.69 15.75 13.25 16.31 13.25 17C13.25 17.691 12.69 18.25 12 18.25ZM13 13.875V15H11V12H12C13.104 12 14 11.103 14 10C14 8.896 13.104 8 12 8C10.896 8 10 8.896 10 10H8C8 7.795 9.795 6 12 6C14.205 6 16 7.795 16 10C16 11.861 14.723 13.429 13 13.875Z"></path>
                                                        </svg></div>
                                                </a>
                                            </div>
                                        </section>
                                        <div class="content-yTz4x3">
                                            <main class="chatContent-a9vAAp" aria-label="testing (channel)">
                                                <div class="messagesWrapper-1sRNjr group-spacing-16">
                                                    <div class="scroller-2LSbBU auto-Ge5KZx scrollerBase-289Jih disableScrollAnchor-3V9UtP" dir="ltr" data-jump-section="global" tabindex="-1" style="overflow: hidden scroll; padding-right: 0px;">
                                                        <div class="scrollerContent-WzeG7R content-3YMskv">
                                                            <div class="scrollerInner-2YIMLh" aria-label="Messages in testing" role="log" aria-orientation="vertical" data-list-id="chat-messages" tabindex="0" aria-live="off"><span class="navigationDescription-3hiGKr" id="messagesNavigationDescription" aria-hidden="true">Use the up and down arrow keys to navigate between messages quickly. New messages will be added to the bottom of the list as they come in.</span>
                                                                <div class="container-3RCQyg" id="chat-messages-844329116529459260">
                                                                    <div class="emptyChannelIcon-cc932w"></div>
                                                                    <h3 class="header-3uLluP base-1x0h_U size32-o_H79z">Welcome to #icon-testing!</h3>
                                                                    <div class="size16-1P40sf description-1sDbzZ">This is the start of the #icon-testing channel. </div>
                                                                    <div class="buttonContainer-2GVjL_"><button type="button" class="button-18p_f6 button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 sizeMin-1mJd1x grow-q77ONN">
                                                                            <div class="contents-18-Yxp">
                                                                                <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 1 1 auto;">
                                                                                    <div class="buttonIcon-3PejT5"><svg aria-hidden="false" width="16" height="16" viewBox="0 0 24 24">
                                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2929 9.8299L19.9409 9.18278C21.353 7.77064 21.353 5.47197 19.9409 4.05892C18.5287 2.64678 16.2292 2.64678 14.817 4.05892L14.1699 4.70694L19.2929 9.8299ZM12.8962 5.97688L5.18469 13.6906L10.3085 18.813L18.0201 11.0992L12.8962 5.97688ZM4.11851 20.9704L8.75906 19.8112L4.18692 15.239L3.02678 19.8796C2.95028 20.1856 3.04028 20.5105 3.26349 20.7337C3.48669 20.9569 3.8116 21.046 4.11851 20.9704Z" fill="currentColor"></path>
                                                                                        </svg></div>
                                                                                    <div class="size16-1P40sf">Edit Channel</div>
                                                                                </div>
                                                                            </div>
                                                                        </button></div>
                                                                </div>
                                                                <div class="message-2qnXI6 cozyMessage-3V1Y8y groupStart-23k01U wrapper-2a6GCs cozy-3raOZG zalgo-jN1Ica" role="listitem" data-list-item-id="chat-messages___chat-messages-844329219386376222" tabindex="-1" id="chat-messages-844329219386376222">
                                                                    <div class="contents-2mQqc9" role="document">
                                                                        <div aria-hidden="true" class="avatar-1BDn8e preview clickable-1bVtEA" alt=" "><img src='assets/default.png' style='height: 40px; width: 40px;'></div>
                                                                        <h2 class="header-23xsNx"><span class="headerText-3Uvj1Y"><span class="username-1A8OIy clickable-1bVtEA" aria-controls="popout_14" aria-expanded="false" role="button" tabindex="0">3zachm</span></span><span class="timestamp-3ZCmNB timestampInline-yHQ6fX"><time aria-label="05/18/2021" datetime="2021-05-18T21:42:52.780Z"><i class="separator-2nZzUB" aria-hidden="true"> — </i>05/18/2021</time></span></h2>
                                                                        <div class="markup-2BOw-j messageContent-2qWWxC">You can upload an image below and see how it will look in most of Discord :D
                                                                            Toggle between dark/light theme with the button in the bottom left, and export your crop when you're done!</div>
                                                                    </div>
                                                                    <div class="container-1ov-mD"></div>
                                                                </div>
                                                                <div class="divider-3_HH5L hasContent-1_DUdQ divider-JfaTT5 hasContent-1cNJDh"><span class="content-1o0f9g">Configuration</span></div>
                                                                <div class="message-2qnXI6 cozyMessage-3V1Y8y groupStart-23k01U wrapper-2a6GCs cozy-3raOZG zalgo-jN1Ica" role="listitem" data-list-item-id="chat-messages___chat-messages-844908709352308756" tabindex="-1" id="chat-messages-844908709352308756">
                                                                    <div class="contents-2mQqc9" role="document">
                                                                        <div aria-hidden="true" class="avatar-1BDn8e preview clickable-1bVtEA" alt=" "><img src='assets/default.png' style='height: 40px; width: 40px;'></div>
                                                                        <h2 class="header-23xsNx"><span class="headerText-3Uvj1Y"><span class="username-1A8OIy clickable-1bVtEA" aria-controls="popout_29" aria-expanded="false" role="button" tabindex="0">3zachm</span></span><span class="timestamp-3ZCmNB timestampInline-yHQ6fX"><time aria-label="Today at 5:05 AM" datetime="2021-05-20T12:05:33.954Z"><i class="separator-2nZzUB" aria-hidden="true"> — </i>Today at 5:05 AM</time></span></h2>
                                                                        <div class="markup-2BOw-j messageContent-2qWWxC">Click the upload file button just like you would on normal discord!
                                                                            <div><img src="assets/48.png" id="sample_image" style="padding-top:8px; max-height:60vh;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-1ov-mD"></div>
                                                                    <div class="buttonContainer-DHceWr">
                                                                        <div class="buttons-cl5qTG container-3npvBV isHeader-2dII4U" aria-label="Message Actions">
                                                                            <div class="wrapper-2aW0bm">
                                                                                <div class="button-1ZiXG9" aria-label="Add Reaction" aria-controls="popout_32" aria-expanded="false" role="button" tabindex="0"><svg class="icon-3Gkjwa" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12.2512 2.00309C12.1677 2.00104 12.084 2 12 2C6.477 2 2 6.477 2 12C2 17.522 6.477 22 12 22C17.523 22 22 17.522 22 12C22 11.916 21.999 11.8323 21.9969 11.7488C21.3586 11.9128 20.6895 12 20 12C15.5817 12 12 8.41828 12 4C12 3.31052 12.0872 2.6414 12.2512 2.00309ZM10 8C10 6.896 9.104 6 8 6C6.896 6 6 6.896 6 8C6 9.105 6.896 10 8 10C9.104 10 10 9.105 10 8ZM12 19C15.14 19 18 16.617 18 14V13H6V14C6 16.617 8.86 19 12 19Z"></path>
                                                                                        <path d="M21 3V0H19V3H16V5H19V8H21V5H24V3H21Z" fill="currentColor"></path>
                                                                                    </svg></div>
                                                                                <div class="button-1ZiXG9" aria-label="Edit" role="button" tabindex="0"><svg class="icon-3Gkjwa" aria-hidden="false" width="16" height="16" viewBox="0 0 24 24">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2929 9.8299L19.9409 9.18278C21.353 7.77064 21.353 5.47197 19.9409 4.05892C18.5287 2.64678 16.2292 2.64678 14.817 4.05892L14.1699 4.70694L19.2929 9.8299ZM12.8962 5.97688L5.18469 13.6906L10.3085 18.813L18.0201 11.0992L12.8962 5.97688ZM4.11851 20.9704L8.75906 19.8112L4.18692 15.239L3.02678 19.8796C2.95028 20.1856 3.04028 20.5105 3.26349 20.7337C3.48669 20.9569 3.8116 21.046 4.11851 20.9704Z" fill="currentColor"></path>
                                                                                    </svg></div>
                                                                                <div class="button-1ZiXG9" aria-label="More" aria-controls="popout_33" aria-expanded="false" role="button" tabindex="0"><svg class="icon-3Gkjwa" aria-hidden="false" width="24" height="24" viewBox="0 0 24 24">
                                                                                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M7 12.001C7 10.8964 6.10457 10.001 5 10.001C3.89543 10.001 3 10.8964 3 12.001C3 13.1055 3.89543 14.001 5 14.001C6.10457 14.001 7 13.1055 7 12.001ZM14 12.001C14 10.8964 13.1046 10.001 12 10.001C10.8954 10.001 10 10.8964 10 12.001C10 13.1055 10.8954 14.001 12 14.001C13.1046 14.001 14 13.1055 14 12.001ZM19 10.001C20.1046 10.001 21 10.8964 21 12.001C21 13.1055 20.1046 14.001 19 14.001C17.8954 14.001 17 13.1055 17 12.001C17 10.8964 17.8954 10.001 19 10.001Z"></path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="scrollerSpacer-avRLaA"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="form-2fGMdU">
                                                    <div>
                                                        <div aria-controls="popout_9" aria-expanded="false">
                                                            <div class="channelTextArea-rNsIhG channelTextArea-2VhZ6z">
                                                                <div class="scrollableContainer-2NUZem webkit-HjD9Er">
                                                                    <div class="inner-MADQqc sansAttachButton-td2irx">
                                                                        <div class="uploadInput-1XtQef"><input class="file-input" type="file" tabindex="-1" multiple="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;"></div>
                                                                        <div class="attachWrapper-2TRKBi">
                                                                            <input type="file" id="actual-button" accept="image/*" style="display: none;">
                                                                            <button aria-label="Upload a File" onclick="$('#actual-button').click();" type="button" class="attachButton-2WznTc attachButton-2dnuIu button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN cover-button">
                                                                                <div class="contents-18-Yxp attachButtonInner-PQjIyk"><svg width="24" height="24" viewBox="0 0 24 24">
                                                                                        <path class="attachButtonPlus-jWVFah" fill="currentColor" d="M12 2.00098C6.486 2.00098 2 6.48698 2 12.001C2 17.515 6.486 22.001 12 22.001C17.514 22.001 22 17.515 22 12.001C22 6.48698 17.514 2.00098 12 2.00098ZM17 13.001H13V17.001H11V13.001H7V11.001H11V7.00098H13V11.001H17V13.001Z"></path>
                                                                                    </svg></div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="textArea-12jD-V textAreaSlate-1ZzRVj slateContainer-3Qkn2x">
                                                                            <div class="placeholder-37qJjk fontSize16Padding-3Wk7zP" aria-hidden="true">Message #icon-testing</div>
                                                                        </div>
                                                                        <div class="buttons-3JBrkn"><button aria-label="Send a gift" tabindex="0" type="button" class="button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                                <div class="contents-18-Yxp button-3AYNKb button-318s1X">
                                                                                    <div class="buttonWrapper-1ZmCpA" id="children" style="opacity: 1; transform: none;"><svg width="24" height="24" aria-hidden="false" viewBox="0 0 24 24">
                                                                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.886 7.999H20C21.104 7.999 22 8.896 22 9.999V11.999H2V9.999C2 8.896 2.897 7.999 4 7.999H7.114C6.663 7.764 6.236 7.477 5.879 7.121C4.709 5.951 4.709 4.048 5.879 2.879C7.012 1.746 8.986 1.746 10.121 2.877C11.758 4.514 11.979 7.595 11.998 7.941C11.9991 7.9525 11.9966 7.96279 11.9941 7.97304C11.992 7.98151 11.99 7.98995 11.99 7.999H12.01C12.01 7.98986 12.0079 7.98134 12.0058 7.97287C12.0034 7.96282 12.0009 7.95286 12.002 7.942C12.022 7.596 12.242 4.515 13.879 2.878C15.014 1.745 16.986 1.746 18.121 2.877C19.29 4.049 19.29 5.952 18.121 7.121C17.764 7.477 17.337 7.764 16.886 7.999ZM7.293 5.707C6.903 5.316 6.903 4.682 7.293 4.292C7.481 4.103 7.732 4 8 4C8.268 4 8.519 4.103 8.707 4.292C9.297 4.882 9.641 5.94 9.825 6.822C8.945 6.639 7.879 6.293 7.293 5.707ZM14.174 6.824C14.359 5.941 14.702 4.883 15.293 4.293C15.481 4.103 15.732 4 16 4C16.268 4 16.519 4.103 16.706 4.291C17.096 4.682 17.097 5.316 16.707 5.707C16.116 6.298 15.057 6.642 14.174 6.824ZM3 13.999V19.999C3 21.102 3.897 21.999 5 21.999H11V13.999H3ZM13 13.999V21.999H19C20.104 21.999 21 21.102 21 19.999V13.999H13Z"></path>
                                                                                        </svg></div>
                                                                                </div>
                                                                            </button>
                                                                            <div class="buttonContainer-28fw2U"><button aria-label="Open GIF picker" tabindex="0" type="button" class="button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                                    <div class="contents-18-Yxp button-3AYNKb button-318s1X">
                                                                                        <div class="buttonWrapper-1ZmCpA" id="icon" style="opacity: 1; transform: none;"><svg width="24" height="24" class="icon-3D60ES" aria-hidden="false" viewBox="0 0 24 24">
                                                                                                <path fill="currentColor" d="M2 2C0.895431 2 0 2.89543 0 4V20C0 21.1046 0.89543 22 2 22H22C23.1046 22 24 21.1046 24 20V4C24 2.89543 23.1046 2 22 2H2ZM9.76445 11.448V15.48C8.90045 16.044 7.88045 16.356 6.74045 16.356C4.11245 16.356 2.66045 14.628 2.66045 12.072C2.66045 9.504 4.23245 7.764 6.78845 7.764C7.80845 7.764 8.66045 8.004 9.32045 8.376L9.04445 10.164C8.42045 9.768 7.68845 9.456 6.83645 9.456C5.40845 9.456 4.71245 10.512 4.71245 12.06C4.71245 13.62 5.43245 14.712 6.86045 14.712C7.31645 14.712 7.64045 14.616 7.97645 14.448V12.972H6.42845V11.448H9.76445ZM11.5481 7.92H13.6001V16.2H11.5481V7.92ZM20.4724 7.92V9.636H17.5564V11.328H19.8604V13.044H17.5564V16.2H15.5164V7.92H20.4724Z"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                </button></div>
                                                                            <div class="buttonContainer-28fw2U"><button tabindex="0" aria-label="Select emoji" type="button" class="emojiButtonNormal-TdumYh emojiButton-3uL3Aw emojiButton-pET4wH button-318s1X button-38aScr lookBlank-3eh9lL colorBrand-3pXr91 grow-q77ONN">
                                                                                    <div class="contents-18-Yxp">
                                                                                        <div class="sprite-2iCowe" style="background-position: 0px 0px; background-size: 242px 110px; transform: scale(1); filter: grayscale(100%);"></div>
                                                                                    </div>
                                                                                </button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="layerContainer-yqaFcK"></div>
                                            </main>
                                            <div class="membersWrap-2h-GB4 hiddenMembers-2dcs_q">
                                                <div class="members-1998pB thin-1ybCId scrollerBase-289Jih fade-2kXiP2" aria-label="Members" orientation="vertical" id="members-844329116529459260" tabindex="0" data-jump-section="global" style="overflow: hidden scroll; padding-right: 0px;">
                                                    <div class="content-3YMskv" style="height: 84px;">
                                                        <div style="height: 0px;"></div>
                                                        <h2 class="membersGroup-v9BXpm container-2ax-kl" aria-label="Online, 1 member"><span aria-hidden="true">Online — 1</span></h2>
                                                        <div class="member-3-YXUe container-2Pjhx- clickable-1JJAn8" aria-controls="popout_21" aria-expanded="false" tabindex="-1" index="0" role="listitem" data-list-item-id="members-844329116529459260___0">
                                                            <div class="layout-2DM8Md">
                                                                <div class="avatar-3uk_u9">
                                                                    <div class="wrapper-3t9DeA" role="img" aria-label="3zachm, Do Not Disturb" aria-hidden="false" style="width: 32px; height: 32px;"><svg width="40" height="32" viewBox="0 0 40 32" class="mask-1l8v16 svg-2V3M55" aria-hidden="true">
                                                                            <foreignObject x="0" y="0" width="32" height="32" mask="url(#svg-mask-avatar-status-round-32)">
                                                                                <div class="avatarStack-2Dr8S9"><img src="assets/default.png" id="top-right-avatar" alt=" " class="avatar-VxgULZ" aria-hidden="true"></div>
                                                                            </foreignObject>
                                                                            <rect width="10" height="10" x="22" y="22" fill="#ed4245" mask="url(#svg-mask-status-dnd)" class="pointerEvents-2zdfdO"></rect>
                                                                        </svg></div>
                                                                </div>
                                                                <div class="content-3QAtGj">
                                                                    <div class="nameAndDecorators-5FJ2dg">
                                                                        <div class="name-uJV0GL"><span class="roleColor-rz2vM0">3zachm</span></div><svg aria-label="Server Owner" class="ownerIcon-2NH9FM icon-1A2_vz" aria-hidden="false" width="24" height="24" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6572 5.42868C13.8879 5.29002 14.1806 5.30402 14.3973 5.46468C14.6133 5.62602 14.7119 5.90068 14.6473 6.16202L13.3139 11.4954C13.2393 11.7927 12.9726 12.0007 12.6666 12.0007H3.33325C3.02725 12.0007 2.76058 11.792 2.68592 11.4954L1.35258 6.16202C1.28792 5.90068 1.38658 5.62602 1.60258 5.46468C1.81992 5.30468 2.11192 5.29068 2.34325 5.42868L5.13192 7.10202L7.44592 3.63068C7.46173 3.60697 7.48377 3.5913 7.50588 3.57559C7.5192 3.56612 7.53255 3.55663 7.54458 3.54535L6.90258 2.90268C6.77325 2.77335 6.77325 2.56068 6.90258 2.43135L7.76458 1.56935C7.89392 1.44002 8.10658 1.44002 8.23592 1.56935L9.09792 2.43135C9.22725 2.56068 9.22725 2.77335 9.09792 2.90268L8.45592 3.54535C8.46794 3.55686 8.48154 3.56651 8.49516 3.57618C8.51703 3.5917 8.53897 3.60727 8.55458 3.63068L10.8686 7.10202L13.6572 5.42868ZM2.66667 12.6673H13.3333V14.0007H2.66667V12.6673Z" fill="currentColor" aria-hidden="true"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="subText-1KtqkB"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pictureInPicture-3VocJq"></div>
            </div>
        </div>
        <div class="popouts-2bnG9Z"></div>
        <div></div>
        <div></div>
        <div class="layerContainer-yqaFcK">
            <div id="popout_4" class="layer-v9HyYc" style="position: absolute; left: 80px; bottom: 57px; display: none;">
                <div class="animatorTop-2Y7x2r scale-3iLZhb didRender-33z1u8">
                    <div class="menu-3sdvDG styleFixed-sX-yHV" role="menu" id="status-picker" tabindex="-1" aria-label="Set Status">
                        <div class="scroller-3BxosC thin-1ybCId scrollerBase-289Jih" dir="ltr" style="overflow: hidden scroll; padding-right: 0px;">
                            <div class="item-1tOPte colorDefault-2K3EoJ" aria-disabled="false" role="menuitem" id="status-picker-online" tabindex="-1">
                                <div class="statusItem-33LqPf"><svg width="10" height="10" class="mask-1qbNWk icon-1IxfJ2" viewBox="0 0 10 10">
                                        <foreignObject x="0" y="0" width="10" height="10" mask="url(#svg-mask-status-online)">
                                            <div class="status-1AY8sU" style="background-color: rgb(59, 165, 92);"></div>
                                        </foreignObject>
                                    </svg>
                                    <div class="status-1fhblQ">Online</div>
                                </div>
                            </div>
                            <div role="separator" class="separator-2I32lJ"></div>
                            <div class="item-1tOPte colorDefault-2K3EoJ" aria-disabled="false" role="menuitem" id="status-picker-idle" tabindex="-1">
                                <div class="statusItem-33LqPf"><svg width="10" height="10" class="mask-1qbNWk icon-1IxfJ2" viewBox="0 0 10 10">
                                        <foreignObject x="0" y="0" width="10" height="10" mask="url(#svg-mask-status-idle)">
                                            <div class="status-1AY8sU" style="background-color: rgb(250, 166, 26);"></div>
                                        </foreignObject>
                                    </svg>
                                    <div class="status-1fhblQ">Idle</div>
                                </div>
                            </div>
                            <div class="item-1tOPte colorDefault-2K3EoJ" aria-disabled="false" role="menuitem" id="status-picker-dnd" tabindex="-1">
                                <div class="statusItem-33LqPf"><svg width="10" height="10" class="mask-1qbNWk icon-1IxfJ2" viewBox="0 0 10 10">
                                        <foreignObject x="0" y="0" width="10" height="10" mask="url(#svg-mask-status-dnd)">
                                            <div class="status-1AY8sU" style="background-color: rgb(237, 66, 69);"></div>
                                        </foreignObject>
                                    </svg>
                                    <div class="status-1fhblQ">Do Not Disturb</div>
                                    <div class="description-2L932D">You will not receive any desktop notifications.</div>
                                </div>
                            </div>
                            <div class="item-1tOPte colorDefault-2K3EoJ" aria-disabled="false" role="menuitem" id="status-picker-invisible" tabindex="-1">
                                <div class="statusItem-33LqPf"><svg width="10" height="10" class="mask-1qbNWk icon-1IxfJ2" viewBox="0 0 10 10">
                                        <foreignObject x="0" y="0" width="10" height="10" mask="url(#svg-mask-status-offline)">
                                            <div class="status-1AY8sU" style="background-color: rgb(116, 127, 141);"></div>
                                        </foreignObject>
                                    </svg>
                                    <div class="status-1fhblQ">Invisible</div>
                                    <div class="description-2L932D">You will not appear online, but will have full access to all of Discord.</div>
                                </div>
                            </div>
                            <div role="separator" class="separator-2I32lJ"></div>
                            <div class="item-1tOPte colorDefault-2K3EoJ" aria-disabled="false" role="menuitem" id="status-picker-custom-status" tabindex="-1">
                                <div class="statusItem-33LqPf" aria-label="Set a custom status">
                                    <div class="customEmojiPlaceholder-37iZ_j customEmoji-2_2FwB"></div>
                                    <div class="status-1fhblQ">Set a custom status</div>
                                </div>
                            </div>
                            <div aria-hidden="true" style="position: absolute; pointer-events: none; min-height: 0px; min-width: 1px; flex: 0 0 auto; height: 6px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popout_20" class="layer-v9HyYc" style="position: absolute; top: 88px; right: 248px;">
                <div class="animatorLeft-1EQxU0 translate-2dAEQ6 didRender-33z1u8">
                    <div aria-label="3zachm" class="userPopout-3XzG_A" role="dialog" tabindex="-1" aria-modal="true" style="width: 250px;">
                        <div class="headerNormal-T_seeN header-2BwW8b size16-14cGz5">
                            <div class="flex-1xMQg5 flex-1O1GKY vertical-V37hAW flex-1O1GKY directionColumn-35P_nr justifyCenter-3D2jYp alignCenter-1dQNNs noWrap-3jynv6 headerTop-3C2Zn0" style="flex: 1 1 auto;">
                                <div class="avatarWrapperNormal-3wFMbf avatarWrapper-3H_478" role="button" tabindex="0">
                                    <div class="wrapper-3t9DeA" role="img" aria-label="3zachm, Do Not Disturb" aria-hidden="false" style="width: 80px; height: 80px;"><svg width="92" height="80" viewBox="0 0 92 80" class="mask-1l8v16 svg-2V3M55" aria-hidden="true">
                                            <foreignObject x="0" y="0" width="80" height="80" mask="url(#svg-mask-avatar-status-round-80)">
                                                <div class="avatarStack-2Dr8S9">
                                                    <img src="assets/default.png" id="panel-avatar" alt=" " class="avatar-VxgULZ" aria-hidden="true">
                                                </div>
                                            </foreignObject>
                                            <rect width="16" height="16" x="60" y="60" fill="#ed4245" mask="url(#svg-mask-status-dnd)" class="pointerEvents-2zdfdO"></rect>
                                        </svg></div><svg width="80" height="80" class="avatarHint-1qgaV3" viewBox="0 0 80 80">
                                        <foreignObject x="0" y="0" width="80" height="80" mask="url(#svg-mask-avatar-status-round-80)">
                                            <div class="avatarHintInner-Dco91E size10-39i14u height12-2Ltw-k">View Profile</div>
                                        </foreignObject>
                                    </svg>
                                </div>
                                <div class="headerText-2sdzFM userSelectText-1o1dQ7">
                                    <div class="flex-1xMQg5 flex-1O1GKY horizontal-1ae9ci horizontal-2EEEnY flex-1O1GKY directionRow-3v3tfG justifyStart-2NDFzi alignCenter-1dQNNs noWrap-3jynv6" style="flex: 1 1 auto;">
                                        <div class="headerTagNoNickname-ENx6no headerTag-2pZJzA size14-3iUx6q size16-14cGz5 nameTag-m8r81H"><span class="username-2b1r56 headerTagUsernameNoNickname-2_H881">3zachm</span><span>#9999</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body-3iLsc4 thin-1ybCId scrollerBase-289Jih fade-2kXiP2" dir="ltr" style="overflow: hidden scroll; padding-right: 0px;">
                            <div class="bodyInnerWrapper-Z8WDxe">
                                <div class="bodyTitle-Y0qMQz marginBottom8-AtZOdT size12-3R0845">No Roles</div>
                                <div class="root-3-B5F3 flex-1O1GKY wrap-ZIn9Iy rolesList-22qj2L endBodySection-Rf4s-7" aria-label="No Roles" role="list" tabindex="0" data-list-id="roles-7adb5adc-1863-4232-9788-aa4a563d40f7" aria-orientation="vertical"><button aria-controls="popout_41" aria-expanded="false" class="addButton-pcyyf6 actionButton-VzECiy role-2irmRk flex-1O1GKY alignCenter-1dQNNs justifyCenter-3D2jYp" aria-label="Add role" type="button" role="listitem" data-list-item-id="roles-7adb5adc-1863-4232-9788-aa4a563d40f7___overflow-add-roles-135529452821020683" tabindex="-1"><svg class="addButtonIcon-1NMJ8u" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M20 11.1111H12.8889V4H11.1111V11.1111H4V12.8889H11.1111V20H12.8889V12.8889H20V11.1111Z"></path>
                                        </svg></button></div>
                                <div class="bodyTitle-Y0qMQz marginBottom8-AtZOdT size12-3R0845">Note</div>
                                <div class="note-3HfJZ5"><textarea placeholder="Click to add a note" maxlength="256" autocorrect="off" class="textarea-2r0oV8 inputDefault-_djjkz input-cIJ7To scrollbarGhostHairline-1mSOM1 scrollbar-3dvm_9" style="height: 36px;"></textarea></div>
                            </div>
                            <div aria-hidden="true" style="position: absolute; pointer-events: none; min-height: 0px; min-width: 1px; flex: 0 0 auto; height: 16px;"></div>
                        </div>
                        <div class="footer-1fjuF6">
                            <div class="protip-YaFfgO">Click me on the sidebar to open/hide this!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layerContainer-yqaFcK"></div>
        <div style="position: fixed; opacity: 0; pointer-events: none;"></div>
    </div>
</body>
<script>
    var cropper;
    var type;

    function exportImage() {
        if (typeof cropper !== 'undefined') {
            toExport = cropper.getCroppedCanvas().toDataURL(type);
            downloadURI(toExport, "cropped.png")
        }
    }

    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }

    $(document).ready(function() {
        var image = document.getElementById('sample_image');

        $('#actual-button').change(function(event) {
            var files = event.target.files;
            var done = function(url) {
                image.src = url;
            };
            var generate = function() {
                if (typeof cropper !== 'undefined') {
                    cropper.destroy();
                    cropper = undefined;
                }
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 2,
                    dragMode: 'move',
                    preview: '.preview'
                });
            }

            if (files && files.length > 0) {
                reader = new FileReader();
                reader.onload = function(event) {
                    done(reader.result);
                    generate();
                };
                reader.readAsDataURL(files[0]);
                type = files[0].type
            }
        });

        image.addEventListener('cropend', function(e) {
            if (typeof cropper !== 'undefined') {
                var botLeft = document.getElementById('bottom-left-avatar');
                var topRight = document.getElementById('top-right-avatar');
                var panelAva = document.getElementById('panel-avatar');
                var data = cropper.getCroppedCanvas().toDataURL(type);
                botLeft.src = data;
                topRight.src = data;
                panelAva.src = data;
            }
        });

        $(".layout-2DM8Md").click(function() {
            $('#popout_20').toggle();
        });
        $(".avatar-SmRMf2").click(function() {
            $('#popout_4').toggle();
        });
    });
</script>