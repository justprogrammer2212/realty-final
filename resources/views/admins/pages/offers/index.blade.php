@extends('admins.layouts.app')

@section('content')
    <div class="header">
        <h2>Offers</h2>
        <h5>Total offers: {{ $countedOffers }} </h5>
    </div>

    {{ $offers->links() }}

    <div class="body table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <td>
                        {{$offer->id}}
                    </td>
                    <td>
                        <a href="{{route('showOffer', $offer)}}">
                            {{$offer->title}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('admin.offers.edit', $offer)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.offers.destroy', $offer)}}" method="POST">
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
