let haveGallery = document.querySelector('.gallery-slider');
if(haveGallery){
    let slider_gallery = tns({
        container: '.gallery-slider',
        "items": 1,
        preventScrollOnTouch: 'auto',
        "controls":false,
        loop:false
    });

   let galleryContentWrapper = document.querySelectorAll('.quad-content-wrapper')
   let galleryArrow = document.querySelectorAll('.quad-arrow')
   let galleryContentTitle = document.querySelectorAll('.quad-title')

   galleryArrow.forEach((arrow,key)=>{
        arrow.addEventListener('click',()=>{
            arrow.classList.toggle('quad-arrow-active')
            galleryContentWrapper[key].classList.toggle('quad-content-wrapper-active')
            galleryContentTitle[key].classList.toggle('quad-title-active')
        })
   })

   //1200px

    let slider_gallery_desk = tns({
        container: '.gallery-desk-slider',
        preventScrollOnTouch: 'auto',
        loop:false,
        gutter:80,
        controls:false,
        fixedWidth:918,
        edgePadding:180,
        navContainer:"#gallery-dots",
        navAsThumbnails:true,
        "responsive": { 
            "1366": {
                edgePadding:220,
            }      
        }
    });

    console.log(slider_gallery_desk.getInfo())

    let slider_gallery_desk_dots = tns({
        container: '.gallery-desk-dots-slider',
        "items": 4,
        preventScrollOnTouch: 'auto',
        loop:false,
        nav:false,
        gutter:16,
        controlsContainer: ".gallery-desk-controls",
    });

    let galleryDeskQuad = document.querySelectorAll('.desk-quad')
    let galleryDeskDot = document.querySelectorAll('.desk-dots-image')
    let galleryDeskContentWrapper = document.querySelectorAll('.desk-quad-content-wrapper')
    
    galleryDeskQuad[0].classList.add('desk-quad-active')
    galleryDeskDot[0].classList.add('desk-dots-image-active')
    galleryDeskContentWrapper[0].classList.add('desk-quad-content-wrapper-active')

    galleryDeskDot.forEach((dot,key)=>{
        dot.addEventListener('click',()=>{
            galleryDeskQuad.forEach((quad)=>{
                quad.classList.remove('desk-quad-active')
            })
            galleryDeskDot.forEach((dot)=>{
                dot.classList.remove('desk-dots-image-active')
            })
            galleryDeskContentWrapper.forEach((content)=>{
                content.classList.remove('desk-quad-content-wrapper-active')
            })
            galleryDeskQuad[key].classList.add('desk-quad-active')
            dot.classList.add('desk-dots-image-active')
            galleryDeskContentWrapper[key].classList.add('desk-quad-content-wrapper-active')
        })
    })
}
