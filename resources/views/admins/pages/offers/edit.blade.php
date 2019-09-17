@extends('admins.layouts.app')

@section('content')

    <div class="col-sm-4 offset-sm-4">
        <h3 class="text-center h3 mt-4 mb-5">Редагувати оголошення</h3>
        <form action="{{route('admin.offers.update', ['offer' => $offer])}}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" name="title"
                       placeholder="Enter title" value="{{$offer->title}}">
                @if ($errors->has('title'))
                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                @endif
                <small id="emailHelp" class="form-text text-muted">title</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text"
                       class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" name="price"
                       placeholder="Enter price"
                       value="{{$offer->price}}">
                @if ($errors->has('price'))
                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                @endif
                <small id="emailHelp" class="form-text text-muted">price</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Currency</label>
                <select name="currency" class="form-control">
                    @foreach(\App\Models\Offer::$offer_currency as $currency)
                        <option value="{{$currency}}"
                                name="currency" {{ $offer->currency == $currency ? 'selected' : '' }}>{{$currency}}
                        </option>
                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">currency</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Status</label>
                <select name="status" class="form-control">
                    @foreach(\App\Models\Offer::$sale as $status)
                        <option value="{{$status}}" name="status" {{$offer->status == $status ? 'selected' : ''}}>
                            {{$status}}
                        </option>
                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">currency</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description"
                          class="form-control {{$errors->has('description') ? 'is-invalid' : '' }}">
                    {{$offer->description}}
                </textarea>
                @if ($errors->has('description'))
                    <span class="text-danger"><strong>{{ $errors->first('description') }}</strong></span>
                @endif
                <small id="emailHelp" class="form-text text-muted">description</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Location</label>
                <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" name="location"
                       placeholder="Enter location" value="{{$offer->location}}">
                @if ($errors->has('price'))
                    <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                @endif
                <small id="emailHelp" class="form-text text-muted">location</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Street</label>
                <input type="text" class="form-control" name="street" placeholder="Enter street"
                       value="{{$offer->street}}">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Street</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Square</label>
                <input type="text" class="form-control" name="square" placeholder="Enter square"
                       value="{{$offer->square}}">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Square</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Garage</label>
                <input type="text" class="form-control" name="garage" placeholder="Enter garage"
                       value="{{$offer->garage}}">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Garages</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bathroom</label>
                <input type="text" class="form-control" name="bathroom" placeholder="Enter bathroom"
                       value="{{$offer->bathroom}}">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Bathroom</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bedroom</label>
                <input type="text" class="form-control" name="bedrooms" placeholder="Enter bedroom"
                       value="{{$offer->bedrooms}}">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Bedroom</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Age-build</label>
                <input value="{{$offer->age_build}}" type="number" class="form-control" name="age_build"
                       placeholder="Enter Age build">
                <span class="text-danger"><strong></strong></span>
                <small class="form-text text-muted">Age</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}" {{$offer->category_id == $cat->id ? 'selected' : ''}}>
                            {{$cat->name}}
                        </option>
                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">Categories</small>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file">
                    <label class="custom-file-label" for="customFile">Завантажити фото</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Редагувати оголошення</button>
        </form>
    </div>

@endsection
