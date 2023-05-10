$('.insert').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire(
        'Berhasil!',
        'Data berhasil ditambah!',
        'success'
    )
    window.location = "/insert-" + id + ""
});


$('.update').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire(
        'Berhasil!',
        'Data berhasil diupdate!',
        'success'
    )
    window.location = "/update-" + id + ""
});

$('.deleteadmin').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data " + nama + " akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Data berhasil dihapus!',
                'success'
            );
            window.location = "/deleteadmin-" + id + ""

        }
    });
});

$('.deletejenisproduk').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data " + nama + " akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Data berhasil dihapus!',
                'success'
            );
            window.location = "/deletejenisproduk-" + id + ""

        }
    });
});

$('.deleteproduk').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data " + nama + " akan terhapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Data berhasil dihapus!',
                'success'
            );
            window.location = "/deleteproduk-" + id + ""

        }
    });
});