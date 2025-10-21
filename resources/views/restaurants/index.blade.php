@extends('layout')

@section('content')
<div class="container">
    <h2>All Restaurants</h2>
    <a href="{{ route('restaurants.create') }}" class="btn">Add Restaurant</a>

    @foreach ($restaurants as $restaurant)
        <div class="card">
            <h3>
                <a href="{{ route('restaurants.show', $restaurant->name) }}">
                    {{ $restaurant->name }}
                </a>
            </h3>
            <p>{{ $restaurant->description }}</p>
        </div>
    @endforeach
</div>
@endsection
