@extends('layouts.main')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="images/page-top-bg.jpg">
        <div class="container text-white">
            <h2>Контакти</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{route('indexPage')}}"><i class="fa fa-home"></i>Головна</a>
            <span><i class="fa fa-angle-right"></i>Контакти</span>
        </div>
    </div>

    <!-- page -->
    <section class="page-section blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/contact.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">
                        <div class="section-title">
                            <h3>Зв'яжіться з Вами</h3>
                            <p>Отримайте дані про будинки та квартири для продажу і оренди у вашому районі</p>
                        </div>
                        <form class="contact-form" action="{{route('feedback.store')}}"  method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" value="{{auth()->user()->name ?? ''}}" name="user_name" placeholder="Ваше ім'я">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" value="{{auth()->user()->email ?? ''}}" name="user_email" placeholder="Ваш E-mail">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="text"  placeholder="Ваше повідомлення"></textarea>
                                    <button class="site-btn">Надіслати</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page end -->

    @stop
