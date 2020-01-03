<script src="{{asset('alazea/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('alazea/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('alazea/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('alazea/js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('alazea/js/active.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="https://jqueryvalidation.org/files/dist/additional-methods.js"></script>

@include('scripts.modal-form-validation-js')

@include('alerts.alerts')
@yield('scripts')
