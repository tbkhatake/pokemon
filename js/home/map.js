let haveMap = document.querySelector('#cityName');
if(haveMap){
    let cityName = document.getElementById("cityName");
    let cityPhone = document.getElementById("cityPhone");
    let cityAdress = document.getElementById("cityAdress");
    let select = document.getElementById("cities");
    let mapStyle = document.querySelector('.map-wrapper style');
    let cityLink = document.getElementById("cityLink");



    select.addEventListener('change', () => fetchCityData(select.value));



    //Realçar cidades mapa
    function cityHighlight (id) {
        let munId = 'mun_' + id;
        let munStyle = '#' + munId + '{fill: #c3000a !important;}';
        mapStyle.innerHTML = munStyle;
    }

    function fetchCityData (cityCode) {
        cityHighlight(cityCode);
        fetch('https://desktop.raccoon-stage.com/wp-admin/admin-ajax.php?action=raccoon_get_city_data&city=' + cityCode)
        .then(data => {
            let response = data.json();
            response.then(resp => {
                cityName.innerText = resp.data.cityName
                cityPhone.innerText = resp.data.cityPhone
                cityAdress.innerText = resp.data.cityAdress
                cityLink.setAttribute('href', resp.data.cityLink);
            })

        })
        document.querySelector('.city-info').classList.add('active');
    }
}