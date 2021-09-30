let havePackages = document.querySelector('.packages-slider');
if(havePackages){
    let packages = document.querySelector('.packages');
    let channels = document.querySelectorAll('.icon-wrapper')
    let categories = document.querySelectorAll('.categorie')
    let categorieChannels = document.querySelectorAll('.channel-wrapper')
    let moreButton = document.querySelector('.button-more')
    let lessButton = document.querySelector('.button-less')
    let channelsWrapper = document.querySelector('.channels-wrapper')

    let d_packages = document.querySelectorAll('.d-packages');
    let d_channels = document.querySelectorAll('.d-icon-wrapper')
    let d_categories = document.querySelectorAll('.d-categorie')
    let channelsCat = document.querySelectorAll('.channels-cat')

    d_packages[0].classList.add('d-packages-active')

    packages.addEventListener('change',()=>{//mobile
        changePackages();
    })

    d_packages.forEach(function(pack){
        pack.addEventListener('click',()=>{//desk
            d_packages.forEach(function(pack){
                pack.classList.remove('d-packages-active')
            })
            pack.classList.add('d-packages-active')
            changePackagesDesk(pack);
        })
    })

    categories.forEach(function(categorie, key){
        if(window.screen.width < 1200){//mobile
            categorie.addEventListener('click', ()=>{
                changeCategoriesMobile(categorie, key)
            })
        }
    })

    d_categories.forEach(function(categorie, key){//desk
        categorie.addEventListener('click', ()=>{
                changeCategoriesDesk(categorie, key)
        })
    })
    

    moreButton.addEventListener('click',()=>{//mobile
        channelsWrapper.classList.add('channels-wrapper-active')
        moreButton.style.display = 'none'
        lessButton.style.display = 'block'
    })

    lessButton.addEventListener('click',()=>{//mobile
        channelsWrapper.classList.remove('channels-wrapper-active')
        moreButton.style.display = 'block'
        lessButton.style.display = 'none'
    })

    let changePackages = ()=>{
        if(packages.value == 1){
            channels.forEach(channel => {
                if(channel.classList.contains('icon-wrapper-active') || channel.classList.contains('icon-wrapper-2')|| channel.classList.contains('icon-wrapper-3') || channel.classList.contains('icon-wrapper-4')){
                    channel.classList.remove('icon-wrapper-active')
                }
            });
        }else if(packages.value == 2){
            channels.forEach(channel => {
                if(channel.classList.contains('icon-wrapper-2')){
                    channel.classList.add('icon-wrapper-active')
                }else if(channel.classList.contains('icon-wrapper-active') || channel.classList.contains('icon-wrapper-3') || channel.classList.contains('icon-wrapper-4')){
                    channel.classList.remove('icon-wrapper-active')
                }
            });
        }else if(packages.value == 3){
            channels.forEach(channel => {
                if(channel.classList.contains('icon-wrapper-2') || channel.classList.contains('icon-wrapper-3')){
                    channel.classList.add('icon-wrapper-active')
                }else if(channel.classList.contains('icon-wrapper-active') || channel.classList.contains('icon-wrapper-4')){
                    channel.classList.remove('icon-wrapper-active')
                }
            });
        }else if(packages.value == 4){
            channels.forEach(channel => {
                if(channel.classList.contains('icon-wrapper-2') || channel.classList.contains('icon-wrapper-3')|| channel.classList.contains('icon-wrapper-4')){
                    channel.classList.add('icon-wrapper-active')
                }
            });
        }
    }

    let changePackagesDesk = (pack)=>{
        if(pack.classList.contains('d-packages-1')){
            d_channels.forEach(channel => {
                if(channel.classList.contains('d-icon-wrapper-active') || channel.classList.contains('d-icon-wrapper-2')|| channel.classList.contains('d-icon-wrapper-3') || channel.classList.contains('d-icon-wrapper-4')){
                    channel.classList.remove('d-icon-wrapper-active')
                }
            });
        }else if(pack.classList.contains('d-packages-2')){
            d_channels.forEach(channel => {
                if(channel.classList.contains('d-icon-wrapper-2')){
                    channel.classList.add('d-icon-wrapper-active')
                }else if(channel.classList.contains('d-icon-wrapper-active') || channel.classList.contains('d-icon-wrapper-3') || channel.classList.contains('d-icon-wrapper-4')){
                    channel.classList.remove('d-icon-wrapper-active')
                }
            });
        }else if(pack.classList.contains('d-packages-3')){
            d_channels.forEach(channel => {
                if(channel.classList.contains('d-icon-wrapper-2') || channel.classList.contains('d-icon-wrapper-3')){
                    channel.classList.add('d-icon-wrapper-active')
                }else if(channel.classList.contains('d-icon-wrapper-active') || channel.classList.contains('d-icon-wrapper-4')){
                    channel.classList.remove('d-icon-wrapper-active')
                }
            });
        }else if(pack.classList.contains('d-packages-4')){
            d_channels.forEach(channel => {
                if(channel.classList.contains('d-icon-wrapper-2') || channel.classList.contains('d-icon-wrapper-3')|| channel.classList.contains('d-icon-wrapper-4')){
                    channel.classList.add('d-icon-wrapper-active')
                }
            });
        }
    }

    let changeCategoriesMobile = (categorie, key)=>{//mobile
        let count = key+1;
        let categorieKey = "categorie-"+count;
        let channelKey = "channel-wrapper-"+count;
        if(categorie.classList.contains('categorie-active')){
            categorie.classList.remove('categorie-active')
            categorieChannels.forEach(function(channel){
                channel.style.display = 'block'
            })
        }else{
            categories.forEach(function(cat) {
                cat.classList.remove('categorie-active')
            })
            categorie.classList.add('categorie-active')
            categorieChannels.forEach(function(channel){
                channel.style.display = 'none'
                if(categorie.classList.contains(categorieKey)){
                    if(channel.classList.contains(channelKey))
                    channel.style.display = 'block'
                }
            })
        }

    }

    let packageSlider = document.querySelectorAll('.packages-slider');
    let sliderControls = document.querySelectorAll('#customize-controls')
    packageSlider.forEach(function(el, key){
        controls = sliderControls[key]
        let slider = tns({
            container: el,
            preventScrollOnTouch: 'auto',
            items:10,
            loop:false,
            nav:false,
            controlsContainer: controls,
        });
    });
    let dChannelsWrapper = document.querySelectorAll('.d-channels-wrapper')
    let activeControls = document.querySelectorAll('.slider-controls');
    let controlsArrows = []
    let dChannelsWrapperIfControlDivLength = []
    let controlsCount = 0
    activeControls.forEach((controls, key) => {
        if(controls.style.display !== 'none'){
            let dChannelsWrapperIfControlDiv = dChannelsWrapper[key]
            dChannelsWrapperIfControlDivLength[controlsCount] = dChannelsWrapperIfControlDiv.children.length
            controlsArrows[controlsCount] = controls.children;
            controlsArrows[controlsCount][0].style.filter ='opacity(1%)'
            controlsArrows[controlsCount][0].style.cursor ='default'
            controlsArrows[controlsCount][0].addEventListener('click', ()=>{
                controlsArrows[key][1].style.filter ='opacity(100%)'
                controlsArrows[key][1].style.cursor ='pointer'
                if(dChannelsWrapperIfControlDiv.children[1].classList.contains('tns-slide-active')){
                    controlsArrows[key][0].style.filter = 'opacity(1%)'
                    controlsArrows[key][0].style.cursor ='default'
                }else{
                    controlsArrows[key][0].style.filter = 'opacity(100%)'
                    controlsArrows[key][0].style.cursor ='pointer'
                }
            })
            controlsArrows[controlsCount][1].addEventListener('click', ()=>{
                controlsArrows[key][0].style.filter ='opacity(100%)'
                controlsArrows[key][0].style.cursor ='pointer'
                if(dChannelsWrapperIfControlDiv.children[(dChannelsWrapperIfControlDivLength[key]-2)].classList.contains('tns-slide-active')){
                    controlsArrows[key][1].style.filter ='opacity(1%)'
                    controlsArrows[key][1].style.cursor ='default'
                }
            })
        }
        controlsCount++
    })
    
    let changeCategoriesDesk = (categorie, key)=>{//desktop
        let count = key+1;
        let dChannelKey = "channels-cat-"+count;

        if(categorie.classList.contains('d-categorie-active')){//se tiver active, irá tirar a classe.
                categorie.classList.remove('d-categorie-active')
                channelsCat[key].style.display = 'none'
                let displayNone = 0
                channelsCat.forEach(function(channel){//confere se o display dos canais, se todos forem none, viram block
                    if(channel.style.display == 'none'){
                        displayNone++
                        if(displayNone == d_categories.length){
                            channelsCat.forEach(channel => {
                                channel.style.display = 'block'
                            });
                        }
                    }
                })
        }else{//senão, irá colocar a classe.
            categorie.classList.add('d-categorie-active')
            channelsCat.forEach(function(channel, index){
                if(d_categories[index].classList.contains('d-categorie-active')){
                    if(channel.classList.contains(dChannelKey))
                    channel.style.display = 'block'
                }else{
                    channel.style.display = 'none'
                }
            })
        }
    }
}

