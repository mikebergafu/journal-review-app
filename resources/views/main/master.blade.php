<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('common.meta-master')

<body>
<!-- Preloader -->
@include('partials.loader')

<!-- ##### Header Area Start ##### -->
@include('partials.header')
<!-- ##### Header Area End ##### -->

@yield('content')
@include('modals.submit-prompt-modal')
<!-- ##### Footer Area Start ##### -->
@include('partials.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
@include('common.scripts-master')
@toastr_render
</body>

</html>
