@extends('main.master')
@section('page-title')
    Admin Dashboard
@stop
@section('banner-title')
    {{ __('Admin Dashboard') }}
@stop

@section('small-banner-nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('banner.slider.form')}}"><i class="fa fa-home"></i> Admin Dasboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-list"></i> Add Edition</li>
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

    @include('forms.about-form')


@stop

