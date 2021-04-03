<?php require 'template/header.php' ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4 col-lg-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
      <form action="klasifikasi.php" method="POST">
        <div class="form-group">
          <input type="hidden" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Nilai K" name="k" value="5">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">NIS</label>
          <input type="number" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Nomor Induk Sekolah" name="nis" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap Siswa" name="nama" required>
        </div>

        <div class="form-group">
          <label for="inputState">Kelas</label>
          <select id="inputState" class="form-control" required name="kelas">
            <option selected disabled>Pilih Kelas</option>
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
            <option value="XII-AK">XII-AK</option>
          </select>
        </div>

        <div class="form-group">
          <label for="inputState">Periode</label>
          <select id="inputState" class="form-control" required name="periode">
            <option selected disabled>Pilih Periode</option>
            <?php
            $query = "SELECT * FROM tb_periode";
            $sql = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_assoc($sql)) { ?>
              <option value="<?= $data['periode'] ?>"><?= $data['periode'] ?></option>
            <?php }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="inputState">Pekerjaan Ayah</label>
          <select id="inputState" class="form-control" required name="pekerjaan_ayah">
            <option selected disabled>Pilih Pekerjaan</option>
            <option value="Buruh">Buruh</option>
            <option value="Honorer">Honorer</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
            <option value="Pegawai Negeri Sipil">Pengangguran</option>
            <option value="Petani">Petani</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Wiraswasta">Wiraswasta</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pendapatan Ayah</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp.</span>
            </div>
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ayah">
          </div>
        </div>

        <div class="form-group">
          <label for="inputState">Pekerjaan Ibu</label>
          <select id="inputState" class="form-control" name="pekerjaan_ibu" required>
            <option selected disabled>Pilih Pekerjaan</option>
            <option value="Buruh">Buruh</option>
            <option value="Honorer">Honorer</option>
            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga (IRT)</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
            <option value="Petani">Petani</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Wiraswasta">Wiraswasta</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pendapatan Ibu</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp.</span>
            </div>
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ibu">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jarak Rumah Ke Sekolah</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" aria-label="Recipient's username" aria-describedby="basic-addon2" name="jarak_rumah" required>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Kilometer</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Rata Rata Nilai Rapot</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rata-Rata Nilai Rapot" name="nilai" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Saudara Kandung</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Saudara Kandung" name="jumlah_saudara" required>
        </div>

        <hr class="sidebar-divider d-none d-md-block">
        <button type="submit" class="btn btn-primary" name="hitung">Proses Data</button>
      </form>
    </div>
    <!-- proses -->
  </div>
</div>

</div>
<?php
require 'template/footer.php'; ?>