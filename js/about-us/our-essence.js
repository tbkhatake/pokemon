let haveOS = document.querySelector('.os-slider');
if(haveOS){
    let slider_os = tns({
        container: '.os-slider',
        "items": 1,
        preventScrollOnTouch: 'auto',
        "controls":false,
        
    });

    let osCardWrapper = document.querySelectorAll('.os-section-wrapper')
    let osOptions = document.querySelectorAll('.os-option')
    
    osCardWrapper[0].classList.add('os-section-wrapper-active')
    osOptions[0].classList.add('os-option-active')

    osOptions.forEach((op,key)=>{
        op.addEventListener('click',()=>{
            osOptions.forEach(op => {
                op.classList.remove('os-option-active')
            })
            osCardWrapper.forEach(card => {
                card.classList.remove('os-section-wrapper-active')
            })
            op.classList.add('os-option-active')
            osCardWrapper[key].classList.add('os-section-wrapper-active')
        })
    })
}
