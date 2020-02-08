<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>
       PPSG -@yield('page-title','Journal & Peer Review System ')
    </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('alazea/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('alazea/style.css')}}">

    <link rel="stylesheet" href="{{asset('bergy/css/berg-tweaks.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <style>
        .error-label{
            color: red !important;
        }

        .error{
            color: red !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    @yield('styles')

</head>
