@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Users</h2>
    <div>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary me-2">Add User</a>
        <a href="{{ route('admin.users.export', request()->query()) }}" class="btn btn-outline-success">Export to Excel</a>
    </div>
</div>

<form method="GET" class="row g-2 mb-3">
    <div class="col-md-3">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search name or email">
    </div>
    <div class="col-md-2">
        <select name="is_admin" class="form-select">
            <option value="">Admin?</option>
            <option value="1" @selected(request('is_admin') === '1')>Yes</option>
            <option value="0" @selected(request('is_admin') === '0')>No</option>
        </select>
    </div>
    <div class="col-md-2">
        <input type="date" name="from_date" value="{{ request('from_date') }}" class="form-control">
    </div>
    <div class="col-md-2">
        <input type="date" name="to_date" value="{{ request('to_date') }}" class="form-control">
    </div>
    <div class="col-md-3 d-flex">
        <button class="btn btn-secondary me-2" type="submit">Filter</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Reset</a>
    </div>
</form>

<table class="table table-striped align-middle">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Admin</th>
        <th>Created At</th>
        <th class="text-end">Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->is_admin)
                    <span class="badge bg-success">Yes</span>
                @else
                    <span class="badge bg-secondary">No</span>
                @endif
            </td>
            <td>{{ $user->created_at->format('Y-m-d') }}</td>
            <td class="text-end">
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">No users found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $users->links() }}
@endsection
