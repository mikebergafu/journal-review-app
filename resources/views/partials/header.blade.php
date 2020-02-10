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
                        <img src="{{asset('alazea/img/core-img/logo.png')}}" alt="" width="120">

                        {{--<strong class="text-white"> {{ config('app.name', 'Laravel') }}</strong>--}}
                    </a>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span>

                            </span><span>

                            </span><span>
                            </span></span>
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
                                <li><a href="#" onclick="return false;">Editions</a>
                                    <ul class="dropdown">
                                        @foreach(\App\Helpers\BergyHelper::getEditions() as $edition)
                                            <li><a href="{{route('articles.by.articles',$edition->slug)}}">{{\App\Helpers\BergyHelper::ordinal($edition->value)}} Edition</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @if(\Request::is('/') || \Route::current()->getName() == 'home')
                                <li><a href="#"  id="btnAbout" onclick="return false;" >About</a></li>
                                @endif
                                <li><a href="{{route('articles')}}">Articles</a></li>
                                <li><a href="#" onclick="return false;"  >Do More</a>
                                    <ul class="dropdown">
                                        <li><a href="#" onclick="return false;" id="btnContactUs" >Contact Us</a></li>
                                        <li><a href="#" onclick="return false;">Events</a></li>
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
