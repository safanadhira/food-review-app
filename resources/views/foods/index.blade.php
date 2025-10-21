@extends('layout')

@section('content')
<div class="container">
    <h2>All Foods</h2>
    <a href="{{ route('foods.create') }}" class="btn">Add Food</a>

    @forelse ($foods as $food)
        <div class="card">
            <div>
                <h4>{{ $food->name }}</h4>
                <p>{{ $food->description }}</p>
                <p>Price: ${{ $food->price }}</p>
                <p>Restaurant: {{ $food->restaurant->name }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('reviews.index', ['food' => $food->id]) }}" class="btn">View Reviews</a>
                <a href="{{ route('reviews.create', ['food' => $food->id]) }}" class="btn">Add Review</a>
            </div>
        </div>
    @empty
        <p>No foods available.</p>
    @endforelse
</div>
@endsection
