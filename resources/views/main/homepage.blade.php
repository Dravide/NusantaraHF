<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{!! asset('main/img/favicon.png') !!}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{!! asset('main/css/font-icons.css') !!}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{!! asset('main/css/plugins.css') !!}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{!! asset('main/css/style.css') !!}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{!! asset('main/css/responsive.css') !!}">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
    <header class="ltn__header-area ltn__header-3 section-bg-6">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:nusantara_japan@yahoo.co.jp#"><i class="icon-mail"></i> nusantara_japan@yahoo.co.jp</a></li>
                                <li><a href="#"><i class="icon-placeholder"></i> Shizuoka Ken Fujieda Shi Daitocho</a></li>
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
                                                        <li><a href="#">Indonesian</a></li>
                                                        <li><a href="#">Japanese</a></li>
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
        <div class="ltn__header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="{{route('rootRoute')}}"><img src="main/img/Logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col header-contact-serarch-column d-none d-lg-block">
                        <div class="header-contact-search">
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Phone</h6>
                                    <p><a href="tel:0546314436">054-631-4436</a></p>
                                </div>
                            </div>
                            <!-- header-search-2 -->
                            <div class="header-search-2">
                                <form id="#123" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- header-options -->
                        <div class="ltn__header-options">
                            <ul>
                                <li class="d-lg-none">
                                    <!-- header-search-1 -->
                                    <div class="header-search-wrap">
                                        <div class="header-search-1">
                                            <div class="search-icon">
                                                <i class="icon-search  for-search-show"></i>
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
                                </li>
                                <li class="d-none---">
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
                                </li>
                                <li>
                                    <!-- mini-cart 2 -->
                                    <div class="mini-cart-icon mini-cart-icon-2">
                                        <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                            <span class="mini-cart-icon">
                                                <i class="icon-shopping-cart"></i>
                                                <sup>2</sup>
                                            </span>
                                            <h6><span>Your Cart</span> <span class="ltn__secondary-color">$89.25</span></h6>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
        <!-- header-bottom-area start -->
        <div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg--- section-bg-1 menu-color-white--- d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col header-menu-column justify-content-center">
                        <div class="sticky-logo">
                            <div class="site-logo">
                                <a href="{{route('rootRoute')}}"><img src="{{asset('main/img/logo.png')}}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="header-menu header-menu-2">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="{{route('rootRoute')}}">Home</a></li>
                                        <li class="menu-icon"><a href="{{route('shopRoute')}}">Shop</a></li>
                                        <li class="menu-icon"><a href="{{route('rootRoute')}}/about">About</a></li>
                                        <li class="menu-icon"><a href="{{route('rootRoute')}}/contact">Contact</a></li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->
    </header>
    <!-- HEADER AREA END -->

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
                    <li class="menu-icon"><a href="{{route('rootRoute')}}">Home</a></li>
                    <li class="menu-icon"><a href="{{route('shopRoute')}}">Shop</a></li>
                    <li class="menu-icon"><a href="{{route('rootRoute')}}/about">About</a></li>
                    <li class="menu-icon"><a href="{{route('rootRoute')}}/contact">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account.html" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart.html" title="Shoping Cart">
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


    <div class="mobile-header-menu-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-lg-none">
                        <span>MENU</span>
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

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3---  section-bg-1--- mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- CATEGORY-MENU-LIST START -->
                    <div class="ltn__category-menu-wrap">
                        <div class="ltn__category-menu-title">
                            <h2 class="section-bg-1 text-color-white---">categories</h2>
                        </div>
                        <div class="ltn__category-menu-toggle ltn__one-line-active">
                            <ul>
                                <!-- Submenu Column - unlimited -->
                                @foreach($cat as $cat)
                                <li class="ltn__category-menu-item ltn__category-menu-drop">
                                    <a href="{{route('shopRoute')}}/{{$cat->slug}}"><i class="icon-shopping-bags"></i>{{$cat->nama_kategori}} </a>
                                </li>
                                @endforeach


                                <!-- Show more menu -->

                                @foreach($moreCat as $moreCat)
                                <li class="ltn__category-menu-more-item-child">
                                    <a href="{{route('shopRoute')}}/{{$moreCat->slug}}"><i class="icon-options"></i>{{$moreCat->nama_kategori}}</a>
                                </li>
                                @endforeach
                                <li class="ltn__category-menu-more-item-parent">
                                    <a class="rx-default">
                                        More categories <span class="cat-thumb  icon-plus"></span>
                                    </a>
                                    <a class="rx-show">
                                        close menu <span class="cat-thumb  icon-remove"></span>
                                    </a>
                                </li>
                                <!-- Single menu end -->
                            </ul>
                        </div>
                    </div>
                    <!-- END CATEGORY-MENU-LIST -->
                </div>
                <div class="col-lg-9">
                    <div class="ltn__slide-active-2 slick-slide-arrow-1 slick-slide-dots-1">
                        <!-- ltn__slide-item -->
                        <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bg="{{asset('main/img/slider/bg-2.jpeg')}}">
                            <div class="ltn__slide-item-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h5 class="slide-sub-title ltn__secondary-color animated text-uppercase">Nikmati Kemudahan Berbelanja di Nusantara</h5>
                                                    <h1 class="slide-title  animated">Dengan Cita Rasa <br>  Indonesia</h1>
                                                    <div class="slide-brief animated ">
                                                        <p>Nusantara Halal Shop menyediakan berbagai macam kebutuhan pangan halal. Semua produk merupakan produk halal yang diimport dari Indonesia</p>
                                                    </div>
                                                    <div class="btn-wrapper  animated">
                                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                            <div class="slide-item-img">
                                                <!-- <a href="shop.html"><img src="main/img/product/1.png" alt="Image"></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__slide-item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area mt-35 mt--65---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="main/img/icons/svg/8-trolley.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Free shipping</h4>
                                <p>On all orders over ¥30.000</p>
                            </div>
                        </div>
                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="main/img/icons/svg/9-money.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>100% Halal</h4>
                                <p>Moneyback guarantee</p>
                            </div>
                        </div>

                        <div class="ltn__feature-item ltn__feature-item-8">
                            <div class="ltn__feature-icon">
                                <img src="main/img/icons/svg/11-gift-card.svg" alt="#">
                            </div>
                            <div class="ltn__feature-info">
                                <h4>Get Promo</h4>
                                <p>On all orders over</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                        <h1 class="section-title">{{ __('messages.welcome') }}</h1>
                        <p>Tersedia berbagai macam produk pangan dengan berbagai macam kategori produk.</p>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-toggle="tab" href="#liton_tab_3_1">Sayuran</a>
                            <a data-toggle="tab" href="#liton_tab_3_2" class="">Buah-Buahan</a>
                            <a data-toggle="tab" href="#liton_tab_3_3" class="">Rempah-Rempah</a>
                            <a data-toggle="tab" href="#liton_tab_3_4" class="">Daging</a>
                            <a data-toggle="tab" href="#liton_tab_3_5" class="">Makanan</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($sayuran as $sayuran)
                                    <div class="col-lg-12">

                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$sayuran->gambar}}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
{{--                                                            <li class="sale-badge">-19%</li>--}}
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                            <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$sayuran->id}}">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">{{$sayuran->nama_produk}}</a></h2>
                                                    <div class="product-price">

                                                        @if(session()->get('wa') == null)
                                                            <span>¥{{$sayuran->harga}}</span>
                                                        @else
                                                            <span>¥{{$sayuran->harga_reseller}}</span>
                                                            <del>¥{{$sayuran->harga}}</del>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>



                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->

                                    <!-- ltn__product-item -->
                                    @foreach($buah as $buah)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$buah->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                        <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$buah->id}}">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">{{$buah->nama_produk}}</a></h2>
                                                <div class="product-price">

                                                    @if(session()->get('wa') == null)
                                                        <span>¥{{$buah->harga}}</span>
                                                    @else
                                                        <span>¥{{$buah->harga_reseller}}</span>
                                                        <del>¥{{$buah->harga}}</del>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    <!-- ltn__product-item -->

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($rempah as $rempah)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$rempah->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$rempah->id}}">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">{{$rempah->nama_produk}}</a></h2>
                                                <div class="product-price">

                                                    @if(session()->get('wa') == null)
                                                        <span>¥{{$rempah->harga}}</span>
                                                    @else
                                                        <span>¥{{$rempah->harga_reseller}}</span>
                                                        <del>¥{{$rempah->harga}}</del>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    <!-- ltn__product-item -->

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($daging as $daging)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$daging->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                        <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$daging->id}}">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">{{$daging->nama_produk}}</a></h2>
                                                <div class="product-price">

                                                    @if(session()->get('wa') == null)
                                                        <span>¥{{$daging->harga}}</span>
                                                    @else
                                                        <span>¥{{$daging->harga_reseller}}</span>
                                                        <del>¥{{$daging->harga}}</del>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    <!-- ltn__product-item -->

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($makanan as $makanan)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$makanan->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$makanan->id}}">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">{{$makanan->nama_produk}}</a></h2>
                                                <div class="product-price">

                                                    @if(session()->get('wa') == null)
                                                        <span>¥{{$makanan->harga}}</span>
                                                    @else
                                                        <span>¥{{$makanan->harga_reseller}}</span>
                                                        <del>¥{{$makanan->harga}}</del>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    <!-- ltn__product-item -->

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->

    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1 pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title white-color---">Top Catagories</h1>
                        <p class="white-color---">A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-1.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Browse all</a></h5>
                            <h6>(235 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-2.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Vegetables</a></h5>
                            <h6>(78 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-3.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Fruits</a></h5>
                            <h6>(45 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-4.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Meat</a></h5>
                            <h6>(15 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-5.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Fish</a></h5>
                            <h6>(25 item)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="ltn__category-item ltn__category-item-3 text-center">
                        <div class="ltn__category-item-img">
                            <a href="shop.html">
                                <img src="main/img/icons/icon-img/category-3.png" alt="Image">
                            </a>
                        </div>
                        <div class="ltn__category-item-name">
                            <h5><a href="shop.html">Others</a></h5>
                            <h6>(85 item)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Special Offers</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach($makanan2 as $makanan2)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$makanan2->gambar}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">-25%</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$makanan2->id}}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">{{$makanan2->nama_produk}}</a></h2>
                            <div class="product-price">

                                @if(session()->get('wa') == null)
                                    <span>¥{{$makanan2->harga}}</span>
                                @else
                                    <span>¥{{$makanan2->harga_reseller}}</span>
                                    <del>¥{{$makanan2->harga}}</del>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ltn__product-item -->

                <!-- ltn__product-item -->

                <!-- ltn__product-item -->

                <!-- ltn__product-item -->

                <!-- ltn__product-item -->

                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- CALL TO ACTION START (call-to-action-2) -->
    <div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-2 text-center">
                        <h2>Get A Free Service Or Make A Call</h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="{{route('rootRoute')}}/contact"><i class="fas fa-phone-volume"></i> MAKE A CALL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area mt-120">
        <div class="container">
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('main/img/banner/banner-1.jpeg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('main/img/banner/banner-2.jpeg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop.html"><img src="{{asset('main/img/banner/banner-1.jpeg')}}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->


    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-1 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo mb-10">
                                <div class="site-logo">
                                    <img src="main/img/logo-1.png" alt="Logo">
                                </div>
                            </div>
                            <p>Nusantara Halal Shop menyajikan berbagai produk yang berasal asli dari Indonesia.</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>426-0044 Shizuoka Ken Fujieda Shi Daitocho 653-3</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:0546314436">054-631-4436</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:nusantara_japan@yahoo.co.jp">nusantara_japan@yahoo.co.jp</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{route('rootRoute')}}/about">About</a></li>
                                    <li><a href="{{route('rootRoute')}}/shop">All Products</a></li>
                                    <li><a href="{{route('rootRoute')}}/contact">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="order-tracking.html">Order tracking</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-1 border-top  ltn__border-top-2--- plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-right">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    @include('components.main.modal-product')

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->


<!-- All JS Plugins -->
<script src="main/js/plugins.js"></script>
<!-- Main JS -->
<script src="main/js/main.js"></script>
<script>
    $(document).on('click', '.atc', function(){
        var id = $(this).attr('data-id');
        var url = "{{route('shopRoute')}}/getProduct/";
        $.ajax({
            url: url+id,
            type: "GET",
            cache: false,
            success: function(response){
                //Set Value Ajax
                var gambar = "{{route('rootRoute')}}/images/";
                $('.product-name').text(response.data.nama_produk);

                $('.harga-asli').text('¥'+response.data.harga);
                $('.harga-reseller').text('¥'+response.data.harga_reseller);

                $('.idProduk').val(response.data.id);
                $('.gambar_produk').attr('src', gambar+response.data.gambar);
                var kategori = response.data.kategori_id;
                for(var i = 0; i < kategori.length; i++) {
                    var cat = kategori[i].nama_kategori;
                    var toHtml = "<a href='#' id='cat'>"+cat+"</a>";
                    $('.categories').html(toHtml);
                }

                //open modal
                $("#modal-atc").modal("show");
            }
        });
    });
</script>

</body>
</html>

