const openNavBtn = document.getElementById("open-nav")
const closeNavBtn = document.getElementById("close-nav");
const smallNav = document.getElementById("small-nav");


openNavBtn.addEventListener("click", function () {
    smallNav.classList.add("active");
})

closeNavBtn.addEventListener("click", function () {
    smallNav.classList.remove("active");
})


const createBtn = document.getElementById("createBtn");
const createContainer = document.getElementById("create-assignment");

createBtn.addEventListener("click", function() {
    createContainer.classList.add("active");
})