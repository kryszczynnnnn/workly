const createBtn = document.getElementById("createBtn");
const createContainer = document.getElementById("create-assignment");
const closeCreate = document.getElementById("closeCreate");

createBtn.addEventListener("click", function() {
    createContainer.classList.add("active");
})

closeCreate.addEventListener("click", function() {
    createContainer.classList.remove("active");
})

const inviteBtn = document.getElementById("inviteBtn");
const inviteContainer = document.getElementById("invite-code");
const closeInvite = document.getElementById("closeInvite")

inviteBtn.addEventListener("click", function () {
    inviteContainer.classList.add("active");
})

closeInvite.addEventListener("click", function () {
    inviteContainer.classList.remove("active");
})