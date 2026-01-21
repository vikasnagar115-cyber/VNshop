@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text fs-3 mb-0">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Admins</h5>
                <p class="card-text fs-3 mb-0">{{ $admins }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
