@include('admin_panel.partials.header')
@include('admin_panel.partials.sidebar')
@include('admin_panel.partials.navbar')
@if (session('success'))
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif
@yield('content')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Mencegah pengiriman form secara langsung

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika dikonfirmasi, kirim form
                        button.closest('form').submit();
                    }
                });
            });
        });
    });
</script>

@include('admin_panel.partials.footer')

