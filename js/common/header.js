let forWhoItens = document.querySelectorAll('.for-who-itens')

window.addEventListener('load',()=>{
    forWhoItens.forEach(el=>{
        if(el.href == window.location.href){
            el.classList.add('for-who-itens-active')
        }
    })
})

//Modal Active

const menuBtn = document.querySelector('.header-nav-icon');
const modal = document.querySelector('.modal');
const modalArea = document.querySelector('.modal-area');

menuBtn.addEventListener('click',() =>{
    modal.classList.toggle('modal-active'); 
})

window.addEventListener("click", function(event) {
    if(event.target == modal){
        modal.classList.remove('modal-active')
    }
});

//Desk sub-menu active

mainlyItens = document.querySelectorAll('.nav-mainlyLinks-item');
sublinks = document.querySelectorAll('.nav-subLinks');

for(let i = 1 ; i < mainlyItens.length ; i++){
    let t = i - 1;  
    mainlywidth = mainlyItens[t].clientWidth;
    sublinks[i].style.paddingLeft = ((500*i) + mainlywidth)+"px"
    sublinks[i].style.left = (-(500*i)- mainlywidth)+"px"
}


