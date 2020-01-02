<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    @if($small_banner_background ?? '')
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
             style="background-image: url({{asset($small_banner_background)}});">

            <h2>
                @yield('banner-title',config('app.name') )
            </h2>
        </div>

        @yield('small-banner-nav')

    @else
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
             style="background-image: url({{asset('alazea/img/bg-img/24.jpg')}});">

            <h2>
                @yield('banner-title',config('app.name') )
            </h2>
        </div>

        @yield('small-banner-nav')
    @endif

</div>
