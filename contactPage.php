<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contactPage.css" type="text/css">
    <title>امید شو - تماس با ما</title>
</head>
<body>
    <?php
        include ('header2.php');
    ?>
    <section class="support-box-section1">
        <div class="contact-page-title">صفحه تماس با ما</div>
        <div class="container-support">
            <div class="contact-page-text">نظرات ، انتقادات و پیشنهادات خود را با ما در میان بگذارید.</div>
            <div class="contact-box-right-tate">
<!--                <div class="contact-title">-->
                    <div class="contact-title">تماس با ما</div>
                    <img class="contact-image-right" src="images/contact.png" alt="تما با ما">
<!--                </div>-->
                <form class="contact-form" action="#" method="post">
                    <div class="contact-form-2">
                        <div class="contact-input-bo name">
                            <label class="form-contact-title">نام<span class="title-contact-form-span">*</span></label>
                            <input class="contact-input contact-input-name" type="text">
<!--                            <div class="tetError tetError-name tetError-hidden">پرکردن نام الزامی است</div>-->
                        </div>
                        <div class="contact-input-bo email">
                            <label class="form-contact-title">ایمیل<span class="title-contact-form-span">*</span></label>
                            <input class="contact-input contact-input-email" type="email">
<!--                            <div class="tetError tetError-email tetError-hidden">پرکردن ایمیل الزامی است</div>-->
                        </div>
                        <div class="contact-input-bo phone">
                            <label class="form-contact-title">موبایل<span class="title-contact-form-span">*</span></label>
                            <input class="contact-input contact-input-phone" type="text">
<!--                            <div class="tetError tetError-phone tetError-hidden">پرکردن شماره همراه الزامی است</div>-->
                        </div>
                    </div>
                    <div class="inputTet">
                        <label class="form-contact-tet form-contact-title">پیغام</label>
                        <input class="contact-page-text-form-input" type="text">
                    </div>
                </form>
                <button type="submit" class="contact-form-button">ارسال پیام</button>
            </div>
<!--            <div class="contact-page-text-left">با ما در شبکه های اجتماعی همراه باشید.</div>-->
            <div class="contact-box-left-tate">
                <div class="social-icons-contact">
                    <a href="#"><img class="i-contact icone-contact linkedin" src="../icons/linkdin.png" alt="لینکدین در فضای مجازی"></a>
                    <a href="#"><img class="i-contact icons-contact facebook" src="../icons/facebook.png" alt="فیسبوک در فضای مجازی"></a>
                    <a href="#"> <img class="i-contact icons-contact telegram" src="../icons/tele.png" alt="تلگرام در فضای مجازی"></a>
                    <a href="#"><img class="i-contact icons-contact instagram" src="../icons/insta.png" alt="اینستاگرام در فضای مجازی"></a>
                </div>
                <div class="left-tet-contact-title left-contact-title-tet-area">
                    شماره تلفن های ثابت 24 ساعته :
                </div>
                <div class="left-tet-contact-title left-contact-title-tet-area left-contact-area-tet-phone-number">
                    02146076912
                </div><div class="left-tet-contact-title left-contact-title-tet-area left-contact-area-tet-phone-number">
                    02146076884
                </div><div class="left-tet-contact-title left-contact-title-tet-area left-contact-area-tet-phone-number">
                    02166690012
                </div>
                <div class="left-tet-contact-title left-contact-title-tet-area left-contact-area-tet-phone-number">
                    02146076924
                </div>
                <div class="left-tet-contact-title left-tet-contact-title-tate left-contact-title-tet-area">
                    شماره تلفن غیر ثابت :
                </div><div class="left-tet-contact-title left-tet-contact-title-phone-number left-contact-title-tet-area">
                    09127208924
                </div>
                <div class="left-tet-contact-title contact-left-bo-title-area-address">
                    آدرس : تهران، کیلومتر 18 جاده فتح، ورودی سازه گستر سایپا، شرکت کفش ملی
                </div>
            </div>
        </div>
    </section>
    <?php
        include ('footer.php');
    ?>
    <script src="contactPage.js"></script>
</body>
</html>