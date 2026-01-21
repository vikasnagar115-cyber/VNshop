@extends('layouts.admin')

@section('title', 'Add User')

@section('content')
<h2>Add User</h2>

<form method="POST" action="{{ route('admin.users.store') }}" class="mt-3 col-md-6">
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
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control">
        @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control">
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="is_admin" value="1" id="is_admin">
        <label class="form-check-label" for="is_admin">Admin</label>
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
