@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Products</h2>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
</div>

<div class="mb-4">
    <form method="GET" action="{{ route('admin.products.index') }}" id="categoryFilter">
        <div class="d-flex gap-2 align-items-center">
            <label for="category_id" class="form-label mb-0">Filter by Category:</label>
            <select name="category_id" id="category_id" class="form-select" style="max-width: 300px;" onchange="document.getElementById('categoryFilter').submit();">
                <option value="">All Categories</option>
                @if(isset($categories) && count($categories))
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(request('category_id') == $category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>
    </form>
</div>

<table class="table table-striped align-middle">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>SKU</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th class="text-end">Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ optional($product->category)->name }}</td>
            <td>{{ number_format($product->price, 2) }}</td>
            <td>{{ $product->stock }}</td>
            <td class="text-end">
                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center">No products found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $products->links() }}
@endsection

