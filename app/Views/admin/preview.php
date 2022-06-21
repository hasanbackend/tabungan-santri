<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 style="text-align: center;"><b>Preview Admin</b></h1>
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
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="150px">Nama</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="150px">NIS</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['NIS']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="100px">Password</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['password']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="100px">Jabatan</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="150px">Alamat</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="100px">Nomor Telepon</th>
                                                <th width="30px">:</th>
                                                <td><?php echo $row['nomorTelp']; ?></td>
                                            </tr>


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