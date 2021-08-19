let plans_slider = tns({
    container: '.plans-slider',
    "fixedWidth": 242,
    "center": true,
    "responsive": {
        "360": {
            "fixedWidth": 272
        },        
        "1200":{
            "items": 4,
            "center": false,
        },
        "1366":{
            "items": 4,
            "fixedWidth": 340,
            "center": false,
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

function fetchPlansData(planType){
    let pageid = document.getElementById('pageid').value;
    fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&pageid=' + pageid + '&plantype=' + planType) 
    .then(data => {
        let response = data.json();
        response.then(resp => {
            cards = resp.cards;
            
            cards.forEach(function(el){
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
                servicesTitle.innerText = 'Serviços inclusos';
                let servicesIS = document.createElement('div');
                servicesIS.classList.add('services-IS');
                servicesWrapper.appendChild(servicesTitle);
                servicesWrapper.appendChild(servicesIS);

                let cta = document.createElement('a');
                cta.classList.add('cta');
                cta.setAttribute('href', el.cta.url);
                cta.innerText = el.cta.title;

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

                let servicesLength = el.services.icon.length;
                for(let i = 0; i < servicesLength ; i++){
                    let servLink = document.createElement('a');
                    servLink.classList.add('IS-link');
                    servLink.setAttribute('href', el.services.link[i]);
                    
                    let servIcon = document.createElement('img');
                    servIcon.classList.add('IS-icon');
                    servIcon.setAttribute('src' ,el.services.icon[i]) ;
                    
                    servLink.appendChild(servIcon);
                    servicesIS.appendChild(servLink);
                }

                card.appendChild(speed);
                card.appendChild(price);
                card.appendChild(text);
                card.appendChild(redline);
                card.appendChild(featuresWrapper);
                card.appendChild(servicesWrapper);
                card.appendChild(cta);
                plansSlider.appendChild(card);
                cardsWrapper.appendChild(plansSlider);
            })
            let plans_slider = tns({
                container: '.plans-slider',
                "fixedWidth": 244,
                "center": true,
                "responsive": {
                    "360": {
                        "fixedWidth": 284
                    },        
                    "1200":{
                        "items": 4,
                        "center": false,
                    },
                    "1366":{
                        "items": 4,
                        "fixedWidth": 340,
                        "center": false,
                    },
                }
            });
        })
    })
} 