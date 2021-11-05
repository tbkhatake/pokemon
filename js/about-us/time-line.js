let sectionTimeLine = document.querySelector('.time-line')

if(sectionTimeLine){

    let timeLineOpenBtnBallMobile = document.querySelectorAll('.card-ball')
    let timeLineOpenBtnAgeMobile = document.querySelectorAll('.card-age')
    let titleLineContent = document.querySelectorAll('.card-content')
    
    timeLineOpenBtnBallMobile.forEach((btn, key)=>{
        btn.addEventListener('click', ()=>{
            if(titleLineContent[key].classList.contains('card-content-active')){
                titleLineContent[key].classList.remove('card-content-active')
                timeLineOpenBtnBallMobile[key].classList.remove('card-ball-active')
            }else{
                titleLineContent.forEach(el=>{
                    el.classList.remove('card-content-active')
                })
                timeLineOpenBtnBallMobile.forEach(el=>{
                    el.classList.remove('card-ball-active')
                })
                titleLineContent[key].classList.add('card-content-active')
                timeLineOpenBtnBallMobile[key].classList.add('card-ball-active')
            }
        })
    })

    timeLineOpenBtnAgeMobile.forEach((btn, key)=>{
        btn.addEventListener('click', ()=>{
            if(titleLineContent[key].classList.contains('card-content-active')){
                titleLineContent[key].classList.remove('card-content-active')
                timeLineOpenBtnBallMobile[key].classList.remove('card-ball-active')
            }else{
                titleLineContent.forEach(el=>{
                    el.classList.remove('card-content-active')
                })
                timeLineOpenBtnBallMobile.forEach(el=>{
                    el.classList.remove('card-ball-active')
                })
                titleLineContent[key].classList.add('card-content-active')
                timeLineOpenBtnBallMobile[key].classList.add('card-ball-active')
            }
        })
    })

    //1200px

    let timeLineImageWrapper =  document.querySelector('.image-wrapper')
    let timeLineImages = document.querySelectorAll('.card-image')
    let timeLineDeskBalls = document.querySelectorAll('.age-ball')
    let timeLineContentCard = document.querySelectorAll('.desk-card-content')

    timeLineDeskBalls[0].classList.add('age-ball-active')
    timeLineImages[0].classList.add('card-image-active')
    timeLineImages[1].classList.add('card-image-active2')
    timeLineContentCard[0].classList.add('desk-card-content-active')
    
    timeLineImages.forEach(el=>{
        if(el.getAttribute("alt") == ""){
            timeLineImageWrapper.style.display = "none"
        }
    })

    timeLineDeskBalls.forEach((ball,key)=>{
        ball.addEventListener('click',()=>{
            timeLineDeskBalls.forEach(el=>{
                el.classList.remove('age-ball-active')
            })
            timeLineImages.forEach(el=>{
                el.classList.remove('card-image-active')
                el.classList.remove('card-image-active2')
            })
            timeLineContentCard.forEach(el=>{
                el.classList.remove('desk-card-content-active')
            })
            timeLineDeskBalls[key].classList.add('age-ball-active')
            timeLineImages[key].classList.add('card-image-active')
            timeLineContentCard[key].classList.add('desk-card-content-active')
            if(timeLineImages[key-1]){
                timeLineImages[key-1].classList.add('card-image-active2')
            }
            if(timeLineImages[key+1]){
                timeLineImages[key+1].classList.add('card-image-active2')
            }
            timeLineImageWrapper.style.transform = `translateX(-${(key)*350}px)`
        })
    })

    timeLineImages.forEach((ball,key)=>{
        ball.addEventListener('click',()=>{
            timeLineDeskBalls.forEach(el=>{
                el.classList.remove('age-ball-active')
            })
            timeLineImages.forEach(el=>{
                el.classList.remove('card-image-active')
                el.classList.remove('card-image-active2')
            })
            timeLineContentCard.forEach(el=>{
                el.classList.remove('desk-card-content-active')
            })
            timeLineDeskBalls[key].classList.add('age-ball-active')
            timeLineImages[key].classList.add('card-image-active')
            timeLineContentCard[key].classList.add('desk-card-content-active')
            if(timeLineImages[key-1]){
                timeLineImages[key-1].classList.add('card-image-active2')
            }
            if(timeLineImages[key+1]){
                timeLineImages[key+1].classList.add('card-image-active2')
            }
            timeLineImageWrapper.style.transform = `translateX(-${(key)*350}px)`
        })
    })
}

