  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                      <!-- general form elements -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Edit User</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form action="<?= base_url('Admin/update') ?>" method="POST">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label>adminId</label>
                                      <input type="hidden" name="adminId" class="form-control" value="<?= $userId; ?>" placeholder="Masukan Nama">
                                  </div>
                                  <div class="form-group">
                                      <label>Nama User</label>
                                      <input type="text" name="nama" class="form-control" value="<?= $nama; ?>" placeholder="Masukan Nama">
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" name="password" class="form-control" value="<?= $password; ?>" placeholder="Masukan Password">
                                  </div>
                                  <div>
                                      <label>Alamat</label>
                                      <input type="text" name="alamat" class="form-control" value="<?= $alamat; ?>" placeholder="Masukan Alamat">
                                  </div>

                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
                      </div>
                      <!-- /.card -->
                  </div>
              </div>
      </section>
  </div>