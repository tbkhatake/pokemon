let pokedex = document.querySelector('pokedex-wrapper')
if(pokedex){
    let off = document.querySelectorAll('#off')
    let onButton = document.querySelector('.green-part')
    
    onButton.addEventListener('click',()=>{
        off.forEach(off=>{
            if(off.style.display == 'none'){
                off.style.display = 'block'
            }else{
                off.style.display = 'none'
            }
        })
    })
    
    let y_slider = tns({
        container:'.y-slider',
        "axis": "vertical",
        nav :false,
        controlsContainer: ".vert",
        loop:false,
    })
    let Xslider = document.querySelectorAll('.x-slider')
    Xslider.forEach((slider,key)=>{
        if(slider.children[1]){
            let x_slider = tns({
                container:slider,
                controlsContainer: ".horiz",
                nav :false,
                loop:false,
            
            })
        }
    })
}