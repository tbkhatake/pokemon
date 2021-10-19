let description_section = document.querySelector('.description')

if(description_section){
    let descWrapper = document.querySelectorAll('.desc-wrapper')
    let descTitleWrapper = document.querySelectorAll('.title-wrapper');
    let descTitleSignal = document.querySelectorAll('.title-signal');

    descWrapper[0].classList.add('desc-wrapper-active')
    descTitleSignal[0].classList.add('title-signal-active')

    descTitleWrapper.forEach((title ,key)=>{
        title.addEventListener('click',(el)=>{
            descWrapper.forEach(el=>{
                el.classList.remove('desc-wrapper-active')
            })
            descTitleSignal.forEach(el=>{
                el.classList.remove('title-signal-active')
            })
            descWrapper[key].classList.add('desc-wrapper-active')
            descTitleSignal[key].classList.add('title-signal-active')
        })
    })
}