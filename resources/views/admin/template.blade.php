
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Universitas Pamulang')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            height: 64px;
            background-color: #ffc107;
            z-index: 1030;
        }

        .admin-sidebar {
            position: fixed;
            top: 64px;
            left: 0;
            width: 220px;
            height: calc(100vh - 64px);
            background-color: #343a40;
            color: white;
        }

        .admin-sidebar h5 {
            padding: 20px 10px;
            text-align: center;
            border-bottom: 1px solid #495057;
        }

        .admin-sidebar a {
            display: block;
            color: white;
            padding: 13px 20px;
            text-decoration: none;
        }

        .admin-sidebar a:hover,
        .admin-sidebar a.active {
            background-color: #495057;
        }

        .admin-content {
            margin-left: 220px;
            padding: 90px 25px 25px;
            min-height: calc(100vh - 64px);
        }

        .admin-footer {
            margin-left: 220px;
            padding: 15px;
            text-align: center;
            background-color: white;
            border-top: 1px solid #dee2e6;
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                position: relative;
                top: 64px;
                width: 100%;
                height: auto;
            }

            .admin-content {
                margin-left: 0;
                padding: 85px 15px 20px;
            }

            .admin-footer {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top shadow-sm px-3">
        <a class="navbar-brand fw-bold d-flex flex-column"
           href="{{ route('admin.dashboard') }}"
           style="line-height: 1.2;">

            <span>UNIVERSITAS PAMULANG</span>

            <small style="font-size: 11px; font-weight: normal;">
                Sistem Informasi
            </small>
        </a>

        <div class="ms-auto">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-dark btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="admin-sidebar shadow">
        <h5 class="fw-bold">ADMIN PANEL</h5>

        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('admin.projects.index') }}"
           class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
            Data Project
        </a>
    </div>

    <main class="admin-content">
        <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded shadow-sm">
            <h4 class="fw-bold mb-0">@yield('page-title', 'Dashboard')</h4>
            <span class="text-muted">Halo, Administrator</span>
        </div>

        @yield('content')
    </main>

    <footer class="admin-footer">
        <p class="mb-0">
            &copy; {{ date('Y') }} MyProfile. All rights reserved.
        </p>
    </footer>

    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

    @yield('scripts')

</body>
</html>
