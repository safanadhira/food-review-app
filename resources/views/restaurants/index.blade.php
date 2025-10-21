@extends('layout')

@section('content')
<div class="container">
    <h2>All Restaurants</h2>
    <a href="{{ route('restaurants.create') }}" class="btn">Add Restaurant</a>

    @foreach ($restaurants as $restaurant)
        <a href="{{ route('restaurants.show', ['name' => $restaurant->name]) }}" style="text-decoration: none; color: inherit;">
            <div class="card">
                <h3>{{ $restaurant->name }}</h3>
                <p>{{ $restaurant->description }}</p>
            </div>
        </a>

        <div style="margin-top: 0.5rem;">
            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn">Edit</a>

            <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn" onclick="return confirm('Delete this restaurant?')">Delete</button>
            </form>
        </div>

    @endforeach

</div>
@endsection
