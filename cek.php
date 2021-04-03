<?php
require 'connection.php';
require './function.php';

$s = query("SELECT * FROM tb_halamancek")[0];

if (isset($_POST['cek'])) {
  $nis = $_POST["nis"];

  $cek_nis = mysqli_query($conn, "SELECT * FROM tb_hasil WHERE nis = '$nis'") or die(mysqli_error($conn));

  if (mysqli_num_rows($cek_nis) === 1) {

    $row = mysqli_fetch_assoc($cek_nis);
    $periode = $row['periode'];

    if ($periode == $s['periode']) {
      $level = $row['level'];
      if ($level == 1) {
        $data = $row['keterangan'];
        if ($data == 'Mendapatkan Bantuan') {
          $success = true;
        } else {
          $error1 = true;
        }
      } else {
        $errorlevel = true;
      }
    } else {
      $errorperiode = true;
    }
  } else {
    $error = true;
  }
}

if (isset($_SESSION['login'])) {
  echo "<script>window.location='" . base_url('admin') . "'</script>";
} else {
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CEK BANSOS COVID-19</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

  </head>

  <body class="bg-gradient-primary">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-5 col-md-5" style="margin-top: 30px;">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-center pt-5">

                    <h1 class="h4 text-gray-900">Cek Bantuan Sosial COVID-19<br> Periode <?= $s['periode'] ?></h1>
                  </div>
                  <div class="pl-5 pr-5">

                    <div class="text-center">
                      <img style="margin-bottom: 10px;" src="<?= base_url('assets/img/profile.png') ?>" alt="logo sekolah" height="200px">
                    </div>

                    <?php if (isset($error)) : ?>
                      <div class="row">
                        <div class="col-lg-12" col-lg-offset-3>
                          <div class="alert alert-danger alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <div class="text-center">
                              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
                              <strong>NIS Tidak Terdaftar!</strong> <br>
                              <!-- Silahkan Masukan NIS Yang BENER! -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <?php if (isset($errorlevel)) : ?>
                      <div class="row">
                        <div class="col-lg-12" col-lg-offset-3>
                          <div class="alert alert-warning alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <div class="text-center">
                              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
                              <strong>Confirm Data Anda Terlebih Dahulu</strong> <br>
                              Silahkan Login Untuk Melakukan Confirmasi Data Anda.
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <?php if (isset($errorperiode)) : ?>
                      <div class="row">
                        <div class="col-lg-12" col-lg-offset-3>
                          <div class="alert alert-danger alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <div class="text-center">
                              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
                              <strong>NIS Anda Tidak Terdaftar Di Periode <?= $s['periode'] ?></strong> <br>
                              <!-- Silahkan Masukan NIS Yang BENER! -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <?php if (isset($error1)) : ?>
                      <div class="row">
                        <div class="col-lg-12" col-lg-offset-3>
                          <div class="alert alert-danger alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <div class="text-center">
                              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
                              <strong><?= $row['nama'] ?></strong> <br>
                              <?= $row['keterangan'] ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <!-- menampilkan alert dengan mengambil paramater dari url yang dikirimkan oleh halaman registrasi -->
                    <?php if (isset($success)) : ?>
                      <div class="row">
                        <div class="col-lg-12" col-lg-offset-3>
                          <div class="alert alert-success alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <div class="text-center">
                              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
                              <strong><?= $row['nama'] ?></strong> <br>
                              <?= $row['keterangan'] ?>

                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <form class="user" method="POST" action="">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Your NIS" name="nis" required autofocus autocomplete="off">
                      </div>
                      <hr>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="SUBMIT" name="cek">
                      </input>
                    </form>
                  </div>
                  <hr>
                  <div class="text-center" style="margin-top: -10px; margin-bottom:10px; !important">
                    <a class="small" href="login.php">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

  </body>

  </html>

<?php
}
?>