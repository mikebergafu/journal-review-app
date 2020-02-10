@if($active ?? '')
    <div class="tab-pane {{$active}}" id="{{$tab_id}}">
        <div class="row">
            <div class="col-6">
                <p>
                    Articles
                </p>
            </div>
            <div class="col-6">
                <a class="btn btn-success pull-right" data-toggle="modal"
                   data-target="#addBannerModal" href="#" >
                   Add New  Article
                </a>
            </div>
        </div>

        <div class="single-widget-area">

            <!-- Single Latest Posts -->
            @if(count($articles) === 0)
                <h4>No Data Available yet</h4>
            @endif
            @foreach($articles as $article)
                <div class="single-latest-post d-flex align-items-center">
                    <div class="post-thumb">
                        <img src="img/bg-img/30.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">
                            <h4>{{$article->title}}</h4>
                        </a>
                        <p>{{$article->content}}</p>
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
                    Articles
                </p>
            </div>
            <div class="col-6">
                <a class="btn btn-success pull-right" data-toggle="modal"
                   data-target="#addBannerModal" href="#" >
                    Add New  Article/Paper
                </a>
            </div>
        </div>
        <div class="single-widget-area">

            <!-- Single Latest Posts -->
            @if(count($articles) === 0)
                <h4>No Data Available yet</h4>
            @endif
            @foreach($articles as $article)
                <div class="single-latest-post d-flex align-items-center">
                    <div class="post-thumb">
                        <img src="img/bg-img/30.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="#" class="post-title">
                            <h4>{{$article->title}}</h4>
                        </a>
                        <p>{{$article->content}}</p>
                        <a href="#" class="post-date">Published on  {{$article->published_at->diffHumans()}}</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

    </div>
@endif
