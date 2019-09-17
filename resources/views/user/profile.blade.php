@extends('layouts.main')

@section('content')
    <style>
        .btn-user-profile {

            background-color: DodgerBlue; /* Blue background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 10px 14px; /* Some padding */
            font-size: 20px; /* Set a font size */
            cursor: pointer; /* Mouse pointer on hover */
        }

        /* Darker background on mouse-over */
        .btn-user-profile:hover {
            background-color: RoyalBlue;
            color: #f7f7f7;
        }
        .icon-link {
            padding-left: 5px;
            font-size: 20px;
        }
    </style>
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="../images/page-top-bg.jpg">
        <div class="container text-white">
            <h2>Особистий кабінет користувача</h2>
        </div>
    </section>
    <!--  Page top end -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row justify-content-center">

                    <div class="col-md-4">
                        {{--                Фото користувача--}}
                        <img class="user-profile" src="{{Auth()->user()->getAvatarUrl()}}">
                        <form action="{{route('avatar_upload', Auth()->user())}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input name="avatar" type="file" class="form-control-file" id="exampleFormControlFile1" onchange="this.form.submit();">
                            </div>
                        </form>
                    </div>
                    {{--                Контент--}}
                    <div class="col-md-7">
                        <h6 class="text-primary h5">Логін</h6>
                        <h4 class="text-muted h3">{{Auth::user()->name}}</h4>
                        <hr>
                        <h6 class="text-primary h5">E-mail</h6>
                        <h4 class="text-muted h3">{{Auth::user()->email}}</h4>
                        <hr>
                        <h6 class="text-primary h5">Телефон</h6>
                        <h4 class="text-muted h3">{{Auth::user()->phone}}</h4>
                        <hr>
                    </div>
                </div>
                {{--                Рндагування контенту--}}
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h3 class="text-center h3 mt-4 mb-5">Мої оголошення</h3>
                        <a class="btn btn-outline-success text-right mb-5" href="{{route('user_profile_add')}}">Додати оголошення  <i class="fa fa-building-o icon-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-dark" href="{{route('user_profile_edit', Auth::id())}}">Редагувати профіль  <i class="fa fa-edit icon-link"></i></a>
            </div>
            <div class="row justify-content-between">
                @foreach($userOffers as $userOffer)
                <div class="col-md-4 mb-5">
                    <div class="card" style="width: 22rem;">
                        <img class="card-img-top" src="{{$userOffer->getOfferImage()}}" alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title">{{$userOffer->title}}</h5>
                            <p class="card-text">{{strlen($userOffer->description) >=100 ? substr($userOffer->description,0,140).'...' : $userOffer->description}}</p>
                        </div>
                        <div class="card-body text-center">
                            <a href="{{route('showOffer', $userOffer['id'])}}" class=" btn-user-profile card-link" target="_blank"><i class="fa fa-eye"></i></a>
                            <a href="{{route('offer_edit', $userOffer)}}" class=" btn-user-profile card-link"><i class="fa fa-edit"></i></a>
                            <a href="{{route('user_profile_delete', $userOffer)}}" class=" btn-user-profile card-link"><i class="fa fa-trash"></i></a>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">Дані про рієлтора:</li>
                        </ul>
                        <div class="card-body">
                        @if(!$userOffer['realtor_id'])
                                <p class="card-title">Рієлтора не знайдено</p>
                                <div class="text-center">
                                    <a href="{{route('user_realtor_add', $userOffer['id'])}}" class="card-link">Призначити</a>
                                </div>
                            @else
                                <p class="card-title"><i class="fa fa-user"></i> {{$userOffer->realtor()->name}}</p>
                                <hr>
                                <p class="card-text"><i class="fa fa-envelope-open"></i> {{$userOffer->realtor()->email}}</p>
                                <hr>
                                <p class="card-text"><i class="fa fa-phone"></i> {{$userOffer->realtor()->phone}}</p>
                                <form action="{{route('user_realtor_release', $userOffer)}}" method="post">
                                    @csrf
                                    <div class="text-center">
                                        <button type="submit" class="card-link btn btn-link">Звільнити</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <nav class="pagination justify-content-center">
                {!!$userOffers->links();!!}
            </nav>
        </div>
    </div>
@stop
