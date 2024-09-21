<aside class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('dashboard.index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Denexa Logo">
                <span>Denexa</span>
            </a>
        </div>
    </div>

    <nav class="sidebar-nav">
        <ul>
            <li>
                <a href="{{ route('dashboard.index') }}"
                    class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                    <i class="feather icon-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                    <i class="feather icon-user"></i>
                    Profile
                </a>
            </li>
            <li>
                <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">
                    <i class="feather icon-activity"></i>
                    Activities
                </a>
            </li>
            <li>
                <a href="#settingsDropdown" class="dropdown-toggle" data-toggle="collapse">
                    <i class="feather icon-settings"></i>
                    Settings
                    <i class="feather icon-chevron-down"></i>
                </a>
                <ul class="collapse" id="settingsDropdown">
                    <li>
                        <a href="{{ route('profile') }}"
                            class="{{ request()->routeIs('account.settings') ? 'active' : '' }}">
                            Account Settings
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activities') }}"
                            class="{{ request()->routeIs('security.settings') ? 'active' : '' }}">
                            Security Settings
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="feather icon-log-out"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</aside>
