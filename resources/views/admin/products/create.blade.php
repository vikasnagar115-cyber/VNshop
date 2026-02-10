@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<h2>Add Product</h2>

<form method="POST" action="{{ route('admin.products.store') }}" class="mt-3" enctype="multipart/form-data">
    @csrf

    <!-- Name & SKU -->
    <div class="row">
        <div class="col-md-8 mb-3">
            <label class="form-label">Name *</label>
            <input name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">SKU *</label>
            <input name="sku" value="{{ old('sku') }}" class="form-control @error('sku') is-invalid @enderror">
            @error('sku') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Category & Price -->
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label">Category *</label>
            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Select category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">Price *</label>
            <input name="price" type="number" step="0.01" value="{{ old('price', 0) }}" class="form-control @error('price') is-invalid @enderror">
            @error('price') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">Stock *</label>
            <input name="stock" type="number" value="{{ old('stock', 0) }}" class="form-control @error('stock') is-invalid @enderror">
            @error('stock') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Brand Name & Generic Name -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Brand Name</label>
            <input name="brand_name" value="{{ old('brand_name') }}" class="form-control @error('brand_name') is-invalid @enderror">
            @error('brand_name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Generic Name</label>
            <input name="generic_name" value="{{ old('generic_name') }}" class="form-control @error('generic_name') is-invalid @enderror">
            @error('generic_name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Quantity In Stock & Unit Current -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Quantity In Stock *</label>
            <input name="quantity_in_stock" type="number" value="{{ old('quantity_in_stock', 0) }}" class="form-control @error('quantity_in_stock') is-invalid @enderror">
            @error('quantity_in_stock') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Unit Current *</label>
            <input name="unit_current" type="number" step="0.01" value="{{ old('unit_current', 0) }}" class="form-control @error('unit_current') is-invalid @enderror">
            @error('unit_current') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Stock Tax & Promotion -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Stock Tax *</label>
            <input name="stock_tax" type="number" step="0.01" value="{{ old('stock_tax', 0) }}" class="form-control @error('stock_tax') is-invalid @enderror">
            @error('stock_tax') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Promotion *</label>
            <input name="promotion" type="number" step="0.01" value="{{ old('promotion', 0) }}" class="form-control @error('promotion') is-invalid @enderror">
            @error('promotion') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Gross Weight & Net Weight -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Gross Weight</label>
            <input name="gross_weight" type="number" step="0.01" value="{{ old('gross_weight') }}" class="form-control @error('gross_weight') is-invalid @enderror">
            @error('gross_weight') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Net Weight</label>
            <input name="net_weight" type="number" step="0.01" value="{{ old('net_weight') }}" class="form-control @error('net_weight') is-invalid @enderror">
            @error('net_weight') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
        </div>
    </div>

    <!-- Image Upload -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Product Image</label>
            <input name="image" type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="imageInput">
            @error('image') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            <small class="text-muted">Supported formats: JPG, PNG, GIF (Max 2MB)</small>
            <div id="imagePreview" class="mt-2"></div>
        </div>
    </div>

    <!-- Is Active & Is Delete -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" @checked(old('is_active', true))>
                <label class="form-check-label" for="is_active">
                    Is Active
                </label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_delete" id="is_delete" value="1" @checked(old('is_delete'))>
                <label class="form-check-label" for="is_delete">
                    Is Delete
                </label>
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') }}</textarea>
        @error('description') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>

<script>
document.getElementById('imageInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('imagePreview');
    
    preview.innerHTML = '';
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const img = document.createElement('img');
            img.src = event.target.result;
            img.style.maxWidth = '200px';
            img.style.maxHeight = '200px';
            img.className = 'img-thumbnail';
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
</script>
@endsection


