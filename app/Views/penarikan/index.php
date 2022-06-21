<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Penarikan | Tabungan Santri</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url('Penarikan/tambah') ?>'">
                                                <i class="fa fa-plus"> Tambah</i>

                                                <tr>
                                                    <th width="50px">No</th>
                                                    <th width="500px">Nama</th>
                                                    <th width="500px">Jumlah</th>
                                                    <th width="200px">Timestamp</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $i = 1; ?>
                                                <tr">
                                                    <?php foreach ($penarikan as $row) : ?>
                                                        <td scope="row"><?= $i; ?></td>
                                                        <td><?= $row['nama']; ?></td>
                                                        <td>Rp. <?= number_format($row['jumlah'], 2, ',', '.');  ?></td>
                                                        <td><?= $row['timestamp']; ?></td>


                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->