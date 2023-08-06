
// untuk sukses
    const swal = $('.swal').data('swal');
    if (swal) {
        Swal.fire({
            title: 'Pendaftaran Berhasil',
            text:  swal,
            icon: 'success',
        });
    }
