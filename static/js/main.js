
// =====password toggle eye=====

const passField = document.querySelector(".form input[type='password']"),
    toggleBtn = document.querySelector("form .field i");

    toggleBtn.onclick = ()=>{
        if(passField.type == "password"){
            passField.type = "text";
            toggleBtn.classList.add('active');
        }else{
            passField.type = "password";
            toggleBtn.classList.remove('active');
        }
    }

// ====buttons switcher======
var loginForm=document.getElementById("login");
var signUpForm=document.getElementById("signUp");
var btnSwith= document.getElementById("btn");

function signUp(){
    btnSwith.style.left="180px";
    signUpForm.classList.remove('disable');
    loginForm.classList.add('disable');
    
}
function login(){
    btnSwith.style.left="0px";
    signUpForm.classList.add('disable');
    loginForm.classList.remove('disable');
}
const btnSwitch = document.querySelectorAll('.toggle-button')

function btnAction() {
    //active btn
    btnSwitch.forEach(n => n.classList.remove('btn-active'))
    this.classList.add('btn-active')
}

btnSwitch.forEach(n => n.addEventListener('click', btnAction))

