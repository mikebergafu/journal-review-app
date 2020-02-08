<section class="single_product_details_area mb-50">

    <div class="container">
        <strong class="text-info" >Welcome! </strong>
        <span>{{Auth::user()->title->name.' '.Auth::user()->first_name }}</span>
        <div class="row">
            <div class="col-12">
                <div class="product_details_tab clearfix">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                        <li class="nav-item">
                            <a href="#description" class="nav-link active" data-toggle="tab" role="tab"><i class="fa fa-user" ></i> My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#addi-info" class="nav-link" data-toggle="tab" role="tab"><i class="fa fa-book" ></i> My Articles</a>
                        </li>
                        <li class="nav-item">
                            <a href="#reviews" class="nav-link" data-toggle="tab" role="tab"> <i class="fa fa-envelope" ></i> Messages <span class="text-muted">(1)</span></a>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="description">
                            <div class="submit_a_review_area mt-50">
                                <h4>View/Update Your My Profile</h4>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="addi-info">

                            <div class="submit_a_review_area mt-50">
                                <h4>Your Articles</h4>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                            <div class="additional_info_area">
                                <div class="single-widget-area">
                                    <!-- Title -->
                                    <div class="widget-title">
                                        <h4>Recent Messages</h4>
                                    </div>

                                    <!-- Single Latest Posts -->
                                    <div class="single-latest-post d-flex align-items-center">
                                        <div class="post-thumb">
                                            <img src="img/bg-img/30.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">
                                                <h6>New Harris Bugg design for Bridgewater</h6>
                                            </a>
                                            <a href="#" class="post-date">20 Jun 2018</a>
                                        </div>
                                    </div>

                                    <!-- Single Latest Posts -->
                                    <div class="single-latest-post d-flex align-items-center">
                                        <div class="post-thumb">
                                            <img src="img/bg-img/31.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">
                                                <h6>The designers will create a new kitchen garden</h6>
                                            </a>
                                            <a href="#" class="post-date">20 Jun 2018</a>
                                        </div>
                                    </div>

                                    <!-- Single Latest Posts -->
                                    <div class="single-latest-post d-flex align-items-center">
                                        <div class="post-thumb">
                                            <img src="img/bg-img/32.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">
                                                <h6>SGD Members win Best of Houzz Design Award</h6>
                                            </a>
                                            <a href="#" class="post-date">20 Jun 2018</a>
                                        </div>
                                    </div>

                                    <!-- Single Latest Posts -->
                                    <div class="single-latest-post d-flex align-items-center">
                                        <div class="post-thumb">
                                            <img src="img/bg-img/33.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="#" class="post-title">
                                                <h6>Shepherding Vegetables From Roof to Restaurant</h6>
                                            </a>
                                            <a href="#" class="post-date">20 Jun 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
