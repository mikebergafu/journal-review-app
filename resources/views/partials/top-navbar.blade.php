<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Top Header Content -->
                    <div class="top-header-meta">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i
                                class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: ppsg@gmail.com</span></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i
                                class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                    </div>

                    <!-- Top Header Content -->
                    <div class="top-header-meta d-flex">
                    @if(Auth::check())
                        <!-- Language Dropdown -->
                            <div class="language-dropdown">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle mr-30" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">{{Auth::user()->first_name}}</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('profile')}}"> <i class="fa fa-user text-white" ></i> My Account</a>
                                        @role('admin')
                                        <a class="dropdown-item" href="{{route('banner.slider.form')}}"><i class="fa fa-cogs text-white" ></i> Admin
                                            Dashboard</a>
                                        @endrole
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-close text-white" ></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @else
                        <!-- Login -->
                            <div class="login">
                                <a href="{{route('login')}}"><i class="fa fa-key" aria-hidden="true"></i>
                                    <span>Login</span></a>
                            </div>
                    @endif
                    <!-- Cart -->
                        <div class="cart">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> <span>Submit Paper</span></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
