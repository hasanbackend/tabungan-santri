<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>List Admin | Tabungan Santri</h1>
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
                                        <?php

                                        $password = '';
                                        $plaintext = $password;
                                        $key = '1234567890';
                                        $method = 'aes-256-cbc';
                                        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
                                        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
                                        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);

                                        ?>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Alamat</th>
                                                    <!-- <th>Password</th> -->
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $i = 1; ?>
                                                    <tr">
                                                        <?php foreach ($admin as $row) : ?>
                                                            <td scope="row"><?= $i; ?></td>
                                                            <td><?= $row['nama']; ?></td>
                                                            <td><?= $row['name']; ?></td>
                                                            <td><?= $row['nomorTelp']; ?></td>
                                                            <td><?= $row['alamat']; ?></td>
                                                            <!-- <td>
                                                                <?= openssl_decrypt(base64_decode($row['password']), $method, $key, OPENSSL_RAW_DATA, $iv); ?>
                                                            </td> -->

                                                            <td align=" center">
                                                                <button type="button" class="btn btn-warning" onclick="window.location='<?php echo site_url('Admin/edit/' . $row['adminId']) ?>'">
                                                                    <i class="fa fa-edit"> </i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" onclick="hapus('<?= $row['adminId'] ?>')">
                                                                    <i class="fa fa-trash"> </i>
                                                                </button>
                                                                <button type="button" class="btn btn-info" onclick="window.location='<?php echo site_url('Admin/preview/' . $row['adminId']) ?>'">
                                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                                        <path fill="currentColor" d="M11.03 19H5V5H7V7H17V5H19V9.5C19.72 9.8 20.4 10.24 21 10.82V5C21 3.9 20.11 3 19 3H14.82C14.4 1.84 13.3 1 12 1S9.6 1.84 9.18 3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H13.06C12.65 20.74 12.26 20.45 11.9 20.1C11.57 19.76 11.27 19.39 11.03 19M12 3C12.55 3 13 3.45 13 4S12.55 5 12 5 11 4.55 11 4 11.45 3 12 3M20.31 17.9C20.75 17.21 21 16.38 21 15.5C21 13 19 11 16.5 11S12 13 12 15.5 14 20 16.5 20C17.37 20 18.19 19.75 18.88 19.32L22 22.39L23.39 21L20.31 17.9M16.5 18C15.12 18 14 16.88 14 15.5S15.12 13 16.5 13 19 14.12 19 15.5 17.88 18 16.5 18Z" />
                                                                    </svg>
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
            function hapus(adminId) {
                pesan = confirm('Yakin hapus data ?');

                if (pesan) {
                    window.location.href = ("<?= site_url('Admin/hapus/') ?>") + adminId;
                } else return false
            }
        </script>