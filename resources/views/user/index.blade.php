@extends('user.layouts.master')
@section('content')
    <main class="main default space-top-10">

        <div class="container-fluid">
            <div class="slider_main owl-carousel owl-theme">

                <div class="item">
                    <a href="category-search.html">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                            <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                        </svg>
                        <img src="{{ asset('user/img/banner_img/01/16781944460617.jpg') }}" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="{{ asset('user/img/banner_img/01/16785213091818.jpg') }}" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="{{ asset('user/img/banner_img/01/16789575390919.jpg') }}" class="img-fluid imgslider" alt="">
                    </a>
                </div>
            </div>



        </div>
        <div class="container space-top-50 ">
            <div class="row space-bottom-30">
                <div class="col-sm-6">
                    <div class="row">
                        <div class=" col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/1.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">مَسای مارکت</b>
                            </div>
                        </div>
                        <div class="col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/2.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">حراج مَسای</b>
                            </div>
                        </div>
                        <div class="col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/3.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">خرید اقساطی</b>
                            </div>
                        </div>

                        <div class=" col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/4.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">مَسای سرویس</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">

                        <div class="col-3   contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/5.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">ماه رمضان</b>
                            </div>
                        </div>
                        <div class="col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/6.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">مَسای پلاس</b>
                            </div>
                        </div>
                        <div class="col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/7.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">هدیه خرید</b>
                            </div>
                        </div>
                        <div class="col-3  contact-miniicon  text-center">
                            <div class="space-5">
                                <img src="{{ asset('user/img/Masai/minilogo/8.png') }}" class="minilogo_w">
                                <b class="title-3 light-black">بیشتر</b>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">



                <div class="col-9 hidden-xs hidden-md">
                    <section id="offercarousel" class="carousel slide carousel-fade card border_all" data-ride="carousel">
                        <div class="row m-0">

                            <div class="carousel-inner p-0 col-12 col-lg-12">
                                <ol class="carousel-indicators pr-0 d-flex flex-column ">
                                    <li class="active" data-target="#offercarousel" data-slide-to="0">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="1" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="2" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="3" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="4" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="5" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="6">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="7">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="8">

                                    </li>

                                </ol>
                                <div class="carousel-item active">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_1.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">7 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">  هندزفری بلوتوث انکر   </a>

                                            </h2>
                                            <hr class="hr-text" data-content="Soundcore Life A1 -مدل A3927">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رنگ: مشکی</li>
                                                        <li class="list-group-item">بلوتوث:دارد</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">قابلیت‌های مقاومتی : مقاوم در برابر آب</li>
                                                        <li class="list-group-item"> نوع گوشی : دو گوشی</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>1,599,000<span>تومان</span></span></del>
                                                <ins><span>1,180,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="02 25 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_3.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">4 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#"> هدفون گیمینگ انکر مدل  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="انکر مدل Soundcore Strike 1">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رنگ: مشکی قرمز</li>
                                                        <li class="list-group-item">رابط‌ها : جک 3.5 میلی‌متری صدا</li>
                                                        <li class="list-group-item"> نوع اتصال: باسیم</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">وزن: ۷۰۰ گرم</li>
                                                        <li class="list-group-item"> نوع گوشی : دو گوشی</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>799,000<span>تومان</span></span></del>
                                                <ins><span>580,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="02 25 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_5.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">11 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#"> ساعت هوشمند امیزفیت  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="ساعت هوشمند امیزفیت مدل Bip">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">نوع کاربری : رسمی، روزمره </li>
                                                        <li class="list-group-item"> فرم صفحه : مستطیل</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رنگ: مشکی</li>
                                                        <li class="list-group-item">جنس بند :سیلیکون</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>7,499,000<span>تومان</span></span></del>
                                                <ins><span>5,380,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="03 15 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_7.jpg') }}" class="img-fluid" alt="">
                                                <img src="{{ asset('user/img/sell.png') }}" class="imgfinish">

                                                <span class="discount-percent">5 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">کاملترین گوشی اپل  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="  اپل مدل Iphone 13 Pro Max ">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item"> صفحه‌نمایش : Super Retina XDR OLED</li>
                                                        <li class="list-group-item">رزولوشن عکس : 12 مگاپیکسل</li>
                                                        <li class="list-group-item">نسخه سیستم عامل : iOS 15</li>

                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">اندازه : 6.7</li>
                                                        <li class="list-group-item">وزن : ۲۴۰ گرم</li>
                                                        <li class="list-group-item">تعداد سیم کارت: دو عدد</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>50,209,000<span>تومان</span></span></del>
                                                <ins><span>48,100,000<span>تومان</span></span></ins>
                                            </div>







                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_9.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">7 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">  شیائومی مدل Poco X4 Pro  </a>

                                            </h2>
                                            <hr class="hr-text" data-content=" مدل Poco X4 Pro 5G 2201116PG">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رنگ: مشکی</li>
                                                        <li class="list-group-item"> صفحه‌نمایش : Super AMOLED</li>
                                                        <li class="list-group-item">نسخه سیستم عامل : Android 11</li>

                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">اندازه : 6.67</li>
                                                        <li class="list-group-item">رزولوشن عکس : 108 مگاپیکسل</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>13,299,000<span>تومان</span></span></del>
                                                <ins><span>11,180,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="02 25 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_11.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">9 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">  کنسول خانگی سونی   </a>

                                            </h2>
                                            <hr class="hr-text" data-content="کنسول بازی  Playstation 5 ">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">ابعاد: ۲۶۰x۱۰۴x۳۹۰ سانتی‌متر</li>
                                                        <li class="list-group-item">انواع حافظه: هارد دیسک</li>
                                                        <li class="list-group-item">تعداد دسته: یک عدد</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">امکانات ظاهری: دسته بی سیم</li>
                                                        <li class="list-group-item">865 گیگابایت</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>32,299,000<span>تومان</span></span></del>
                                                <ins><span>29,180,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="03 11 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  finished">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="user/img/product_img/p_3.jpg" class="img-fluid" alt="">
                                                <span class="discount-percent">4 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">  هدفون مخصوص بازی تی دگر  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="مدل Caspian T-RGH211">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رنگ: مشکی</li>
                                                        <li class="list-group-item">نوع گوشی: دو گوشی</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">وزن: ۴۰۰ گرم</li>
                                                        <li class="list-group-item">نوع اتصال: با سیم</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>999,000<span>تومان</span></span></del>
                                                <ins><span>780,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="02 10 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center finished" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_15.jpg') }}" class="img-fluid " alt="">
                                                <img src="{{ asset('user/img/sell.png') }}" class="imgfinish">
                                                <span class="discount-percent">3 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#">  گوشی موبایل سامسونگ گلکسی A32  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="سامسونگ مدل Galaxy A32 SM-A325F/DS ">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">فناوری صفحه‌نمایش : Super AMOLED</li>
                                                        <li class="list-group-item">اندازه : 6.4</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رزولوشن عکس : 64 مگاپیکسل</li>
                                                        <li class="list-group-item">نسخه سیستم عامل : Android 11</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>13,299,000<span>تومان</span></span></del>
                                                <ins><span>12,180,000<span>تومان</span></span></ins>
                                            </div>







                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row m-0">
                                        <div class="right-col col-5 d-flex imgboxofer">
                                            <a class="w-100 text-center" href="single-product.html">
                                                <img src="{{ asset('user/img/product_img/p_17.jpg') }}" class="img-fluid" alt="">
                                                <span class="discount-percent">3 % تخفیف</span>

                                            </a>
                                        </div>
                                        <div class="left-col col-7">

                                            <h2 class="product-title ">
                                                <a href="#"> گوشی موبایل سامسونگ گلکسی A23  </a>

                                            </h2>
                                            <hr class="hr-text" data-content="مدل Galaxy A23 SM-A235 ">

                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">فناوری صفحه‌نمایش : PLS IPS</li>
                                                        <li class="list-group-item">اندازه : 6.6</li>
                                                        <li class="list-group-item">اقلام همراه : دفترچه‌ راهنما، شارژر</li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group space-15">
                                                        <li class="list-group-item">رزولوشن عکس : 50 مگاپیکسل</li>
                                                        <li class="list-group-item">نسخه سیستم عامل : Android 12</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="price space-15">
                                                <del><span>18,299,000<span>تومان</span></span></del>
                                                <ins><span>17,180,000<span>تومان</span></span></ins>
                                            </div>

                                            <div class="row space-15">
                                                <div class="col-5 timer-title">


                                                    <h5>یه ثانیه هم غنیمته</h5>
                                                    <p>زمان باقی مانده </p>

                                                </div>
                                                <div class="col-7">
                                                    <div class="countdown-timer" countdown data-date="02 25 2024 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days class="number_countdown">0</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours class="number_countdown">0</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes class="number_countdown">0</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds class="number_countdown">0</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-3 hidden-xs hidden-md">
                    <div class="widget-bid-s widget card border_all ">


                        <div id="bid-s" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="{{ asset('user/img/product_img/p_3.jpg') }}" class="w-100" alt="">
                                </a>
                                <h3 class="product-title">
                                    <a href="#"> هدفون مخصوص بازی تی دگر </a>
                                </h3>
                                <div class="price">
                                    <span class="amount">700,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="{{ asset('user/img/product_img/p_15.jpg') }}" class="w-100" alt="">
                                    <img src="{{ asset('user/img/img_icon.png') }}" class="type_icon">

                                </a>
                                <h3 class="product-title">
                                    <a href="#">

                                        گوشی موبایل سامسونگ گلکسی A32
                                    </a>
                                </h3>
                                <div class="price">
                                    <del><span class="amount">13,299,000<span>تومان</span></span> </del>

                                    <span class="amount">12,180,000<span>تومان</span> <span class="discount_badge">3%</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="{{ asset('user/img/product_img/p_11.jpg') }}" class="w-100" alt="">
                                </a>
                                <h3 class="product-title">
                                    <a href="#">
                                        کنسول خانگی سونی
                                    </a>
                                </h3>
                                <div class="price">
                                    <del><span class="amount">26,800,000<span>تومان</span></span></del>
                                    <span class="amount">22,286,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="{{ asset('user/img/product_img/p_11.jpg') }}" class="w-100" alt="">
                                </a>
                                <h3 class="product-title">
                                    <a href="#">ساعت هوشمند امیزفیت </a>
                                </h3>
                                <div class="price">
                                    <del><span class="amount">70,800,000<span>تومان</span></span></del>
                                    <span class="amount">60,286,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                        <div id="progressBar">
                            <div class="slide-progress"></div>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card border_all">
                                        <a href="category-search.html" target="_blank">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-3.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="category-search.html" target="_top">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card border_all">
                                        <a href="category-search.html" target="_blank">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-5.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="category-search.html" target="_top">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-6.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card border_all bglight pad_time_prod" id="shegeft_1">
                                <header class="card-header">
                                    <h3 class="card-title">
                                            <span>
                                                <img src="{{ asset('user/img/shegeft_1.png') }}" />
                                            </span>
                                    </h3>
                                    <div class="countdown-timer" countdown data-date="02 25 2024 20:20:22">
                                        <ul class="text_countdown">
                                            <li data-days class="number_countdown">0</li>
                                            <li>روز</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-hours class="number_countdown">0</li>
                                            <li>ساعت</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-minutes class="number_countdown">0</li>
                                            <li>دقیقه</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-seconds class="number_countdown">0</li>
                                            <li>ثانیه</li>
                                        </ul>
                                    </div>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_14.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html"> کیبورد مخصوص بازی برند تی دگر  </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>735,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>
                                            <ins><span>665,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_2.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">  هندزفری بلوتوث مدل انکر با فرکانس بالا   </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>290,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>180,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_12.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">  کنسول بازی  Playstation 5 با هارد 870 مگابایت  </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>29,799,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>26,699,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_6.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">  ساعت هوشمند مقاوم در برابر آب امیزفیت </a>
                                        </h2>
                                        <div class="price">
                                            <span>9,780,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_10.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html"> گوشی موبایل شیائومی مدل Poco X4 Pro  </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>13,500,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>12,000,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_7.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">  گوشی موبایل اپل مدل Iphone 13 Pro Max  </a>
                                        </h2>
                                        <div class="price">
                                            <span>72,279,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_17.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">  گوشی موبایل سامسونگ مدل گلکسی A23  </a>
                                        </h2>
                                        <div class="price">
                                            <span>32,279,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ asset('user/img/product_img/p_9.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="single-product.html">   گوشی موبایل شیائومی مدل Poco X4 Pro 5G  </a>
                                        </h2>
                                        <div class="price">
                                            <span>15,279,000<span >تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="view_more">مشاهده بیشتر</a>

                            </div>
                        </div>
                    </div>
                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card border_all">
                                        <a href="category-search.html" target="_blank">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-7.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="widget-banner card">
                                        <a href="category-search.html" target="_top">
                                            <img class="img-fluid" src="{{ asset('user/img/banner_img/img-8.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card border_all bglight">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span><img src="{{ asset('user/img/seller_1.png') }}" /></span>
                                    </h3>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_9.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#"> گوشی شیائومی مدل Poco X4 Pro 5G </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>13,159,000<span>تومان</span></span></del>
                                            <span class="discount_badge">5%</span>

                                            <ins><span>12,000,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_7.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#">  گوشی اپل مدل Iphone 13 Pro Max  </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>72,990,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>68,280,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_15.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#"> گوشی موبایل سامسونگ گلکسی A32 </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>18,799,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>16,699,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_17.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#"> گوشی موبایل سامسونگ گلکسی A23</a>
                                        </h2>
                                        <div class="price">
                                            <span>15,780,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_19.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#"> گوشی موبایل ردمی نوت 11SE شیائومی </a>
                                        </h2>
                                        <div class="price">
                                            <del><span>25,156,000<span>تومان</span></span></del>
                                            <span class="discount_badge">2%</span>

                                            <ins><span>16,255,000<span>تومان</span></span></ins>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_21.jpg') }}"  class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#">  اپل مدل Iphone 14 Pro Max </a>
                                        </h2>
                                        <div class="price">
                                            <span>79,279,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="{{ asset('user/img/product_img/p_20.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="#">  گوشی موبایل ردمی نوت 15  شیائومی  </a>
                                        </h2>
                                        <div class="price">
                                            <span>28,450,000<span>تومان</span></span>
                                        </div>
                                        <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_icon">
                                                    <i class="fa fa-search search_icon_search" aria-hidden="true"></i>
                                                    <i class="fa fa-heart search_icon_like" aria-hidden="true"></i>
                                                </span>

                                            <span class="search_prod_btn">
                                                    <i class="fa fa fa-cart-arrow-down search_icon_cart" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="view_more">مشاهده بیشتر  </a>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-banner card border_all">
                                <a href="category-search.html" target="_blank">
                                    <img class="img-fluid" src="{{ asset('user/img/banner_img/img-9.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="brand-slider card border_all bglight">
                        <header class="card-header">
                            <h3 class="card-title"><span>دسته بندی های مَسای</span></h3>
                        </header>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-1.png') }}" alt="" />
                                            <b class="title-3 light-black">کالای دیجیتال</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-2.png') }}" alt="" />
                                            <b class="title-3 light-black">مودم</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-3.png') }}" alt="" />
                                            <b class="title-3 light-black">تبلت</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-4.png') }}" alt="" />
                                            <b class="title-3 light-black">ماوس</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-5.png') }}" alt="" />
                                            <b class="title-3 light-black">هندزفری</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-6.png') }}" alt="" />
                                            <b class="title-3 light-black">ساعت هوشمند</b>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-7.png') }}" alt="" />
                                            <b class="title-3 light-black">کنسول خانگی</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-8.png') }}" alt="" />
                                            <b class="title-3 light-black">کیبورد (صفحه کلید)</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-9.png') }}" alt="" />
                                            <b class="title-3 light-black">اسپیکر (بلندگو)</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-10.png') }}" alt="" />
                                            <b class="title-3 light-black">لپ تاپ و الترابوک</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-11.png') }}" alt="" />
                                            <b class="title-3 light-black">موبایل</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="{{ asset('user/img/Masai/bigicon/img-12.png') }}" alt="" />
                                            <b class="title-3 light-black">هدفون، هدست </b>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="brand-slider card border_all bglight">
                        <header class="card-header">
                            <h3 class="card-title"><span>محبوب‌ترین برندها</span></h3>
                        </header>
                        <div class="owl-carousel">
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-1.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-2.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-3.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-4.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-5.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-6.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-7.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-8.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-9.jpg') }}" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="{{ asset('user/img/brands/brand-10.jpg') }}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid bgGray blog-box-footer">

            <div class="container">
                <div class="col-12">
                    <div class=" widget-blog  border_all ">
                        <header class="card-header">
                            <h3 class="card-title"><span>مَسای مگ</span></h3>
                        </header>
                        <div class="Blog-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-1.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        این‌ بار هوش مصنوعی، تصاویری از کارخانه تولید عروس دریایی را افشا می‌کند!
                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              رضایی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                              ۱9 مهر 1402
                                          </span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-2.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        خط سفید روی نمایشگر گلکسی A71 سامسونگ؛ ماجرا چیست؟
                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              صادقی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                              ۱4 اسفند 1402
                                          </span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-3.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        بهترین گوشی های مناسب عکاسی در بازار ایران
                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              میرعظیمی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                              ۱4 شهریور 1402
                                          </span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-4.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        هزینه ساخت بازی‌های انحصاری پلی استیشن با فیلم‌های بلاک‌باستر برابری می‌کند
                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              میرعظیمی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                             25 شهریور 1402
                                          </span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-5.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        یک دهه سکوت شکست؛ مایکروسافت آمار فروش ایکس باکس را فاش کرد!

                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              میرعظیمی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                              25 آذر 1402
                                          </span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-blog.html">
                                    <img src="{{ asset('user/img/blog/post-6.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <a href="single-blog.html">
                                    <h2 class="Blog_title">
                                        بررسی تلویزیون 4K اسنوا؛ ۵۵ اینچی اقتصادی برای فیلم‌بازها!
                                    </h2>
                                </a>
                                <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              میرعظیمی
                                          </span>
                                    <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                                              10 دی 1402
                                          </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection
