<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from themepure.net/template/outstock-prv/outstock/shop-4-col.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Sep 2021 13:05:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @livewireStyles
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- prealoder area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
            </div>
        </div>
    </div>
    <!-- prealoder area end -->

    <!-- header area start -->
    @include('storeViews.header')
    <!-- header area end -->

    <!-- scroll up area start -->
    <div class="scroll-up" id="scroll" style="display: none;">
        <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- scroll up area end -->

    <!-- search area start -->
    <section class="header__search white-bg transition-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header__search-inner text-center">
                        <form action="#">
                            <div class="header__search-btn">
                                <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                            </div>
                            <div class="header__search-header">
                                <h3>Search</h3>
                            </div>
                            <div class="header__search-categories">
                                <ul class="search-category">
                                    <li><a href="shop.html">All Categories</a></li>
                                    <li><a href="shop.html">Accessories</a></li>
                                    <li><a href="shop.html">Chair</a></li>
                                    <li><a href="shop.html">Tablet</a></li>
                                    <li><a href="shop.html">Men</a></li>
                                    <li><a href="shop.html">Women</a></li>

                                </ul>
                            </div>
                            <div class="header__search-input p-relative">
                                <input type="text" placeholder="Search for products... ">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="body-overlay transition-3"></div>
    <!-- search area end -->

    <!-- extra info area start -->
    <section class="extra__info transition-3">
        <div class="extra__info-inner">
            <div class="extra__info-close text-right">
                <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu d-block d-lg-none">
                <ul id="mobile-menu-active">
                    <li class="active has-dropdown"><a href="index.html">Home</a>
                        <ul class="submenu transition-3">
                            <li><a href="index.html">Home Style 1</a></li>
                            <li><a href="index-2.html">Home Style 2</a></li>
                            <li><a href="index-3.html">Home Style 3</a></li>
                            <li><a href="index-4.html">Home Style 4</a></li>
                            <li><a href="index-5.html">Home Style 5</a></li>
                            <li><a href="index-6.html">Home Style 6</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                        <ul class="submenu transition-3" data-background="assets/img/bg/mega-menu-bg.jpg">
                            <li class="has-dropdown">
                                <a href="shop.html">Shop Pages</a>
                                <ul>
                                    <li><a href="shop.html">Standard Shop Page</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                    <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                    <li><a href="shop.html">Shop Page</a></li>
                                    <li><a href="shop.html">Shop Page </a></li>
                                    <li><a href="shop.html">Shop Infinity</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="shop.html">Products Pages</a>
                                <ul>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="product-details.html">Product Page V2</a></li>
                                    <li><a href="product-details.html">Product Page V3</a></li>
                                    <li><a href="product-details.html">Product Page V4</a></li>
                                    <li><a href="product-details.html">Simple Product</a></li>
                                    <li><a href="product-details.html">Variable Product</a></li>
                                    <li><a href="product-details.html">External Product</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="shop.html">Other Shop Pages</a>
                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                        <ul class="submenu transition-3">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                            <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                            <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                            <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="shop.html">Pages</a>
                        <ul class="submenu transition-3">
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="error.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </div>
    </section>
    <div class="body-overlay transition-3"></div>
    <!-- extra info area end -->

    <main>
        @yield('content')

    </main>

    <!-- footer area start -->
    @include('storeViews.footer')
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui-slider-range.js')}}"></script>
    <script src="{{asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/main2.js')}}"></script>
    @livewireScripts

</body>

<!-- Mirrored from themepure.net/template/outstock-prv/outstock/shop-4-col.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Sep 2021 13:05:53 GMT -->

</html>