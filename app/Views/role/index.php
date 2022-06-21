<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <section class="content" style="align-content: center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <h1>Jabatan | Tabungan Santri</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="list" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>No</th>
                                        <th>Id Jabatan</th>
                                        <th>Nama Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        <tr">
                                            <?php foreach ($role as $row) : ?>
                                                <td scope="row"><?= $i; ?></td>
                                                <td><?= $row['roleId']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td align=" center">
                                                    <button type="button" class="btn btn-warning" onclick="window.location='<?php echo site_url('Role/edit/' . $row['roleId']) ?>'">
                                                        <i class="fa fa-edit"> Edit</i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" onclick="hapus('<?= $row['roleId'] ?>')">
                                                        <i class="fa fa-trash"> Hapus</i>
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
    function hapus(roleId) {
        pesan = confirm('Yakin hapus data ?');

        if (pesan) {
            window.location.href = ("<?= site_url('Role/hapus/') ?>") + suratId;
        } else return false
    }
</script>