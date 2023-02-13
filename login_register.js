nlname = document.querySelector(".name");
uname = document.querySelector(".username");
email = document.querySelector(".email");
phone = document.querySelector(".phone");
pass = document.querySelector(".password");
repass = document.querySelector(".repassword");
register_button = document.querySelector(".reg-button");

tError_name = document.querySelector('.textError-name');
tError_uname = document.querySelector('.textError-uname');
tError_phone = document.querySelector('.textError-phone');
tError_pass = document.querySelector('.textError-password');
tError_repass = document.querySelector('.textError-repassword');
// tError_name = document.querySelector('.textError-name');

const togglePassword = document.querySelector("#togglePassword");



register_button.addEventListener('click' , ()=>{
  if(nlname.value.length===0){
    nlname.style.borderColor = 'red';
    tError_name.classList.remove('tError-hidden');
    tError_name.style.display = 'block';
    return 0;
  }
  if(uname.value.length===0){
    uname.style.borderColor = 'red';
    tError_uname.classList.remove('tError-hidden');
    tError_uname.style.display = 'block';
    return 0;
  }
  if(phone.value.length===0){
    phone.style.borderColor = 'red';
    tError_phone.classList.remove('tError-hidden');
    tError_phone.style.display = 'block';
    return 0;
  }
  if(pass.value.length===0){
    pass.style.borderColor = 'red';
    tError_pass.classList.remove('tError-hidden');
    tError_pass.style.display = 'block';
    return 0;
  }
  if(repass.value.length===0){
    repass.style.borderColor = 'red';
    tError_repass.classList.remove('tError-hidden');
    tError_repass.style.display = 'block';
    return 0;
  }
  if(pass.value.length != repass.value.length){
    repass.style.borderColor = 'red';
    tError_repass.textContent = 'رمز عبور و تکرار آن مشابه نیست.';
    tError_repass.classList.remove('tError-hidden');
    tError_repass.style.display = 'block';
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


uname.addEventListener('focus' , ()=>{
  if(uname.value.length===0){
    tError_uname.classList.add('tError-hidden');
    tError_uname.style.display = 'none';
    uname.style.borderColor = '#094bbe';
    return 0;
  }
})
uname.addEventListener('focusout' , ()=>{
  uname.style.borderColor = '#aeaeaf';
})


phone.addEventListener('focus' , ()=>{
  if(phone.value.length===0){
    tError_phone.classList.add('tError-hidden');
    tError_phone.style.display = 'none';
    phone.style.borderColor = '#094bbe';
    return 0;
  }
})
phone.addEventListener('input' , ()=>{
  if(phone.value.length != 11){
    phone.style.borderColor = 'red';
  }
  else{
    phone.style.borderColor = '#094bbe';
  }
})
phone.addEventListener('focusout' , ()=>{
  phone.style.borderColor = '#aeaeaf';
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


repass.addEventListener('focus' , ()=>{
  if(repass.value.length===0){
    tError_repass.classList.add('tError-hidden');
    tError_repass.style.display = 'none';
    repass.style.borderColor = '#094bbe';
    return 0;
  }
  if(pass.value.length != repass.value.length){
    repass.style.borderColor = '#094bbe';
    // tError_repass.textContent = 'رمز عبور و تکرار آن مشابه نیست.';
    tError_repass.classList.add('tError-hidden');
    tError_repass.style.display = 'none';
  }
})
repass.addEventListener('focusout' , ()=>{
  repass.style.borderColor = '#aeaeaf';
})

togglePassword.addEventListener("click", function () {
  // toggle the type attribute
  const type = pass.getAttribute("type") === "password" ? "text" : "password";
  pass.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});
