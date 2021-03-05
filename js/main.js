document.body.onload = function () { onLoad() };

async function onLoad() {
    $("#main-header").fadeIn(1000);
    var mainGradient = new Granim({
        element: '#main-bg',
        direction: 'left-right',
        isPausedWhenNotInView: true,
        states: {
            "default-state": {
                gradients: [
                    ['#9D50BB', '#6E48AA'],
                    ['#4776E6', '#8E54E9']
                ]
            }
        }
    });
}

noContext = document.getElementById("main-bg")
noContext.addEventListener("contextmenu", e => e.preventDefault());

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}