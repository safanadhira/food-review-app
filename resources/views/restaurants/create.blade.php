@extends('layout')

@section('content')
<div class="container">
    <h2>Add New Restaurant</h2>

    <form action="{{ route('restaurants.store') }}" method="POST">
        @csrf

        <label for="name">Restaurant Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="description">Description</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <button type="submit" class="btn">Create Restaurant</button>
    </form>
</div>
@endsection
