let cityName = document.getElementById("cityName");
let cityPhone = document.getElementById("cityPhone");
let select = document.getElementById("cities");
select.addEventListener('change', () => {
    fetch('http://localhost/desktop/wp-admin/admin-ajax.php?action=raccoon_get_city_data&city=' + select.value)
    .then(data => {
        let response = data.json();
        response.then(resp => {
            cityName.innerText = resp.data.cityName
            cityPhone.innerText = resp.data.cityPhone
        })

    })
})