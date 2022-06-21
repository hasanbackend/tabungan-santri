  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Tambah Admin</h3>
                  </div>
                  <form action="<?= base_url('Admin/simpan') ?>" method="POST">
                      <div class="card-body">
                          <div class="row">
                              <!-- left column -->
                              <div class="col-md-6">
                                  <!-- general form elements -->
                                  <div class="card card-primary">
                                      <!-- /.card-header -->
                                      <!-- form start -->
                                      <div class="card-body">
                                          <div class="form-group">
                                              <input type="hidden" name="adminId">
                                          </div>
                                          <div class="form-group">
                                              <label>Nama Admin</label>
                                              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Induk Santri</label>
                                              <input type="number" name="NIS" class="form-control" placeholder="Masukan Nomor Induk Santri">
                                          </div>
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="text" name="password" class="form-control" placeholder="Masukan Password">
                                          </div>
                                      </div>
                                      <!-- /.card -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <!-- general form elements -->
                                  <div class="card card-primary">

                                      <div class="card-body">
                                          <div>
                                              <label>Jabatan</label>
                                              <select name="roleId" class=" form-control">
                                                  <?php foreach ($role as $row) : ?>
                                                      <option value="<?= $row['roleId'] . "#0#" . $row['roleId'] ?>"><?php echo $row['name'] ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Telepon</label>
                                              <input type="text" name="nomorTelp" class="form-control" placeholder="Masukan Nomor Telp">
                                          </div>
                                          <div>
                                              <label>Alamat</label>
                                          </div>
                                          <textarea name="alamat" cols="63" rows="2"></textarea>

                                          <!-- /.card-body -->

                                          <button type="submit" class="btn btn-primary">Simpan</button>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>