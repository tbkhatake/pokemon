let haveForms = document.querySelector('.forms');
if(haveForms){
    let b2bFormsInputs = document.querySelectorAll('#forms-input')
    let b2bFormsErrorMsg = document.querySelectorAll('.required')

    let b2bFormsInputsEmail = document.querySelector('#forms-input-email')
    let b2bFormsErrorEmailMsg = document.querySelector('.required-email')

    let b2bFormsInputsTel = document.querySelector('#forms-input-tel')
    let b2bFormsErrorTelMsg = document.querySelector('.required-tel')
    
    let b2bFormsButton = document.querySelector('.button-validation')

    let inputRightAll = [];
    let inputRight;
    let emailRight = false;
    let telRight = false;

    b2bFormsInputs.forEach((el,key)=>{
        inputRightAll[key] = false;
        el.addEventListener('change',() =>{
            if(el.value == ""){
                b2bFormsErrorMsg[key].style.display = "block"
                inputRightAll[key] = false;
            }else{
                b2bFormsErrorMsg[key].style.display = "none"
                inputRightAll[key] = true;
            }
            inputRight = inputRightAll.every(el=>{
                return el;
            })
            if(inputRight && emailRight && telRight){
                b2bFormsButton.style.display = "none";
            }else{
                b2bFormsButton.style.display = "block";
            }
        })
    })
    const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex  = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;
    b2bFormsInputsEmail.addEventListener('change',()=>{
        if(b2bFormsInputsEmail.value == "") {
            b2bFormsErrorEmailMsg.style.display = "block"
            b2bFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            emailRight = false;
        }else if(!emailRegex.test(b2bFormsInputsEmail.value)){
            b2bFormsErrorEmailMsg.style.display = "block"
            b2bFormsErrorEmailMsg.innerText = "Digite um e-mail válido*"
            emailRight = false;
        }else{
            b2bFormsErrorEmailMsg.style.display = "none"
            emailRight = true; 
        }
        if(inputRight && emailRight && telRight){
            b2bFormsButton.style.display = "none";
        }else{
            b2bFormsButton.style.display = "block";
        }
    })

    b2bFormsInputsTel.addEventListener('change',()=>{
        if(b2bFormsInputsTel.value == "") {
            b2bFormsErrorTelMsg.style.display = "block"
            b2bFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
            telRight = false;
        }else if(!phoneRegex.test(b2bFormsInputsTel.value)){
            b2bFormsErrorTelMsg.style.display = "block"
            b2bFormsErrorTelMsg.innerText = "Digite um telefone válido*"
            telRight = false;
        }else{
            b2bFormsErrorTelMsg.style.display = "none"
            telRight = true; 
        }
        if(inputRight && emailRight && telRight){
            b2bFormsButton.style.display = "none";
        }else{
            b2bFormsButton.style.display = "block";
        }
    })

    b2bFormsButton.addEventListener('click',(el)=>{
        b2bFormsInputs.forEach((input, key) => {
            if(input.value == ""){
                b2bFormsErrorMsg[key].style.display = "block"
            }else{
                b2bFormsErrorMsg[key].style.display = "none"
            }
        })
        if(b2bFormsInputsEmail.value == "") {
            b2bFormsErrorEmailMsg.style.display = "block"
            b2bFormsErrorTelMsg.style.display = "block"
            b2bFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            b2bFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
        }else if(!emailRegex.test(b2bFormsInputsEmail.value)){
            b2bFormsErrorEmailMsg.style.display = "block"
        }else if(!phoneRegex.test(b2bFormsInputsTel.value)){
            b2bFormsErrorTelMsg.style.display = "block"
        }else{
            b2bFormsErrorEmailMsg.style.display = "none"
        }
    })
}