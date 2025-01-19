<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient Background */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .product-container {
            background-color: #ffffff; /* White box */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            border-radius: 15px; /* Rounded corners */
            padding: 30px;
            width: 100%;
            max-width: 500px; /* Box size */
        }
        h1 {
            text-align: center;
            font-size: 2rem;
            color: #333; /* Dark text for contrast */
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
    </style>
</head>
<body>
    <div class="product-container">
        <h1>Edit Product</h1>
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <!-- Product Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <!-- Product Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" min="0" required>
            </div>

            <!-- Update Button -->
            <button type="submit" class="btn btn-primary w-100">Update Product</button>
        </form>
    </div>
</body>
</html>
