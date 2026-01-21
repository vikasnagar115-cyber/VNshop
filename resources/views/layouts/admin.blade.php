<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .app-shell { min-height: 100vh; }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            position: sticky;
            top: 0;
            transition: width 160ms ease;
        }
        .sidebar .brand-text,
        .sidebar .link-text,
        .sidebar .user-text {
            transition: opacity 120ms ease;
        }

        /* Collapsed state */
        .sidebar.is-collapsed {
            width: 80px;
        }
        .sidebar.is-collapsed .brand-text,
        .sidebar.is-collapsed .link-text,
        .sidebar.is-collapsed .user-text {
            opacity: 0;
            width: 0;
            overflow: hidden;
            white-space: nowrap;
        }
        .sidebar.is-collapsed .nav-link {
            justify-content: center;
        }
        .sidebar.is-collapsed .toggle-btn {
            width: 100%;
        }

        @media (max-width: 991.98px) {
            .sidebar { width: 100%; min-height: auto; position: static; }
            .sidebar.is-collapsed { width: 100%; }
            .sidebar.is-collapsed .brand-text,
            .sidebar.is-collapsed .link-text,
            .sidebar.is-collapsed .user-text {
                opacity: 1;
                width: auto;
            }
        }
    </style>
</head>
<body>
<div class="d-flex app-shell">
    <aside id="adminSidebar" class="sidebar bg-dark text-white p-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a class="d-flex align-items-center text-white text-decoration-none" href="{{ route('admin.dashboard') }}">
                <span class="fs-4 brand-text">Admin Panel</span>
            </a>
            <button id="sidebarToggle" type="button" class="btn btn-sm btn-outline-light toggle-btn" aria-label="Toggle sidebar">
                ☰
            </button>
        </div>
        <hr class="border-secondary">

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span aria-hidden="true">🏠</span>
                    <span class="link-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <span aria-hidden="true">👤</span>
                    <span class="link-text">Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.customers.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ request()->routeIs('admin.customers.*') ? 'active' : '' }}">
                    <span aria-hidden="true">🧾</span>
                    <span class="link-text">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <span aria-hidden="true">📂</span>
                    <span class="link-text">Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.products.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <span aria-hidden="true">📦</span>
                    <span class="link-text">Products</span>
                </a>
            </li>
        </ul>

        <hr class="border-secondary">

        @auth
            <div class="d-flex align-items-center justify-content-between">
                <div class="small text-white-50 user-text">
                    {{ auth()->user()->name }}
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-light" type="submit">Logout</button>
                </form>
            </div>
        @endauth
    </aside>

    <main class="flex-grow-1">
        <div class="container py-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @yield('content')
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        const sidebar = document.getElementById('adminSidebar');
        const toggle = document.getElementById('sidebarToggle');
        if (!sidebar || !toggle) return;

        const STORAGE_KEY = 'admin.sidebar.collapsed';

        function setCollapsed(collapsed) {
            sidebar.classList.toggle('is-collapsed', collapsed);
            try { localStorage.setItem(STORAGE_KEY, collapsed ? '1' : '0'); } catch (e) {}
        }

        // init
        let collapsed = false;
        try { collapsed = localStorage.getItem(STORAGE_KEY) === '1'; } catch (e) {}
        setCollapsed(collapsed);

        toggle.addEventListener('click', function () {
            setCollapsed(!sidebar.classList.contains('is-collapsed'));
        });
    })();
</script>
</body>
</html>
