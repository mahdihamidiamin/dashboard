<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
    <script src="../../Scripts/base-file/jquery-1.8.3.min.js"></script>
    <link href="../../Css/base-file/all.min.css" rel="stylesheet">
    <link href="Css/navbar.css" rel="stylesheet">
    <link href="../../Css/base-file/owl.carousel.min.css" rel="stylesheet">
    <link href="../../Css/base-file/owl.theme.default.min.css" rel="stylesheet">
    <script src="../../Scripts/base-file/all.min.js"></script>
    <script src="../../Scripts/base-file/navbar.js"></script>
    <script src="../../Scripts/base-file/owl.carousel.min.js"></script>
    <script src="../../Scripts/base-file/r-slider.js"></script>
    <link href="Css/r-slider.css" rel="stylesheet">
    <link href="../../Css/base-file/select2.min.css" rel="stylesheet">
    <script src="../../Scripts/select/select2.full.min.js"></script>
    <link href="../../Css/admin-panel/page.css" rel="stylesheet">
    <link href="Css/style.css" rel="stylesheet">
    <?php
    include('../../functions/functions.php');

    ?>

</head>
<body>
<div class="main-page container-lg">
    <header class="header_middle">
        <div class="image-div-header">
            <img alt="" class="img-company" src="Img/logo.png">
        </div>
        <div class="search-box-div">

            <input class="search-text" placeholder="جستجوی محصول..." type="text">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
        <div class="elements-header">
            <ul>
                <li>
                    <a href="#">پیگیری سفارش</a>
                </li>
                <li>
                    <a href="#">حساب کاربری</a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-shopping-basket"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <nav class="r-nav menu-web side-nav close-nav ">
        <div class="content-navigation-menu" id="accordian">
            <div class="r-collapse">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>


            <ul class="list-nav-content">

                <li class="active main">
                    <a href="/">

                        <span>داشبورد</span>
                    </a>
                    <span class="icon-menu">
                </span>
                </li>

                <li>
                    <a class="dropdown-btn">

                        <span>صفحات</span>

                    </a>
                    <span class="icon-menu">
                </span>
                    <ul>
                        <li>
                            <a>
                                <span>پایه</span>
                            </a>
                            <span class="icon-menu">
                         </span>

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
    <!--Slider-->
    <div class="slide-show main_slider" id="main_slider">
        <div class="slide-items-box current" style="background-image: url('Img/Slider/slider4.jpg')">
            <div class="content-slide">
                <span>فروش ویژه</span>
                <p>مجموعه های جدید تازه رسیده</p>
            </div>
        </div>
        <div class="slide-items-box" style="background-image: url('Img/Slider/slider2.jpg')">
            <div class="content-slide"><span>شرکت فناوری اطلاعات همراه رسپینا رادین </span>
                <p> آدرس: تهران - خیابان دکتر مرتضی لبافی نژاد - حد فاصل کارگر و جمالزاده - پلاک 322 -واحد 3 - شرکت
                    فناوری
                    اطلاعات همراه رسپینا رادین </p>
            </div>
        </div>
        <div class="slide-items-box" style="background-image: url('Img/Slider/slider3.jpg')">
            <div class="content-slide"><span>نرم افزار مدیریت قرارداد ها</span>
                <p> مدیریت، آرشیو، کنترل و اتوماسیون امور قرارداده </p>
            </div>
        </div>
        <div class="slide-items-box" style="background-image: url('Img/Slider/slider4.jpg')">
            <div class="content-slide"><span>سامانه میز مشتریان</span>
                <p> مدیریت، آرشیو، کنترل و اتوماسیون امور قرارداده </p>
            </div>
        </div>
        <div class="dot-slider"></div>
    </div>

    <!--Slider-->
    <div>
        <h3>برند ها</h3>
        <?php echo  getBrand() ?>
        <?php getBrand() ?>
    </div>
    <div>
        <h3>دسته ها</h3>

        <?php echo  getCat() ?>
    </div>
    <!--property-->
    <div class="property-box">
        <div class="col-lg-3 col-sm-6">
            <div class="property-item">
                <img src="Img/Icons/delivery-truck-1-1.png"/>
                <div class="property-item-content">
                    <h4>
                        ارسال
                        <strong>رایگان</strong>

                    </h4>
                    <p>
                        برای خرید بالای 100 هزار تومان
                    </p>
                </div>


            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="property-item">
                <img src="Img/Icons/coupon-1-1.png"/>
                <div class="property-item-content">
                    <h4>
                      تخفیف های
                        <strong>اعضا</strong>

                    </h4>
                    <p>
                        صرفه جویی بیشتر در خرید
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="property-item">
                <img src="Img/Icons/credit-card-back-side-1.png"/>
                <div class="property-item-content">
                    <h4>
                        ارسال
                        <strong>رایگان</strong>

                    </h4>
                    <p>
                        برای خرید بالای 100 هزار تومان
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="property-item">
                <img src="Img/Icons/shopping-list-1.png"/>
                <div class="property-item-content">
                    <h4>
                        ارسال
                        <strong>رایگان</strong>

                    </h4>
                    <p>
                        برای خرید بالای 100 هزار تومان
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--property-->
    <!--Latest Products-->

    <div class="latest-products">
        <div class="title-box">
            <h3>
                مجموعه های
                <em>
                    جدید
                </em>
                تازه رسیده
            </h3>
            <p>
                کت و شلوار، لباس زیر زنانه و غیره.
            </p>
        </div>
    </div>


    <div class="col-lg-6 col-sm-12">
        <div class="preserve-row blue">
            <div class="preserve-front" style="background-image:url(Img/img-product-banner.jpg) ">
                <div class="title-front">
                    <h3>
                        لباس
                        <strong>مردانه</strong>
                    </h3>
                    <span> تازه رسیده</span>
                </div>
            </div>
            <div class="preserve-back ">
                <h4 class="preserve-back-title ">50٪ تخفیف برای لباس مردانه</h4>
                <div class="preserve-back-content">به سرعت با حداکثر کردن منابع جذب کنید</div>
                <a class="preserve-back-btn ">نمایش مجموعه</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="preserve-row green">
            <div class="preserve-front" style="background-image:url(Img/img-product-banner2.jpg) ">
                <div class="title-front">
                    <h3>
                        لباس
                        <strong>بچه گانه</strong>
                    </h3>
                    <span> تازه رسیده</span>
                </div>
            </div>

            <div class="preserve-back ">
                <h4 class="preserve-back-title ">50٪ تخفیف برای لباس بچه گانه</h4>
                <div class="preserve-back-content">به سرعت با حداکثر کردن منابع جذب کنید</div>
                <a class="preserve-back-btn ">نمایش مجموعه</a>
            </div>
        </div>
    </div>
    <div class="wide-banner">
        <span>
            تخفیف
        </span>
        <h2>
            50% تخفیف برای
            <em>
                همه محصولات
            </em>
        </h2>
        <p>
            همه تخفیف هایی که دوست داری، درست در جیب شما
        </p>
    </div>
    <!--Latest Products-->

</div>


<script>


    $(document).ready(function () {

        $.setSettingSlider(".slide-show.main_slider",
            {
                height: "650px",
                width: "100%",
                isShow: true,
                slider_control: "icon-font",
                name: "main_slider",
                type_change: "bottom-to-top",
                time_change: 10000

            });

    });

    $(".select").select2({
        tags: true,
        dir: "rtl",
        language: "fa"
    });
</script>
</body>
</html>