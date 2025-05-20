<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --primary: #ff6b6b;
            --secondary: #4ecdc4;
            --accent: #ffe66d;
            --danger: #ff4757;
            --background: #1a1a2e;
            --card-bg: #16213e;
            --text: #e0e0e0;
            --text-muted: #a0a0a0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background);
            min-height: 100vh;
            color: var(--text);
        }

        .container {
            max-width: 1400px;
            padding: 2rem 1rem;
        }

        .card {
            background: var(--card-bg);
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
        }

        .card-header {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            padding: 1.5rem;
            text-align: center;
        }

        .card-header h4 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text);
            margin-bottom: 0.5rem;
            display: block;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--text-muted);
            border-radius: 8px;
            color: var(--text);
            font-size: 0.9rem;
            padding: 0.75rem;
            transition: border-color 0.3s ease, background 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary);
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.3);
            outline: none;
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-control.is-invalid {
            border-color: var(--danger);
        }

        .alert-danger {
            background: rgba(255, 75, 75, 0.2);
            border: none;
            border-radius: 8px;
            color: var(--danger);
            font-weight: 500;
            font-size: 0.85rem;
            padding: 0.75rem;
            margin-top: 0.5rem;
        }

        .btn {
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.75rem 1.75rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
        }

        .btn-primary:hover {
            background: #e55a5a;
            transform: scale(1.05);
        }

        .btn-warning {
            background: var(--accent);
            border: none;
            color: var(--text);
        }

        .btn-warning:hover {
            background: #ffd43b;
            transform: scale(1.05);
        }

        textarea.form-control {
            resize: vertical;
        }

        .icon {
            margin-right: 0.5rem;
        }

        .current-image {
            max-width: 200px;
            border-radius: 8px;
            margin-top: 0.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .current-image:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-edit icon"></i> Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label><i class="fas fa-image icon"></i> IMAGE</label>
                                @if ($product->image)
                                    <img src="{{ asset($product->image) }}" class="current-image" alt="Current Image">
                                    <p class="text-muted mt-2">Current Image: {{ $product->image }}</p>
                                @else
                                    <p class="text-muted">No image available.</p>
                                @endif
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-tag icon"></i> TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" placeholder="Masukkan Judul Product">
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-align-left icon"></i> DESCRIPTION</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i class="fas fa-dollar-sign icon"></i> PRICE</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" placeholder="Masukkan Harga Product">
                                        @error('price')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i class="fas fa-box icon"></i> STOCK</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="Masukkan Stock Product">
                                        @error('stock')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary me-3"><i class="fas fa-save icon"></i> UPDATE</button>
                            <button type="reset" class="btn btn-warning"><i class="fas fa-undo icon"></i> RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            uiColor: '#16213e',
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'styles', items: ['Format', 'FontSize'] }
            ]
        });
    </script>
</body>
</html>