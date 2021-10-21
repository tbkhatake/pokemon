let initialModal = document.querySelector('.initial-modal')

if(initialModal){
    let modalSearch = document.querySelector('.modal__search')
    let modalCitiesWrapper = document.querySelector('.modal__cities')
    let modalCity = document.querySelectorAll('.modal__city')
    let searchString = "";

    modalSearch.addEventListener('keydown',(el)=>{
        if(el.key == "Backspace" || el.key == "Delete"){
            searchString = searchString.slice(0, -1)
        }else if(el.key.length > 1){
            searchString = searchString
        }else{
            searchString = searchString + el.key.toLowerCase()
        }
        modalCity.forEach(city=>{
            if(city.innerText.toLowerCase().split('ã').join('a').split('é').join('e').includes(searchString)){
                city.style.display = "block"
            }else{
                city.style.display = "none"
            }
        })
    })

    let headerNavSelect = document.querySelector('.nav-select')
    let getCookies = localStorage.getItem("cookies")
    let cityStorage = localStorage.getItem("city")
    if(cityStorage == null){
        initialModal.classList.add('initial-modal--active')
    }
    modalCity.forEach((city,key)=>{
        city.addEventListener('click', ()=>{
            initialModal.classList.remove('initial-modal--active')
            headerNavSelect.selectedIndex = key
            if(getCookies !== "accepted"){
                localStorage.setItem("city",key)
            }
        })
    })


    let openFormsModal = document.querySelector('.modal__notfound-city')
    let formsModal = document.querySelector('#forms-modal')

    openFormsModal.addEventListener('click',()=>{
        formsModal.classList.add('forms-active')
    })

    window.addEventListener("click", function(event) {
        if(event.target == formsModal){
            formsModal.classList.remove('forms-active')
        }
    });

}