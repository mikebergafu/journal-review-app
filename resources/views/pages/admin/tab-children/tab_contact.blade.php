@if($active ?? '')
    <div class="tab-pane {{$active}}" id="tab_contact_us">
        <a href="{{route('about.add')}}" class="btn btn-success text-white pull-right" >Add New Contact</a>
        <p>
            Contact
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
@else
    <div class="tab-pane" id="tab_contact_us">
        <a href="{{route('about.add')}}" class="btn btn-success text-white pull-right" >Add New Contact</a>
        <p>
            Contact
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
@endif
