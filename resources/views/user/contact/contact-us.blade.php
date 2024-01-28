@extends('user.layouts.master')
@section('content')
    <main class="cart-page default ">
        <div class="container">
            <div class="row">
                <div class="contact_us_content col-12 mx-auto">
                    <header class="card-header">
                        <h3 class="card-title"><span>تماس با ما</span></h3>
                    </header>
                    <div class="account-box contact_us_page">

                        <div class="account-box-content">
                            <form class="form-account">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="row">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-map  colormain" aria-hidden="true"></i> ایران، تهران، خیابان طراحان، پلاک 0
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-envelope colormain" aria-hidden="true"></i> info@test.ir - sell@test.ir
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-phone colormain" aria-hidden="true"></i> 01234567891 - 09198765432
                                                    </li>

                                                </ul>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d191614.86529905675!2d49.24007631142681!3d37.34218334632767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1682887151736!5m2!1sen!2s" style="border:0;width:100%;min-height:400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 form_send_re  ">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-account-title"> نام <span>(الزامی)</span></div>
                                                <div class="form-account-row">
                                                    <input class="input_second input_all" type="text" placeholder=" نام ">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-account-title">  نام خانوادگی <span>(الزامی)</span></div>
                                                <div class="form-account-row">
                                                    <input class="input_second input_all" type="text" placeholder=" نام خانوادگی ">
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-account-title"> شماره تماس <span>(الزامی)</span></div>
                                                <div class="form-account-row">
                                                    <input class="input_second input_all" type="text" placeholder=" شماره تماس ">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-account-title"> متن پیام <span>(الزامی)</span></div>
                                                <div class="form-account-row">
                                                    <textarea class="input_second input_all input_textarea text-right" rows="5" placeholder=" متن درخواست خود را وارد کنید"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-account-agree">
                                                    <label class="checkbox-form checkbox-primary">
                                                        <input type="checkbox" id="agree">
                                                        <span class="checkbox-check"></span>
                                                    </label>
                                                    <label for="agree"> پاسخ به صورت پیامک به من اعلام شود</label>
                                                </div>
                                                <a href="#" class="btn big_btn btn-main-masai">ارسال پیام </a>
                                            </div>


                                        </div>
                                    </div>



                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
