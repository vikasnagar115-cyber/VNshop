@extends('layouts.admin')

@section('title', 'Add Customer')

@section('content')
<h2>Add Customer</h2>

<form method="POST" action="{{ route('admin.customers.store') }}" class="mt-3 col-md-6">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" value="{{ old('name') }}" class="form-control">
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" type="email" value="{{ old('email') }}" class="form-control">
        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input name="phone" value="{{ old('phone') }}" class="form-control">
        @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input name="address" value="{{ old('address') }}" class="form-control">
        @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

