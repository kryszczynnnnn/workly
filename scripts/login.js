const toggleSignInBtn = document.getElementById("register-btn");
const toggleSignUpBtn = document.getElementById("login-btn");
const container = document.getElementById("container");
const registerForm = document.querySelector(".register-form");
const loginForm = document.querySelector(".login-form");

toggleSignInBtn.addEventListener("click", function() {
    container.classList.add("active");
})

toggleSignUpBtn.addEventListener("click", function() {
    container.classList.remove("active");
})

//loginForm.addEventListener("submit", event => {
//    event.preventDefault();
//
//    const formData = new FormData(loginForm);
//    const data = Object.fromEntries(formData);
//
//    fetch()
//})