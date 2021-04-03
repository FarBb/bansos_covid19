<?php require 'template/header.php';

$data = query("SELECT * FROM tb_periode");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Periode</h1>
  <p class="mb-4">
  </p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Periode</span>
      </a>

      <!-- modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Periode</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="periode_tambah.php" method="POST">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Periode:</label>
                      <input type="text" name="periode" class="form-control" id="recipient-name" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="tambah">Tambah Data</button>
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
      <!-- akhir modal -->

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Periode</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $a = 1;
              foreach ($data as $b) : ?>
                <tr>
                  <td><?= $a ?></td>
                  <td><?= $b['periode'] ?></td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModal<?= $b['id'] ?>">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="periode_hapus.php?id=<?= $b["id"]; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Periode');">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <!-- modal -->
                <div class="modal fade" id="exampleModal<?= $b['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Periode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="periode_edit.php" method="POST">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Periode:</label>
                                <input type="hidden" name="id" class="form-control" id="recipient-name" value="<?= $b['id'] ?>">
                                <input type="text" name="periode" class="form-control" id="recipient-name" value="<?= $b['periode'] ?>">
                              </div>
                              <button type="submit" class="btn btn-success" name="edit">Update Data</button>
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
                <!-- akhir modal -->
              <?php
                $a++;
              endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- /.container-fluid -->
</div>
<?php require 'template/footer.php' ?>