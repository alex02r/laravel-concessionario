<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link link-dark" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="nav-link link-dark {{ Route::currentRouteName() == 'admin.dashboard' ? 'active text-white' : ''}}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.autos.index') }}" class="nav-link link-dark {{ Route::currentRouteName() == 'admin.autos.index' ? 'active text-white' : ''}}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table"></use>
                </svg>
                Autos
            </a>
        </li>
        <li>
            <a href="{{ route('admin.brands.index') }}" class="nav-link link-dark {{ Route::currentRouteName() == 'admin.brands.index' ? 'active text-white' : ''}}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Brands
            </a>
        </li>
        <li>
            <a href="{{ route('admin.optionals.index') }}" class="nav-link link-dark {{ Route::currentRouteName() == 'admin.optionals.index' ? 'active text-white' : ''}}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                Optionals
            </a>
        </li>
    </ul>
</div>
