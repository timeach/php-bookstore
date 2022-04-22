@extends('Shared._layout')

@section('title', 'Books Index')

@section('content')

    <h2>Index</h2>
    <p>
        <a href="{{url('Books/Create')}}">Create New</a>
    </p>

    <div class="container books">

        <div class="row">

            @foreach($books as $book)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $book->book_image }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $book->book_title }}</h4>
                            <p>{{ str_limit(strtolower($book->book_descr), 50) }}</p>
                            <p><strong>Price: </strong> {{ $book->book_price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$book->supplier_id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection
