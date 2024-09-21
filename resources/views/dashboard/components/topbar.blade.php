<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">Denexa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <!-- Notifications -->
                <div class="dropdown me-4">
                    <a href="#" class="dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                        <li><a class="dropdown-item" href="#">New user registered</a></li>
                        <li><a class="dropdown-item" href="#">Server downtime reported</a></li>
                        <li><a class="dropdown-item" href="#">Upgrade available</a></li>
                    </ul>
                </div>

                <!-- User Profile -->
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('images/user-avatar.png') }}" alt="Profile" class="rounded-circle"
                            width="40">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard.index') }}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
