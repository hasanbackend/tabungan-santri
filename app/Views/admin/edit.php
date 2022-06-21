  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Edit Admin</h3>
                  </div>
                  <form action="<?= base_url('Admin/update') ?>" method="POST">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="card card-primary">
                                      <div class="card-body">

                                          <div class="form-group">
                                              <input type="hidden" name="adminId" class="form-control" value="<?= $adminId; ?>">
                                          </div>
                                          <div class="form-group">
                                              <label>Nama Admin</label>
                                              <input type="text" name="nama" class="form-control" value="<?= $nama; ?>" placeholder="Masukan Nama">
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Induk Santri</label>
                                              <input type="number" name="NIS" value="<?= $NIS; ?>" class="form-control" placeholder="Masukan Nomor Induk Santri">
                                          </div>
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="text" name="password" value="<?= $password; ?>" class="form-control" placeholder="Masukan Password">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card card-primary">
                                      <div class="card-body">
                                          <div>
                                              <label>Jabatan</label>
                                              <select name="roleId" class=" form-control">
                                                  <?php foreach ($role as $row) : ?>
                                                      <option value="<?= $row['roleId'] ?>"><?php echo $row['name'] ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Telepon</label>
                                              <input type="text" name="nomorTelp" class="form-control" value="<?= $nomorTelp; ?>" placeholder="Masukan Nomor Telp">
                                          </div>
                                          <div>
                                              <label>Alamat</label> <br>
                                              <textarea name="alamat" cols="50" rows="3"><?= $alamat; ?></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>