<section class="contact-area section-padding-100-0" id="contact-box">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>GET IN TOUCH</h2>
                    <p>Send us a message, we will contact you back later</p>
                </div>
                <!-- Contact Form Area -->
                <div class="contact-form-area mb-100">
                    <form action="{{route('contact.us')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control is-invalid @error('name') is-invalid @enderror" id="name"
                                           name="name" placeholder="Your Name" value="{{old('name')}}" required
                                           autofocus>
                                </div>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="email"
                                           class="form-control is-invalid @error('email') is-invalid @enderror"
                                           id="email" name="email" placeholder="Your Email" value="{{old('email')}}"
                                           required autofocus>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control is-invalid @error('subject') is-invalid @enderror"
                                           id="subject" name="subject" placeholder="Subject" is-invalid required
                                           autofocus>
                                </div>
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control is-invalid @error('message') is-invalid @enderror"
                                              name="message" id="message" cols="30" rows="10" placeholder="Message"
                                              required autofocus>{{old('message')}}</textarea>
                                </div>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn alazea-btn mt-15">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

           {{-- <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                            allowfullscreen></iframe>
                </div>
            </div>--}}
        </div>
    </div>
</section>
