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
                  <form action="<?= base_url('Nasabah/simpan') ?>" method="POST">
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
                                              <label>Nama Nasabah</label>
                                              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                                          </div>
                                          <div class="form-group">
                                              <label>Nomor Induk Santri</label>
                                              <input type="text" name="NIS" class="form-control" placeholder="Masukan NIS">
                                          </div>
                                          <div class="form-group">
                                              <label>Saldo</label>
                                              <input type="text" name="saldo" class="form-control" placeholder="Masukan Jumlah Uang">
                                          </div>
                                      </div>
                                      <!-- /.card -->
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <!-- general form elements -->
                                  <div class="card card-primary">

                                      <div class="card-body">
                                          <div class="form-group">
                                              <label></label>
                                              <input type="hidden" name="nasabahId" class="form-control" placeholder="Masukan Jumlah Uang">
                                          </div>
                                          <div>
                                              <label>Alamat</label>
                                          </div>
                                          <textarea name="alamat" cols="60" rows="5"></textarea>


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