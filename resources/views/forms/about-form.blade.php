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

                                        <label for="about_text">About Text</label>
                                        <textarea class="form-control" rows="10" id="about_text"
                                                                                  name="about_text" placeholder="Enter About Text Here.."></textarea>
                                        @if ($errors->has('about_text'))
                                            <span class="text-danger">{{ $errors->first('about_text') }}</span>
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
