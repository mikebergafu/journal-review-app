@extends('main.master')
@section('page-title')
    Login
@stop
@section('banner-title')
    {{ __('Login') }}
@stop

@section('small-banner-nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-envelope-open"></i> Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!-- ##### Hero Area Start ##### -->
    @include('grids.small-banner')
    <!-- ##### Hero Area End ##### -->

    @include('forms.login-form')


@stop


