let slider_ksd = tns({
    container: '.slider-ksd',
    "items": 1,
    preventScrollOnTouch: 'auto',
    controlsContainer: "#customize-controls",
    "responsive": {
        "1200": {
            "fixedWidth": 802,
            "center": true,
            "gutter":184,
            "navAsThumbnails":true
        },  
        "1366": {
            "fixedWidth": 850,
        }      
    }

});