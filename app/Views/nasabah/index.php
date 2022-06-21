<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>List Nasabah | Tabungan Santri</h1>
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

                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Induk Santri</th>
                                                    <th>Alamat</th>
                                                    <th>Saldo</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $i = 1; ?>
                                                    <tr">
                                                        <?php foreach ($nasabah as $row) : ?>
                                                            <td scope="row"><?= $i; ?></td>
                                                            <td><?= $row['nama']; ?></td>
                                                            <td><?= $row['NIS']; ?></td>
                                                            <td><?= $row['alamat']; ?></td>
                                                            <td>Rp. <?= number_format($row['saldo'], 2, ',', '.');  ?></td>
                                                            <td align=" center">
                                                                <button type="button" class="btn btn-warning" onclick="window.location='<?php echo site_url('Nasabah/edit/' . $row['nasabahId']) ?>'">
                                                                    <i class="fa fa-edit"> </i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" onclick="hapus('<?= $row['nasabahId'] ?>')">
                                                                    <i class="fa fa-trash"> </i>
                                                                </button>
                                                            </td>
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


        <script>
            function hapus($nasabahId) {
                pesan = confirm('Yakin hapus data ?');

                if (pesan) {
                    window.location.href = ("<?= site_url('Nasabah/hapus/') ?>") + $nasabahId;
                } else return false
            }
        </script>