const toggleSignInBtn = document.getElementById("register-btn");
const toggleSignUpBtn = document.getElementById("login-btn");
const container = document.getElementById("container");

toggleSignInBtn.addEventListener("click", function() {
    container.classList.add("active");
})

toggleSignUpBtn.addEventListener("click", function() {
    container.classList.remove("active");
})