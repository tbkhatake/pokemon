let taxOff = document.getElementById('dropdownContent');




if (taxOff) {
let taxBtn = document.getElementById('clickBtn');

taxBtn.addEventListener("click", () => {
    taxOff.classList.toggle('accordion-content-active');
  
})
}