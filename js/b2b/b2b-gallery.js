let b2b_gallery = document.querySelector('.b2b-gallery');
if(b2b_gallery){
    tns({
        container: '.b2b-gallery-slider',
        "nav":true,
        preventScrollOnTouch: 'auto',
        controlsContainer: ".b2b-gallery-controls",
        navContainer:".b2b-gallery-dots",
        "responsive": {
            "1200": {

            }
        }
    });
}