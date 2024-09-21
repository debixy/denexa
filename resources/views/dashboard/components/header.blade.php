<header class="dashboard-header">
    <div class="header-content">
        <h1>Dashboard</h1>
        <input type="text" placeholder="Search..." class="search-input" />
        <div class="user-menu">
            <span>{{ Auth::user()->name }}</span>
            <img src="{{ asset('images/user-avatar.png') }}" alt="User Avatar" class="user-avatar" />
        </div>
    </div>
</header>
