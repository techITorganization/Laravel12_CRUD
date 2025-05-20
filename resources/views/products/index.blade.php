<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products - SantriKoding.com</title>
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

        .header-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header-section h3 {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--accent);
            text-shadow: 0 0 10px rgba(255, 230, 109, 0.5);
            margin-bottom: 0.5rem;
        }

        .header-section h5 a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .header-section h5 a:hover {
            color: #45b7aa;
        }

        .header-section hr {
            border-color: var(--text-muted);
            margin: 1.5rem auto;
            width: 120px;
            border-width: 2px;
            opacity: 0.5;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h4 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
        }

        .table {
            margin-bottom: 0;
            background: var(--card-bg);
        }

        .table th {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.1rem;
            border: none;
            padding: 1rem 1.5rem;
        }

        .table td {
            vertical-align: middle;
            border: none;
            padding: 1rem 1.5rem;
            color: black;
        }

        .table tr {
            transition: background 0.3s ease;
        }

        .table tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .btn {
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.5rem 1.5rem;
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

        .btn-success {
            background: var(--secondary);
            border: none;
        }

        .btn-success:hover {
            background: #45b7aa;
            transform: scale(1.05);
        }

        .btn-dark {
            background: var(--text-muted);
            border: none;
        }

        .btn-dark:hover {
            background: #8a8a8a;
            transform: scale(1.05);
        }

        .btn-danger {
            background: var(--danger);
            border: none;
        }

        .btn-danger:hover {
            background: #e63946;
            transform: scale(1.05);
        }

        .product-image {
            border-radius: 8px;
            max-width: 120px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.15);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }

        .pagination {
            justify-content: center;
            margin-top: 2.5rem;
        }

        .pagination .page-link {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            margin: 0 6px;
            color: var(--text);
            background: var(--card-bg);
            border: none;
            transition: all 0.3s ease;
        }

        .pagination .page-link:hover {
            background: var(--primary);
            color: #fff;
        }

        .pagination .active .page-link {
            background: var(--accent);
            color: var(--text);
        }

        .alert {
            border-radius: 8px;
            background: rgba(255, 75, 75, 0.2);
            color: var(--danger);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 1rem;
            text-align: center;
        }

        .action-buttons form {
            display: inline-flex;
            gap: 0.75rem;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .icon {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-section">
                    <h3><i class="fas fa-code icon"></i> Tutorial Laravel 12 untuk Pemula</h3>
                    <h5><a href="https://santrikoding.com">www.santrikoding.com</a></h5>
                    <hr>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-shopping-cart icon"></i> Product Management</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-success">
                            <i class="fas fa-plus icon"></i> Add Product
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">IMAGE</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">STOCK</th>
                                        <th scope="col" style="width: 25%">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/120?text=No+Image' }}" 
                                                     class="product-image" 
                                                     alt="{{ $product->title }}">
                                            </td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td class="text-center action-buttons">
                                                <form onsubmit="return confirm('Are you sure?');"
                                                      action="{{ route('products.destroy', $product->id) }}" 
                                                      method="POST">
                                                    <a href="{{ route('products.show', $product->id) }}"
                                                       class="btn btn-sm btn-dark">
                                                       <i class="fas fa-eye icon"></i> View
                                                    </a>
                                                    <a href="{{ route('products.edit', $product->id) }}"
                                                       class="btn btn-sm btn-primary">
                                                       <i class="fas fa-edit icon"></i> Edit
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash icon"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert mb-0">
                                                    <i class="fas fa-info-circle icon"></i> No product data available.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @section('scripts')
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2000,
                    position: 'top-end',
                    toast: true,
                    background: '#16213e',
                    color: '#e0e0e0'
                });
            </script>
        @elseif (session('error'))
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 2000,
                    position: 'top-end',
                    toast: true,
                    background: '#16213e',
                    color: '#e0e0e0'
                });
            </script>
        @endif
    @endsection
</body>
</html>