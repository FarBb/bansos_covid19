<?php
require '../connection.php';
require '../function.php';

$tangkap_id = $_GET["id"];

if (hapus_data_periode($tangkap_id) > 0) {
  echo "
    <script>
        alert('Data Periode Berhasil Dihapus');
        document.location.href='periode.php';
    </script>
    ";
} else {
  echo "
    <script>
        alert('Data Periode Gagal Dihapus!');
        document.location.href='periode.php';
    </script>
    ";
}
