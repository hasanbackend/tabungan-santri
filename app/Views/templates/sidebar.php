<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Home') ?>" class="brand-link">
        <img src="<?= base_url('assets/dist/img/logo.jpeg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Asaasunnajaah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?php echo session()->get('nama') ?> </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('Home') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Daftar Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Admin/tambah') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Tambah Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Admin') ?>" class="nav-link">
                                <i class="far fa-list nav-icon"></i>
                                <p>List Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Daftar Nasabah
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Nasabah/tambah') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Tambah Nasabah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Nasabah') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>List Nasabah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Daftar Jabatan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Role/tambah') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Tambah Jabatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Role') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>List Jabatan</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Penyetoran') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Penyetoran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Penarikan') ?>" class="nav-link">
                                <i class="far fa-plus nav-icon"></i>
                                <p>Penarikan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>