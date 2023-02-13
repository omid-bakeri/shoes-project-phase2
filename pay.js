pay_mellat_bank = document.querySelector('.pay-mellat-bank');
pay_saman_bank = document.querySelector('.pay-saman-bank');
pay_box_box_button = document.querySelector('.pay-box-box-button');

pay_mellat_bank_btn = document.querySelector('.pay-mellat-bank-btn');
pay_saman_bank_btn = document.querySelector('.pay-saman-bank-btn');

pay_mellat_bank_btn.addEventListener('click' , ()=>{
    // pay_mellat_bank_btn.style.backgroundColor = 'green';
    pay_mellat_bank.src = 'images/melat-transformed.png';
    pay_saman_bank.src = 'images/saman-bw-transformed.png';
})
pay_saman_bank_btn.addEventListener('click' , ()=>{
    // pay_mellat_bank_btn.style.backgroundColor = 'green';
    pay_saman_bank.src = 'images/saman-transformed.png';
    pay_mellat_bank.src = 'images/mellat-bank-re-bw.png';
})