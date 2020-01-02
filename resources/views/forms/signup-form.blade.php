<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="product_details_tab clearfix">
                <div class="row" >
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3" >
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class=" form-control" id="title_id" name="title_id">
                                                    <option selected disabled>Select your title</option>
                                                    @foreach($titles as $tit)
                                                        <option value="{{$tit->id}}">{{$tit->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('title_id'))
                                                    <span class="text-danger">{{ $errors->first('title_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class=" form-control" id="gender_id" name="gender_id">
                                                    <option selected disabled>Select your Gender/Sex</option>
                                                    @foreach($genders as $gender)
                                                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('gender_id'))
                                                    <span class="text-danger">{{ $errors->first('gender_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control{{ $errors->has('first_name') ? ' has-error' : '' }}"
                                               id="first_name" name="first_name"
                                               value="{{old('first_name')}}" placeholder="First Name">

                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                               value="{{old('last_name')}}" placeholder="Last Name">
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="other_name" name="other_name"
                                               value="{{old('other_name')}}" placeholder="Other Name(s)">
                                        @if ($errors->has('other_name'))
                                            <span class="text-danger">{{ $errors->first('other_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="{{old('email')}}" placeholder="Email Address">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">

                                        <input type="password" class="form-control" id="password-confirm"
                                               name="password_confirmation" placeholder="Repeat Password">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <button type="submit" class="btn alazea-btn mt-15">Register</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <a href="{{route('login')}}" class="text-info">
                                        <span>
                                            Already has account? Click to Login
                                        </span>
                                        </a>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
