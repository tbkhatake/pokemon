let slide = document.getElementById('onDesktop');
let card = document.querySelector('input[name=checkbox]');



card.addEventListener("change", function() {
    if (this.checked) {
        slide.classList.add("active");
    }else {
        slide.classList.remove("active");
    }
});
    








