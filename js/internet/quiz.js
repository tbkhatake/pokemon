let quizButtton = document.querySelector('.start-button');
let quizWrapper = document.querySelector('.quiz-wrapper');
if(quizWrapper){
    quizButtton.addEventListener('click', () => {
        quizWrapper.innerHTML = ' ';
        fetchQuizData(0);
    })
    let count = 0
    let point = 0
    function fetchQuizData(quizType){
    
        let quizid = document.getElementById('quizid').value;
        // fetch('https://desktop.raccoon-stage.com/wp-admin/admin-ajax.php?action=raccoon_get_quiz_data&quizid=' + quizid + '&quiztype=' + quizType)
        fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_quiz_data&quizid=' + quizid + '&quiztype=' + quizType) 
        .then(data => {
            let response = data.json();
                response.then(resp => {
                    quiz = resp.quiz; 
                    localPoints = resp.localPoints
                    
                       // fetch('https://desktop.raccoon-stage.com/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&plantype=Internet&cityname=piracicaba')
                         fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_plans_data&plantype=Internet&cityname=piracicaba')  
                        .then(data => {
                            let response = data.json();
                            response.then(resp => {
                                cards = resp.cards;
                            })
                        })

                    let imgMobile = document.createElement('div');
                    imgMobile.classList.add('img-mobile');
                    let mobImg = document.createElement('img');
                    mobImg.classList.add('mobImg');        
                    mobImg.setAttribute('src',quiz.icon);
                    console.log( quiz.icon)

                    imgMobile.appendChild(mobImg);
                    quizWrapper.innerHTML = ' ';
                    if(window.screen.width <= 1200){
                        quizWrapper.appendChild(imgMobile);
                    }

                    let quizBox = document.createElement('div');
                    quizBox.classList.add('quiz-box');
                    let question = document.createElement('p');
                    question.classList.add('start-question');
                    question.innerText = quiz.question
                    let redline = document.createElement('span');
                    redline.classList.add('redline');

                    quizBox.appendChild(question);
                    quizBox.appendChild(redline);
                    
                    let answer1 = document.createElement('p');
                    answer1.classList.add('answers')
                    answer1.innerText = quiz.option1.answer
                    answer1.setAttribute('point',quiz.option1.point)

                    let answer2 = document.createElement('p');
                    answer2.classList.add('answers')
                    answer2.innerText = quiz.option2.answer
                    answer2.setAttribute('point',quiz.option2.point)

                    let answer3 = document.createElement('p');
                    answer3.classList.add('answers')
                    answer3.innerText = quiz.option3.answer
                    answer3.setAttribute('point',quiz.option3.point)
                
                    quizBox.appendChild(answer1);
                    quizBox.appendChild(answer2);
                    quizBox.appendChild(answer3);

                    quizWrapper.appendChild(quizBox);

                    let quizaAnswer = document.querySelectorAll('.answers');
                    quizaAnswer.forEach((el,key )=>{
                        el.addEventListener('click', () => {
                            if (count < 2){
                                point = point + parseInt(el.getAttribute('point'))
                                count++
                                quizWrapper.innerHTML = ' ';
                                fetchQuizData(count);
                            }else{
                                let firstQuadMegas;
                                let firstQuadDesc;
                                let firstQuadServ;
                                let firstQuadPrice;
                                let secQuadDesc;
                                let secQuadPrice;
                                let secQuadPoints;
                                let thirdQuadResp = resp.quizResp;
                                let removeCondition;

                                if(point >= 5){
                                    firstQuadMegas = cards[3].speed; 
                                    firstQuadDesc = cards[3].text;
                                    firstQuadServ = cards[3].services.icon;
                                    firstQuadPrice = cards[3].price;
                                    secQuadDesc = localPoints.pointsDesc1
                                    secQuadPrice = localPoints.pointsPrice1
                                    secQuadPoints = localPoints.pointsPoints1
                                    removeCondition = true;
                                }else if(point >= 4){
                                    firstQuadMegas = cards[2].speed;
                                    firstQuadDesc = cards[2].text; 
                                    firstQuadServ = cards[2].services.icon;
                                    firstQuadPrice = cards[2].price;
                                    secQuadDesc = localPoints.pointsDesc1
                                    secQuadPrice = localPoints.pointsPrice1
                                    secQuadPoints = localPoints.pointsPoints1
                                    removeCondition = true;
                                }else if(point >= 3){
                                    firstQuadMegas = cards[1].speed;
                                    firstQuadDesc = cards[1].text;
                                    firstQuadServ = cards[1].services.icon;
                                    firstQuadPrice = cards[1].price;
                                    secQuadDesc = localPoints.pointsDesc2
                                    secQuadPrice = localPoints.pointsPrice2
                                    secQuadPoints = localPoints.pointsPoints2
                                    removeCondition = true;
                                }else{
                                    firstQuadMegas = cards[0].speed;
                                    firstQuadDesc = cards[0].text;
                                    firstQuadServ = cards[0].services.icon;
                                    firstQuadPrice = cards[0].price;
                                    secQuadDesc = localPoints.pointsDesc3
                                    secQuadPrice = localPoints.pointsPrice3
                                    secQuadPoints = localPoints.pointsPoints3
                                    removeCondition = false;
                                }

                                quizWrapper.innerHTML = ' ';
                                let imgDesk = document.querySelector('.img-desk');
                                imgDesk.style.display = 'none'

                                let result = document.querySelector('.result');
                                result.style.display = 'flex'

                                let megaAdc = document.querySelector('.megaAdc');
                                let pontosAdc = document.querySelector('.pontosAdc');
                                let total = document.querySelector('.total');

                                let mega = document.createElement('p');
                                mega.classList.add('mega')
                                mega.innerHTML = firstQuadMegas
                                megaAdc.appendChild(mega);
                                
                                let megaDesc = document.createElement('p');
                                megaDesc.classList.add('mega-desc');
                                megaDesc.innerText = firstQuadDesc
                                megaAdc.appendChild(megaDesc);

                                let megaServWrapper = document.createElement('div');
                                megaServWrapper.classList.add('mega-serv-wrapper')

                                
                                let servDesc = document.createElement('p');
                                servDesc.classList.add('mega-serv-desc');
                                servDesc.innerText = 'Serviços Inclusos';
                                megaAdc.appendChild(servDesc);

                                let megaServ = [];
                                for(let i = 0 ; i < 4 ; i++){
                                    megaServ[i] = document.createElement('img')
                                    megaServ[i].classList.add('mega-serv')
                                    megaServ[i].setAttribute('src' ,firstQuadServ[i]) ;
                                    megaServWrapper.appendChild(megaServ[i]);
                                }
                                megaAdc.appendChild(megaServWrapper)
                                
                                let pointPoints = document.createElement('p');
                                pointPoints.classList.add('pontosAdc-points');
                                pointPoints.innerText = secQuadPoints;
                                pontosAdc.appendChild(pointPoints);

                                let descPoints = document.createElement('p');
                                descPoints.classList.add('pontosAdc-text');
                                descPoints.innerText = secQuadDesc;
                                pontosAdc.appendChild(descPoints);
                                
                                let firstQuadPriceSpliced = firstQuadPrice.split(' ')
                                let secQuadPriceSpliced = secQuadPrice.split(' ')
                                let price1 = parseFloat(firstQuadPriceSpliced[1].replace(",","."));
                                let price2 = parseFloat(secQuadPriceSpliced[1].replace(",","."));
                                let finalPrice = ((price1 + price2).toFixed(2));
                                
                                let totalPrice = document.createElement('p');
                                totalPrice.classList.add('total-price')
                                totalPrice.innerHTML ='R$' +' '+ finalPrice.replace(".",",");
                                total.appendChild(totalPrice);

                                let totalResp = document.createElement('p');
                                totalResp.classList.add('total-resp');
                                totalResp.innerText = thirdQuadResp;
                                total.appendChild(totalResp);
                                
                                let removeButton = document.createElement('p');
                                removeButton.innerText = resp.removeButton;
                                removeButton.classList.add('remove-button');

                                let addButton = document.createElement('p');
                                addButton.innerText = resp.addButton;
                                addButton.classList.add('add-button');

                                if (removeCondition){
                                    pontosAdc.appendChild(addButton);
                                    addButton.style.display = 'none'
                                    pontosAdc.appendChild(removeButton);
                                }
                                
                                let conversionButton = document.createElement('p');
                                conversionButton.innerText = resp.conversionButton;
                                conversionButton.classList.add('conversion-button');
                                total.appendChild(conversionButton);

                                removeButton.addEventListener('click', ()=>{
                                totalPrice.innerHTML = firstQuadPrice;
                                removeButton.style.display = 'none';
                                addButton.style.display = 'block';
                                pontosAdc.style.backgroundColor = '#80808040';
                                pointPoints.style.color = '#373737';
                                descPoints.style.color = '#373737';
                                })

                                addButton.addEventListener('click', ()=>{
                                totalPrice.innerHTML ='R$' +' '+ finalPrice.replace(".",",");
                                removeButton.style.display = 'block'
                                addButton.style.display = 'none'
                                pontosAdc.style.backgroundColor = '#FFFFFF';
                                pointPoints.style.color = '#C3000A';
                                descPoints.style.color = '#C3000A';
                                })


                                let tentarNovamente = document.querySelector('.tryAgain-button');

                                tentarNovamente.addEventListener('click', () => {
                                    count = 0
                                    point = 0
                                    quizWrapper.innerHTML = ' ';
                                    result.style.display = 'none'
                                    megaAdc.innerHTML = ' ';
                                    pontosAdc.innerHTML = ' ';
                                    total.innerHTML = ' ';
                                    if(window.screen.width >= 1200){
                                        imgDesk.style.display = 'flex'
                                    }
                                    fetchQuizData(0);
                                })
                            }
                        })
                    })
            })
        })
    }
}