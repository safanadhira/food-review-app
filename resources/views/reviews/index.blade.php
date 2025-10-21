@extends('layout')

@section('content')
<div class="container">
    <a href="{{ route('restaurants.show', ['name' => $food->restaurant->name]) }}" class="btn">← Back to {{ $food->restaurant->name }}</a>
    <h2>Reviews for {{ $food->name }}</h2>

    @forelse ($reviews as $review)
        <div class="card">
            <h4>{{ $review->reviewer_name }}</h4>
            <p>{{ $review->comment }}</p>
            <small>Rating: {{ $review->rating }}/5</small><br>
            <small>Reviewed on: {{ $review->created_at->format('d M Y') }}</small>

            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="margin-top: 0.5rem;">
                @csrf
                @method('DELETE')
                <button class="btn">Delete Review</button>
            </form>
        </div>
    @empty
        <p>No reviews yet.</p>
    @endforelse

    <a href="{{ route('reviews.create', ['food' => $food->id]) }}" class="btn">Add Review</a>
</div>
@endsection
