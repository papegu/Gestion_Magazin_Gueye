<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        .dashboard-button {
            background-color: #4CAF50; /* Vert */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .product-list-button {margin-left: 250px;;
            background-color: #008CBA; /* Bleu */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="product-list-button">Add New Product</a>
      <!-- Bouton de retour au dashboard -->
      <a href="{{ route('dashboard') }}" class="product-list-button">Back to Dashboard</a>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color:red; color:white; border:none; padding:5px 10px; cursor:pointer;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" style="text-align:center; font-weight:bold;">Total Products: {{ $products->count() }}</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:right; font-weight:bold;">
                Total Price: ${{ number_format($totalPrice, 2) }}
            </td>
        </tr>
    </tfoot>
</table>

</body>
</html>
