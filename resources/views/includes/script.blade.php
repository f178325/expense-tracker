<script src="{{ asset('assets') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/parsley.min.js"></script>
<script src="{{ asset('assets') }}/vendor/toastr/toastr.min.js"></script>
<script src="{{ asset('assets') }}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('assets') }}/vendor/circle-progress/circle-progress-init.js"></script>
<script src="{{ asset('assets') }}/vendor/chartjs/chartjs.js"></script>
<script src="{{ asset('assets') }}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/circle-progress-init.js"></script>
<script src="{{ asset('assets') }}/js/scripts.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>
<script>
    $('#btn-logout').on('click', function () {
        ajaxCall('{{ route('post.logout') }}', {_token: '{{ csrf_token() }}'}, function (response) {
            if (response.success) {
                redirectTo('{{ route('get.login') }}', 0);
            }
        });
    });
</script>
