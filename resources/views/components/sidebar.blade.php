<div class="sidebar">

    <div class="sidebar-image">
        <img src="{{ asset('images/dlogo.png') }}" alt="Logo">
    </div>

    <ul class="nav">
        <li class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.products') ? 'active' : '' }}">
            <a href="{{ route('dashboard.products') }}">
                <i class="fas fa-box"></i> Products
            </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.sales') ? 'active' : '' }}">
            <a href="{{ route('dashboard.sales') }}">
                <i class="fas fa-chart-line"></i> Sales
            </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.gateway') ? 'active' : '' }}">
            <a href="{{ route('dashboard.gateway') }}">
                <i class="fas fa-credit-card"></i> Gateway
            </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.profile') ? 'active' : '' }}">
            <a href="{{ route('dashboard.profile') }}">
                <i class="fas fa-user"></i> Profile
            </a>
        </li>
        <li class="{{ request()->routeIs('dashboard.add_service') ? 'active' : '' }}">
            <a href="{{ route('dashboard.add_service') }}">
                <i class="fas fa-plus"></i> Add Service
            </a>
        </li>
    </ul>
</div>
