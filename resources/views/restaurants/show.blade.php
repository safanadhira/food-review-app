@extends('layout')

@section('content')
<div class="container">
    <a href="{{ route('restaurants.index') }}" class="btn">← Back</a>

    <h2>{{ $restaurant->name }}</h2>
    <p>{{ $restaurant->description }}</p>
    

    <h3>Foods from this restaurant</h3>

    @forelse ($restaurant->foods as $food)
        <div class="card">
            <h4>{{ $food->name }}</h4>
            <a href="{{ route('reviews.index', ['food' => $food->id]) }}" class="btn">View Reviews</a>
            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn" onclick="return confirm('Delete this food?')">Delete</button>
            </form>
        </div>
    @empty
        <p>No foods listed for this restaurant yet.</p>
    @endforelse
    <a href="{{ route('foods.create', ['restaurant' => $restaurant->id]) }}" class="btn">+ Add Food</a>

</div>
@endsection
