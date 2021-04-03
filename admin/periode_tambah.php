<?php
session_start();
include '../connection.php';

if (isset($_POST['tambah'])) {

  $periode = $_POST['periode'];

  $sql = "INSERT INTO tb_periode VALUES('','$periode')";


  if (mysqli_query($conn, $sql)) {
    echo "<script>
      alert('Data Periode berhasil ditambahkan!');
      window.location = '../admin/periode.php';
      </script>";
  } else {
    echo "<script>
      alert('Data baru gagal ditambahkan!');
      window.location = 'periode.php';
      </script>";
  }
} else {
  header('Location: ../admin/index.php');
}
