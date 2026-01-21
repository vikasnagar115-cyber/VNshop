@extends('layouts.admin')

@section('title', 'Edit Customer')

@section('content')
<h2>Edit Customer</h2>

<form method="POST" action="{{ route('admin.customers.update', $customer) }}" class="mt-3 col-md-6">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" value="{{ old('name', $customer->name) }}" class="form-control">
        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" type="email" value="{{ old('email', $customer->email) }}" class="form-control">
        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input name="phone" value="{{ old('phone', $customer->phone) }}" class="form-control">
        @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <input name="address" value="{{ old('address', $customer->address) }}" class="form-control">
        @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
    <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

