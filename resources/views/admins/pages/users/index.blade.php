@extends('admins.layouts.app')

@section('content')
    <div class="row clearfix ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Users</h2>
                    <h5>Total users: {{ App\User::count()}} </h5>
                </div>

                <div class="body table-responsive">
                    {{ $users->links() }}

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>EMAIL</th>
                            <th>FULL NAME</th>
                            <th>ROLE</th>
                            <th>ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <div class="dropdown pl-2">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="btn btn-warning waves-effect"
                                               href="{{route('admin.users.edit', $user)}}">
                                                <i class="material-icons">
                                                    edit
                                                </i>
                                            </a>
                                            <form action="{{route('admin.users.destroy', $user)}}"
                                                  method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger waves-effect"
                                                        data-type="custom-delete"
                                                        type="submit"><i
                                                        class="material-icons">delete</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
