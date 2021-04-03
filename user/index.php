<?php
include 'template/header.php';
$nis = $c['username'];

$data = query("SELECT * FROM tb_hasil WHERE nis ='$nis'")[0];

// var_dump($data);
?>

<div class="card shadow m-4">
  <div class="card-header py-3">
    <h3 class="ml-3">Profile Siswa</h3>
    <hr>
    <?php
    if (isset($_GET['error'])) : ?>
      <div class="row">
        <div class="col-lg-12" col-lg-offset-3>
          <div class="alert alert-danger alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <div class="text-center">
              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
              <strong>Update Gagal!</strong> <br>
              Password Tidak Sesuai
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php
    if (isset($_GET['error1'])) : ?>
      <div class="row">
        <div class="col-lg-12" col-lg-offset-3>
          <div class="alert alert-danger alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <div class="text-center">
              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
              <strong>Update Gagal!</strong> <br>
              Pastikan Anda Memasukan Data Dengan Benar. Silahkan Ulangi Lagi.
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php
    if (isset($_GET['success'])) : ?>
      <div class="row">
        <div class="col-lg-12" col-lg-offset-3>
          <div class="alert alert-success alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <div class="text-center">
              <span class="glyphicon glyphicon-exclamation-sign" arial-hidden="true"></span>
              <strong>Update Berhasil!</strong> <br>
              Password Berhasil Diubah
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php
    $a = $data['level'];
    if ($a == 0) {
      echo '<a href="edit.php" class="btn btn-warning btn-icon-split ml-3">
      <span class="icon text-white-50">
        <i class="fas fa-edit fas-success"></i>
      </span>
      <span class="text">Edit Data</span>
    </a>';
    } else {
      echo '<button class="btn btn-warning btn-icon-split ml-3" disabled>
      <span class="icon text-white-50">
        <i class="fas fa-edit fas-success"></i>
      </span>
      <span class="text">Edit Data</span>
    </button>';
    }
    ?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NIS</th>
              <th>Nama</th>
              <th>Pekerjaan Ayah</th>
              <th>Pekerjaan Ibu</th>
              <th>Jumlah Saudara</th>
              <th>Jarak ke Sekolah</th>
              <th>Prestasi Akedemik</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            if ($data['prestasi_akedemik'] >= 60 && $data['prestasi_akedemik'] <= 70) {
              $nilai = 'Cukup';
            } elseif ($data['prestasi_akedemik'] >= 71 && $data['prestasi_akedemik'] <= 79) {
              $nilai = 'Baik';
            } elseif ($data['prestasi_akedemik'] >= 80 && $data['prestasi_akedemik'] <= 100) {
              $nilai = 'Sangat Baik';
            } else {
              $nilai = 'Kurang';
            }
            ?>

            <tr>
              <td><?= $data['nis'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['pekerjaan_ayah'] ?></td>
              <td><?= $data['pekerjaan_ibu'] ?></td>
              <td><?= $data['jumlah_saudara'] ?> Orang</td>
              <td><?= $data['jarak_rumah'] ?> Kilometer</td>
              <td><?= $nilai ?></td>
              <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data['nis'] ?>">
                  <i class="fas fa-eye"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1<?= $data['nis'] ?>">
                  <i class="fas fa-cogs"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1<?= $data['nis'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="password.php" method="POST">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" id="recipient-name" value="<?= $c['id'] ?>" readonly name="id">

              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" id="recipient-name" value="<?= $data['nis'] ?>" name="nis" readonly>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="hidden" class="form-control" id="recipient-name" value="<?= $data['nama'] ?>" name="nama" readonly>
              </div>
            </div>
            <div class="col-sm-12" style="margin-top: -50px !important;">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Password :</label>
                  <input type="password" class="form-control" id="recipient-name" name="password" autofocus>
                </div>
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Confirm Password :</label>
                  <input type="password" class="form-control" id="recipient-name" name="password1">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="edit">Ganti Password</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $data['nis'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">NIS:</label>
                <input type="text" class="form-control" id="recipient-name" value="<?= $data['nis'] ?>" readonly>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama Siswa:</label>
                <input type="text" class="form-control" id="recipient-name" value="<?= $data['nama'] ?>" readonly>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Kelas :</label>
                  <input type="text" class="form-control" id="recipient-name" value="<?= $data['kelas'] ?>" readonly>
                </div>
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Periode :</label>
                  <input type="text" class="form-control" id="recipient-name" value="Rp. <?= $data['periode'] ?>" readonly>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Pekerjaan Ayah :</label>
                  <input type="text" class="form-control" id="recipient-name" value="<?= $data['pekerjaan_ayah'] ?>" readonly>
                </div>
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Pendapatan Ayah :</label>
                  <input type="text" class="form-control" id="recipient-name" value="Rp. <?= $data['pendapatan_ayah'] ?>" readonly>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Pekerjaan Ibu :</label>
                  <input type="text" class="form-control" id="recipient-name" value="<?= $data['pekerjaan_ibu'] ?>" readonly>
                </div>
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label">Pendapatan Ibu :</label>
                  <input type="text" class="form-control" id="recipient-name" value="Rp. <?= $data['pendapatan_ibu'] ?>" readonly>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Jumlah Saudara Kandung :</label>
                <input type="text" class="form-control" id="recipient-name" value="<?= $data['jumlah_saudara'] ?> Orang" readonly>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Jarak Rumah Ke Sekolah :</label>
                <input type="text" class="form-control" id="recipient-name" value="<?= $data['jarak_rumah'] ?> Kilometer" readonly>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Prestasi Akedemik :</label>
                <input type="text" class="form-control" id="recipient-name" value="<?= $nilai ?>" readonly>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->



</div>
<?php include 'template/footer.php' ?>