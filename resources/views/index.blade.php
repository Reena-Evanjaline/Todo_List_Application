<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .product-container {
            background-color: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
            background-color: #6a11cb;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2575fc;
        }
        .list-group-item {
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .btn-warning, .btn-danger {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <h1>Product List</h1>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Product Name" required>
            </div>
            <div class="mb-3">
                <textarea name="description" class="form-control" rows="3" placeholder="Product Description" required></textarea>
            </div>
            <div class="mb-3">
                <input type="number" name="price" class="form-control" placeholder="Product Price" step="0.01" required>
            </div>
            <button class="btn btn-primary" type="submit">Add Product</button>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </form>

        <ul class="list-group">
            @forelse($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div>
                        <strong>{{ $product->name }}</strong>
                        <p class="mb-1">{{ $product->description }}</p>
                        <small>Price: ${{ number_format($product->price, 2) }}</small>
                    </div>
                    <div>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="list-group-item text-center">No products available.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
