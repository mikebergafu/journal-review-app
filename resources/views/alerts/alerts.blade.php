<script>
        @if($message ?? '')
    var type = "{{ $alert_type, 'info' }}";
    switch (type) {
        case 'info':
            toastr.info("{{ $message }}");
            break;

        case 'warning':
            toastr.warning("{{ $message }}");
            break;

        case 'success':
            toastr.success("{{ $message }}");
            break;

        case 'error':
            toastr.error("{{ $message }}");
            break;
    }
    @endif
</script>
