@extends('admins.layouts.app')

@section('content')
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit <b>{{$user->name}}`s</b> profile
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.users.update', $user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <label for="email">Email Address</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email" name="email" value="{{$user->email}}" class="form-control"
                                       placeholder="Enter your email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <div class="form-line">
                                <input type="text" id="phone" name="phone" value="{{$user->phone}}"
                                       class="form-control"
                                       placeholder="Enter your phone number">
                            </div>
                        </div>
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="Name" value="{{$user->name}}">
                            </div>
                        </div>
                        <input type="hidden" name="userId" value="{{$user->id}}">
                        @unless(auth()->id() === $user->id)
                            <select name="role" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role}}" {{$user->role == $role ? 'selected' : ''}}>{{$role}}</option>
                                @endforeach
                            </select>

                        @else
                            <input type="hidden" name="role" value="{{auth()->user()->role}}">
                        @endunless
                        @if($user->getFirstMedia('avatar'))
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="checkbox" id="avatar_checkbox" name="avatar_checkbox"
                                               class="filled-in">
                                        <label for="avatar_checkbox">Delete avatar</label>
                                    </div>
                                    <div class="col-6 image">
                                        <img src="{{$user->getFirstMediaUrl('avatar')}}"
                                             style="width: 150px; height: 150px">
                                    </div>
                                </div>
                            </div>
                        @endif
                        <br>
                        <input type="hidden" name="userId" hidden value="{{$user->id}}">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@endsection
