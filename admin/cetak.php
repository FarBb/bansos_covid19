<?php require 'template/header.php';

$data = query("SELECT * FROM tb_hasil");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h1 class="h3 mb-2 text-gray-800">Cetak PDF</h1>
    </div>
    <div class="card-body">
      <form action="<?= base_url('laporan/cetak1.php') ?>" method="POST">
        <div class="row">
          <div class="col-4">
            <select id="inputState" class="form-control" required name="periode">
              <option selected disabled value="">Pilih Periode</option>
              <?php
              $query = "SELECT * FROM tb_periode";
              $sql = mysqli_query($conn, $query);
              while ($data = mysqli_fetch_assoc($sql)) { ?>
                <option value="<?= $data['periode'] ?>"><?= $data['periode'] ?></option>
              <?php }
              ?>
            </select>
          </div>
          <button class="btn btn-warning" name="cetak">
            <span class="icon text-white-50 mr-2">
              <i class="fas fa-print"></i>
            </span>
            Cetak Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- /.container-fluid -->
</div>
<?php require 'template/footer.php' ?>