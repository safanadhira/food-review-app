@extends('layout')

@section('content')
<div class="container">
    <h2>Add Review for {{ $food->name }}</h2>

    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <input type="hidden" name="food_id" value="{{ $food->id }}">

        <label for="reviewer_name">Your Name</label>
        <input type="text" name="reviewer_name" value="{{ old('reviewer_name') }}" required>

        <label for="rating">Rating (1–5)</label>
        <input type="number" name="rating" min="1" max="5" value="{{ old('rating') }}" required>

        <label for="comment">Comment</label>
        <textarea name="comment">{{ old('comment') }}</textarea>

        <button type="submit" class="btn">Submit Review</button>
    </form>
</div>
@endsection
