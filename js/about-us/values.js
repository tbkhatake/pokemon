let haveBox = document.querySelector('.box-slider');
if(haveBox){
    let boxSlider = tns({
        container: '.box-slider',
        loop: false,
        items: 2,
        responsive: {
            1200: 5,
        },
        mouseDrag: true,
        preventScrollOnTouch: 'auto',
        gutter: 20,
        
    });
}

let haveSlider = document.querySelector('.slides-wrapper');
if(haveSlider){
    let boxSlider = tns({
        container: '.slides-wrapper',
        loop: false,
        items: 1,
        mouseDrag: true,
        preventScrollOnTouch: 'auto',
        controls: false,
        navContainer: ".box-slider"
    });
}

let btns = document.querySelectorAll('box-wrapper'[1]);
const slideOusadia = document.getElementById('ousadia');
btns.addEventListener("click", () => {
    slideOusadia.classList.add("showOusadia");
})