<?php require 'template/header.php';

// ambil data dari url
$tangkap_url = $_GET['id'];

//query data mahasiwa berdasarkan id dari url
$data = query("SELECT * FROM tb_data_training WHERE id = '$tangkap_url'")[0];

?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4 col-lg-6">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Perbaharui Data</h6>
    </div>
    <div class="card-body">
      <form action="edit_proses.php" method="POST">
        <div class="form-group">
          <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required value="<?= $data['id'] ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap Siswa" name="nama" required value="<?= $data['nama'] ?>">
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
              <span class="input-group-text" id="basic-addon1">Rp. </span>
            </div>
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ayah" value="<?= $data['pendapatan_ayah'] ?>">
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
            <input type="number" class="form-control" placeholder="nominal" aria-label="Username" aria-describedby="basic-addon1" name="pendapatan_ibu" value="<?= $data['pendapatan_ibu'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jarak Rumah Ke Sekolah</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?= $data['jarak_rumah'] ?>" name="jarak_rumah" required>
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Kilometer</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Rata Rata Nilai Rapot</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rata-Rata Nilai Rapot" name="nilai" required value="<?= $data['prestasi_akedemik'] ?>">
        </div>

        <div class=" form-group">
          <label for="exampleInputEmail1">Jumlah Saudara Kandung</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Saudara Kandung" name="jumlah_saudara" value="<?= $data['jumlah_saudara'] ?>" required>
        </div>

        <div class=" form-group">
          <label for="inputState">Keterangan</label>
          <select id="inputState" class="form-control" name="keterangan" required>
            <?php
            if ($data['keterangan'] == 1) {
              echo '<option value="1" selected>Terdampak Covid-19</option>
              <option value="0">Tidak Terdampak Covid-19</option>';
            } else {
              echo '<option value="1">Terdampak Covid-19</option>
              <option value="0" selected>Tidak Terdampak Covid-19</option>';
            }
            ?>
          </select>
        </div>

        <hr style="margin-bottom: 25px; margin-top: 20px;">

        <button type="submit" class="btn btn-primary edit-data-traning" name="edit">Perbaharui Data</button>
      </form>
    </div>
  </div>

</div>

</div>
<?php require 'template/footer.php' ?>