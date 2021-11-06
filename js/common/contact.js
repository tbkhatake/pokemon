let haveContact = document.querySelector('.contact');

if(haveContact){
    let contactButton = document.querySelectorAll('.button-link');
    let contactModal = document.querySelectorAll('.box-modal-wrapper');
    let contactForm = [];
    let contactFormName = [];
    let contactFormTel = [];
    let contactFormEmail = [];
    let contactConfirmMsg = [];
    let contactValidation = [];
    let contactNameRequired = [];
    let contactTelRequired = [];
    let contactEmailRequired = [];
    let contactNameRight = [];
    let contactTelRight = [];
    let contactEmailRight = [];

    contactButton.forEach((el,key)=>{
        let tipo = el.getAttribute('tipo')
        if(tipo == 'formulario'){
            contactButton[key].href = "#contratar"
        }else if(tipo == 'painel' && screen.width >=1200){
            contactButton[key].href = "#contratar"
        }
        el.addEventListener('click',(el)=>{
            if(tipo == 'formulario' || tipo == 'painel'){
                if(tipo == 'formulario'){
                    contactModal[key].classList.add('box-modal-wrapper--form-active')
                    document.body.style.overflow = "hidden";
                    window.addEventListener("click", function(event) {
                        if(event.target == contactModal[key]){
                            contactModal[key].classList.remove('box-modal-wrapper--form-active')
                            document.body.style.overflow = "unset";
                        }
                    });
                }else if(tipo == 'painel' && screen.width >=1200){
                    contactModal[key].classList.add('box-modal-wrapper--painel-active')
                    document.body.style.overflow = "hidden";
                    window.addEventListener("click", function(event) {
                        if(event.target == contactModal[key]){
                            contactModal[key].classList.remove('box-modal-wrapper--painel-active')
                            document.body.style.overflow = "unset";
                        }
                    });
                }
            }
        })
        if(tipo == 'formulario'){
            contactForm[key] = document.querySelector('.box-forms'),
            contactValidation[key] = document.querySelector('.button-validation'),
            contactFormName[key] = document.querySelector('#box-name'),
            contactFormTel[key] = document.querySelector('#box-tel'),
            contactFormEmail[key] = document.querySelector('#box-email'),
            contactConfirmMsg[key] = document.querySelector('.confirm-msg'),
            contactNameRequired[key] = document.querySelector('#box-name-required'),
            contactTelRequired[key] = document.querySelector('#box-tel-required'),
            contactEmailRequired[key] = document.querySelector('#box-email-required')
            contactNameRight[key] = false;
            contactTelRight[key] = false;
            contactEmailRight[key] = false;
            let box_rd_station = function(event){
                event.preventDefault()
                
                var myHeaders = new Headers();
                myHeaders.append("Content-Type", "application/json");
        
                var raw = JSON.stringify({
                    "event_type": "CONVERSION",
                    "event_family": "CDP",
                    "payload": {
                    "conversion_identifier": "receber-ligacão-forms",
                    "name": contactFormName[key].value,
                    "personal_phone": contactFormTel[key].value,
                    "email":  contactFormEmail[key].value,
                    }
                });
                var requestOptions = {
                    method: 'POST',
                    headers: myHeaders,
                    body: raw,
                    redirect: 'follow'
                };
          
                fetch("https://api.rd.services/platform/conversions?api_key=ec2d9c83fe9a012aafe749c7975f796d", requestOptions)
                    .then((resp) => {
                        contactFormName[key].value = "";
                        contactFormTel[key].value = "";
                        contactFormEmail[key].value = "";
                        contactConfirmMsg[key].innerHTML = "&#10003 Mensagem enviada com sucesso!"
                        contactConfirmMsg[key].style.backgroundColor = "rgb(90, 177, 128)"
                        contactConfirmMsg[key].style.display = "block"
                        contactValidation[key].style.display = "block"
                    })
                    .catch((error) => {
                        contactConfirmMsg[key].innerHTML = "&#10006 Erro!"
                        contactConfirmMsg[key].style.backgroundColor = "#800006" 
                        contactConfirmMsg[key].style.display = "block"
                    });
            }
            contactForm[key].addEventListener('submit',box_rd_station);

            const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const phoneRegex  = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;

            contactFormName[key].addEventListener('change',()=>{
                if(contactFormName[key].value == ""){
                    contactNameRequired[key].style.display = "block"
                    contactNameRequired[key].innerText = "Preenchimento obrigatório*"  
                    contactNameRight[key] = false;
                }else{
                    contactNameRequired[key].style.display = "none"
                    contactNameRight[key] = true;
                }
                if(contactNameRight[key] && contactTelRight[key] && contactEmailRight[key]){
                    contactValidation[key].style.display = "none";
                }else{
                    contactValidation[key].style.display = "block";
                    contactConfirmMsg[key].style.display = "none"
                }
            })
            contactFormTel[key].addEventListener('change',()=>{
                if(contactFormTel[key].value == ""){
                    contactTelRequired[key].style.display = "block"
                    contactTelRequired[key].innerText = "Preenchimento obrigatório*"
                    contactTelRight[key] = false;
                }else if(!phoneRegex.test(contactFormTel[key].value)){
                    contactTelRequired[key].style.display = "block"
                    contactTelRequired[key].innerText = "Digite um telefone válido*"
                    contactTelRight[key] = false;
                }else{
                    contactTelRequired[key].style.display = "none"
                    contactTelRight[key] = true;
                }
                if(contactNameRight[key] && contactTelRight[key] && contactEmailRight[key]){
                    contactValidation[key].style.display = "none";
                }else{
                    contactValidation[key].style.display = "block";
                    contactConfirmMsg[key].style.display = "none"
                }
            })

            contactFormEmail[key].addEventListener('change',()=>{
                if(contactFormEmail[key].value == ""){
                    contactEmailRequired[key].style.display = "block"
                    contactEmailRequired[key].innerText = "Preenchimento obrigatório*"
                    contactEmailRight[key] = false;
                }else if(!emailRegex.test(contactFormEmail[key].value)){
                    contactEmailRequired[key].style.display = "block"
                    contactEmailRequired[key].innerText = "Digite um E-mail válido*"
                    contactEmailRight[key] = false;
                }else{
                    contactEmailRequired[key].style.display = "none"
                    contactEmailRight[key] = true;
                }
                if(contactNameRight[key] && contactTelRight[key] && contactEmailRight[key]){
                    contactValidation[key].style.display = "none";
                }else{
                    contactValidation[key].style.display = "block";
                    contactConfirmMsg[key].style.display = "none"
                }
            })

            contactValidation[key].addEventListener('click',()=>{
                if(contactFormName[key].value == ""){
                    contactNameRequired[key].style.display = "block"
                    contactNameRequired[key].innerText = "Preenchimento obrigatório*"  
                    contactNameRight[key] = false;
                }else if(contactFormTel[key].value == ""){
                    contactTelRequired[key].style.display = "block"
                    contactTelRequired[key].innerText = "Preenchimento obrigatório*"
                    contactTelRight[key] = false;
                }else if(!phoneRegex.test(contactFormTel[key].value)){
                    contactTelRequired[key].style.display = "block"
                    contactTelRequired[key].innerText = "Digite um telefone válido*"
                    contactTelRight[key] = false;
                }else if(contactFormEmail[key].value == ""){
                    contactEmailRequired[key].style.display = "block"
                    contactEmailRequired[key].innerText = "Preenchimento obrigatório*"
                    contactEmailRight[key] = false;
                }else if(!emailRegex.test(contactFormEmail[key].value)){
                    contactEmailRequired[key].style.display = "block"
                    contactEmailRequired[key].innerText = "Digite um E-mail válido*"
                    contactEmailRight[key] = false;
                }else{
                    contactNameRequired[key].style.display = "none"
                    contactNameRight[key] = true;
                    contactEmailRequired[key].style.display = "none"
                    contactEmailRight[key] = true;
                    contactTelRequired[key].style.display = "none"
                    contactTelRight[key] = true;
                    contactValidation[key].style.display = "none";
                }
            })
        }
    })
}

