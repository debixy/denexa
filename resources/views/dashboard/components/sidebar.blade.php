<aside class="sidebar bg-dark vh-100 text-white">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard.index') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('users') ? 'active' : '' }}"
                href="{{ route('dashboard.index') }}">
                <i class="bi bi-people"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('settings') ? 'active' : '' }}"
                href="{{ route('dashboard.index') }}">
                <i class="bi bi-gear"></i> Settings
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">
                <i class="bi bi-bar-chart-line"></i> Analytics
            </a>
        </li>
    </ul>
</aside>
