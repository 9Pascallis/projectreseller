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
            window.location = "/deleteadmin/" + id + ""

        }
    });
});

$('.deleteuser').click(function() {
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
            window.location = "/deleteuser/" + id + ""

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
            window.location = "/deletejenisproduk/" + id + ""

        }
    });
});

$('.deletewarna').click(function() {
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
            window.location = "/deletewarna/" + id + ""

        }
    });
});

$('.deleteukuran').click(function() {
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
            window.location = "/deleteukuran/" + id + ""

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
            window.location = "/deleteproduk/" + id + ""

        }
    });
});

$('.deleteitemproduk').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan terhapus!",
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
            window.location = "/deleteitemproduk/" + id + ""

        }
    });
});

$('.tambahkeranjang').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
        title: 'Berhasil!',
        text: 'Produk berhasil masuk keranjang!',
        icon: 'success',
        timer: 5000,
        onClose: () => {
            window.location = "/tambahkeranjang-" + id + "";
        }
    });
});

// $('.tambahitemproduk').click(function() {
//     var id = $(this).attr('data-id');
//     var nama = $(this).attr('data-nama');
//     Swal.fire({
//         title: 'Berhasil!',
//         text: 'Produk berhasil masuk keranjang!',
//         icon: 'success',
//         timer: 5000,
//         onClose: () => {
//             window.location = "/detailproduk/" + id + "";
//         }
//     });
// });