let haveExpoImg = document.querySelector('.main-img-wrapper-slider');
if(haveExpoImg){
    let expo_slider = tns({
        container: '.main-img-wrapper-slider',
        "center": true,
        "controls":false,
        "nav":false,
        "autoplay":true,
        "speed":700,
        "autoplayTimeout":3500,
        "mode":"gallery",
        "autoplayButtonOutput":false,
        preventScrollOnTouch: 'auto',
    });
}