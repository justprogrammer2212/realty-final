@extends('layouts.main')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="../images/page-top-bg.jpg">
        <div class="container text-white">
            <h2>Оголошення</h2>
        </div>
    </section>
    <!--  Page top end -->

    <!-- Breadcrumb -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{route('indexPage')}}"><i class="fa fa-home"></i>Головна </a>
            <a href="{{route('offersPage')}}"><i class="fa fa-angle-right"></i>Оголошення</a>
            <span><i class="fa fa-angle-right"></i>{{$show->title}}</span>
        </div>
    </div>

{{--    @dd($show->getOfferAdditionalImages()[0]->getFullUrl())--}}
    <!-- Page -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 single-list-page">
                    <div class="col-xl-8 sl-title">
                        <h4 class="display-4 text-center mb-2">{{$show->title}}</h4>
                    </div>
                    <div class="single-list-slider owl-carousel" id="sl-slider">
                        <div class="sl-item set-bg" data-setbg="{{$show->getOfferImage()}}">
                            <div class="sale-notic">{{$show->status}}</div>
                        </div>
                        @foreach($show->getOfferAdditionalImages() as $slider)
                        <div class="sl-item set-bg" data-setbg="{{$slider->getFullUrl()}}">
                            <div class="sale-notic">{{$show->status}}</div>
                        </div>
                        @endforeach
{{--                        <div class="sl-item set-bg" data-setbg="../images/single-list-slider/3.jpg">--}}
{{--                            <div class="sale-notic">FOR SALE</div>--}}
{{--                        </div>--}}
{{--                        <div class="sl-item set-bg" data-setbg="../images/single-list-slider/4.jpg">--}}
{{--                            <div class="rent-notic">FOR Rent</div>--}}
{{--                        </div>--}}
{{--                        <div class="sl-item set-bg" data-setbg="../images/single-list-slider/5.jpg">--}}
{{--                            <div class="sale-notic">FOR SALE</div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
                        <div class="sl-thumb set-bg" data-setbg="{{$show->getOfferImage()}}"></div>
{{--                        <div class="sl-thumb set-bg" data-setbg="../images/single-list-slider/2.jpg"></div>--}}
{{--                        <div class="sl-thumb set-bg" data-setbg="../images/single-list-slider/3.jpg"></div>--}}
{{--                        <div class="sl-thumb set-bg" data-setbg="../images/single-list-slider/4.jpg"></div>--}}
{{--                        <div class="sl-thumb set-bg" data-setbg="../images/single-list-slider/5.jpg"></div>--}}
                    </div>
                    <div class="single-list-content">
                        <div class="row">
                            <div class="col-xl-8 sl-title">
                                <h2>{{$show->location}}</h2>
                                <p><i class="fa fa-map-marker"></i>{{$show->street}}</p>
                            </div>
                            <div class="col-xl-4">
                                <p class="price-btn">{{$show->currency}} {{$show->price}}</p>
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Property Details</h3>
                        <div class="row property-details-list">
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-th-large"></i> {{$show->square}} Square foot</p>
                                <p><i class="fa fa-bed"></i> {{$show->bedrooms}} Bedrooms</p>
                                <p><i class="fa fa-user"></i> Gina Wesley</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-car"></i> {{$show->garage}} garages</p>
                                <p><i class="fa fa-building-o"></i> Family Villa</p>
                                <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                            </div>
                            <div class="col-md-4">
                                <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                <p><i class="fa fa-trophy"></i> 5 years age</p>
                            </div>
                        </div>
                        <h3 class="sl-sp-title">Description</h3>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum
                                ornareste. Donec index lorem. Vestibulum aliquet odio, eget tempor libero. Cras congue
                                cursus tincidunt. Nullam venenatis dui id orci egestas tincidunt id elit. Nullam ut
                                vuputate justo. Integer lacnia pharetra pretium. Casan ante ipsum primis in faucibus
                                orci luctus et ultrice.</p>
                        </div>
                        <h3 class="sl-sp-title">Property Details</h3>
                        <div class="row property-details-list">
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-circle-o"></i> Air conditioning</p>
                                <p><i class="fa fa-check-circle-o"></i> Telephone</p>
                                <p><i class="fa fa-check-circle-o"></i> Laundry Room</p>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <p><i class="fa fa-check-circle-o"></i> Central Heating</p>
                                <p><i class="fa fa-check-circle-o"></i> Family Villa</p>
                                <p><i class="fa fa-check-circle-o"></i> Metro Central</p>
                            </div>
                            <div class="col-md-4">
                                <p><i class="fa fa-check-circle-o"></i> City views</p>
                                <p><i class="fa fa-check-circle-o"></i> Internet</p>
                                <p><i class="fa fa-check-circle-o"></i> Electric Range</p>
                            </div>
                        </div>
                        <h3 class="sl-sp-title bd-no">Floorplans</h3>
                        <div id="accordion" class="plan-accordion">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1"
                                            aria-expanded="false" aria-controls="collapse1">First Floor:
                                        <span>660 sq ft</span> <i class="fa fa-angle-down"></i></button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="../images/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse2"
                                            aria-expanded="true" aria-controls="collapse2">Second
                                        Floor:<span>610 sq ft.</span> <i class="fa fa-angle-down"></i>
                                    </button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="../images/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3"
                                            aria-expanded="false" aria-controls="collapse3">Third Floor
                                        :<span>580 sq ft</span> <i class="fa fa-angle-down"></i>
                                    </button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="../images/plan-sketch.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="sl-sp-title bd-no">Video</h3>
                        <div class="perview-video">
                            <img src="../images/video.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=v13nSVp6m5I" class="video-link"><img
                                    src="../images/video-btn.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-md-7 sidebar">
                    @if($show->hasRealtor())
                    <div class="author-card">
                        <div class="author-img set-bg" data-setbg="{{$realtor->getAvatarUrl()}}"></div>
                        <div class="author-info">
                            <h5>{{$realtor->name}}</h5>
                            <p>Real Estate Agent</p>
                        </div>
                        <div class="author-contact">
                            <p><i class="fa fa-phone"></i>{{$realtor->phone}}</p>
                            <p><i class="fa fa-envelope"></i>{{$realtor->email}}</p>
                        </div>
                    </div>
                    @endif
                    <div class="contact-form-card">
                        <h5>Do you have any question?</h5>
                        <form>
                            <input type="text" placeholder="Your name">
                            <input type="text" placeholder="Your email">
                            <textarea placeholder="Your question"></textarea>
                            <button>SEND</button>
                        </form>
                    </div>
                    <div class="related-properties">
                        <h2>Related Property</h2>
                        @foreach($related_offers as $related_offer)
                        <div class="rp-item">
                            <div class="rp-pic set-bg" data-setbg="{{$related_offer->getOfferImage()}}">
                                <div class="sale-notic">FOR SALE</div>
                            </div>
                            <div class="rp-info">
                                <h5>1963 S Crescent Heights Blvd</h5>
                                <p><i class="fa fa-map-marker"></i>Los Angeles, CA 90034</p>
                            </div>
                            <a href="#" class="rp-price">$1,200,000</a>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page end -->
@stop
