<?php
session_start();
include '../connection.php';

if (isset($_POST['tambah'])) {

  $nama = $_POST['nama'];
  $pekerjaanayah = $_POST['pekerjaan_ayah'];
  $pendapatanayah = $_POST['pendapatan_ayah'];
  $pekerjaanibu = $_POST['pekerjaan_ibu'];
  $pendapatanibu = $_POST['pendapatan_ibu'];
  $prestasiakedemik = $_POST['nilai'];
  $jumlahsaudara = $_POST['jumlah_saudara'];
  $jarak_r = $_POST['jarak_rumah'];
  $keterangan = $_POST['keterangan'];

  // var_dump($pendapatanayah);
  // var_dump($pendapatanibu);
  // die;

  // nilai minimum
  if ($pendapatanayah <= 0) {
    $bobotpendapatanayah = 1;
  } elseif ($pendapatanayah > 0 && $pendapatanayah <= 7000000) {
    $bobotpendapatanayah = (7000000 - $pendapatanayah) / (7000000 - 0);
  } else {
    $bobotpendapatanayah = 0;
  }

  if ($pendapatanibu <= 0) {
    $bobotpendapatanibu = 1;
  } elseif ($pendapatanibu > 0 && $pendapatanibu <= 7000000) {
    $bobotpendapatanibu = (7000000 - $pendapatanibu) / (7000000 - 0);
  } else {
    $bobotpendapatanibu = 0;
  }

  //nilai maximum
  if ($jumlahsaudara <= 1) {
    $bobotsaudara = 0;
  } elseif ($jumlahsaudara > 1 && $jumlahsaudara <= 5) {
    $bobotsaudara = ($jumlahsaudara - 1) / (5 - 1);
  } else {
    $bobotsaudara = 1;
  }

  if ($jarak_r <= 1) {
    $bobotjarak = 0;
  } elseif ($jarak_r > 1 && $jarak_r <= 10) {
    $bobotjarak = ($jarak_r - 1) / (10 - 1);
  } else {
    $bobotjarak = 1;
  }

  $sql = "INSERT INTO tb_data_training VALUES('','$nama','$pekerjaanayah','$pendapatanayah','$bobotpendapatanayah', '$pekerjaanibu','$pendapatanibu','$bobotpendapatanibu','$jumlahsaudara','$bobotsaudara','$jarak_r','$bobotjarak','$prestasiakedemik', '$keterangan')";


  if (mysqli_query($conn, $sql)) {
    $_SESSION['info'] = 'Disimpan';
    echo "<script>
      window.location = '../admin/data_traning.php';
      </script>";
  } else {
    $_SESSION['info'] = 'Gagal';
    echo "<script>
      window.location = 'tambah_data.php';
      </script>";
  }
} else {
  $_SESSION['info'] = 'Kosong';
  echo "<script>
      window.location = '../admin/data_traning.php';
      </script>";
}
