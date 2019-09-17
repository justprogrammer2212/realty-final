@extends('layouts.main')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('images/page-top-bg.jpg')}}">
        <div class="container text-white">
            <h2>Оголошення</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{route('indexPage')}}"><i class="fa fa-home"></i>Головна</a>
            <span><i class="fa fa-angle-right"></i>Оголошення</span>
        </div>
    </div>


    <!-- page -->
    <section class="page-section categories-page">
        <div class="container">
            <div class="row">

                @foreach($offers as $list)
                    <div class="col-lg-4 col-md-6">
                        <!-- feature -->
                        <div class="feature-item">
                            <div class="feature-pic set-bg" data-setbg="{{$list->getOfferImage()}}">
                                <div class="{{$list->status == \App\Models\Offer::status_Sale ? 'sale-notic' : 'rent-notic'}}">{{$list->status}}</div>
                            </div>
                            <div class="feature-text">
                                <div class="text-center feature-title">
                                    <h5>{{$list->title}}</h5>
                                    <p><i class="fa fa-map-marker"></i> {{$list->location}},<span> {{$list->street}}</span></p>
                                </div>
                                <div class="room-info-warp">
                                    <div class="room-info">
                                        <div class="rf-left">
                                            <p><i class="fa fa-th-large"></i> {{$list->square}} кв. метрів</p>
                                            <p><i class="fa fa-bed"></i> {{$list->bedrooms}} спалень</p>
                                        </div>
                                        <div class="rf-right">
                                            <p><i class="fa fa-car"></i> {{$list->garage}} гаражів</p>
                                            <p><i class="fa fa-bath"></i> {{$list->bathrooms}} ванні</p>
                                        </div>
                                    </div>
                                    <div class="room-info">
                                        <div class="rf-left">
                                            <p><i class="fa fa-user"></i> Tony Holland</p>
                                        </div>
                                        <div class="rf-right">
                                            <p><i class="fa fa-money"></i> ціна {{$list->price}}<span> {{$list->currency}}</span></p>
                                        </div>
                                    </div>
                                    <div class="room-info">
                                        <div class="rf-left">
                                            <p><i class="fa fa-clock-o"></i> 1 день тому</p>
                                        </div>
                                        <div class="rf-right">
                                            <p><i class="fa fa-eye"></i> переглядів {{$list->views}}</p>
                                        </div>
                                    </div>
                                </div>
                                <a  href="{{route('showOffer', $list)}}" class="room-price">Переглянути</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <nav class="pagination justify-content-center">
                {!!$offers->links();!!}
            </nav>
        </div>
    </section>
    <!-- page end -->


@stop
