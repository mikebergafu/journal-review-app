@extends('main.master')
@section('page-title')
    Home
@stop
@section('banner-title')
    {{ __('Verify Your Email Address') }}
@stop

@section('small-banner-nav')
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-envelope-open"></i> Verify Email</li>
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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_details_tab clearfix">
                   <div class="row" >
                       <div class="col-12" >
                           @if (session('resent'))
                               <div class="alert alert-success" role="alert">
                                   {{ __('A fresh verification link has been sent to your email address.') }}
                               </div>
                           @endif

                               {{ __('Before proceeding, please check your email for a verification link.') }}
                               {{ __('If you did not receive the email') }},
                               <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                   @csrf
                                   <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                               </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### About Area Start ##### -->
    @include('grids.about')
    <!-- ##### About Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    @include('grids.contact-form')
    <!-- ##### Contact Area End ##### -->
@stop

