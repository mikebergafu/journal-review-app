
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="product_details_tab clearfix">
                <div class="row" >
                    <div class="col-8 offset-2" >
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email Address">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn alazea-btn mt-15">Login</button>
                                </div>
                                <div class="col-6">
                                    <a href="{{route('register')}}" class="text-info" >Not Registered yet? Click to Sign up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

