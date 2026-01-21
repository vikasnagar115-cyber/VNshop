@extends('layouts.admin')

@section('title', 'Customers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Customers</h2>
    <a href="{{ route('admin.customers.create') }}" class="btn btn-primary">Add Customer</a>
</div>

<table class="table table-striped align-middle">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th class="text-end">Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->address }}</td>
            <td class="text-end">
                <a href="{{ route('admin.customers.edit', $customer) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.customers.destroy', $customer) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this customer?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">No customers found.</td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $customers->links() }}
@endsection

