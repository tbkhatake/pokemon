let haveCompare = document.querySelector('.compare-slider');
if(haveCompare){
    let compare_slider = tns({
        container: '.compare-slider',
        "items": 1,
        "fixedWidth": 190,
        "gutter":39,
        "center": true,
        "controls":false,
        "nav":false,
        preventScrollOnTouch: 'auto', 
        "responsive": {
            "360": {
                "gutter":45,
            },
            "400": {
                "gutter":65,
            }
        }
    });
}

let infoBoxActive = document.querySelectorAll('.down-icon');
let infoBox = document.querySelectorAll('.info-box');
let compareSec = document.querySelector('.compare')

infoBoxActive.forEach((info, key) =>{
    info.addEventListener('click',() => {
        infoBox[key].classList.toggle('info-box-active')
        console.log(infoBox[key])
        
    })   
    
})

window.addEventListener("click", function(event) {
    if(event.target == compareSec){
        infoBox.forEach(infoBox =>{ 
            infoBox.classList.remove('info-box-active')
            console.log(infoBox)
        })
    }
});
