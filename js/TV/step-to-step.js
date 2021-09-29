let haveStep = document.querySelector('.step-carousel');
if(haveStep){
    let step_slider = tns({
        container: '.step-carousel',
        preventScrollOnTouch: 'auto',
        controls:false,
        items:1,
        loop:false,
        controlsContainer: ".step-slider-controls",
        "responsive": {
            "1200": {
                controls:true,
                "fixedWidth": 550,
                "gutter":0,
                "edgePadding":20
            }, 
            "1366": {
                "gutter":30,
                "edgePadding":100
            }, 
            "1440": {
                "edgePadding":150
            }, 
            "1550": {
                "edgePadding":200
            }, 
            "1620": {
                "edgePadding":100
            }, 
            "1800": {
                "edgePadding":340
            },
            "1920": {
                "edgePadding":400
            },  
            
        }
    });

    let stepSliderControl = document.querySelector('.step-slider-controls');
    console.log(stepSliderControl.id)
    itensCounter = Math.floor(stepSliderControl.id/2);
    console.log(itensCounter)
    stepSliderControl.style.width = (itensCounter*62)+106+"px"
}