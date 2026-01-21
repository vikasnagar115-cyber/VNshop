<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $admins = User::where('is_admin', true)->count();

        return view('admin.dashboard', compact('totalUsers', 'admins'));
    }
}
