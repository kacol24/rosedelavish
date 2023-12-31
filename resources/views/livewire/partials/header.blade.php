<div>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            {{--            <div class="offcanvas__top__hover">--}}
            {{--                <span>--}}
            {{--                    Usd <i class="arrow_carrot-down"></i>--}}
            {{--                </span>--}}
            {{--                <ul>--}}
            {{--                    <li>USD</li>--}}
            {{--                    <li>EUR</li>--}}
            {{--                    <li>USD</li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch">
                <img src="{{ asset('img/icon/search.png') }}" alt="icon search">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/heart.png') }}" alt="icon wishlist">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/cart.png') }}" alt="icon cart"> <span>0</span>
            </a>
            @if($this->cart)
                <div class="price">
                    {{ \Lunar\Models\Currency::getDefault()->code }}
                    {{ optional($this->cart)->subTotal ?? 0 }}
                </div>
            @endif
        </div>
        <div id="mobile-menu-wrap"></div>
        @if($storeNotice)
            <div class="offcanvas__text">
                <p>{{ $storeNotice }}</p>
            </div>
        @endif
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        @if($storeNotice)
                            <div class="header__top__left">
                                <p>{{ $storeNotice }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            {{--                            <div class="header__top__hover">--}}
                            {{--                                <span>--}}
                            {{--                                    Usd <i class="arrow_carrot-down"></i>--}}
                            {{--                                </span>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li>USD</li>--}}
                            {{--                                    <li>EUR</li>--}}
                            {{--                                    <li>USD</li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu h-100 align-items-center">
                        <ul class="w-100">
                            <li @class(['active' => request()->routeIs(['home'])])>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li @class(['active' => request()->routeIs(['catalog.index'])])>
                                <a href="{{ route('catalog.index') }}">Shop</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="./contact.html">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="h-100 d-flex align-items-center justify-content-end">
                        <div class="header__nav__option">
                            <a href="#" class="search-switch">
                                <img src="{{ asset('img/icon/search.png') }}" alt="icon search">
                            </a>
                            <a href="#">
                                <img src="{{ asset('img/icon/heart.png') }}" alt="icon wishlist">
                            </a>
                            <a href="#">
                                <img src="{{ asset('img/icon/cart.png') }}" alt="icon cart"> <span>0</span>
                            </a>
                            @if($this->cart)
                                <div class="price">
                                    {{ \Lunar\Models\Currency::getDefault()->code }}
                                    {{ optional($this->cart)->subTotal ?? 0 }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-toggler-button">
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here....." aria-label="search box">
            </form>
        </div>
    </div>
    <!-- Search End -->
</div>
