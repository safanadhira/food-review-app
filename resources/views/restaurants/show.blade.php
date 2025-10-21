@extends('layout')

@section('content')
<div class="container">
    <h2>{{ $restaurant->name }}</h2>
    <p>{{ $restaurant->description }}</p>

    <h3>Foods from this restaurant</h3>
    @php
        $shownFoods = [];
    @endphp

    @forelse ($foods as $food)
        @if (!in_array($food->name, $shownFoods))
            @php $shownFoods[] = $food->name; @endphp
            <div class="card">
                <h4>{{ $food->name }}</h4>
                <a href="{{ route('reviews.create', ['food' => $food->id]) }}" class="btn">Add Review</a>
            </div>
        @endif
    @empty
        <p>No foods listed for this restaurant yet.</p>
    @endforelse
</div>
@endsection
