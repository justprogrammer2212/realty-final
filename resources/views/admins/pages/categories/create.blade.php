@extends('admins.layouts.app')

@section('content')
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
        @include('admins.pages.categories.partials.form')
        <button type="submit" class="btn btn-success waves-button">Submit</button>
    </form>
@endsection
