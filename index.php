<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="Scripts/base-file/jquery-1.8.3.min.js"></script>

    <link href="Css/base-file/all.min.css" rel="stylesheet">
    <script src="Scripts/base-file/all.min.js"></script>
    <script src="Scripts/custom.js"></script>
    <link href="Css/base-file/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/r-slider.css">
    <link href="Css/base-file/nprogress.css" rel="stylesheet">
    <script src="Scripts/base-file/nprogress.js"></script>
    <script src="Scripts/base-file/r-slider.js"></script>

    <link href="Css/base-file/select2.min.css" rel="stylesheet">
    <script src="Scripts/select/select2.full.min.js"></script>

    <link href="Css/admin-panel/page.css" rel="stylesheet">
</head>

<body>


<script>
    function menuBox(element, target) {

        var tar = $("#" + target);
        debugger;
        if ($(tar).hasClass("active")) {
            $(tar).removeClass("active");
        } else {
            $(tar).addClass('active');
        }

    }

    $(document).mouseup(function (e) {
        var container = $("#user-image-menu");
        if (!container.is(e.target) && container.has(e.target).length === 0) {

            $(container).removeClass("active");

        }
    });

    $(document).ready(function () {

    })
</script>
<div class="header">
    <a class="mini-menu" href="">

    </a>
    <div class="user-profile-menu">
        <a onclick="menuBox(this , 'user-image-menu')" class="user-img">
            <img src="Img/avatar.jpg"/>
            <span>مدیر سامانه</span>
        </a>
        <div class="user-image-menu" id="user-image-menu">
        </div>


    </div>
    <div class="menu-setting">
        <ul>
            <li>
                صفحات
            </li>
        </ul>
    </div>
</div>

<nav class="r-nav navigation-menu side-nav close-nav ">
    <div id="accordian" class="content-navigation-menu">
        <div class="r-collapse">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="list-nav-content-header">
            <a href="/" class="company-logo">
                <img src="Img/Logo/logo_white.png" height="22" width="78"/>
            </a>
        </div>

        <ul class="list-nav-content">

            <li class="active main">
                <a href="/">

                    <span>داشبورد</span>
                    <p> بروزرسانی جدید 1.2</p>
                </a>
                <span class="icon-menu">
                  <i class="fas fa-home"></i>
                </span>
            </li>

            <li>
                <a class="dropdown-btn">

                    <span>صفحات</span>

                </a>
                <span class="icon-menu">
             <i class="fas fa-th-large"></i>
                </span>
                <ul>
                    <li>
                        <a>
                            <span>پایه</span>
                        </a>
                        <span class="icon-menu">
                              <i class=""> پ</i>
                         </span>
                        <ul>
                            <li>
                                <a href="info.html">
                                    <span>باتن ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>باتن لیست ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="history.html">
                                    <span>آیکون ها</span>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="">
                            <span>سفارشی</span>
                        </a>
                        <span class="icon-menu">
                              <i class=""> س</i>
                         </span>
                    </li>
                    <li>
                        <a href="history.html">
                            <span>آیکون ها</span>
                        </a>
                        <span class="icon-menu">
                              <i class="">آ</i>
                         </span>
                    </li>

                </ul>
            </li>
            <li>
                <a class="dropdown-btn">

                    <span>فرم ها</span>


                </a>

                <span class="icon-menu">
                             <i class="fas fa-file-alt"></i>
                         </span>
                <ul>
                    <li>
                        <a href="form-element.html">

                            <span> فرم ها 1</span>
                        </a>
                        <span class="icon-menu">
                              <i class="">ف</i>
                         </span>
                    </li>
                    <li>
                        <a href="service-item.html">

                            <span>درباره خدمات</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="dropdown-btn">

                    <span>اخبار</span>
                </a>
                <ul>
                    <li>
                        <a href="news.html">

                            <span>اخبار</span>
                        </a>
                    </li>
                    <li>
                        <a href="news-item.html">

                            <span>ادامه مطلب اخبار</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact.html">

                    <span>تماس با ما</span>
                </a>
            </li>

        </ul>


    </div>

</nav>
<div class="page-content-wrapper ">
    <div class="breadcrumb"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="card  card-default">
                    <div class="card-header">
                        <div class="card-title">
                            فرم زیر را تکمیل کنید
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>فرم پیش فرض</h5>
                        <div class="form form-default">
                            <div class="form-group required">
                                <label>
                                    نام کاربری
                                </label>
                                <input type="text" name="" required>

                            </div>
                            <div class="row-group two">
                                <div class="form-group required">
                                    <label>
                                        نام
                                    </label>
                                    <input type="text" name="" required>

                                </div>
                                <div class="form-group ">
                                    <label>
                                        نام خانوادگی
                                    </label>
                                    <input type="text" name="" required>

                                </div>

                            </div>
                            <div class="form-group ">
                                <label>
                                    رمز عبور
                                </label>
                                <input type="password" name="" required>

                            </div>
                            <div class="form-group ">
                                <label>
                                    ایمیل
                                </label>
                                <input type="email" name="" required placeholder="مثل : some@example.com">

                            </div>
                            <div class="form-group ">
                                <label>
                                    غیر فعال
                                </label>
                                <input type="email" name="" disabled placeholder="این متن را نمیتوانید ویرایش کنید">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="card  card-traditional">
                    <div class="card-header">
                        <div class="card-title">
                            فرم زیر را تکمیل کنید
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>فرم سنتی</h5>
                        <div class="form form-traditional">
                            <div class="form-group required">
                                <label>
                                    نام کاربری
                                    <small>" مثلا:Admin"</small>
                                </label>

                                <input type="text" name="" required>

                            </div>
                            <div class="row-group two">
                                <div class="form-group required">
                                    <label>
                                        نام
                                        <small>" مثلا:احمد"</small>
                                    </label>
                                    <input type="text" name="" required>

                                </div>
                                <div class="form-group ">
                                    <label>
                                        نام خانوادگی
                                        <small>" مثلا:احمدی"</small>
                                    </label>

                                    <input type="text" name="" required>

                                </div>

                            </div>
                            <div class="form-group ">
                                <label>
                                    رمز عبور
                                </label>
                                <input type="password" name="" required>

                            </div>
                            <div class="form-group ">
                                <label>
                                    ایمیل
                                    <small>
                                        مثلا : some@example.com
                                    </small>
                                </label>
                                <input type="email" name="" required>

                            </div>
                            <div class="form-group ">
                                <label>
                                    غیر فعال
                                </label>
                                <input type="email" name="" disabled placeholder="این متن را نمیتوانید ویرایش کنید">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 ">
                <div class="card  card-default">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card-header">
                                <div class="card-title">
                                    تنظیمات فرم
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>کنترل های فرم</h5>
                                <p class="card-dec">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                </p>
                                <div class="form form-txt-btn ">
                                    <div class="form-group">
                                        <a href="#" class="icon-input">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <input type="text" name="" placeholder="نام کاربری">

                                    </div>
                                    <div class="form-group  ">
                                        <span class="icon-input blue">
                                             <i class="far fa-at"></i>
                                        </span>
                                        <input type="email" name="email" placeholder="ایمیل">

                                    </div>
                                    <div class="form-group default-group ">
                                        <span class="icon-input gray">
                                    <i>
                                        .com
                                    </i>
                                        </span>
                                        <label>
                                            نام
                                        </label>
                                        <input name="" required type="text">

                                    </div>

                                    <div class="form-group  ">

                                        <div class="checkbox check-purple">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox1">
                                            <label for="checkbox1">با قوانین موافقم</label>
                                        </div>
                                        <div class="checkbox check-green">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox2">
                                            <label for="checkbox2">با قوانین موافقم</label>
                                        </div>
                                        <div class="checkbox check-blue">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox3">
                                            <label for="checkbox3">با قوانین موافقم</label>
                                        </div>
                                        <div class="checkbox check-red">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox4">
                                            <label for="checkbox4">با قوانین موافقم</label>
                                        </div>
                                        <div class="checkbox check-yellow">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox5">
                                            <label for="checkbox5">با قوانین موافقم</label>
                                        </div>
                                        <div class="checkbox check-black">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox6">
                                            <label for="checkbox6">با قوانین موافقم</label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card-header">
                                <div class="card-title">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>چک باکس دایره ای</h5>
                                <p class="card-dec">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                </p>
                                <div class="form form-txt-btn">
                                    <div class="form-group">
                                        <div class="checkbox check-purple circle">
                                            <input type="checkbox" checked="checked" value="1" id="checkbox7">
                                            <label for="checkbox7">با قوانین موافقم</label>
                                        </div>
                                        <div class="row-group two">
                                            <div class="checkbox check-green circle">
                                                <input type="checkbox" checked="checked" value="1" id="checkbox8">
                                                <label for="checkbox8">با قوانین موافقم</label>
                                            </div>
                                            <div class="checkbox check-blue circle">
                                                <input type="checkbox" checked="checked" value="1" id="checkbox9">
                                                <label for="checkbox9">با قوانین موافقم</label>
                                            </div>
                                        </div>
                                        <div class="row-group two ">
                                            <div class="switchery checkbox check-green">
                                                <input id="checkbox10" type="checkbox" value="1">
                                                <label for="checkbox10"></label>
                                            </div>
                                            <div class="switchery small checkbox check-blue">
                                                <input id="checkbox11" type="checkbox" value="1">
                                                <label for="checkbox11"></label>
                                            </div>
                                            <div class="switchery small checkbox check-red">
                                                <input id="checkbox12" type="checkbox" value="1" >
                                                <label for="checkbox12"></label>
                                                <input id="checkbox13" type="checkbox" value="1">
                                                <label for="checkbox13"></label>
                                            </div>
                                            <div class="switchery small checkbox check-yellow">

                                            </div>
                                            <div class="switchery small checkbox check-purple">
                                                <input id="checkbox14" type="checkbox" value="1">
                                                <label for="checkbox14"></label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form method="post" action="">
                                <select class="select" name="select" style="width: 100%">
                                    <option selected="selected">نارنجی</option>
                                    <option>سفید</option>
                                    <option>بنفش</option>
                                </select>
                                <input type="submit" value="Submit the form"/>
                            </form>
                            <?php
                            $option = isset($_POST['select']) ? $_POST['select'] : false;
                            if ($option) {
                                echo htmlentities($_POST['select'], ENT_QUOTES, "UTF-8");
                            } else {
                                echo "task option is required";
                                exit;
                            }

                            ?>

                            <script>
                                $(".select").select2({
                                    tags: true,
                                    dir: "rtl",
                                    language: "fa"
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="card  card-default">
                    <div class="card-header">
                        <div class="card-title">
                            فرم زیر را تکمیل کنید
                        </div>

                    </div>
                    <div class="card-body">
                        <h5>
                            ردیو باتن ها

                        </h5>
                        <p class="card-dec">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <div class="form form-traditional">
                            <div class="form-group">
                                <label>
                                    موارد انتخابی حذف شوند ؟
                                </label>
                                <div class="radio radio-success">
                                    <input disabled id="yes" name="optionyes" type="radio" value="yes">
                                    <label for="yes">بله</label>
                                    <input checked="checked" disabled id="no" name="optionyes" type="radio" value="no">
                                    <label for="no">خیر</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
</body>
<script>

</script>
<script src="Scripts/base-file/navbar.js"></script>
</html>