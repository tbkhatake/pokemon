let haveTreatmentForms = document.querySelector('.treatment-forms');
if(haveTreatmentForms){
    let treatmentFormsInputs = document.querySelectorAll('#t-forms-input')
    let treatmentFormsErrorMsg = document.querySelectorAll('.t-required')
    let treatmentFormsButton = document.querySelector('.t-forms-button')

    treatmentFormsButton.addEventListener('click',(el)=>{
        el.preventDefault()
        treatmentFormsInputs.forEach((input, key) => {
            if(input.value == ""){
                treatmentFormsErrorMsg[key].style.display = "block"
            }else{
                treatmentFormsErrorMsg[key].style.display = "none"
            }
        })
    })

}