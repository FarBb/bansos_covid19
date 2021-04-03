// login
const selamat = $('.info-data-login').data('infodata');
if (selamat == 'selamatDatang') {
  Swal.fire({
    icon: 'success',
    title: 'Login Success'
  })
};

// data traning
const notifikasi = $('.info-data').data('infodata');

if (notifikasi == 'Disimpan') {
  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Data Siswa Berhasil Disimpan'
  })
} else if (notifikasi == 'Gagal') {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Data Siswa Gagal Disimpan, Silahkan Ulangin!'
  })
} else if (notifikasi == 'Kosong') {
  Swal.fire({
    icon: 'warning',
    title: 'Oops...',
    text: 'Pastikan Data Siswa Terisi Semua, Silahkan Ulangin!'
  })
} else if (notifikasi == 'hapusDataTraning') {
  Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  );
} else if (notifikasi == 'editDataTraning') {
  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Data Siswa Berhasil Disimpan'
  })
}

$('.delete-data').on('click', function (e) {
  e.preventDefault();
  var getLink = $(this).attr('href');

  Swal.fire({
    title: 'Are you sure?',
    text: "Anda Ingin Menghapus Data Traning Siswa?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = getLink;
    }
  });
});

// setHalaman
const setHalaman = $('.infoDataSetHalaman').data('infodata');
if (setHalaman == 'success') {
  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Halaman Periode Berhasil Diperbarui'
  })
} else if (setHalaman == 'failed') {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Halaman Periode Gagal Diperbarui, Silahkan Ulangin!'
  })
} else if (setHalaman == 'null') {
  Swal.fire({
    icon: 'warning',
    title: 'Oops...',
    text: 'Pastikan Inputan Terisi, Silahkan Ulangin!'
  })
} 