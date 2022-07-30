let Fname = document.getElementById("First");
let emailInput = document.getElementById("email");
let password = document.getElementById("password");
let submit = document.getElementById("submit");
let form = document.getElementById("next");
let Lname = document.getElementById("last");

form.addEventListener('submit', (e)=>{
    let errormassage =[];
    if(Fname.value.length > 20 || Fname.value.length < 4 ||  Fname.value ===''){
        errormassage.push('please insert information correctly');
        Fname.style.border="thin solid red";
    }
    if(emailInput.value ==='' || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(emailInputValue) != true) {
        errormassage.push('please insert information correctly');
        emailInput.style.border="thin solid red";
    }
    if(password.value.length > 20 || password.value.length < 4 ||  password.value ===''){
        errormassage.push('please insert information correctly');
        password.style.border="thin solid red";
    }
    if(errormassage.length > 0){
        Lname.style.color = "red";
        Lname.innerText = errormassage[0];
    }
  })