let havePlans = document.querySelector('.plans-slider');
if(havePlans){
    let plans_slider = tns({
        container: '.plans-slider',
        "fixedWidth": 210,
        "center": true,
        "loop":false,
        preventScrollOnTouch: 'auto',
        "gutter":32,
        "responsive": {
            "360": {
                "fixedWidth": 250
            }, 
            "375": {
                "fixedWidth": 270
            },       
            "400": {
                "fixedWidth": 300
            },  
            "440": {
                "fixedWidth": 350
            },  
            "1200":{
                "items": 4,
                "center": false,
                "fixedWidth": 270
            },
            "1366":{
                "gutter":40,
                "items": 4,
                "fixedWidth": 300,
            },
        }
    });
    let plansSelect = document.querySelector('.categories-select');
    let plansDeskSelect = document.querySelector('.categories-desk-select');
    let plansDeskOptions = document.querySelectorAll('.desk-options');
    let plansSlider = document.querySelector('#tns3');
    let cardsWrapper = document.querySelector('.cards-wrapper');
    

    plansSelect.addEventListener('change', () => {
        cardsWrapper.innerHTML = ' ';
        plansSlider = document.createElement('div');
        plansSlider.classList.add('plans-slider');
        fetchPlansData(plansSelect.value);
    })
    let plans = [];
    plansDeskOptions.forEach(el => {
        plans.push(el);
        if(plans[0]){
            plans[0].classList.add('desk-options-active');
        }
        el.addEventListener('click',() => {
            cardsWrapper.innerHTML = ' ';
            plansSlider = document.createElement('div');
            plansSlider.classList.add('plans-slider');
            fetchPlansData(el.getAttribute("plan"));
            plans.forEach(el =>{
            el.classList.remove('desk-options-active')
            })
            el.classList.add('desk-options-active');
        })
    })
   
    let navCitySelect = document.querySelector('.nav-select');
    let cityName = navCitySelect.value
    let navCitySelectMobile = document.querySelector('.cities-select');
    navCitySelect.addEventListener('change', ()=>{
        cityName = navCitySelect.value
        cardsWrapper.innerHTML = ' ';
        plansSlider = document.createElement('div');
        plansSlider.classList.add('plans-slider');
        cityFetchPlansData("Internet")
        plans.forEach(el =>{
            el.classList.remove('desk-options-active');
        })
        plans[0].classList.add('desk-options-active');
    })
    navCitySelectMobile.addEventListener('change', ()=>{
        cityName = navCitySelectMobile.value
        cardsWrapper.innerHTML = ' ';
        plansSlider = document.createElement('div');
        plansSlider.classList.add('plans-slider');
        cityFetchPlansData("Internet")
    })
    function fetchPlansData(planType){
        // fetch('https://desktop.raccoon-stage.com/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&plantype=' + planType + '&cityname=' + cityName)
        fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&plantype=' + planType + '&cityname=' + cityName) 
        .then(data => {
            let response = data.json();
            response.then(resp => {
                cards = resp.cards;
                cards.forEach(function(el){
                    let cardOutside = document.createElement('div');
                    cardOutside.classList.add('card-outside');
                    let card = document.createElement('div');
                    card.classList.add('card');
                    if( el.mvp == true){
                        card.classList.add('card-active');
                        let dest = document.createElement('div');
                        dest.classList.add('card-dest');
                        dest.innerText = el.mvpDest;
                        card.appendChild(dest);
                    }

                    let speed = document.createElement('h3');
                    speed.classList.add('card-speed');
                    speed.innerText = el.speed;

                    let price = document.createElement('p');
                    price.classList.add('card-price');
                    price.innerText = el.price;

                    let text = document.createElement('p');
                    text.classList.add('card-text');
                    text.innerText = el.text;

                    let redline = document.createElement('span');
                    redline.classList.add('card-redline');

                    let featuresWrapper = document.createElement('div');
                    featuresWrapper.classList.add('features-wrapper');

                    let servicesWrapper = document.createElement('div');
                    servicesWrapper.classList.add('services-wrapper');

                    let servicesTitle = document.createElement('p');
                    servicesTitle.classList.add('services-title');
                    if(el.services.icon[0]){
                        servicesTitle.innerText = 'Serviços inclusos';
                    }
                    let servicesIS = document.createElement('div');
                    servicesIS.classList.add('services-IS');
                    servicesWrapper.appendChild(servicesIS);
                
                    let cta = document.createElement('a');
                    cta.classList.add('cta');
                    cta.setAttribute('href', el.cta.url);
                    cta.innerText = el.cta.title;

                    let moreInfo = document.createElement('a');
                        moreInfo.classList.add('more-info')
                        if(el.moreInfo){
                            moreInfo.setAttribute('href', el.moreInfo.url);
                            moreInfo.innerText = el.moreInfo.title;
                        }
                   
                    //features
                    let featureLength = el.features.icon.length;
                    for(let i = 0; i < featureLength ; i++){

                        let feature = document.createElement('div');
                        feature.classList.add('feature');

                        let iconSpace = document.createElement('div');
                        iconSpace.classList.add('icon-space');

                        let featIcon = document.createElement('img');
                        featIcon.classList.add('feature-icon');
                        featIcon.setAttribute('src' ,el.features.icon[i]) ;

                        iconSpace.appendChild(featIcon);
                        feature.appendChild(iconSpace);
                    
                        let featTitle = document.createElement('p');
                        featTitle.classList.add('feature-title');
                        featTitle.innerText =  el.features.title[i];

                        feature.appendChild(featTitle);

                        featuresWrapper.appendChild(feature);
                    }

                    let servicesPlus = document.createElement('div');
                    servicesPlus.classList.add('services-plus');
                    if(el.services.icon[0]){
                        let servicesLength = el.services.icon.length;
                        for(let i = 0; i < servicesLength ; i++){
                            let servLink = document.createElement('a');
                            servLink.classList.add('IS-link');
                            servLink.setAttribute('href', el.services.link[i]);

                            let servIcon = document.createElement('img');
                            servIcon.classList.add('IS-icon');
                            servIcon.setAttribute('src' ,el.services.icon[i]) ;
                        
                            servLink.appendChild(servIcon);
                            if(i <= 3){
                                servicesIS.appendChild(servLink);
                            }else{
                                servicesPlus.appendChild(servLink);
                            }
                        }
                    
                        if(servicesLength > 4){
                            let plusServButton = document.createElement('p');
                            plusServButton.classList.add('services-plus-button');
                            plusServButton.innerHTML = '+' + (servicesLength - 4);
                            servicesIS.appendChild(plusServButton);
                            plusServButton.addEventListener('click', ()=>{
                            servicesPlus.classList.toggle('services-plus-active')
                            })
                        }
                    }

                    card.appendChild(speed);
                    card.appendChild(price);
                    card.appendChild(text);
                    card.appendChild(redline);
                    card.appendChild(featuresWrapper);
                    if(el.services.icon[0]){
                        card.appendChild(servicesTitle)
                        servicesWrapper.appendChild(servicesPlus)
                        card.appendChild(servicesWrapper);
                    }
                    card.appendChild(cta);
                    if(el.moreInfo){
                        card.appendChild(moreInfo);
                    }
                    cardOutside.appendChild(card);
                    plansSlider.appendChild(cardOutside);
                    cardsWrapper.appendChild(plansSlider);
                })
                
                let plans_slider = tns({
                    container: '.plans-slider',
                    "fixedWidth": 210,
                    "center": true,
                    "loop":false,
                    preventScrollOnTouch: 'auto',
                    "gutter":32,
                    "responsive": {
                        "360": {
                            "fixedWidth": 250
                        }, 
                        "375": {
                            "fixedWidth": 270
                        },       
                        "400": {
                            "fixedWidth": 300
                        },  
                        "440": {
                            "fixedWidth": 350
                        },  
                        "1200":{
                            "items": 4,
                            "center": false,
                            "fixedWidth": 270
                        },
                        "1366":{
                            "gutter":40,
                            "items": 4,
                            "fixedWidth": 300,
                        },
                    }
                });
            })
        })
    } 
    function cityFetchPlansData(planType){
        // fetch('https://desktop.raccoon-stage.com/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&&plantype=' + planType + '&cityname=' + cityName)
        fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&plantype=' + planType + '&cityname=' + cityName) 
        .then(data => {
            let response = data.json();
            response.then(resp => {
                if(resp == null){
                    cityName = 'piracicaba'
                    cityFetchPlansData("Internet")
                }else{
                    cards = resp.cards;
                    cards.forEach(function(el){
                        let cardOutside = document.createElement('div');
                        cardOutside.classList.add('card-outside');


                        let card = document.createElement('div');
                        card.classList.add('card');
                        if( el.mvp == true){
                            card.classList.add('card-active');
                            let dest = document.createElement('div');
                            dest.classList.add('card-dest');
                            dest.innerText = el.mvpDest;
                            card.appendChild(dest);
                        }

                        let speed = document.createElement('h3');
                        speed.classList.add('card-speed');
                        speed.innerText = el.speed;

                        let price = document.createElement('p');
                        price.classList.add('card-price');
                        price.innerText = el.price;

                        let text = document.createElement('p');
                        text.classList.add('card-text');
                        text.innerText = el.text;

                        let redline = document.createElement('span');
                        redline.classList.add('card-redline');

                        let featuresWrapper = document.createElement('div');
                        featuresWrapper.classList.add('features-wrapper');

                        let servicesWrapper = document.createElement('div');
                        servicesWrapper.classList.add('services-wrapper');

                        let servicesTitle = document.createElement('p');
                        servicesTitle.classList.add('services-title');
                        if(el.services.icon[0]){
                            servicesTitle.innerText = 'Serviços inclusos';
                        }
                        let servicesIS = document.createElement('div');
                        servicesIS.classList.add('services-IS');
                        servicesWrapper.appendChild(servicesIS);
                    
                        let cta = document.createElement('a');
                        cta.classList.add('cta');
                        cta.setAttribute('href', el.cta.url);
                        cta.innerText = el.cta.title;

                    
                        let moreInfo = document.createElement('a');
                        moreInfo.classList.add('more-info')
                        if(el.moreInfo){
                            moreInfo.setAttribute('href', el.moreInfo.url);
                            moreInfo.innerText = el.moreInfo.title;
                        }
          
                        //features
                        let featureLength = el.features.icon.length;
                        for(let i = 0; i < featureLength ; i++){

                            let feature = document.createElement('div');
                            feature.classList.add('feature');

                            let iconSpace = document.createElement('div');
                            iconSpace.classList.add('icon-space');

                            let featIcon = document.createElement('img');
                            featIcon.classList.add('feature-icon');
                            featIcon.setAttribute('src' ,el.features.icon[i]) ;

                            iconSpace.appendChild(featIcon);
                            feature.appendChild(iconSpace);
                        
                            let featTitle = document.createElement('p');
                            featTitle.classList.add('feature-title');
                            featTitle.innerText =  el.features.title[i];

                            feature.appendChild(featTitle);

                            featuresWrapper.appendChild(feature);
                        }

                        let servicesPlus = document.createElement('div');
                        servicesPlus.classList.add('services-plus');

                        if(el.services.icon[0]){
                            let servicesLength = el.services.icon.length;
                            for(let i = 0; i < servicesLength ; i++){
                                let servLink = document.createElement('a');
                                servLink.classList.add('IS-link');
                                servLink.setAttribute('href', el.services.link[i]);

                                let servIcon = document.createElement('img');
                                servIcon.classList.add('IS-icon');
                                servIcon.setAttribute('src' ,el.services.icon[i]) ;
                            
                                servLink.appendChild(servIcon);
                                if(i <= 3){
                                    servicesIS.appendChild(servLink);
                                }else{
                                    servicesPlus.appendChild(servLink);
                                    
                                }
                            }
                        
                            if(servicesLength > 4){
                                let plusServButton = document.createElement('p');
                                plusServButton.classList.add('services-plus-button');
                                plusServButton.innerHTML = '+' + (servicesLength - 4);
                                servicesIS.appendChild(plusServButton);
                                plusServButton.addEventListener('click', ()=>{
                                servicesPlus.classList.toggle('services-plus-active')
                                })
                            }
                        }

                        card.appendChild(speed);
                        card.appendChild(price);
                        card.appendChild(text);
                        card.appendChild(redline);
                        card.appendChild(featuresWrapper);
                        if(el.services.icon[0]){
                            card.appendChild(servicesTitle)
                            servicesWrapper.appendChild(servicesPlus)
                            card.appendChild(servicesWrapper);
                        }
                        card.appendChild(cta);
                        if(el.moreInfo){
                            card.appendChild(moreInfo);
                        }
                        cardOutside.appendChild(card);
                        plansSlider.appendChild(cardOutside);
                        cardsWrapper.appendChild(plansSlider);
                    })
                    
                    let plans_slider = tns({
                        container: '.plans-slider',
                        "fixedWidth": 210,
                        "center": true,
                        "loop":false,
                        preventScrollOnTouch: 'auto',
                        "gutter":32,
                        "responsive": {
                            "360": {
                                "fixedWidth": 250
                            }, 
                            "375": {
                                "fixedWidth": 270
                            },       
                            "400": {
                                "fixedWidth": 300
                            },  
                            "440": {
                                "fixedWidth": 350
                            },  
                            "1200":{
                                "items": 4,
                                "center": false,
                                "fixedWidth": 270
                            },
                            "1366":{
                                "gutter":40,
                                "items": 4,
                                "fixedWidth": 300,
                            },
                        }
                    });
                }
            })
        })
    } 
    let serviceActiveButton = document.querySelectorAll('.services-plus-button');
    let servicesHidden = document.querySelectorAll('.services-plus');
    serviceActiveButton.forEach(function(button, key){
        if(button.innerText == ""){
            button.style.display = 'none';
        }
        button.addEventListener('click', ()=>{
            servicesHidden[key].classList.toggle('services-plus-active');
            cardsWrapper.classList.toggle('cards-wrapper-active')
        })
    })
}
