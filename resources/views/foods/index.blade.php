@extends('layout')

@section('content')
<div class="container">
    <h2>All Foods</h2>
    <a href="{{ route('foods.create') }}" class="btn">Add Food</a> <!-- 👈 Updated button -->

    @foreach ($foods as $food)
        <div class="card">
            <div>
                <h3>{{ $food->name }}</h3>
                <p>{{ $food->description }}</p>
                <p>Price: ${{ $food->price }}</p>
            </div>
            <div>
                <a href="{{ route('foods.edit', $food->id) }}" class="btn">Edit</a>
                <form action="{{ route('foods.destroy', $food->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this food?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection