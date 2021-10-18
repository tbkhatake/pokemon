let haveForms = document.querySelector('.forms');
if(haveForms){
    let formsInputs = document.querySelectorAll('#forms-input')
    let formsErrorMsg = document.querySelectorAll('.required')
    let formsButton = document.querySelector('.forms-button')

    formsButton.addEventListener('click',(el)=>{
        el.preventDefault()
        formsInputs.forEach((input, key) => {
            if(input.value == ""){
                formsErrorMsg[key].style.display = "block"
            }else{
                formsErrorMsg[key].style.display = "none"
            }
        })
    })

}