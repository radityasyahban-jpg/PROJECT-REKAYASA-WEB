<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">MyProfile</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/projects') }}" class="nav-link">Projects</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link fw-bold">
                        Admin
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>