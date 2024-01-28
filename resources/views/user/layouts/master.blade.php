<!DOCTYPE html>
<html lang="fa">
<head>
    @include('user.layouts.head-tags')
    @yield('css')
</head>

<body class="index-page sidebar-collapse">
<div class="top-section fullscreen-container">
    <img src="{{ asset('user/img/banner_img/bg_top.jpg') }}" class="h-100">
</div>
<!--start mobile header -->
@include('user.layouts.mobile-header')
<!-- end mobile header -->
<div class="wrapper default">

    <!--start pc header -->
@include('user.layouts.pc-header')
<!-- end pc header -->

    @yield('content')

    <footer class="main-footer default">
        <div class="back-to-top ">
            <a href="#">
                <span class="icon"><i class="fa fa-chevron-up"></i></span> <span>
                    بازگشت بالا
                </span>
            </a>
        </div>
        <div class=" servicesbg">
            <div class="footer-services container  space-10">
                <div class="row">
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-4.png" class="width-40"/>
                        <span class="title-1 light-black">ضمانت اصل بودن</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-1.png" class="width-40"/>
                        <span class="title-1 light-black">پرداخت در محل</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-2.png" class="width-40"/>
                        <span class="title-1 light-black">ارسال سریع</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-5.png" class="width-40"/>
                        <span class="title-1 light-black">فرصت 7 روزه استرداد</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-3.png" class="width-40"/>
                        <span class="title-1 light-black">پشتیبانی تلفنی</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="user/img/ico/png-7.png" class="width-40"/>
                        <span class="title-1 light-black">هدیه نقدی</span>
                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid space-30 bg-map">

            <div class="footer-widgets container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">درباره ما</h3>
                            </div>
                            <p class="about_footer">
                                قالب مَسای یک پکیج کامل ایرانی با هدف بی نهایت قالب HTML و WordPress و به روز رسانی
                                همیشگی است، که تمام ویژگی های لازم طراحی سایت را در نظر میگیرد
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">خدمات مشتریان</h3>
                            </div>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">ارسال فوری</a>
                                </li>
                                <li>
                                    <a href="#">پشتیبانی سریع</a>
                                </li>
                                <li>
                                    <a href="#">بازگشت وجه</a>
                                </li>
                                <li>
                                    <a href="#">بسته بندی کالا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">با مَسای شاپ</h3>
                            </div>
                            <ul class="footer-menu">

                                <li>
                                    <a href="#">تامین کالا همکار</a>
                                </li>
                                <li>
                                    <a href="#">تخفیف سازمانی</a>
                                </li>
                                <li>
                                    <a href="#">تماس با ما</a>
                                </li>
                                <li>
                                    <a href="#">درباره ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">مجوزات</h3>
                            </div>
                            <div class="License_img">
                                <a href="#" target="_blank"><img src="user/img/License_2.png" alt=""></a>
                                <a href="#" target="_blank"><img src="user/img/License_1.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <p>
                    این قالب به وسیله گروه برنامه نویسی <a
                        href="https://www.rtl-theme.com/author/rashid_mirazimi/products/" target="_blank"> گرزک </a>
                    پشتیبانی میشود.
                </p>
            </div>
        </div>
    </footer>
</div>
<!--    JS Files   -->
@include('user.layouts.footer-tags')
</body>


</html>
