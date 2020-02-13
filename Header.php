<?php include "admin_area/Layout-header.php" ?>
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