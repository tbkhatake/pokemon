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
const subMenuSpace = document.querySelector('.sub-menu-space');
const menu = document.querySelector('.menu')
const subMenuBtn = document.querySelectorAll('.menu-item-has-children')
const subMenuBtn2 = document.querySelectorAll('.menu-item')

subMenuBtn.forEach(button => {
    button.addEventListener('click',function(){
        if(button.children[1].classList.contains('sub-menu-active')){
                button.children[1].classList.remove('sub-menu-active') 
        }else{
            subMenuBtn.forEach(button =>{
                button.children[1].classList.remove('sub-menu-active') 
        })        
        button.children[1].classList.add('sub-menu-active')
        }

        if (button.children[1].classList.contains('sub-menu-active')){
            subMenuSpace.classList.add('sub-menu-space-active')
            menu.classList.add('menu-active');
        }else{
            subMenuSpace.classList.remove('sub-menu-space-active')
            menu.classList.remove('menu-active');
        }
        
    });
});

subMenuBtn2.forEach(button => {
    button.addEventListener('mouseover',function(){ 
        subMenuSpace.classList.add('sub-menu-space-active')
    });
});

subMenuBtn2.forEach(button => {
    button.addEventListener('mouseout',function(){
        subMenuSpace.classList.remove('sub-menu-space-active')
    });
});
