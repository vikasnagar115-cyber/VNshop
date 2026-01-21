@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
<h2>Add Category</h2>

<form method="POST" action="{{ route('admin.categories.store') }}" class="mt-3 col-md-6">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" value="{{ old('name') }}" class="form-control">
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

