let haveCompare = document.querySelector('.compare-slider');
if(haveCompare){
    let compare_slider = tns({
        container: '.compare-slider',
        "items": 1,
        "fixedWidth": 190,
        "gutter":39,
        "center": true,
        "controls":false,
        "nav":false,
        preventScrollOnTouch: 'auto', 
        "responsive": {
            "360": {
                "gutter":45,
            },
            "400": {
                "gutter":65,
            }
        }
    });
}
