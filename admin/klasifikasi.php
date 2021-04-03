<?php require 'template/header.php' ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <?php if (isset($_POST['hitung'])) {
    include 'prosesklasifikasi.php';
    $k = $_POST['k'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $pekerjaanayah = $_POST['pekerjaan_ayah'];
    $pendapatanayah = $_POST['pendapatan_ayah'];
    $pekerjaanibu = $_POST['pekerjaan_ibu'];
    $pendapatanibu = $_POST['pendapatan_ibu'];
    $prestasiakedemik = $_POST['nilai'];
    $jumlahsaudara = $_POST['jumlah_saudara'];
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $jarak_r = $_POST['jarak_rumah'];
    $keterangan = $_POST['keterangan'];
    $kelas = $_POST['kelas'];
    $periode = $_POST['periode'];

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

    $query = "INSERT INTO tb_hasil VALUES('$nis', '$nama', '$pekerjaanayah','$pendapatanayah', '$bobotpendapatanayah','$pekerjaanibu','$pendapatanibu','$bobotpendapatanibu','$jumlahsaudara','$bobotsaudara','$jarak_r','$bobotjarak','$prestasiakedemik','', '$kelas', '$periode', '0')";

    // masukan ke user
    $password = password_hash($nis, PASSWORD_DEFAULT);
    $kuery = "INSERT INTO tb_user VALUES('','$nama','$nis', '$password', '0')";

    $sql = mysqli_query($conn, $query);
    $sql_user = mysqli_query($conn, $kuery);

    hitung($k, $nis, $pekerjaanayah, $pendapatanayah, $bobotpendapatanayah, $pekerjaanibu, $pendapatanibu, $bobotpendapatanibu, $jumlahsaudara, $bobotsaudara, $jarak_r, $bobotjarak, $prestasiakedemik, $kelas, $periode); ?>

    <?php
    include '../connection.php';
    $sql = mysqli_query($conn, "SELECT id, jarak, keterangan, COUNT(IF(keterangan='1',1,NULL))AS mendapatkan, COUNT(IF(keterangan='0',1,NULL)) AS tidakmendapatkan, COUNT(*) AS kesimpulan FROM tb_sort GROUP BY keterangan HAVING(COUNT(kesimpulan)>0)");

    $hasilmendapatkan = '';
    $hasiltidakmendapatkan = '';
    $katmendapatkan = '';
    $kattidakmendapatkan = '';
    $kategori = '';
    $jumlahmendapatkan = '';
    $jumlahtidakmendapatkan = '';

    while ($data = mysqli_fetch_array($sql)) {
      $keterangan[] = $data['keterangan'];
      $mendapatkan[] = $data['mendapatkan'];
      $tidakmendapatkan[] = $data['tidakmendapatkan'];
      $kesimpulan[] = $data['kesimpulan'];
      $d = $data['mendapatkan'];
      $e = $data['tidakmendapatkan'];
    }

    if ($kesimpulan[0] == $e && $keterangan[0] == '0') {
      $kategori = 'Tidak Mendapatkan Bantuan';
    } elseif ($kesimpulan[0] == $d && $keterangan[0] == '1') {
      $kategori = 'Mendapatkan Bantuan';
    } elseif ($kesimpulan[0] > $kesimpulan[1] && $keterangan[0] == '1') {
      $kategori = 'Mendapatkan Bantuan';
    } elseif ($kesimpulan[0] > $kesimpulan[1] && $keterangan[0] == '0') {
      $kategori = 'Tidak Mendapatkan Bantuan';
    } elseif ($kesimpulan[1] > $kesimpulan[0] && $keterangan[1] == '1') {
      $kategori = 'Mendapatkan Bantuan';
    } elseif ($kesimpulan[1] > $kesimpulan[0] && $keterangan[1] == '0') {
      $kategori = 'Tidak Mendapatkan Bantuan';
    } elseif ($kesimpulan[0] == $kesimpulan[1]) {
      $kategori = 'DIPERTIMBANGKAN';
    } else {
      $kategori = '';
    }

    if ($d > $e && $keterangan[0] == '1') {
      $jumlahmendapatkan = $d;
      $jumlahtidakmendapatkan = '0';
    } elseif ($e > $d && $keterangan[0] == '0') {
      $jumlahmendapatkan = '0';
      $jumlahtidakmendapatkan = $e;
    } elseif ($kesimpulan[0] > $kesimpulan[1] && $keterangan[0] == '1') {
      $jumlahmendapatkan = $kesimpulan[0];
      $jumlahtidakmendapatkan = $kesimpulan[1];
    } elseif ($kesimpulan[0] > $kesimpulan[1] && $keterangan[0] == '0') {
      $jumlahmendapatkan = $kesimpulan[1];
      $jumlahtidakmendapatkan = $kesimpulan[0];
    } elseif ($kesimpulan[1] > $kesimpulan[0] && $keterangan[1] == '1') {
      $jumlahmendapatkan = $kesimpulan[1];
      $jumlahtidakmendapatkan = $kesimpulan[0];
    } elseif ($kesimpulan[1] > $kesimpulan[0] && $keterangan[1] == '0') {
      $jumlahmendapatkan = $kesimpulan[0];
      $jumlahtidakmendapatkan = $kesimpulan[1];
    } elseif ($kesimpulan[0] == $kesimpulan[1]) {
      $jumlahmendapatkan = $kesimpulan[0];
      $jumlahtidakmendapatkan = $kesimpulan[1];
    } else {
      $jumlahmendapatkan = '';
      $jumlahtidakmendapatkan = '';
    }

    echo "<center style='margin-top:20px'>
    <div class='container'>
    <div class='col-xl-12 col-md-12 sm-12 p-100' style='margin-bottom:20px'>
      <div class='card border-left-warning shadow h-100 py-2'>
        <div class='card-body'>
          <div class='row no-gutters align-items-center'>
            <div class='col mr-2'>
              <div class='text-xs font-weight-bold text-success text-uppercase mb-1'></div>
              <div class='h5 mb-0 font-weight-bold text-gray-800'>Nilai Parameter K = $k</div>
              <button type='button' class='mt-2 btn btn-primary btn-sm' data-toggle='modal' data-target='.bd-example-modal-lg'>Nilai K</button>
            </div>
            <div class='col-auto'>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-xl-6 col-md-6 sm-12'>
        <div class='card border-left-success shadow h-100 py-2'>
          <div class='card-body'>
            <div class='row no-gutters align-items-center'>
              <div class='col mr-2'>
                <div class='text-xs font-weight-bold text-success text-uppercase mb-1'>Siswa Yang Mendapatkan Bantuan</div>
                <div class='h5 mb-0 font-weight-bold text-gray-800'> $jumlahmendapatkan Siswa</div>
              </div>
              <div class='col-auto'>
                <i class='fas fa-users fa-4x text-gray-300'></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-xl-6 col-md-6 sm-12'>
        <div class='card border-left-danger shadow h-100 py-2'>
          <div class='card-body'>
            <div class='row no-gutters align-items-center'>
              <div class='col mr-2'>
                <div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>Siswa Yang Tidak Mendapatkan Bantuan</div>
                <div class='h5 mb-0 font-weight-bold text-gray-800'> $jumlahtidakmendapatkan Siswa</div>
              </div>
              <div class='col-auto'>
                <i class='fas fa-users fa-4x text-gray-300'></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='col-xl-12 col-md-12 sm-12 p-100' style='margin-bottom:20px; margin-top:20px'>
      <div class='card border-left-warning shadow h-100 py-2'>
        <div class='card-body'>
          <div class='row no-gutters align-items-center'>
            <div class='col mr-2'>
              <div class='text-xs font-weight-bold text-success text-uppercase mb-1'></div>
              <div class='h5 mb-0 font-weight-bold text-gray-800'>Jadi, Dari Hasil Perhitungan K-Nearest Neighbor, Status Calon Siswa Yang Bernama $nama adalah <div class='text-success'>$kategori</div></div>
            </div>
            <div class='col-auto'>
            <i class='fas fa-user fa-4x text-gray-300'></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    </center>";


    mysqli_query($conn, "UPDATE tb_hasil SET nama = '$nama', pekerjaan_ayah = '$pekerjaanayah', pendapatan_ayah = '$pendapatanayah', bobot_pendapatan_ayah = '$bobotpendapatanayah',pekerjaan_ibu = '$pekerjaanibu',pendapatan_ibu = '$pendapatanibu',bobot_pendapatan_ibu = '$bobotpendapatanibu', jumlah_saudara = '$jumlahsaudara',bobot_saudara = '$bobotsaudara',prestasi_akedemik = '$prestasiakedemik',keterangan = '$kategori', kelas = '$kelas', periode='$periode', level='0' WHERE nis = '$nis'");

    ?>

    <div class="tampil">

    </div>


    <h1 style="margin-top: 100px;">Rincian Perhitungan : </h1>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding: 10px;">
          <h3 style="margin: 10px;">Hasil Perhitungan K-Nearest Neightbor Berdasarkan Jarak Terdekat K = 5 : </h3>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jarak</th>
                  <th>Keterangan</th>
                </tr>

                <?php
                $sql1 = mysqli_query($conn, "SELECT * FROM tb_sort ORDER BY jarak ASC, id ASC");
                while ($d = mysqli_fetch_array($sql1)) {
                ?>

                  <tr>
                    <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['jarak'] ?></td>
                    <td><?php if ($d['keterangan'] == 1) {
                          echo 'Mendapatkan Bantuan';
                        } else {
                          echo 'Tidak Mendapatkan Bantuan';
                        } ?></td>
                  </tr>
                <?php } ?>
              </thead>
            </table>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Bobot Pendapatan Ayah</th>
              <th>Bobot Pendapatan Ibu</th>
              <th>Bobot Saudara</th>
              <th>Bobot Jarak</th>
              <th>Prestasi Akedemik</th>
              <th>Jarak</th>
              <th>Keterangan</th>
            </tr>

            <?php
            // $sql1 = mysqli_query($conn, "SELECT * FROM tb_temp ORDER BY jarak ASC, id ASC");
            $sql1 = mysqli_query($conn, "SELECT * FROM tb_temp ORDER BY id ASC");
            while ($ab = mysqli_fetch_array($sql1)) {
            ?>
              <tr>
                <td><?php echo $ab['id'] ?></td>
                <td><?php echo $ab['nama'] ?></td>
                <td><?php echo $ab['bobot_pendapatan_ayah'] ?></td>
                <td><?php echo $ab['bobot_pendapatan_ibu'] ?></td>
                <td><?php echo $ab['bobot_saudara'] ?></td>
                <td><?php echo $ab['bobot_jarak'] ?></td>
                <td><?php echo $ab['prestasi_akedemik'] ?></td>
                <td><?php echo $ab['jarak'] ?></td>
                <td><?php if ($ab['keterangan'] == 1) {
                      echo 'Mendapatkan Bantuan';
                    } else {
                      echo 'Tidak Mendapatkan Bantuan';
                    } ?></td>
              </tr>
            <?php } ?>
          </thead>
        </table>
      </div>

      <button type="button" class="btn btn-primary" name="button" onclick="window.location.href='hasil_klasifikasi.php'">Lihat Hasil Klasifikasi</button>

      <br><br><br><br>

    </div>
  <?php } ?>

</div>
</div>
<!-- End of Main Content -->

<?php require 'template/footer.php' ?>