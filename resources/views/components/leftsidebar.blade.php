<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('')}}nara/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
            <span>
                        <img src="{{ asset('')}}nara/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ asset('')}}nara/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
        </a>
    </div>



    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span
                            class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ti ti-home-2 menu-icon text-blue"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-basket menu-icon text-success"></i>
                            <span>Pemesanan</span>
                        </a>
                        {{--                        <span class="badge badge-soft-danger badge-pill">4</span>--}}
                    </li>
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>aster Data</span><br><span
                            class="font-10 text-secondary fw-normal">Data Aplikasi</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}">
                            <i class="ti ti-database menu-icon text-info"></i>
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produk.index') }}">
                            <i class="ti ti-list-numbers menu-icon text-warning"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Master Data</span>
                        </a>
                        <div class="collapse " id="sidebarAnalytics">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Data</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-customers.html" class="nav-link ">Produk</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produk.index') }}">
                            <i class="ti ti-list-numbers menu-icon text-warning"></i>
                            <span>Whatsapp Admin</span>
                        </a>
                    </li>


                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2"
                                    aria-label="Close"></button>
                            <img src="{{ asset('')}}nara/images/speaker-light.png" alt="" class="" height="110">
                            <h5 class="mt-0">Mannat Themes</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                        </div>
                    </li>
                </ul><!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
        </div>
    </div>
</div>
