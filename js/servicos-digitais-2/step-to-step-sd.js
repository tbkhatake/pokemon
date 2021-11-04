let haveStepSd = document.querySelectorAll('.step-carousel-sd');
let stepSliderControls = document.querySelectorAll('.step-slider-controls');
if(haveStepSd){
    console.log(haveStepSd)
    haveStepSd.forEach(function(el, key){
    stepControls = stepSliderControls[key]
        console.log(stepSliderControls)

        let step_slider_sd = tns({
            container: el,
            preventScrollOnTouch: 'auto',
            items:1,
            loop:false,
            controlsContainer: stepControls,
            "responsive": {
                "1200": {
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
    })
    
    
    if(screen.width >= 1200){
        let stepSliderControl = document.querySelector('.step-slider-controls');
        itensCounter = Math.floor(stepSliderControl.id/2);
        stepSliderControl.style.width = (itensCounter*62)+106+"px"
    }

    // if(screen.width <= 1200){
    //     let stepCarouselWrapper = document.querySelectorAll('.step-carousel-wrapper')
    //     let mobileControls = document.querySelectorAll('.step-controls-btn')
    //     let carouselLenght = (stepCarouselWrapper.length)-1;
    //     mobileControls[0].style.filter ='opacity(1%)'
    //     mobileControls[0].style.filter ='default'
    
    //         mobileControls[0].addEventListener('click', ()=>{
    //             mobileControls[1].style.filter ='opacity(100%)'
    //             mobileControls[1].style.filter ='pointer'
    //             if(stepCarouselWrapper[1].classList.contains('tns-slide-active')){
    //                 mobileControls[0].style.filter ='opacity(1%)'
    //                 mobileControls[0].style.filter ='default'
    //             }
    //         })
    //         mobileControls[1].addEventListener('click', ()=>{
    //             mobileControls[0].style.filter ='opacity(100%)'
    //             mobileControls[0].style.filter ='pointer'
    //             if(stepCarouselWrapper[carouselLenght-1].classList.contains('tns-slide-active')){
    //                 mobileControls[1].style.filter ='opacity(1%)'
    //                 mobileControls[1].style.filter ='default'
    //             }
    //         })
    // }

}