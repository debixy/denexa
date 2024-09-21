<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ route('users.index') }}">
            <i class="bi bi-people"></i> Users
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('analytics') ? 'active' : '' }}" href="{{ route('analytics.index') }}">
            <i class="bi bi-graph-up"></i> Analytics
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('settings') ? 'active' : '' }}" href="{{ route('settings.index') }}">
            <i class="bi bi-gear"></i> Settings
        </a>
    </li>
</ul>
