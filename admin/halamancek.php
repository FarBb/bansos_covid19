<?php require 'template/header.php';

$data = query("SELECT * FROM tb_halamancek");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <p class="mb-4">
  </p>

  <!-- DataTales Example -->
  <div class="infoDataSetHalaman" data-infodata="<?php if (isset($_SESSION['editSet'])) {
                                                    echo $_SESSION['editSet'];
                                                  }
                                                  unset($_SESSION['editSet']); ?>">
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h1 class="h3 mb-2 text-gray-800">Halaman Cek</h1>
    </div>
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
                  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-edit"></i>
                  </a>
                </td>
              </tr>
              <!-- modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data Periode</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="halamancek_edit.php" method="POST">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Periode:</label>
                              <input type="hidden" name="id" class="form-control" id="recipient-name" value="<?= $b['id'] ?>">
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




<!-- /.container-fluid -->
</div>
<?php require 'template/footer.php' ?>