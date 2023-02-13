"use strict";

const slider = document.querySelector(".slid-er");
const slides = document.querySelectorAll(".sliderBox");
const buttonRight = document.querySelector(".slider__btn--right");
const buttonLeft= document.querySelector(".slider__btn--left");
let dots = document.getElementsByClassName("dot");
let sliderT = document.getElementsByClassName(".sliderT");
let slider__btn = document.querySelectorAll(".slider__btn");
let contact_bo_image = document.querySelector(".contact-box-image");
let currentSlide = 0 ;
let maxSlide = slides.length ;  // 4
// console.log(maxSlide); // 4
//
// slides.forEach((slide___slides , i)=>slide___slides.style.transform = `translateX(${100 * i}%)`);
//
// buttonRight.addEventListener('click', ()=>{
//     if(currentSlide === maxSlide-1){
//         currentSlide = 0;  // age Slide akhar bood done done kam he
//     }
//     else {
//         currentSlide++;
//     }
//     slides.forEach((slide___slides , i)=>slide___slides.style.transform = `translateX(${100 * (i-currentSlide)}%)`);
// })
// buttonLeft.addEventListener('click' , ()=>{
//     if(currentSlide === 0){
//         currentSlide = maxSlide-1;  // age 0 bood bere akhar
//     }
//     else {
//         currentSlide--;
//     }
//     slides.forEach((slide___slides , i)=>slide___slides.style.transform = `translateX(${100 * (i-currentSlide)}%)`);
// })

let slideIndex = 0 ;
// slides.forEach((slide___slides , i)=>slide___slides.style.transform = `translateX(${100 * i}%)`);

slide_show();
function slide_show(){
    let k;
    for (k=0 ; k < slides.length ; k++){
        slides[k].style.display = 'none';
    }
    slideIndex++;
    for (k = 0; k < dots.length; k++) {
        dots[k].className = dots[k].className.replace(" active_lide", "");
    }
    // slides.forEach((slide___slides , u)=>slide___slides.style.transform = `translateX(${100 * (u-currentSlide)}%)`);

    if(slideIndex > slides.length){
        slideIndex = 1 ;
    }
    slides[slideIndex-1].style.display = 'block';
    // slides.forEach((slide___slides , i)=>slide___slides.style.transform = `translateX(${100 * i}%)`);
    dots[slideIndex-1].className += " active_lide";
    setTimeout(slide_show , 5000);
}

slider.addEventListener('mouseenter' , ()=>{
    buttonRight.classList.remove('.slider-hidden');
    buttonRight.style.display = 'block';
    buttonLeft.classList.remove('.slider-hidden');
    buttonLeft.style.display = 'block';
})
slider.addEventListener('mouseleave' , ()=>{
    buttonRight.classList.add('.slider-hidden');
    buttonRight.style.display = 'none';
    buttonLeft.classList.add('.slider-hidden');
    buttonLeft.style.display = 'none';
})
contact_bo_image.addEventListener('click' , ()=>{
    
})
