  <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i></div>

    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="E" class="characters">E</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="L" class="characters">L</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="R" class="characters">R</span>
                </div>
            </div>
        </div>
    </div> <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="assets/img/logo-white.svg" alt="Realar">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('homepage') }}">
                            Home
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('homepage') }}">Home Luxury Apartment</a></li>
                            <li><a href="home-2.html">Home Real Estate Agency</a></li>
                            <li><a href="home-3.html">Home Commercial Real Estate</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">
                            About Us
                        </a></li>
                    <li class="menu-item-has-children">
                        <a href="property.html">
                            Properties
                        </a>
                        <ul class="sub-menu">
                            <li><a href="property.html">
                                    Properties
                                </a></li>
                            <li><a href="property-details.html">
                                    Property Details
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="agency.html">
                            Agencies
                        </a>
                        <ul class="sub-menu">
                            <li><a href="agency.html">
                                    Agencies
                                </a></li>
                            <li><a href="agency-details.html">
                                    Agencies Details
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages
                        </a>
                        <ul class="sub-menu">
                            <li><a href="team.html">
                                    Agent Page
                                </a></li>
                            <li><a href="team-details.html">
                                    Agent Details
                                </a></li>
                            <li><a href="pricing.html">
                                    Pricing Page
                                </a></li>
                            <li class="menu-item-has-children"><a href="shop.html">
                                    Shop Page
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">
                                            Shop Page
                                        </a></li>
                                    <li><a href="shop-details.html">
                                            Shop Details
                                        </a></li>
                                    <li><a href="cart.html">
                                            Cart Page
                                        </a></li>
                                    <li><a href="checkout.html">
                                            Checkout Page
                                        </a></li>
                                    <li><a href="wishlist.html">
                                            Wistlist Page
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="error.html">
                                    Error Page
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">
                            Blog
                        </a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">
                                    Blog Page
                                </a></li>
                            <li><a href="blog-details.html">
                                    Blog Details
                                </a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">
                            Contact Us
                        </a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout2">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo.svg" alt="Realar">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('homepage') }}">
                                            Home
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Luxury Apartment</a></li>
                                            <li><a href="home-2.html">Home Real Estate Agency</a></li>
                                            <li><a href="home-3.html">Home Commercial Real Estate</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">
                                            About Us
                                        </a></li>
                                    <li class="menu-item-has-children">
                                        <a href="property.html">
                                            Properties
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="property.html">
                                                    Properties
                                                </a></li>
                                            <li><a href="property-details.html">
                                                    Property Details
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="agency.html">
                                            Agencies
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="agency.html">
                                                    Agencies
                                                </a></li>
                                            <li><a href="agency-details.html">
                                                    Agencies Details
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            Pages
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">
                                                    Agent Page
                                                </a></li>
                                            <li><a href="team-details.html">
                                                    Agent Details
                                                </a></li>
                                            <li><a href="pricing.html">
                                                    Pricing Page
                                                </a></li>
                                            <li class="menu-item-has-children"><a href="shop.html">
                                                    Shop Page
                                                </a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">
                                                            Shop Page
                                                        </a></li>
                                                    <li><a href="shop-details.html">
                                                            Shop Details
                                                        </a></li>
                                                    <li><a href="cart.html">
                                                            Cart Page
                                                        </a></li>
                                                    <li><a href="checkout.html">
                                                            Checkout Page
                                                        </a></li>
                                                    <li><a href="wishlist.html">
                                                            Wistlist Page
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="error.html">
                                                    Error Page
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="blog.html">
                                            Blog
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">
                                                    Blog Page
                                                </a></li>
                                            <li><a href="blog-details.html">
                                                    Blog Details
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">
                                            Contact Us
                                        </a></li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <div class="header-button">
                                <a href="contact.html" class="th-btn style2 th-btn-icon">Request A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>