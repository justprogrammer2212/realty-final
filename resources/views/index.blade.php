@extends('layouts.main')
@section('content')
    @include('layouts.slider')
     <!-- Breadcrumb -->
     <div class="site-breadcrumb">
        <div class="container">
            <span><i class="fa fa-home"></i>Головна сторінка</span>
        </div>
    </div>
    @include('layouts.recent-offers')
    @include('layouts.services')
    @include('layouts.featured-offers')
    @include('layouts.offers-category')
    @include('layouts.reviews')
@stop
