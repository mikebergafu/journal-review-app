@if($active ?? '')
    <div class="tab-pane {{$active}}" id="{{$tab_id}}">
        <div class="row">
            <div class="col-6">
                <p>
                    Papers
                </p>
            </div>
            <div class="col-6">
                <a class="btn btn-success pull-right" data-toggle="modal"
                   data-target="#addBannerModal" href="#" >
                   Submit a Paper
                </a>
            </div>
        </div>

        <div class="single-widget-area">

            <!-- Single Latest Posts -->
            @if(count($papers) === 0)
                <h4>No Data Available yet</h4>
            @endif
            @foreach($papers as $paper)
                <div class="single-latest-post d-flex align-items-center">
                    <div class="post-thumb">
                        <img src="img/bg-img/30.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">
                            <h4>{{$paper->title}}</h4>
                        </a>
                        <p>{{$paper->abstract}}</p>
                        <a href="#" class="post-date">Published on  {{$article->published_at->diffHumans()}}</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

    </div>
@else
    <div class="tab-pane" id="{{$tab_id}}">
        <div class="row">
            <div class="col-6">
                <p>
                    Papers
                </p>
            </div>
            <div class="col-6">
                <a class="btn btn-success pull-right" data-toggle="modal"
                   data-target="#addBannerModal" href="#" >
                    Submit a Paper
                </a>
            </div>
        </div>

        <div class="single-widget-area">

            <!-- Single Latest Posts -->
            @if(count($papers) === 0)
                <h4>No Data Available yet</h4>
            @endif
            @foreach($papers as $paper)
                <div class="single-latest-post d-flex align-items-center">
                    <div class="post-thumb">
                        <img src="img/bg-img/30.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">
                            <h4>{{$paper->title}}</h4>
                        </a>
                        <p>{{$paper->abstract}}</p>
                        <a href="#" class="post-date">Published on  {{$article->published_at->diffHumans()}}</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endif
