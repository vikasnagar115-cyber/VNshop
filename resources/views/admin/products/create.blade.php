@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<h2>Add Product</h2>

<form method="POST" action="{{ route('admin.products.store') }}" class="mt-3 col-md-8">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Name</label>
            <input name="name" value="{{ old('name') }}" class="form-control">
            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">SKU</label>
            <input name="sku" value="{{ old('sku') }}" class="form-control">
            @error('sku') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select">
                <option value="">Select category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">Price</label>
            <input name="price" type="number" step="0.01" value="{{ old('price', 0) }}" class="form-control">
            @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">Stock</label>
            <input name="stock" type="number" value="{{ old('stock', 0) }}" class="form-control">
            @error('stock') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

