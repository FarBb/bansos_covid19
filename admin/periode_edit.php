<?php
session_start();
include '../connection.php';


if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $periode = $_POST['periode'];

  $sql = "UPDATE tb_periode SET periode = '$periode' WHERE id = '$id'";


  if (mysqli_query($conn, $sql)) {
    echo "<script>
	  	alert('Data Periode Berhasil Diubah');
	  	window.location = '../admin/periode.php' 
	  	</script>";
  } else {
    echo "<script>
	  	alert('Terjadi Kesalahan');
	  	window.location = 'periode.php';
	  	</script>";
  }
} else {
  // header('Location: ../admin/index.php');
  echo "<script>
	  	alert('Terjadi Kesalahan');
	  	window.location = 'periode.php';
	  	</script>";
}
