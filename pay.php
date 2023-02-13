<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه امید شوس - صفحه پرداخت</title>
    <link rel="stylesheet" href="pay.css" type="text/css">
</head>
<body>
    <?php
        include "header2.php";
    ?>
    <section class="pay-section">
        <div class="pay-section-title">صفحه پرداخت</div>
        <div class="pay-box">
            <div class="pay-box-box pay-info">
                <div class="pay-row-info pay-row-1">
                    <div class="pay-in-input pay-in-input-name">
                        <label class="pay-input-title">نام</label>
                        <input class="pay-input pay-input-name" type="text" >
                    </div>
                    <div class="pay-in-input pay-in-input-last-name">
                        <label class="pay-input-title">نام خانوادگی</label>
                        <input class="pay-input pay-input-last-name" type="text" >
                    </div>
                </div>
                <div class="pay-row-info pay-row-2">
                    <div class="pay-in-input pay-in-input-name">
                        <label class="pay-input-title">شماره همراه</label>
                        <input class="pay-input pay-input-name" type="text" >
                    </div>
                    <div class="pay-in-input pay-in-input-last-name">
                        <label class="pay-input-title">آدرس الکترونیکی</label>
                        <input class="pay-input pay-input-last-name" type="email" >
                    </div>
                </div>
                <a href="#" class="pay-row-info-edit-info">ویرایش مشخصات</a>
            </div>
            <div class="pay-box-box pay-detail-info">
                <div class="pay-box-box-title-info">
                    لطفا تمام فیلد های زیر را پر نمایید.
                </div>
                <div class="pay-box-input-2 pay-post-code">
                    <label class="pay-input-title pay-input-title-box-2">کد پستی</label>
                    <input class="pay-input pay-input-box-two pay-input-post-code" type="text" >
                </div>
                <div class="pay-box-input-2 pay-address">
                    <label class="pay-input-title pay-input-title-box-2">آدرس تحویل</label>
                    <input class="pay-input pay-input-box-two pay-input-address" type="text" >
                </div>
                <div class="pay-box-box-info-map-link" style="color: #094bbe;
    padding-right: 2rem;
    padding-top: 1rem;
    font-family: 'byekan';
    font-size: 1.1rem;
    float: right;
    user-select: auto;">
                    مشاهده نقشه و انتخاب آدرس دقیق تحویل
                </div>
                <button class="pay-box-box-button">
                    تغییر / ویرایش آدرس
                </button>
            </div>
            <div class="pay-box-box pay-send-info">
                <div class="pay-box-send-info-right">
                    <div class="pay-send-info-right-t pay-send-info-right-box-title">اطلاعات ارسال</div>
                    <div class="pay-send-info-right-t pay-send-info-right-box-text">ارسال : </div>
                    <div class="pay-send-info-right-t pay-send-info-right-box-text">هزینه ارسال : </div>
                    <div class="pay-send-info-right-t pay-send-info-right-box-text">زمان ارسال :</div>
                    <div class="pay-send-info-right-t pay-send-info-right-box-text">پرداخت هزینه ارسال</div>
                </div>
                <div class="pay-box-send-info-left">
                    <img class="pay-box-send-info-left-image" src="../images/free.png" alt="ارسال">
                </div>
            </div>
            <div class="pay-box-box pay-bank-info">
                <div class="pay-box-box-bank pay-bank-info-box-right">
                    <div class="pay-bank-text pay-bank-info-box-right-title">درگاه بانکی</div>
                    <div class="pay-bank-text pay-bank-info-box-right-text">
                        درگاه‌ها برای کلیه کارت‌های بانکی قابل ‌استفاده است.
                        مبلغ 405 تومان بابت مالیات بر ارزش افزوده به مبلغ نهایی اضافه خواهد شد.
                    </div>
                </div>
                <div class="pay-box-box-bank pay-bank-info-box-left">
                    <div class="pay-box-box-bank-left-box-text">درگاه بانکی مد نظر را انتخاب نمایید</div>
                    <div class="pay-box-box-bank-images-left">
                        <button class="pay-bank-btn pay-saman-bank-btn">
                            <img class="pay-box-bank-images-class pay-saman-bank" src="images/saman-bw-transformed.png" alt="درگاه بانکی بانک سامان">
                        </button>
                        <button class="pay-bank-btn pay-mellat-bank-btn">
                            <img class="pay-box-bank-images-class pay-mellat-bank" src="images/mellat-bank-re-bw.png" alt="درگاه بانکی بانک ملت">
                        </button>
                    </div>
                </div>
            </div>
            <div class="pay pay-box-box pay-box-Terms-and-Conditions">
                <input class="pay-box-input-check-box" type="checkbox">
                <div class="pay-box-input-check-box-tet-condition-and-rules">
                    با شرایط و ضوابط موافقت واطلاعات را تایید می‌کنم.
                </div>
            </div>
            <div class="pay-box-box pay-button-info">
                <button class="pay-box-button-end-box pay-button-pay-info-box-back-button">بازگشت</button>
                <button class="pay-box-button-end-box pay-button-pay-info-box-pay-button">پرداخت</button>
            </div>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
    <script src="pay.js"></script>
</body>
</html>