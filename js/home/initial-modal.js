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
        document.body.style.height = "100vh";
        document.body.style.overflow = "hidden";
    }
    modalCity.forEach((city,key)=>{
        city.addEventListener('click', ()=>{
            initialModal.classList.remove('initial-modal--active')
            document.body.style.height = "unset";
            document.body.style.overflow = "unset";
            headerNavSelect.selectedIndex = key
            getCookies = localStorage.getItem("cookies")
            if(getCookies == "accepted"){
                localStorage.setItem("city",key)
            }
        })
    })


    let openFormsModal = document.querySelector('.modal__notfound-city')
    let formsModal = document.querySelector('#forms-modal')

    openFormsModal.addEventListener('click',()=>{
        formsModal.classList.add('initial-forms-active')
    })

    window.addEventListener("click", function(event) {
        if(event.target == formsModal){
            formsModal.classList.remove('initial-forms-active')
        }
    });
    
    let initialFormsInputs = document.querySelector('#forms-input')
    let initialFormsErrorMsg = document.querySelector('.required')

    let initialFormsInputsEmail = document.querySelector('#forms-input-email')
    let initialFormsErrorEmailMsg = document.querySelector('.required-email')

    let initialFormsInputsTel = document.querySelector('#forms-input-tel')
    let initialFormsErrorTelMsg = document.querySelector('.required-tel')

    let initialFormsInputsCity = document.querySelector('#forms-input-city')
    let initialFormsInputsState = document.querySelector('#forms-input-state')
    let initialFormsErrorAddressMsg = document.querySelector('.required-address')

    let initialFormsButton = document.querySelector('.button-validation')

    let inputRight = false;
    let emailRight = false;
    let telRight = false;
    let addressRight = false;

    const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex  = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;

    initialFormsInputs.addEventListener('change',(el) =>{
            if(el.value == ""){
                initialFormsErrorMsg.style.display = "block"
                inputRight = false;
            }else{
                initialFormsErrorMsg.style.display = "none"
                inputRight = true;
            }
            if(inputRight && emailRight && telRight && addressRight){
                initialFormsButton.style.display = "none";
            }else{
                initialFormsButton.style.display = "block";
            }
        })

    initialFormsInputsEmail.addEventListener('change',()=>{
        if(initialFormsInputsEmail.value == "") {
            initialFormsErrorEmailMsg.style.display = "block"
            initialFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            emailRight = false;
        }else if(!emailRegex.test(initialFormsInputsEmail.value)){
            initialFormsErrorEmailMsg.style.display = "block"
            initialFormsErrorEmailMsg.innerText = "Digite um e-mail válido*"
            emailRight = false;
        }else{
            initialFormsErrorEmailMsg.style.display = "none"
            emailRight = true; 
        }
        if(inputRight && emailRight && telRight && addressRight){
            initialFormsButton.style.display = "none";
        }else{
            initialFormsButton.style.display = "block";
        }
    })

    initialFormsInputsTel.addEventListener('change',()=>{
        if(initialFormsInputsTel.value == "") {
            initialFormsErrorTelMsg.style.display = "block"
            initialFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
            telRight = false;
        }else if(!phoneRegex.test(initialFormsInputsTel.value)){
            initialFormsErrorTelMsg.style.display = "block"
            initialFormsErrorTelMsg.innerText = "Digite um telefone válido*"
            telRight = false;
        }else{
            initialFormsErrorTelMsg.style.display = "none"
            telRight = true; 
        }
        if(inputRight && emailRight && telRight && addressRight){
            initialFormsButton.style.display = "none";
        }else{
            initialFormsButton.style.display = "block";
        }
    })

    initialFormsInputsCity.addEventListener('change',()=>{
        if(initialFormsInputsCity.value == "" && initialFormsInputsState.value == "") {
            initialFormsErrorAddressMsg.style.display = "block"
            addressRight = false;
        }else{
            initialFormsErrorAddressMsg.style.display = "none"
            addressRight = true; 
        }
        if(inputRight && emailRight && telRight && addressRight){
            initialFormsButton.style.display = "none";
        }else{
            initialFormsButton.style.display = "block";
        }
    })

    initialFormsInputsState.addEventListener('change',()=>{
        if(initialFormsInputsCity.value == "" && initialFormsInputsState.value == "") {
            initialFormsErrorAddressMsg.style.display = "block"
            addressRight = false;
        }else{
            initialFormsErrorAddressMsg.style.display = "none"
            addressRight = true; 
        }
        if(inputRight && emailRight && telRight && addressRight){
            initialFormsButton.style.display = "none";
        }else{
            initialFormsButton.style.display = "block";
        }
    })

    initialFormsButton.addEventListener('click',(el)=>{
        if(initialFormsInputs.value == ""){
            initialFormsErrorMsg.style.display = "block"
        }else{
            initialFormsErrorTelMsg.style.display = "none"
        }
        if(initialFormsInputsCity.value == "" && initialFormsInputsState.value == "") {
            initialFormsErrorAddressMsg.style.display = "block"
        }else{
            initialFormsErrorAddressMsg.style.display = "none"
        }
        if(initialFormsInputsEmail.value == "") {
            initialFormsErrorEmailMsg.style.display = "block"
            initialFormsErrorTelMsg.style.display = "block"
            initialFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            initialFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
        }else if(!emailRegex.test(initialFormsInputsEmail.value)){
            initialFormsErrorEmailMsg.style.display = "block"
        }else if(!phoneRegex.test(initialFormsInputsTel.value)){
            initialFormsErrorTelMsg.style.display = "block"
        }else{
            initialFormsErrorEmailMsg.style.display = "none"
        }
    })

}