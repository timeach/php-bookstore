@extends('Shared._layout')
@section('title', 'Cars Index')
@section('content')
    <h2>Index</h2>
    <p>
        <a href="{{url('Cars/Create')}}">Create New</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                Suppllier_ID
            </th>
        </tr>
        </thead>
        <tbody>
        {{--Here we need a model to view data in the database--}}
        @foreach($cars as $car)
            <tr>
                <td>
                    {{ $car->name}}
                </td>

                <td>
                    {{ $car->price}}
                </td>

                <td>
                    {{ $car->supplier_id }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

