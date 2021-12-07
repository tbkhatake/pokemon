let initials = document.querySelector('.initials')

if(initials){
    
    let initialspoke = tns({
        container:'.pokemons',
        items:1,
        loop:false,
        preventScrollOnTouch: 'auto',
        nav:true,
        controls:true,
        navContainer:'.nav-balls',
        controlsContainer:'.arrows'
    })

}