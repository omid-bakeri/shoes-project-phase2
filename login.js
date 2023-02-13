nlname = document.querySelector(".name");
pass = document.querySelector(".password");
login_button = document.querySelector(".log-button");

tError_name = document.querySelector('.textError-name');
tError_pass = document.querySelector('.textError-password');

const togglePassword = document.querySelector("#togglePassword");



login_button.addEventListener('click' , ()=>{
    if(nlname.value.length===0){
        nlname.style.borderColor = 'red';
        tError_name.classList.remove('tError-hidden');
        tError_name.style.display = 'block';
        return 0;
    }
    if(pass.value.length===0){
        pass.style.borderColor = 'red';
        tError_pass.classList.remove('tError-hidden');
        tError_pass.style.display = 'block';
        return 0;
    }
})
nlname.addEventListener('focus' , ()=>{
    if(nlname.value.length===0){
        tError_name.classList.add('tError-hidden');
        tError_name.style.display = 'none';
        nlname.style.borderColor = '#094bbe';
        return 0;
    }
})
nlname.addEventListener('focusout' , ()=>{
    nlname.style.borderColor = '#aeaeaf';
})


pass.addEventListener('focus' , ()=>{
    if(pass.value.length===0){
        tError_pass.classList.add('tError-hidden');
        tError_pass.style.display = 'none';
        pass.style.borderColor = '#094bbe';
        return 0;
    }
})
pass.addEventListener('focusout' , ()=>{
    pass.style.borderColor = '#aeaeaf';
})




togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = pass.getAttribute("type") === "password" ? "text" : "password";
    pass.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});
