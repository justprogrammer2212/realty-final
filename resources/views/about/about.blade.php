@extends('layouts.main')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="images/page-top-bg.jpg">
        <div class="container text-white">
            <h2>Про нас</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{route('indexPage')}}"><i class="fa fa-home"></i>Головна</a>
            <span><i class="fa fa-angle-right"></i>Про нас</span>
        </div>
    </div>

    <!-- page -->
    <section class="page-section">
        <div class="container">
            <img class="mb-5" src="images/about.jpg" alt="">
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

        <!-- Review section -->
        @include('layouts.reviews')
        <!-- Review section end-->


        <!-- Team section -->
        <section class="team-section spad pb-0">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Наші Агенти</h3>
                    <p>Наш каталог агентів нерухомості, які можуть вам допомогти</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="images/team/1.jpg" alt="#">
                                <div class="member-social">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5>Tony Holland</h5>
                                <span>Real Estate  Agent</span>
                                <div class="member-contact">
                                    <p><i class="fa fa-phone"></i>(567) 666 121 2288</p>
                                    <p><i class="fa fa-envelope"></i>tonyholland@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="images/team/2.jpg" alt="#">
                                <div class="member-social">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5>Sasha Gordon</h5>
                                <span>Researcher</span>
                                <div class="member-contact">
                                    <p><i class="fa fa-phone"></i>(567) 666 121 2243</p>
                                    <p><i class="fa fa-envelope"></i>sashagordon@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="images/team/3.jpg" alt="#">
                                <div class="member-social">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5>Nicky Butt</h5>
                                <span>Nicky Butt</span>
                                <div class="member-contact">
                                    <p><i class="fa fa-phone"></i>(567) 666 121 2255</p>
                                    <p><i class="fa fa-envelope"></i>nickybutt79@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member">
                            <div class="member-pic">
                                <img src="images/team/4.jpg" alt="#">
                                <div class="member-social">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5>Gina Wesley</h5>
                                <span>Real Estate Agent</span>
                                <div class="member-contact">
                                    <p><i class="fa fa-phone"></i>(567) 666 121 2288</p>
                                    <p><i class="fa fa-envelope"></i>ginawesley@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team section end-->
    </section>
    <!-- page end -->

    @stop
