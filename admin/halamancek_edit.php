<?php
session_start();
include '../connection.php';


if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $periode = $_POST['periode'];

  $sql = "UPDATE tb_halamancek SET periode = '$periode' WHERE id = '$id'";


  if (mysqli_query($conn, $sql)) {
    $_SESSION['editSet'] = 'success';
    echo "<script>
	  	window.location = '../admin/halamancek.php'; 
	  	</script>";
  } else {
    $_SESSION['editSet'] = 'failed';
    echo "<script>
	  	window.location = 'halamancek.php;
	  	</script>";
  }
} else {
  $_SESSION['editSet'] = 'null';
  echo "<script>
	  	window.location = 'halamancek.php;
	  	</script>";
}
