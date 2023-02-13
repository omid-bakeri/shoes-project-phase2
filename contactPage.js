input_name = document.querySelector('.contact-input-name');
input_email = document.querySelector('.contact-input-email');
input_phone = document.querySelector('.contact-input-phone');
contactFormutton = document.querySelector('.contact-form-button');

contactFormutton.addEventListener('click' , ()=>{
    if(input_name.value.length===0){
        input_name.style.borderColor = '#cc4444';
        input_name.style.transition = '0.6s ease';
        input_name.style.backgroundColor = 'rgba(217,108,108,0.71)';
        return 0;
    }
    if(input_email.value.length===0){
        input_email.style.borderColor = '#cc4444';
        input_email.style.transition = '0.6s ease';
        input_email.style.backgroundColor = 'rgba(217,108,108,0.71)';
        return 0;
    }
    if(input_phone.value.length===0){
        input_phone.style.borderColor = '#cc4444';
        input_phone.style.transition = '0.6s ease';
        input_phone.style.backgroundColor = 'rgba(217,108,108,0.71)';
        return 0;
    }
})
input_name.addEventListener('focus' , ()=>{
    if(input_name.value.length===0){
        input_name.style.borderColor = '#0a77e4';
        input_name.style.transition = '0.6s ease';
        input_name.style.backgroundColor = '#ffffff';
        return 0;
    }
})
input_name.addEventListener('focusout' , ()=>{
    input_name.style.borderColor = '#c7c3c3';
})
input_email.addEventListener('focus' , ()=>{
    if(input_email.value.length===0){
        input_email.style.borderColor = '#0a77e4';
        input_email.style.transition = '0.6s ease';
        input_email.style.backgroundColor = '#ffffff';
        return 0;
    }
})
input_email.addEventListener('focusout' , ()=>{
    input_email.style.borderColor = '#c7c3c3';
    input_email.style.backgroundColor = '#ffffff';
})
input_phone.addEventListener('focus' , ()=>{
    if(input_phone.value.length===0){
        input_phone.style.borderColor = '#0a77e4';
        input_phone.style.transition = '0.6s ease';
        input_phone.style.backgroundColor = '#ffffff';
        return 0;
    }
})
input_phone.addEventListener('focusout' , ()=>{
    input_phone.style.borderColor = '#c7c3c3';
    input_phone.style.backgroundColor = '#ffffff';
})