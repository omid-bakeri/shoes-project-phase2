email = document.querySelector(".name");
send_button = document.querySelector(".send-button");
tError_email = document.querySelector('.textError-email');

send_button.addEventListener('click' , ()=>{
    if(email.value.length===0){
        email.style.borderColor = 'red';
        tError_email.classList.remove('tError-hidden');
        tError_email.style.display = 'block';
        return 0;
    }
    if(email.getAttribute('type') !== 'email' ){
        tError_email.textContent = 'آدرس ایمیل نامعتبر است.';
        tError_email.classList.add('tError-hidden');
        tError_email.style.display = 'block';
    }

})
email.addEventListener('focus' , ()=>{
    if(email.value.length===0){
        tError_email.classList.add('tError-hidden');
        tError_email.style.display = 'none';
        email.style.borderColor = '#094bbe';
        return 0;
    }
})
email.addEventListener('focusout' , ()=>{
    email.style.borderColor = '#aeaeaf';
})
