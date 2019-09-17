@extends('admins.layouts.app')

@section('content')
    <h3>All messages: {{$feedbackMessagesInfo['allFeedbackMessages']}}</h3>
    <h3>Viewed messages: {{$feedbackMessagesInfo['viewedFeedbackMessages']}}</h3>
    <h3>Not viewed messages {{$feedbackMessagesInfo['notViewedFeedbackMessages']}}</h3>
    <div class="body table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Status</th>
                <th>Show</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbackMessages as $message)
                <tr>
                    <td>
                        {{$message->id}}
                    </td>
                    <td>
                        {{$message->user_email}}
                    </td>
                    <td>
                        {{$message->getViewedStatus()}}
                    </td>
                    <td>
                        <a href="{{route('admin.feedback.show', $message)}}" class="btn btn-warning">Show</a>
                    </td>

                    <td>
                        <form action="{{route('admin.feedback.update', $message)}}" method="POST">
                            @csrf
                            <button class="btn {{$message->isViewed() ? 'btn-danger' : 'btn-success'}}">{{$message->isViewed() ? 'Mark as unread' : 'Mark as read'}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
