<?php
include 'template/header.php';
$nis = $c['username'];
$data = query("SELECT * FROM tb_hasil WHERE nis ='$nis'")[0];
?>
<div class="container-fluid">
  <div class="card shadow mb-4 col-lg-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Perbarui Data</h6>
    </div>
    <div class="card-body">
      <form action="klasifikasi.php" method="POST">
        <div class="form-group">
          <input type="hidden" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Nilai K" name="k" value="5">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">NIS</label>
          <input type="number" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Nomor Induk Sekolah" name="nis" value="<?= $data['nis'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap Siswa" name="nama" value="<?= $data['nama'] ?>" required>
        </div>

        <div class="form-group">
          <label for="inputState">Kelas</label>
          <select id="inputState" class="form-control" required name="kelas">
            <?php
            if ($data['kelas'] == 'X-TAV') {
              echo '
            <option value="X-TAV" selected>X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'X-TKJ') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ" selected>X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'X-TBSM') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM" selected>X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'X-AK') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK" selected>X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XI-TAV') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV" selected>XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XI-TKJ') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ" selected>XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XI-TBSM') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM" selected>XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XI-AK') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK" selected>XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XII-TAV') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV" selected>XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XII-TKJ') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ" selected>XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } elseif ($data['kelas'] == 'XII-TBSM') {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM" selected>XII-TBSM</option>
            <option value="XII-AK">XII-AK</option>';
            } else {
              echo '
            <option value="X-TAV">X-TAV</option>
            <option value="X-TKJ">X-TKJ</option>
            <option value="X-TBSM">X-TBSM</option>
            <option value="X-AK">X-AK</option>
            <option value="XI-TAV">XI-TAV</option>
            <option value="XI-TKJ">XI-TKJ</option>
            <option value="XI-TBSM">XI-TBSM</option>
            <option value="XI-AK">XI-AK</option>
            <option value="XII-TAV">XII-TAV</option>
            <option value="XII-TKJ">XII-TKJ</option>
            <option value="XII-TBSM">XII-TBSM</option>
            <option value="XII-AK"selected>XII-AK</option>';
            }
            ?>

          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Periode</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap Siswa" name="periode" value="<?= $data['periode'] ?>" readonly>
        </div>

        <div class="form-group">
          <label for="inputState">Pekerjaan Ayah</label>
          <select id="inputState" class="form-control" required name="pekerjaan_ayah">
            <?php
            if ($data['pekerjaan_ayah'] == 'Buruh') {
              echo '<option value="Buruh" selected>Buruh</option>
              <option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Honorer') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer" selected>Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Karyawan Swasta') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta" selected>Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Pegawai Negeri Sipil') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil" selected>Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Pengangguran') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran" selected>Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Petani') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani" selected>Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ayah'] == 'Wirausaha') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha" selected>Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } else {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Pengangguran">Pengangguran</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta" selected>Wiraswasta</option>';
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pendapatan Ayah</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp.</span>
            </div>
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ayah" value="<?= $data['pendapatan_ayah'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputState">Pekerjaan Ibu</label>
          <select id="inputState" class="form-control" name="pekerjaan_ibu" required>
            <?php
            if ($data['pekerjaan_ibu'] == 'Buruh') {
              echo '<option value="Buruh" selected>Buruh</option>
              <option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Honorer') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer" selected>Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Karyawan Swasta') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta" selected>Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Pegawai Negeri Sipil') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil" selected>Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Ibu Rumah Tangga') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga" selected>Ibu Rumah Tangga</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Petani') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani" selected>Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } elseif ($data['pekerjaan_ibu'] == 'Wirausaha') {
              echo '<option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha" selected>Wirausaha</option>
              <option value="Wiraswasta">Wiraswasta</option>';
            } else {
              echo '
              <option value="Buruh">Buruh</option>
              <option value="Honorer">Honorer</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
              <option value="Petani">Petani</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Wiraswasta" selected>Wiraswasta</option>';
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pendapatan Ibu</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp.</span>
            </div>
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ibu" value="<?= $data['pendapatan_ibu'] ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jarak Rumah Ke Sekolah</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" aria-label="Recipient's username" aria-describedby="basic-addon2" name="jarak_rumah" value="<?= $data['jarak_rumah'] ?>" required>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Kilometer</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Rata Rata Nilai Rapot</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rata-Rata Nilai Rapot" name="nilai" value="<?= $data['prestasi_akedemik'] ?>" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Saudara Kandung</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Saudara Kandung" name="jumlah_saudara" value="<?= $data['jumlah_saudara'] ?>" required>
        </div>

        <hr class="sidebar-divider d-none d-md-block">
        <button onclick="return confirm('Pastikan Data Yang Anda Masukan Sudah Benar, Jika Terjadi Kelasahan Dalam Input Data Silahkan Hubungi Admin Sekolah!');" type="submit" class="btn btn-primary" name="hitung">Perbarui Data</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
    <!-- proses -->
  </div>
</div>

<?php
include 'template/footer.php';
?>