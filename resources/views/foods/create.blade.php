@extends('layout')

@section('content')
<div class="container">
    <h2>Add Food for {{ $restaurant->name }}</h2>

    <form action="{{ route('foods.store', ['restaurant' => $restaurant->id]) }}" method="POST">
        @csrf

        <label for="name">Food Name</label>
        <input type="text" name="name" required>

        <label for="description">Description</label>
        <textarea name="description"></textarea>

        <label for="price">Price</label>
        <input type="number" name="price" step="0.01" required>

        <button type="submit" class="btn">Save</button>
    </form>
</div>
@endsection
