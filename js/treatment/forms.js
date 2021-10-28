let haveTreatmentForms = document.querySelector('.treatment-forms');
if(haveTreatmentForms){
    let treatmentFormsInputs = document.querySelectorAll('#t-forms-input')
    let treatmentFormsInputsEmail = document.querySelector('#t-forms-input-email')
    let treatmentFormsErrorMsg = document.querySelectorAll('.t-required')
    let treatmentFormsErrorEmailMsg = document.querySelector('.t-required-email')
    let treatmentFormsButton = document.querySelector('.t-button-validation')

    let inputRightAll = [];
    let inputRight;
    let emailRight = false;

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
            if(inputRight && emailRight){
                treatmentFormsButton.style.display = "none";
            }else{
                treatmentFormsButton.style.display = "block";
            }
        })
    })

    treatmentFormsInputsEmail.addEventListener('change',()=>{
        if(treatmentFormsInputsEmail.value == "") {
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
            emailRight = false;
        }else if(treatmentFormsInputsEmail.value.indexOf('@') <= 0 || treatmentFormsInputsEmail.value.indexOf('.') <= 0){
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Digite um e-mail válido*"
            emailRight = false;
        }else{
            treatmentFormsErrorEmailMsg.style.display = "none"
            emailRight = true;
        }
        if(inputRight && emailRight){
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
            treatmentFormsErrorEmailMsg.innerText = "Preenchimento obrigatório*"
        }else if(treatmentFormsInputsEmail.value.indexOf('@') <= 0 || treatmentFormsInputsEmail.value.indexOf('.') <= 0){
            treatmentFormsErrorEmailMsg.style.display = "block"
            treatmentFormsErrorEmailMsg.innerText = "Digite um e-mail válido*"
        }else{
            treatmentFormsErrorEmailMsg.style.display = "none"
        }
    })
}