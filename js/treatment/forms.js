let haveTreatmentForms = document.querySelector('.treatment-forms');
if(haveTreatmentForms){
    let treatmentFormsInputs = document.querySelectorAll('#t-forms-input')
    let treatmentFormsErrorMsg = document.querySelectorAll('.t-required')

    let treatmentFormsInputsEmail = document.querySelector('#t-forms-input-email')
    let treatmentFormsErrorEmailMsg = document.querySelector('.t-required-email')

    let treatmentFormsInputsTel = document.querySelector('#t-forms-input-tel')
    let treatmentFormsErrorTelMsg = document.querySelector('.t-required-tel')

    let treatmentFormsButton = document.querySelector('.t-button-validation')

    let inputRightAll = [];
    let inputRight;
    let emailRight = false;
    let telRight = false;

    treatmentFormsInputs.forEach((el,key)=>{
        inputRightAll[key] = false;
        el.addEventListener('change',() =>{
            if(el.value == ""){
                treatmentFormsErrorMsg[key].style.display = "block"
                inputRightAll[key] = false;
            }else{
                treatmentFormsErrorMsg[key].style.display = "none"
                inputRightAll[key] = true;
            }
            inputRight = inputRightAll.every(el=>{
                return el;
            })
            if(inputRight && emailRight && telRight){
                treatmentFormsButton.style.display = "none";
            }else{
                treatmentFormsButton.style.display = "block";
            }
        })
    })
    const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex  = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/;
    treatmentFormsInputsEmail.addEventListener('change',()=>{
        if(treatmentFormsInputsEmail.value == "") {
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            emailRight = false;
        }else if(!emailRegex.test(treatmentFormsInputsEmail.value)){
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Digite um e-mail válido*"
            emailRight = false;
        }else{
            treatmentFormsErrorEmailMsg.style.display = "none"
            emailRight = true; 
        }
        if(inputRight && emailRight && telRight){
            treatmentFormsButton.style.display = "none";
        }else{
            treatmentFormsButton.style.display = "block";
        }
    })

    treatmentFormsInputsTel.addEventListener('change',()=>{
        if(treatmentFormsInputsTel.value == "") {
            treatmentFormsErrorTelMsg.style.display = "block"
            treatmentFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
            telRight = false;
        }else if(!phoneRegex.test(treatmentFormsInputsTel.value)){
            treatmentFormsErrorTelMsg.style.display = "block"
            treatmentFormsErrorTelMsg.innerText = "Digite um telefone válido*"
            telRight = false;
        }else{
            treatmentFormsErrorTelMsg.style.display = "none"
            telRight = true; 
        }
        if(inputRight && emailRight && telRight){
            treatmentFormsButton.style.display = "none";
        }else{
            treatmentFormsButton.style.display = "block";
        }
    })

    treatmentFormsButton.addEventListener('click',(el)=>{
        treatmentFormsInputs.forEach((input, key) => {
            if(input.value == ""){
                treatmentFormsErrorMsg[key].style.display = "block"
            }else{
                treatmentFormsErrorMsg[key].style.display = "none"
            }
        })
        if(treatmentFormsInputsEmail.value == "") {
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorTelMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            treatmentFormsErrorTelMsg.innerText = "Preenchimento obrigatório*"
        }else if(!emailRegex.test(treatmentFormsInputsEmail.value)){
            treatmentFormsErrorEmailMsg.style.display = "block"
        }else if(!phoneRegex.test(treatmentFormsInputsTel.value)){
            treatmentFormsErrorTelMsg.style.display = "block"
        }else{
            treatmentFormsErrorEmailMsg.style.display = "none"
        }
    })
}