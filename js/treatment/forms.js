let haveTreatmentForms = document.querySelector('.treatment-forms');
if(haveTreatmentForms){
    let treatmentFormsInputs = document.querySelectorAll('#t-forms-input')
    let treatmentFormsInputsEmail = document.querySelector('#t-forms-input-email')
    let treatmentFormsErrorMsg = document.querySelectorAll('.t-required')
    let treatmentFormsErrorEmailMsg = document.querySelector('.t-required-email')
    let treatmentFormsButton = document.querySelector('.t-forms-button')

    treatmentFormsButton.addEventListener('click',(el)=>{
        el.preventDefault()
        if(treatmentFormsInputsEmail.value.indexOf('@') == -1 || treatmentFormsInputsEmail.value.indexOf('.') == -1){
            treatmentFormsErrorEmailMsg.style.display = "block"
        }
        treatmentFormsInputs.forEach((input, key) => {
            if(input.value == ""){
                treatmentFormsErrorMsg[key].style.display = "block"
            }else{
                treatmentFormsErrorMsg[key].style.display = "none"
            }
        })
    })

}