let haveValue = document.querySelector('.values-section');
if(haveValue){
    let valuesSlider = tns({
        container: '.box-slider',
        gutter:20,
        fixedWidth:120,
        loop: false,
        items: 2,
        mouseDrag: true,
        preventScrollOnTouch: 'auto',
        "responsive": {
            "1200": {
                gutter:35,
                fixedWidth:160,
                items: 5,
            }
        },
    });

    let valuesBoxSlider = tns({
        container: '.values-slides-wrapper',
        loop: false,
        items: 1,
        mouseDrag: true,
        preventScrollOnTouch: 'auto',
        controls: false,
        navContainer: ".box-slider"
    });
}