<nav class="navbar">
    <div class="container">
        <!-- Logo on the left -->
        <div class="navbar-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Denexa Logo" class="logo">
            </a>
        </div>

        <!-- Hamburger menu for mobile -->
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">&#9776;</span> <!-- Using Unicode for hamburger icon -->
        </button>

        <!-- Centered Nav Links -->
        <div class="navbar-links">
            <ul class="nav-list">
                <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>

        <!-- CTA Button on the right -->
        <div class="cta">
            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        </div>
    </div>
</nav>
