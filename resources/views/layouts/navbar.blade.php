<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 header-top-left">
                    <div class="top-info">
                        <i class="fa fa-phone"></i>
                        (+88) 666 121 4321
                    </div>
                    <div class="top-info">
                        <i class="fa fa-envelope"></i>
                        realty-company@gmail.com
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right header-top-right">
                    <div class="top-social">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-telegram"></i></a>
                    </div>
                    <div class="user-panel">
                        @guest
                        <a href="{{ route('user_profile') }}"><i class="fa fa-sign-in"></i>
                            Увійти
                        </a>
                            @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <i class="fa fa-user-circle-o"></i> Реєстрація
                        </a>
                            @endif
                        @else
                                <a href="{{route('user_profile')}}">
                                    <i class="fa fa-user-o"></i> Привіт, {{ Auth::user()->name }}
                                </a>
{{--                                @if(auth()->check() && auth()->user()->isAdmin())--}}
{{--                            <a class="btn btn-danger" href="{{route('admin.home')}}">Admin panel</button>--}}
{{--                                @endif--}}
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>  Вихід
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="site-navbar">
                    <a href="{{route('indexPage')}}" class="site-logo"><h3 class="text-white">Realty-Company</h3></a>
                    <div class="nav-switch">
                        <i class="fa fa-bars"></i>
                    </div>
                    <ul class="main-menu">
                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                            <a class="nav-link" href="{{route('indexPage')}}">Головна</a>
                        </li>
                        <li><a href="{{route('offersPage')}}">Оголошення</a></li>
                        <li><a href="{{route('aboutPage')}}">Про нас</a></li>
                        <li><a href="{{route('contactPage')}}">Контакти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
