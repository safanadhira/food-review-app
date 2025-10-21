<form action="{{ $action }}" method="POST" class="container">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name', $food->name ?? '') }}" required>

    <label for="description">Description</label>
    <textarea name="description">{{ old('description', $food->description ?? '') }}</textarea>

    <label for="price">Price</label>
    <input type="number" name="price" step="0.01" required>

    <button type="submit" class="btn">
        {{ $buttonText }}
    </button>
</form>
