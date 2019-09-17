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
          <div class="col-md-2">
              <img class="user-profile" src="{{asset('images/user_profile.png')}}" alt="">
          </div>
            <div class="col-md-4 ml-auto">
                <h6 class="text-primary h5">Ім'я</h6>
                <h4 class="text-muted h3">{{Auth::user()->name}}</h4>
                <hr>
                <h6 class="text-primary h5">E-mail</h6>
                <h4 class="text-muted h3">{{Auth::user()->email}}</h4>
                <hr>
                <h6 class="text-primary h5">Телефон</h6>
                <h4 class="text-muted h3">{{Auth::user()->phone}}</h4>
                <hr>
            </div>
            <div class="col-md-6">
                <form action="{{route('user_profile_update')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Ім'я</label>
                            <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control" placeholder="Ваше ім'я">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">E-mail</label>
                            <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Старий пароль</label>
                            <input name="old_password" type="password" class="form-control" placeholder="Пароль">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Новий пароль</label>
                            <input name="password" type="password" class="form-control" placeholder="Пароль">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Телефон</label>
                            <input value="{{Auth::user()->phone}}" name="phone" type="text" class="form-control" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group text-left col-md-10">
                        <button type="submit" class="btn btn-primary">Зберегти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
