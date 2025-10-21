@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Restaurant</h2>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <form action="{{ route('restaurants.update', $restaurant->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $restaurant->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description">{{ old('description', $restaurant->description) }}</textarea>
        </div>

        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
