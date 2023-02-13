night = document.querySelector('.night');
tooltip = document.querySelector('.tooltip');
sun = document.querySelector('.sun');
tooltip_Sun = document.querySelector('.tooltip-sun');
submit_button = document.querySelector('.submit-button');
input_news = document.querySelector('.news-input');
text = document.querySelector('.text');
body = document.getElementsByTagName("section");

night.addEventListener('mouseenter' , ()=>{
    tooltip.classList.remove('tooltip-hidden');
    tooltip.style.display = 'block';
    tooltip.style.cursor = 'pointer';
})
night.addEventListener('mouseleave' , ()=>{
    tooltip.classList.add('tooltip-hidden');
    tooltip.style.display = 'none';
})

sun.addEventListener('mouseenter' , ()=>{
    tooltip_Sun.classList.remove('tooltip-hidden');
    tooltip_Sun.style.display = 'block';
    tooltip_Sun.style.cursor = 'pointer';
})
sun.addEventListener('mouseleave' , ()=>{
    tooltip_Sun.classList.add('tooltip-hidden');
    tooltip_Sun.style.display = 'none';
})

submit_button.addEventListener('click' , ()=>{
    if(input_news.value.length===0){
        text.classList.remove('.text-hidden');
        text.style.display = 'block';
        text.textContent = 'لطفا ایمیل خود را وارد نمایید.';
        input_news.style.borderColor = 'red';
        text.style.color = '#cc44444';
    }
    else{
        text.classList.add('.text-hidden');
        text.style.display = 'block';
        text.textContent = 'ثبت نام شما در خبرنامه انجام شد';
        input_news.style.borderColor = 'Green';
        text.style.color = 'Green';
    }
})
input_news.addEventListener('focus' , ()=>{
    if(input_news.value.length===0){
        text.classList.add('.text-hidden');
        text.style.display = 'none';
        input_news.style.borderColor = '#cecaca';
        // text.textContent = 'لطفا ایمیل خود را وارد نمایید.';
        // input_news.style.borderColor = 'red';
        // text.style.color = '#cc44444';
    }
})