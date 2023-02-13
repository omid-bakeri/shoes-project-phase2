<?php

?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="register.css" type="text/css">
    <title>ثبت نام</title>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="icon">
<!--                <img class="image-icon" src="../header/images/5499206.png" alt="">-->
            </div>
<!--            <div class="left">-->
<!--                img-->
<!--            </div>-->
            <div class="right black-box">
                <div class="title-black-register-box">
                    ثبت نام در سایت
                </div>

                <div class="whiteBox">
                    <form action="#" method="post">
                        <div class="nameClass">
                            <label class="label">نام و نام خانوادگی</label>
                            <input class="input name" type="text" placeholder="">
                            <div class="textError textError-name textError-hidden ">نام و نام خانوادگی الزامی است.</div>
                        </div>



                        <div class="usernameClass">
                            <label class="label"> نام کاربری</label>
                            <input class="input username" type="text" placeholder="">
                            <div class="textError textError-uname textError-hidden ">پر کردن نام کاربری الزامی است.</div>
                        </div>



                        <div class="emailClass">
                            <label class="label">ایمیل</label>
                            <input class="input email" type="email" placeholder="example@gmail.com">
                        </div>
<!--                        <div class="textError textError-name"></div>-->


                       <div class="phoneClass">
                           <label class="label">شماره همراه</label>
                           <input class="input phone" type="text" placeholder="">
                           <div class="textError textError-phone textError-hidden ">پر کردن شماره همراه الزامی است.</div>
                       </div>




                        <div class="passClass">
                            <label class="label">رمز عبور</label>
                            <input class="input password" type="password" placeholder="">
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                            <div class="textError textError-password textError-hidden ">پر کردن رمز عبور الزامی است.</div>
                        </div>



                       <div class="repassClass">
                           <label class="label">تکرار رمز عبور</label>
                           <input class="input repassword" type="password" placeholder="">
                           <div class="textError textError-repassword textError-hidden ">تکرار رمز عبور الزامی است.</div>
                       </div>
                    </form>
                    <button type="submit" class="reg-button">ثبت نام</button>
                    <div class="login-link">
                        حساب کاربری دارید؟ <a class="link-login" href="login.php">وارد سایت شوید</a>
                    </div>
                </div>
                <div class="warning warning1">کاربر گرامی پر کردن تمامی فیلد ها به جز ایمیل الزامی است.</div>
                <div class="warning warning2">قبل از ثبت نام لطفا <a class="rule" href="#">قوانین و مقررات سایت</a> را مطالعه بفرمایید.</div>
            </div>
            <div class="overlay"></div>
        </div>
    </section>
    <script src="login_register.js"></script>
</body>
</html>