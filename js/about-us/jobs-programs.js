let jp = document.querySelector('.jobs-programs')
if(jp){
    let jp_select = document.querySelector('.jp-select')
    let jp_content = document.querySelectorAll('.jp-card')
    jp_content[0].style.display = "flex";

    jp_select.addEventListener('change',() => {
        jp_content.forEach(el =>{
            el.style.display = "none";
        })
        jp_content[jp_select.value].style.display = "flex";
    })

    let slider_jp = tns({
        container: '.jp-slider-wrapper',
        "items": 1,
        preventScrollOnTouch: 'auto',
        loop:false,
        navContainer:".jp-desk-options",
        controlsContainer: ".jp-desk-controls",
    });
}