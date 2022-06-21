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
                              <h3 class="card-title">Tambah Penyetoran</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->

                          <form action="<?= base_url('Penyetoran/simpan') ?>" method="POST">
                              <div class="card-body">
                                  <div class="card-body">
                                      <div class="form-group">
                                          <div class="form-group">
                                              <input type="hidden" name="setorId" class="form-control">
                                          </div>
                                          <label>Nama</label> <br>
                                          <select class=" select2" style="width: 100%;" name="nasabahId">
                                              <?php foreach ($nasabah as $row) : ?>
                                                  <option value="<?= $row['nasabahId'] . "#0#" . $row['nasabahId'] ?>"><?php echo $row['nama'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Jumlah</label>
                                          <input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah">
                                      </div>
                                      <div class="form-group">
                                          <!-- <label>Jumlah</label> -->
                                          <input type="hidden" name="timestamp" class="form-control">
                                      </div>
                                      <button type="submit" class="btn btn-primary">Simpan</button>

                          </form>
                      </div>
                      <!-- /.card -->
                  </div>
              </div>
      </section>
  </div>