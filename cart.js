cart_box_discount_link = document.querySelector('.cart-box-discount-link');
cart_box_box_2 = document.querySelector('.cart-box-box-2');
cart_box_discount_discount_box = document.querySelector('.cart-box-discount-discount-box');

cart_box_discount_link.addEventListener('click' , ()=>{
    cart_box_box_2.style.height = '15rem';
    cart_box_box_2.style.transition = '0.6s ease';
    cart_box_discount_discount_box.classList.remove('.cart-box-discount-discount-box-hidden');
    cart_box_discount_discount_box.style.display = 'block';
})