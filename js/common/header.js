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

//Mobile sub-menu active

// subMenuBtn.forEach(button => {
//     button.addEventListener('click',function(){
//         if(button.children[1].classList.contains('sub-menu-active')){
//                 button.children[1].classList.remove('sub-menu-active') 
//         }else{
//             subMenuBtn.forEach(button =>{
//                 button.children[1].classList.remove('sub-menu-active') 
//         })        
//         button.children[1].classList.add('sub-menu-active')
//         }

//         if (button.children[1].classList.contains('sub-menu-active')){
//             subMenuSpace.classList.add('sub-menu-space-active')
//             menu.classList.add('menu-active');
//         }else{
//             subMenuSpace.classList.remove('sub-menu-space-active')
//             menu.classList.remove('menu-active');
//         }
        
//     });
// });

//Desk sub-menu active

mainlyItens = document.querySelectorAll('.nav-mainlyLinks-item');
sublinks = document.querySelectorAll('.nav-subLinks');
console.log(sublinks)

for(let i = 1 ; i < mainlyItens.length ; i++){
    let t = i - 1;  
    mainlywidth = mainlyItens[t].clientWidth;
    sublinks[i].style.paddingLeft = ((346*i) + mainlywidth)+"px"
    sublinks[i].style.left = (-(346*i)- mainlywidth)+"px"
}


