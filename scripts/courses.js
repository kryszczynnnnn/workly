const closeBtn = document.getElementById("closeCreate");
const createBtn = document.getElementById("createBtn");
const container = document.getElementById("create-course");

createBtn.addEventListener("click", function () {
    container.classList.add("active");
});

closeBtn.addEventListener("click", function () {
    container.classList.remove("active");
});


