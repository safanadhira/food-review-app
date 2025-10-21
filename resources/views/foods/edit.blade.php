@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Food</h2>

    <form action="{{ route('foods.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $food->name) }}" required>

        <label for="description">Description</label>
        <textarea name="description">{{ old('description', $food->description) }}</textarea>

        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $food->price) }}">

        <label for="restaurant_name">Restaurant Name</label>
        <input type="text" name="restaurant_name" value="{{ $food->restaurant->name }}">

        <button type="submit" class="btn">Update Food</button>
    </form>
</div>
@endsection
