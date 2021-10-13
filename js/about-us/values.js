let haveBox = document.querySelector('.box-slider');
if(haveBox){
    let boxSlider = tns({
        container: '.box-slider',
        loop: false,
        items: 2,
        responsive: {
            1200: 5,
        },
        mouseDrag: true,
        preventScrollOnTouch: 'auto',
        gutter: 20,
        
    });
}

