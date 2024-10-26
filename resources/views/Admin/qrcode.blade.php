@extends('layout')
@section('style')
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
@endsection
@section('content')
    @livewire('admin.qrcode-list')
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('confirmCreate').addEventListener('click', function () {
            const qrCodeQuantity = document.getElementById('qrCodeQuantity').value;

            // Check if the input is empty
            if (!qrCodeQuantity) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please enter the number of QR Codes.',
                });
                return; // Stop the execution
            }

            // Confirm dialog using SweetAlert2
            Swal.fire({
                title: 'Are you sure?',
                text: `You are about to create ${qrCodeQuantity} QR Code(s).`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, create it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('create-qrcode-bt').click();
                }
            });
        });
    });
</script>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
@endsection
