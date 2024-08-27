<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    
    <a href="{{ route('products.index') }}">Back to Products</a>
    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
