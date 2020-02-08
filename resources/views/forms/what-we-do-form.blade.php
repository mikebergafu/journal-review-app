<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="product_details_tab clearfix">
                <div class="row" >
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2" >
                        <form action="{{route('about.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">

                                        <label for="wwa_title">What we do Title</label>
                                        <textarea class="form-control" rows="10" id="wwa_title"
                                                                                  name="wwa_title" placeholder="Enter What We Do Text Here.."></textarea>
                                        @if ($errors->has('wwa_title'))
                                            <span class="text-danger">{{ $errors->first('wwa_title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">

                                        <label for="wwa_title">What we do Message</label>
                                        <textarea class="form-control" rows="10" id="wwa_message"
                                                  name="wwa_message" placeholder="Enter What We Do Expanded Text Here.."></textarea>
                                        @if ($errors->has('wwa_message'))
                                            <span class="text-danger">{{ $errors->first('wwa_message') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <button type="submit" class="btn alazea-btn mt-15">Save About</button>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'about_text' );
    </script>
</div>
