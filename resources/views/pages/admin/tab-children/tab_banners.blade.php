@if($active ?? '')
    <div class="tab-pane {{$active}}" id="tab_banners">
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
@else
    <div class="tab-pane" id="tab_banners">
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
@endif
