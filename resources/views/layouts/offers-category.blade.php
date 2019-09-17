<!-- feature category section -->
<section class="feature-category-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Знайдіть нерухомість саме для себе</h3>
            <p>Що саме ви шукаєте? Ми допоможемо вам...</p>
        </div>
        <div class="row">
            @foreach($categories as $cat)
            <div class="col-lg-3 col-md-6 f-cata">
                <a href="{{route('offersCategory', $cat)}}">
                <img src="{{$cat->getImageUrl()}}" alt="">
                <h5>{{$cat->name}}</h5>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- feature category section end-->
