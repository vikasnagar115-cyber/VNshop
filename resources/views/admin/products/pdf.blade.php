<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Products</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size:12px; color:#222 }
        .header { display:flex; align-items:center; gap:12px; margin-bottom:12px }
        .logo { width:80px; height:80px; object-fit:contain }
        .title { font-size:18px; font-weight:700 }
        .meta { font-size:11px; color:#666 }
        table { width:100%; border-collapse: collapse; margin-top:8px }
        th, td { border: 1px solid #ddd; padding: 6px 8px; vertical-align:middle }
        th { background: #2f6f9f; color: #fff; text-align:left; font-weight:600 }
        img { max-width:60px; max-height:60px; }
    </style>
</head>
<body>
    <div class="header">
        @if(isset($logoPath) && file_exists($logoPath))
            <img src="{{ $logoPath }}" alt="Logo" class="logo">
        @endif
        <div>
            <div class="title">Product List</div>
            <div class="meta">Generated: {{ $generatedAt ?? now()->format('Y-m-d H:i:s') }}</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width:40px">#</th>
                <th style="width:70px">Image</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Brand</th>
                <th style="width:80px">Price</th>
                <th style="width:60px">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->image && file_exists(public_path('storage/' . $product->image)))
                            <img src="{{ public_path('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ optional($product->category)->name }}</td>
                    <td>{{ $product->brand_name }}</td>
                    <td style="text-align:right">{{ number_format($product->price, 2) }}</td>
                    <td style="text-align:center">{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>