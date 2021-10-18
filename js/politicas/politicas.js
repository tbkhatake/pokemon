const faqItems = document.querySelectorAll(".faq__item");
const asks = document.querySelectorAll(".ask");
asks.forEach((item, index) => {
    item.addEventListener("click", () => {
        faqItems[index].classList.toggle("faq__item--active");
    })
})
