<div class="d-flex justify-content-between align-items-center">
    <h4 class="mb-0">@yield('page-title')</h4>

    <div class="breadcrumb-right">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">@yield('page-title')</li>
        </ol>
    </div>
</div>
