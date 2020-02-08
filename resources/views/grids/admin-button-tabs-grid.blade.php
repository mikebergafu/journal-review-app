<section class="alazea-portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <button class="btn" href="#tab_banners" data-toggle="tab">
                                    <i class="fa fa-flag"></i> Site Banners
                                </button>
                            </li>
                            <li>
                                <button class="btn" href="#tab_default_2" data-toggle="tab">
                                    <i class="fa fa-briefcase"></i> About Us
                                </button>
                            </li>
                            <li>
                                <button class="btn" href="#tab_default_3" data-toggle="tab">
                                    <i class="fa fa-location-arrow"></i> Addresses
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_banners">
                                <div class="row">
                                    <div class="col-6">
                                        <p>
                                            Banners and Sliders
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-success pull-right" data-toggle="modal"
                                           data-target="#addBannerModal" href="#" >
                                            Add New Banner
                                        </a>
                                    </div>
                                </div>

                                <div class="single-widget-area">

                                    <!-- Single Latest Posts -->
                                    @if(count($banners) === 0)
                                        <h4>No Data Available yet</h4>
                                    @endif
                                    @foreach($banners as $banner)
                                        <div class="single-latest-post d-flex align-items-center">
                                            <div class="post-thumb">
                                                <img src="img/bg-img/30.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="#" class="post-title">
                                                    <h4>{{$banner->banner_title}}</h4>
                                                </a>
                                                <p>{{$banner->banner_message}}</p>
                                                <a href="#" class="post-date">Showing @  {{$banner->start_date.' to '.$banner->end_date}}</a>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>

                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <a href="{{route('about.add')}}" class="btn btn-success text-white pull-right" >Add New About</a>
                                <p>
                                    About
                                </p>
                                <div class="row">

                                    <!-- Single Blog Post Area -->
                                    <div class="col-12 col-lg-12">
                                        <div class="single-blog-post mb-50">
                                            <div class="post-content">
                                                @php
                                                 echo  $about->about_text
                                                @endphp
                                                <div class="post-meta">
                                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$about->created_at->diffForHumans()}}</a>
                                                    <a class="btn btn-warning text-white pull-right" href="{{route('about.edit')}}"><i class="fa fa-pencil text-white" aria-hidden="true"></i> Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <p>
                                    My Messages
                                </p>
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim
                                    veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                    ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat
                                </p>
                                <p>
                                    <a class="btn btn-info" href="http://ppsgh.org" target="_blank">
                                        Learn more...
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
</section>

@include('modals.create-banner-modal')
