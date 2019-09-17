@extends('admins.layouts.app')

@section('content')
    <form action="{{route('admin.categories.update', $category)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @include('admins.pages.categories.partials.form')
        <button type="submit">Submit</button>
    </form>
@endsection
