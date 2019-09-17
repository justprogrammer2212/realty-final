<!-- Hero section -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/bg_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/bg_2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/bg_3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{--<section class="hero-section set-bg" data-setbg="images/bg_1.jpg">--}}
{{--    <div class="container hero-text text-white">--}}
{{--        <h2>find your place with our local life style</h2>--}}
{{--        <p>Search real estate property records, houses, condos, land and more on leramiz.com®.<br>Find property info from the most comprehensive source data.</p>--}}
{{--        <a href="#" class="site-btn">VIEW DETAIL</a>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Hero section end -->
<!-- Filter form section -->
<div class="filter-search mt-4">
    <div class="container text-center">
        <form class="filter-form" action="{{route('search')}}">
            <input type="text" name="title" value="{{old('title') ?? $request->title ?? ''}}" placeholder="Шукаємо...">
            <button class="site-btn fs-submit">Пошук</button>
        </form>
    </div>
</div>
<!-- Filter form section end -->
