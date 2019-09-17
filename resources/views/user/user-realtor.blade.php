@extends('layouts.main')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('images/page-top-bg.jpg')}}">
        <div class="container text-white">
            <h2>Список наших працівників</h2>
        </div>
    </section>
    <!--  Page top end -->
    <section class="page-section">
        <div class="container mt-5">
            <img class="mb-5" src="{{asset('images/about.jpg')}}" alt="">
            <div class="row about-text">
                <div class="col-xl-6 about-text-left">
                    <h5>Про нас</h5>
                    <p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний.</p>
                    <p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний.</p>
                </div>
                <div class="col-xl-6 about-text-right">
                    <h5>Наша якість</h5>
                    <p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний.</p>
                    <ul class="about-list">
                        <li><i class="fa fa-check-circle-o"></i>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні.</li>
                        <li><i class="fa fa-check-circle-o"></i>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні.</li>
                        <li><i class="fa fa-check-circle-o"></i>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні.</li>
                        <li><i class="fa fa-check-circle-o"></i>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Team section -->
        <section class="team-section spad pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Наші Агенти</h3>
                    <p>Наш каталог агентів нерухомості, які можуть вам допомогти</p>
                </div>
                <div class="row">
                    @foreach($realtors as $realtor)
                        <div class="col-lg-3 col-md-6">
                            <div class="team-member">
                                <div class="member-pic">
                                    <img src="{{asset('images/team/1.jpg')}}" alt="#">
                                    <div class="member-social">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h5>{{$realtor->name}}</h5>
                                    <span>Real Estate  Agent</span>
                                    <div class="member-contact">
                                        <p><i class="fa fa-phone"></i>(567) 666 121 2288</p>
                                        <p><i class="fa fa-envelope"></i>tonyholland@gmail.com</p>
                                    </div>
                                    <div class="info-warp mt-2">
                                        <a href="{{route('user_realtor_select', [$offer_id, $realtor->id])}}" class="room-price text-success">Найняти працівника</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Team section end-->
    </section>
@stop
