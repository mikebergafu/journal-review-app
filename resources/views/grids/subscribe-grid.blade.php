<!-- ##### Subscribe Area Start ##### -->
<section class="subscribe-newsletter-area" style="background-image: url({{asset('alazea/img/bg-img/subscribe.png')}});">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading mb-0">
                    <h2>Join the Newsletter</h2>
                    <p>Subscribe to our newsletter and get events and articles posting real-time</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="subscribe-form">
                    <form action="{{route('subscribe')}}" method="get">
                        <input type="email" name="email" id="email" placeholder="Enter your email" required
                               autofocus>
                        <button type="submit" class="btn alazea-btn">SUBSCRIBE</button>
                        @error('email')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Side Thumbnail -->
    <div class="subscribe-side-thumb wow fadeInUp" data-wow-delay="500ms">
        <img class="first-img" src="{{asset('alazea/img/core-img/leaf.png')}}" alt="">
    </div>
</section>
<!-- ##### Subscribe Area End ##### -->

