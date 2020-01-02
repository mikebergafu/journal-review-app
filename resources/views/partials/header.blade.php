<header class="header-area">

    <!-- ***** Top Header Area ***** -->
    @include('partials.top-navbar')

    <!-- ***** Navbar Area ***** -->
    <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="alazeaNav">

                    <!-- Nav Brand -->
                    <a href="{{ url('/') }}" class="nav-brand">
                        {{--<img src="{{asset('alazea/img/core-img/logo.png')}}" alt="">--}}

                        <strong class="text-white"> {{ config('app.name', 'Laravel') }}</strong>
                    </a>



                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="shop.html">Editions</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">1st Edition</a></li>
                                        <li><a href="shop-details.html">2nd Edition</a></li>
                                        <li><a href="cart.html">3rd Edition</a></li>
                                        <li><a href="checkout.html">4th Edition</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="portfolio.html">Articles</a></li>
                                <li><a href="shop.html">Do More</a>
                                    <ul class="dropdown">
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="portfolio.html">Events</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Search Icon -->
                            <div id="searchIcon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
