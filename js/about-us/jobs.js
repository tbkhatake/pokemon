let jobs = document.querySelector('.jobs')
if(jobs){
    let jobs_select = document.querySelector('.jobs-select')
    let jobs_content = document.querySelectorAll('.jobs-card')
    jobs_content[0].style.display = "flex";

    jobs_select.addEventListener('change',() => {
        jobs_content.forEach(el =>{
            el.style.display = "none";
        })
        jobs_content[jobs_select.value].style.display = "flex";
    })

    let jj_dropdown = document.querySelectorAll('.jj-dropdown')
    let jj_arrow = document.querySelectorAll('.jj-dropdown-arrow')
    let jj_content = document.querySelectorAll('.jj-content')

    jj_dropdown.forEach((el, key)=>{
        el.addEventListener('click', ()=>{
            if(jj_arrow[key].classList.contains('jj-dropdown-arrow-active')){
                jj_arrow[key].classList.remove('jj-dropdown-arrow-active')
                jj_content[key].classList.remove('jj-content-active')
            }else{
                jj_arrow.forEach(arrow =>{
                    arrow.classList.remove('jj-dropdown-arrow-active')
                })
                jj_content.forEach(content =>{
                    content.classList.remove('jj-content-active')
                })
                jj_arrow[key].classList.add('jj-dropdown-arrow-active')
                jj_content[key].classList.add('jj-content-active')
            }
        })
    })

    //1200px

    let jj_desk_dropdown = document.querySelectorAll('.jj-desk-dropdown')
    let jj_desk_arrow = document.querySelectorAll('.jj-desk-dropdown-arrow')
    let jj_desk_content = document.querySelectorAll('.jj-desk-content')

    jj_desk_dropdown.forEach((el, key)=>{
        el.addEventListener('click', ()=>{
            if(jj_desk_arrow[key].classList.contains('jj-desk-dropdown-arrow-active')){
                jj_desk_arrow[key].classList.remove('jj-desk-dropdown-arrow-active')
                jj_desk_content[key].classList.remove('jj-desk-content-active')
            }else{
                jj_desk_arrow.forEach(arrow =>{
                    arrow.classList.remove('jj-desk-dropdown-arrow-active')
                })
                jj_desk_content.forEach(content =>{
                    content.classList.remove('jj-desk-content-active')
                })
                jj_desk_arrow[key].classList.add('jj-desk-dropdown-arrow-active')
                jj_desk_content[key].classList.add('jj-desk-content-active')
            }
        })
    })

    let slider_management = tns({
        container: '.jobs-slider-wrapper',
        "items": 1,
        preventScrollOnTouch: 'auto',
        loop:false,
        navContainer:".jobs-desk-options",
        controlsContainer: ".jobs-desk-controls",
    });
}