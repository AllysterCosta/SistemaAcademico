const password = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener("click", function(){
    this.classList.toggle("bi-eye-slash");
    this.classList.toggle("bi-eye");
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
})



