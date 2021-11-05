let haveStepSd = document.querySelectorAll('.step-carousel-sd');
let stepSliderControls = document.querySelectorAll('.step-slider-controls');
if(haveStepSd){
    haveStepSd.forEach(function(el, key){
    stepControls = stepSliderControls[key]

        let step_slider_sd = tns({
            container: el,
            preventScrollOnTouch: 'auto',
            items:1,
            loop:false,
            controlsContainer: stepControls,

            "responsive": {
                "1200": {
                    mouseDrag:true,
                    "fixedWidth": 570,
                    "gutter":0,
                    "edgePadding":50
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
    })
    
    
    if(screen.width >= 1200){
        let stepSliderControl = document.querySelectorAll('.step-slider-controls');
        stepSliderControl.forEach((el,key)=>{
            itensCounter = Math.floor(el.id/2);
            el.style.width = (itensCounter*62)+106+"px"
        })



    }


}