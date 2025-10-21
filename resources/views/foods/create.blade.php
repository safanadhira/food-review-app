@extends('layout')

@section('content')
<div class="container">
    <h2>Add New Food</h2>

   <form action="{{ route('foods.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" required>

        <label for="description">Description</label>
        <textarea name="description"></textarea>

        <label for="price">Price</label>
        <input type="number" name="price" step="0.01" required>

        <label for="restaurant_name">Restaurant Name</label>
        <input type="text" name="restaurant_name" required>

        <button type="submit" class="btn">Add Food</button>
    </form>

</div>
@endsection
