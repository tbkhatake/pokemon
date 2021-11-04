let haveForms = document.querySelector('.forms');
if(haveForms){
    let b2bFormsInputs = document.querySelectorAll('#forms-input')
    let b2bFormsErrorMsg = document.querySelectorAll('.required')

    let b2bFormsInputsEmail = document.querySelector('#forms-input-email')
    let b2bFormsErrorEmailMsg = document.querySelector('.required-email')

    let b2bFormsInputsTel = document.querySelector('#forms-input-tel')
    let b2bFormsErrorTelMsg = document.querySelector('.required-tel')
    
    let b2bFormsButton = document.querySelector('.button-validation')
    let b2bForm = document.querySelector("#b2b-form");
    let b2bConfirmMsg = document.querySelector('.confirm-msg')

    let inputRightAll = [];
    let inputRight;
    let emailRight = false;
    let telRight = false;

    let b2b_rd_station = function(event){
        event.preventDefault()
        let inputsEmailValue = b2bFormsInputsEmail.value
        let inputsTelValue = b2bFormsInputsTel.value
        let inputsValue = []
        b2bFormsInputs.forEach((el,key)=>{
            inputsValue[key] = el.value;
        })

        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            "event_type": "CONVERSION",
            "event_family": "CDP",
            "payload": {
            "conversion_identifier": "b2b-forms",
            "name": inputsValue[0],
            "personal_phone": inputsTelValue,
            "company_name":inputsValue[1],
            "email":  inputsEmailValue,
            "cf_assunto": inputsValue[2],
            "cf_mensagem":inputsValue[3],
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
                b2bFormsInputs[0].value = "";
                b2bFormsInputs[1].value = "";
                b2bFormsInputs[2].value = "";
                b2bFormsInputs[3].value = "";
                b2bFormsInputsEmail.value = "";
                b2bFormsInputsTel.value = "";
                b2bFormsButton.style.display = "block";
                b2bConfirmMsg.innerHTML = "&#10003 Mensagem enviada com sucesso!";
                b2bConfirmMsg.style.backgroundColor = "rgb(90, 177, 128)";
                b2bConfirmMsg.style.display = "block";
            })
            .catch((error) => {
                b2bConfirmMsg.innerHTML = "&#10006 Erro!"
                b2bConfirmMsg.style.backgroundColor = "#800006" 
                b2bConfirmMsg.style.display = "block"
            });

    }

    b2bForm.addEventListener('submit',b2b_rd_station);

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
            b2bConfirmMsg.style.display = "none";
        }else if(!emailRegex.test(b2bFormsInputsEmail.value)){
            b2bFormsErrorEmailMsg.style.display = "block"
        }else if(!phoneRegex.test(b2bFormsInputsTel.value)){
            b2bFormsErrorTelMsg.style.display = "block"
        }else{
            b2bFormsErrorEmailMsg.style.display = "none"
        }
    })
}