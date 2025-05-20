<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
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

        .card-body {
            padding: 2rem;
        }

        .product-image {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }

        h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        hr {
            border-color: var(--text-muted);
            opacity: 0.5;
            margin: 1.5rem 0;
        }

        p {
            font-size: 1rem;
            color: var(--text);
            margin-bottom: 1rem;
        }

        .price {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
        }

        .description {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 1rem;
            font-size: 0.9rem;
            color: var(--text);
            line-height: 1.6;
        }

        .stock {
            font-size: 1rem;
            font-weight: 500;
            color: var(--secondary);
        }

        .icon {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/120?text=No+Image' }}" 
                             class="product-image" 
                             alt="{{ $product->title }}">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fas fa-tag icon"></i> {{ $product->title }}</h3>
                        <hr />
                        <p class="price"><i class="fas fa-dollar-sign icon"></i> {{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</p>
                        <div class="description">
                            {!! $product->description !!}
                        </div>
                        <hr />
                        <p class="stock"><i class="fas fa-box icon"></i> Stock: {{ $product->stock }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>