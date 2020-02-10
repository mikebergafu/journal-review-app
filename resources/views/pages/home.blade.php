@extends('main.master')
@section('page-title')
    Home
@stop
@section('content')
    <!-- ##### Hero Area Start ##### -->
    @include('grids.banner-slider')
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    {{--@include('grids.what-we-do')--}}
    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->
    @include('grids.about')
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->

    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->

    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### New Articles Area Start ##### -->

    <!-- ##### New Articles Area End ##### -->

    <!-- ##### Blog Area Start ##### -->

    <!-- ##### Blog Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->
    @include('grids.subscribe-grid')
    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    @include('grids.contact-form')
    <!-- ##### Contact Area End ##### -->

    <script type="text/javascript">
        <!--
        function retrieveScrollPosition() {
            document.getElementById('scrollBox').scrollTop = document.getElementById('savedScrollPosition').value;
        }

        function setScrollPosition(userScrollPosition) {
            document.getElementById('savedScrollPosition').value = userScrollPosition
        }
        //-->
    </script>
@stop
