<script>
    @if (session()->has('success'))
        var notify = $.notify("{{ session('success') }}", {
            type: 'success',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: false,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    @endif

    @if (session()->has('info'))
        var notify = $.notify("{{ session('info') }}", {
            type: 'info',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: false,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    @endif

    @if (session()->has('primary'))
        var notify = $.notify("{{ session('primary') }}", {
            type: 'primary',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: false,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    @endif

    @if (session()->has('warning'))
        var notify = $.notify("{{ session('warning') }}", {
            type: 'warning',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: false,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    @endif

    @if (session()->has('danger'))
        var notify = $.notify("{{ session('danger') }}", {
            type: 'danger',
            allow_dismiss: true,
            delay: 2000,
            showProgressbar: false,
            timer: 300,
            animate:{
                enter:'animated fadeInDown',
                exit:'animated fadeOutUp'
            }
        });
    @endif
</script>
