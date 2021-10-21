let acceptCookies = document.querySelector('#cookies-button') 
let cookies = document.querySelector(".cookies")

let getCookies = localStorage.getItem("cookies")
if(getCookies !== "accepted"){
    cookies.classList.add("cookies-active")
}

acceptCookies.addEventListener('click', ()=>{
    localStorage.setItem("cookies","accepted")
    cookies.classList.remove("cookies-active")
})

window.addEventListener("click", function(event) {
    if(event.target == cookies){
        cookies.classList.remove('cookies-active')
    }
});