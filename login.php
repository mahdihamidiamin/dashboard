<?php

include_once "admin_area/Layout-header.php"
?>

<div class="bg-login" style="background-image: url(Img/bg-login.jpg)">
    <div class="col-lg-3 white-box-login">
        <div class="card-header">
            <div class="card-title">
                خوش آمدید
            </div>
        </div>
        <div class="card-body">
            <h5>فرم زیر را تکمیل کنید</h5>
            <div class="form form-default">
                <div class="form-group required">
                    <label>
                        نام کاربری
                    </label>
                    <input type="text" name="" required>

                </div>

                <div class="form-group ">
                    <label>
                        رمز عبور
                    </label>
                    <input type="password" name="" required>

                </div>
                <div class="form-txt-btn">
                    <div class="row-group two">
                        <div class="form-group">

                            <div class="checkbox check-purple">
                                <input type="checkbox" checked="checked" value="1" id="checkbox1">
                                <label for="checkbox1">با قوانین موافقم</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="">
                                کمک میخواهید ؟
                                تماس با ما
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <a class="btn btn-purple" href="">ورود</a>
                    </div>

                </div>


            </div>
        </div>
        <div class="form-group flat">

            <a href="">
                حسابی ندارید ؟ یک حساب جدید ایجاد کنید
            </a>
        </div>
    </div>
</div>


<?php
include_once "admin_area/Layout-footer.php"
?>
