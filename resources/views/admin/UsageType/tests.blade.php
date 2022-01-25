@extends('layouts.HomeMaster')

@section('title','تماس با ما')
@section('styles')
@endsection
@section('slider')


    <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="/public/Content2/images/bg/bg-breadcrumb.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2 class="tm-breadcrumb-title">تماس با ما    </h2>
                <ul>
                    <li><a href="/">صفحه اصلی</a></li>
                    <li><a href=""> تماس با ما   </a></li>

                </ul>
            </div>
        </div>
    </div>


@endsection
@section('main')


    <!-- End Page Title Area -->

    <main class="main-content">

        <!-- Contact Us -->
        <div class="tm-section contact-us-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center mt-30-reverse">

                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-pin"></i>
                                </span>
                            <h5>آدرس شرکت</h5>
                            <p>{{$setting->address_text}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-phone"></i>
                                </span>
                            <h5>تلفن</h5>
                            <p><a href="tel:{{$setting->phone_text}}">{{$setting->phone_text}}</a></p>
                            <p>
                                <a href="tel:۰۹۱۹۳۶۱۸۷۸۹">
                                      آقای نوری   ۰۹۱۹۳۶۱۸۷۸۹
                                </a>
                            </p>
                            <p>
                                <a href="tel:۰۹۱۲۰۱۸۷۸۱۵">
                                     آقای رستمی   ۰۹۱۲۰۱۸۷۸۱۵
                                </a>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-mail"></i>
                                </span>
                            <h5>آدرس</h5>
                            <p>ایمیل:<a href="mail:{{$setting->siteEmail}}">{{$setting->siteEmail}}</a></p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="container tm-padding-section-top">
                <div class="row no-gutters">
                    <div class="col-lg-7">
                        <div class="tm-contact-formwrapper">
                            <h5>فرم تماس با آرام برج  </h5>
                            <form action="#" id="tm-contactform" class="tm-form">
                                <div class="tm-form-inner">
                                    <div class="tm-form-field">
                                        <input type="text" name="name" placeholder="نام و نام خانوادگی*">
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="email" name="email" placeholder="ایمیل*">
                                    </div>
                                    <div class="tm-form-field">
                                        <input type="text" name="subject" placeholder="موضوع*">
                                    </div>
                                    <div class="tm-form-field">
                                        <textarea name="message" cols="30" rows="5" placeholder="پیام*"></textarea>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button">ارسال پیام<b></b></button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages"></p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tm-contact-map">
                            <div id="google-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>



    <!-- Start Contact Info Area -->



@section('scripts')
@endsection
@endsection
