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
                          <form action="<?= base_url('User/update') ?>" method="POST">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label>UserId</label>
                                      <input type="hidden" name="userId" class="form-control" value="<?= $userId; ?>" placeholder="Masukan Nama">
                                  </div>
                                  <div class="form-group">
                                      <label>Nama User</label>
                                      <input type="text" name="nama" class="form-control" value="<?= $nama; ?>" placeholder="Masukan Nama">
                                  </div>
                                  <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" name="email" class="form-control" value="<?= $email; ?>" placeholder="Masukan Email">
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" name="password" class="form-control" value="<?= $password; ?>" placeholder="Masukan Password">
                                  </div>
                                  <div>
                                      <label>Jabatan</label>
                                      <select name="rolesId" class=" form-control">
                                          <?php foreach ($roles as $row) : ?>
                                              <option value="<?= $row['rolesId'] . "#0#" . $row['rolesId'] ?>"><?php echo $row['nameRole'] ?></option>
                                          <?php endforeach; ?>
                                      </select>
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