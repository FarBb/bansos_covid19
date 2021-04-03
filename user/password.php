<?php
session_start();
include '../connection.php';


if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $username = $_POST['nis'];
  $nama = $_POST['nama'];
  $pass = $_POST['password'];
  $pass1 = $_POST['password1'];
  $level = '0';

  if ($pass !== $pass1) {
    header("Location:index.php?error");
    return false;
  }

  $enkripsi_password = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "UPDATE tb_user SET nama = '$nama', username = '$username', password = '$enkripsi_password', level = '$level' WHERE id = '$id'";


  if (mysqli_query($conn, $sql)) {
    echo "<script>
	  	window.location = 'index.php?success'; 
	  	</script>";
  } else {
    echo "<script>
	  	window.location = 'index.php?error1';
	  	</script>";
  }
} else {
  header('Location: index.php');
}
