let kos_slider = document.querySelector('.kos-slider');
if(kos_slider){
    tns({
        container: '.kos-slider',
        "nav":true,
        preventScrollOnTouch: 'auto',
        controlsContainer: "#kos-customize-controls",
        "responsive": {
            "1200": {
                "fixedWidth": 802,
                "center": true,
                "gutter":154,
                "navAsThumbnails":true,
            },
            "1366": {
                "fixedWidth": 918,
                "gutter":184,
            }
        }
    });
}