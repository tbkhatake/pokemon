let haveTreatmentForms = document.querySelector('.treatment-forms');
if(haveTreatmentForms){
    let treatmentFormsInputs = document.querySelectorAll('#t-forms-input')
    let treatmentFormsErrorMsg = document.querySelectorAll('.t-required')

    let treatmentFormsInputsEmail = document.querySelector('#t-forms-input-email')
    let treatmentFormsErrorEmailMsg = document.querySelector('.t-required-email')

    let treatmentFormsInputsTel = document.querySelector('#t-forms-input-tel')
    let treatmentFormsErrorTelMsg = document.querySelector('.t-required-tel')

    let treatmentFormsButton = document.querySelector('.t-button-validation')
    let treatmentForm = document.querySelector('#treatment-form')
    let confirmMsg = document.querySelector('.confirm-msg')


    console.log(treatmentFormsInputs[0].value);

    let rd_station = function(event){
        event.preventDefault()
        let tInputsEmailValue = treatmentFormsInputsEmail.value
        let tInputsTelValue = treatmentFormsInputsTel.value
        let tInputsValue = []
        treatmentFormsInputs.forEach((el,key)=>{
            tInputsValue[key] = el.value;
        })

        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            "event_type": "CONVERSION",
            "event_family": "CDP",
            "payload": {
            "conversion_identifier": "atendimento-forms",
            "Nome": tInputsValue[0],
            "Telefone*": tInputsTelValue,
            "email":  tInputsEmailValue,
            "Assunto": tInputsValue[1],
            "Dúvida":tInputsValue[2],
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
                console.log(resp.status);
                treatmentFormsInputs[0].value = "";
                treatmentFormsInputs[1].value = "";
                treatmentFormsInputs[2].value = "";
                treatmentFormsInputsEmail.value = ""
                treatmentFormsInputsTel.value = ""
                treatmentFormsButton.style.display = "block"
                confirmMsg.innerHTML = "&#10003 Mensagem enviada com sucesso!"
                confirmMsg.style.backgroundColor = "rgb(90, 177, 128)"
                confirmMsg.style.display = "block"
            })
            .catch((error) => {
                confirmMsg.innerHTML = "&#10006 Erro!"
                confirmMsg.style.backgroundColor = "#800006" 
                confirmMsg.style.display = "block"
            });

    }

    treatmentForm.addEventListener('submit',rd_station);
    

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