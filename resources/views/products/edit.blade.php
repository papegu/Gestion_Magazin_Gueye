<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $product->description }}</textarea>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        <button type="submit">Save</button>
    </form>
</body>
</html>
