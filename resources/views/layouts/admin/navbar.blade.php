<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav d-flex align-items-center justify-content-center">
            {{-- <div class="nav-item d-flex align-items-center">
        <i class="bx bx-search fs-4 lh-0"></i>
        <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
            aria-label="Search..." />
    </div> --}}
            <h4 class="m-0">
                {{ $title }}
            </h4>
        </div>

        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item lh-1 me-3">
                {{ Auth::user()->name }}
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                        <img src="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : asset('admin/default/img/favicon.png') }}"
                            alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : asset('admin/default/img/favicon.png') }}"
                                            alt class="w-px-40 h-auto rounded-circle" />

                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">{{ Auth::user()->name }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('frontend.home') }}" target="_blank">
                            <i class='bx bx-show me-2'></i>
                            <span class="align-middle">View Site</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('password.change.index') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('register') }}">
                            <i class="bx bx-user-plus me-2"></i>
                            <span class="align-middle">Create User</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('admin.setting.index') }}">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>

                    <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
