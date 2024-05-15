const createBtn = document.getElementById("createBtn");
const createContainer = document.getElementById("create-assignment");

createBtn.addEventListener("click", function() {
    createContainer.classList.add("active");
})