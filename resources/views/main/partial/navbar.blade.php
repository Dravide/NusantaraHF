<header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="#"><i class="icon-placeholder"></i> Shizuoka Ken Fujieda Shi Daitocho </a></li>
                            <li><a href="mailto:nusantara_japan@yahoo.co.jp"><i class="icon-mail"></i> nusantara_japan@yahoo.co.jp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul>

                                                    <li><a href="#">English</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9---">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{route('rootRoute')}}"><img src="{{asset('main/img/logo-2.png')}}" width="200px" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="menu-icon"><a href="{{route('rootRoute')}}">Home</a></li>
                                    <li class="menu-icon"><a href="{{route('rootRoute')}}/about">Get Promo</a></li>
                                    <li class="menu-icon"><a href="{{route('rootRoute')}}/shop">Shop</a></li>
                                    <li><a href="{{route('rootRoute')}}/contact">Contact</a></li>
                                    <li class="special-link"><a href="{{route('rootRoute')}}/contact">GET A QUOTE</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2">
                    <!-- header-search-1 -->
                    <div class="header-search-wrap">
                        <div class="header-search-1">
                            <div class="search-icon">
                                <i class="icon-search for-search-show"></i>
                                <i class="icon-cancel  for-search-close"></i>
                            </div>
                        </div>
                        <div class="header-search-1-form">
                            <form id="#" method="get"  action="#">
                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                <button type="submit">
                                    <span><i class="icon-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- user-menu -->
                    <div class="ltn__drop-menu user-menu">
                        <ul>
                            <li>
                                <a href="#"><i class="icon-user"></i></a>
                                <ul>
                                    @if(session()->get('wa') == null)

                                        <li><a href="{{route('rootRoute')}}/login-reseller">Sign in</a></li>
                                        <li><a href="{{route('rootRoute')}}/register-reseller">Register</a></li>
                                    @else
                                        <li><a href="{{route('rootRoute')}}/logout">Log Out</a></li>

                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- mini-cart -->
                    <div class="mini-cart-icon">
                        <a href="{{route('rootRoute')}}/cart" class="">
                            <i class="icon-shopping-cart"></i>
                            <sup></sup>
                        </a>
                    </div>
                    <!-- mini-cart -->
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- Utilize Cart Menu Start -->
<x-cart/>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">

                <a href="{{route('rootRoute')}}"><img src="{{asset('main/img/logo.png')}}" alt="Logo"></a>

            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{route('rootRoute')}}">Home</a></li>
                <li><a href="{{route('rootRoute')}}/about">Get Promo</a></li>
                <li><a href="{{route('rootRoute')}}/shop">Shop</a></li>
                <li><a href="{{route('rootRoute')}}/contact">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>


                <li>

                    <a href="{{route('rootRoute')}}/cart" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                        <h1 class="section-title white-color">Shop</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

