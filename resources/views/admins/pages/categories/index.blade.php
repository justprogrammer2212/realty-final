@extends('admins.layouts.app')

@section('content')
    <div class="header">
        <h2>Categories</h2>
    </div>

    <a class="btn btn-success" href="{{route('admin.categories.create')}}">Create new</a>

    {{ $categories->links() }}

    <div class="body table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->id}}
                    </td>
                    <td>
                       {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
