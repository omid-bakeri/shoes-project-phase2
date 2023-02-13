<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cart.css" type="text/css">
    <title>فروشگاه امید شوس - سبد خرید</title>
</head>
<body>
    <?php
        include "header2.php";
    ?>
    <section class="cart-section">
        <div class="cart-section-title">
            صفحه سبد خرید
        </div>
        <div class="cart-box">
            <div class="cart-box-box">
                <div class="cart-box-box-box cart-box-box-1">
                    <div class="cart-box-product-show">
                        <div class="cart-box-product-detail cart-box-product-show-image">
                            <img src="../images/6.png" class="cart-box-product-show-image-image">
                        </div>
                        <div class="cart-box-product-detail cart-box-product-show-link">
                            کفش مردانه مردانه پاکراد
                        </div>
                        <div class="cart-box-product-detail cart-box-product-show-box-add">
                            1
                        </div>
                        <div class="cart-box-product-detail cart-box-product-show-update-count">
                            به روز رسانی سبد خرید
                        </div>
                        <div class="cart-box-product-detail-detail cart-box-product-show-price">
                            540000 تومان
                            <div class="cart-box-product-show-price-text">
                                بدون در نطر گرفتن تخفیف
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box-box-box cart-box-box-2">
                    <div class="cart-box-discount-text">
                        کد تخفیف دارید؟ <a class="cart-box-discount-link">اعمال کنید</a>
                    </div>
                    <div class="cart-box-discount-discount-box cart-box-discount-discount-box-hidden">
                        <input class="cart-box-input cart-box-input-box" id="cart-input-box" type="text" placeholder="اگر کد تخفیف دارید اینجا وارد نمایید ... ">
                        <button class="cart-box-input cart-box-discount-button">اعمال کد تخفیف</button>
                    </div>
                </div>
                <div class="cart-box-box-box cart-box-box-3">
                    <div class="cart-box-detail-box-text">
                        اطلاعات خرید
                    </div>
                    <div class="cart-box-detail-box-text">
                        نام محصول:
                    </div>
                    <div class="cart-box-detail-box-text">
                        رنگ :
                    </div>
                    <div class="cart-box-detail-box-text">
                        سایز:
                    </div>
                    <div class="cart-box-detail-box-text">
                        قیمت اولیه:
                    </div><div class="cart-box-detail-box-text">
                        تخفیف :
                    </div>
                    <div class="cart-box-detail-box-text">
                        قیمت نهایی :
                    </div>
                    <div class="cart-box-detail-box-text">
                        نوع خرید : اینترنتی
                    </div>


                </div>
                <button type="submit" class="cart-box-show-product-button-buy">
                    ادامه خرید
                </button>
            </div>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
    <script src="cart.js"></script>
</body>
</html>