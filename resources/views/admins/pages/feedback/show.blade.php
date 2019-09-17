@extends('admins.layouts.app')

@section('content')
    <h4>{{$feedback->user_name}}</h4>
    <h4>{{$feedback->user_email}}</h4>
    <p>{{$feedback->text}}</p>
    <form action="{{route('admin.feedback.update', $feedback)}}" method="POST">
        @csrf
        <button class="btn btn-danger">Mark as unread</button>
    </form>
@endsection
