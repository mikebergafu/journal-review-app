<!DOCTYPE html>
<html lang="en">

@include('common.meta-master')

<body>
<!-- Preloader -->
@include('partials.loader')

<!-- ##### Header Area Start ##### -->
@include('partials.header')
<!-- ##### Header Area End ##### -->

@yield('content')

<!-- ##### Footer Area Start ##### -->
@include('partials.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
@include('common.scripts-master')
</body>

</html>
