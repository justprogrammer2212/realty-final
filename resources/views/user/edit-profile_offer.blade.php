@extends('layouts.main')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{asset('images/page-top-bg.jpg')}}">
        <div class="container text-white">
            <h2>Редагувати особисті дані</h2>
        </div>
    </section>
    <!--  Page top end -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-between">
            <div class="col-sm-4 offset-sm-4">
                <h3 class="text-center h3 mt-4 mb-5">Редагувати оголошення</h3>
                <form action="{{route('offer_update', $offer)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input value="{{$offer->title}}" type="text" class="form-control" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input value="{{$offer->price}}" type="text" class="form-control" name="price" placeholder="Enter price">
                        <small id="emailHelp" class="form-text text-muted">price</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Currency</label>
                        <select name="currency" class="form-control">
                            @foreach(\App\Models\Offer::$offer_currency as $currency)
                            <option value="{{$currency}}" {{$offer->currency == $currency ? 'selected' : ''}}>{{$currency}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">currency</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select name="status" class="form-control">
                            @foreach(\App\Models\Offer::$sale as $status)
                                <option value="{{$status}}" {{$offer->status == $status ? 'selected' : ''}}>{{$status}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">currency</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description"
                                  class="form-control">{{$offer->description}}</textarea>

                        <small id="emailHelp" class="form-text text-muted">description</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Location</label>
                        <input value="{{$offer->location}}" type="text" class="form-control" name="location" placeholder="Enter location">
                        <small id="emailHelp" class="form-text text-muted">location</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Street</label>
                        <input value="{{$offer->street}}" type="text" class="form-control" name="street" placeholder="Enter street">
                        <span class="text-danger"><strong></strong></span>
                        <small class="form-text text-muted">Street</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Square</label>
                        <input value="{{$offer->square}}" type="text" class="form-control" name="square" placeholder="Enter square">
                        <small class="form-text text-muted">Square</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Garage</label>
                        <input value="{{$offer->garage}}" type="text" class="form-control" name="garage" placeholder="Enter garage">
                        <span class="text-danger"><strong></strong></span>
                        <small class="form-text text-muted">Garages</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bathroom</label>
                        <input value="{{$offer->bathroom}}" type="text" class="form-control" name="bathroom" placeholder="Enter bathroom">
                        <span class="text-danger"><strong></strong></span>
                        <small class="form-text text-muted">Bathroom</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bedroom</label>
                        <input value="{{$offer->bedrooms}}" type="text" class="form-control" name="bedrooms" placeholder="Enter bedroom">
                        <span class="text-danger"><strong></strong></span>
                        <small class="form-text text-muted">Bedroom</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age-build</label>
                        <input value="{{$offer->age_build}}" type="number" class="form-control" name="age_build" placeholder="Enter Age build">
                        <span class="text-danger"><strong></strong></span>
                        <small class="form-text text-muted">Age</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach(\App\Models\Category::all() as $cat)
                            <option value="{{$cat->id}}" {{$offer->category_id == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Categories</small>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="offer_image">
                            <label class="custom-file-label" for="customFile">Оновити фото</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Оновити оголошення</button>
                </form>
            </div>
        </div>
        </div>
@stop
