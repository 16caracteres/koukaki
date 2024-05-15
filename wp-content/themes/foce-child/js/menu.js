console.log("le menu lé là!");

const burgerIcons = document.querySelector(".burger-icons");
const burgerNavigation = document.getElementById("burger-navigation");
const burgerLinks = document.querySelectorAll(".burger-links li");


burgerIcons.addEventListener("click", () => {
    burgerNavigation.classList.toggle("active");
    burgerIcons.classList.toggle("active");
})

burgerLinks.forEach((link) => {
    link.addEventListener("click", () => {
        burgerNavigation.classList.remove("active");
        burgerIcons.classList.remove("active");
    })
});