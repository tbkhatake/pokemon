let slide = document.getElementById('onDesktop');
if(slide){
    let card = document.querySelector('input[name=checkbox]');
    
    card.addEventListener("change", function() {
        if (this.checked) {
            slide.classList.add("active");
        }else {
            slide.classList.remove("active");
        }
    });

}
    