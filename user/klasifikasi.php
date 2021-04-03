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

    $sql = mysqli_query($conn, $query);

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

    $data_update = "UPDATE tb_hasil SET nama = '$nama', pekerjaan_ayah = '$pekerjaanayah', pendapatan_ayah = '$pendapatanayah', bobot_pendapatan_ayah = '$bobotpendapatanayah',pekerjaan_ibu = '$pekerjaanibu',pendapatan_ibu = '$pendapatanibu',bobot_pendapatan_ibu = '$bobotpendapatanibu', jumlah_saudara = '$jumlahsaudara',bobot_saudara = '$bobotsaudara',prestasi_akedemik = '$prestasiakedemik',keterangan = '$kategori', kelas = '$kelas', periode='$periode', level='1' WHERE nis = '$nis'";

    if (mysqli_query($conn, $data_update)) {
      echo "<script>
        alert('Data Berhasil Diubah');
        window.location = '../user' 
        </script>";
    } else {
      echo "<script>
        alert('Terjadi Kesalahan');
        window.location = 'user';
        </script>";
    }

    ?>

  <?php } ?>

</div>
</div>
<!-- End of Main Content -->

<?php require 'template/footer.php' ?>