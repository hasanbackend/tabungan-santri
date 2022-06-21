  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Edit Nasabah</h3>
                  </div>

                  <form action="<?= base_url('nasabah/update') ?>" method="POST">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="card card-primary">
                                      <div class="card-body">

                                          <div class="form-group">
                                              <input type="hidden" name="nasabahId" class="form-control" value="<?= $nasabahId; ?>">
                                          </div>
                                          <div class="form-group">
                                              <label>Nama Nasabah</label>
                                              <input type="text" name="nama" class="form-control" value="<?= $nama; ?>" placeholder="Masukan Nama">
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Induk Santri</label>
                                              <input type="text" name="NIS" value="<?= $NIS; ?>" class="form-control" placeholder="Masukan Nomor Induk Santri">
                                          </div>
                                          <div class="form-group">
                                              <label>Saldo</label>
                                              <input type="text" name="saldo" value="<?= $saldo; ?>" class="form-control" placeholder="Masukan Password">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card card-primary">
                                      <div class="card-body">


                                          <div class="form-group">
                                              <label>Alamat</label> <br>
                                              <textarea name="alamat" cols="50" rows="3"><?= $alamat; ?></textarea>
                                          </div>
                                      </div>
                                      <div class="card-footer">
                                          <button type="submit" class="btn btn-primary">Update</button>
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