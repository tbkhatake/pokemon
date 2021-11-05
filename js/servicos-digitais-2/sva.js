let sva_slider = document.querySelector('.services__digital--slider');
if(sva_slider){
    tns({
        container: '.services__digital--slider',
        "nav":true,
        //"center": true,
        "items": 3,
        "mouseDrag":true,
        loop:false,
        "controls":true,
        controlsContainer:".services-slider-controls",
        "nav":false,
        preventScrollOnTouch: 'auto',
        "responsive": {
            "1200": {
                "items": 5,
                mouseDrag:true,
            }
        }
    });
    let videoSlider = tns({
        container: '.video-engine',
        loop: false,
        preventScrollOnTouch: 'auto',
        items: 1,
        controls: false,
        mouseDrag: true,
        navContainer: ".services__digital--slider"
    });
   
    let stepsSlider = tns({
        container: '.steps-engine',
        loop: false,
        preventScrollOnTouch: 'auto',
        items: 1,
        controls: false,
        mouseDrag: false,
        navContainer: ".services__digital--slider"
    });
    
}
