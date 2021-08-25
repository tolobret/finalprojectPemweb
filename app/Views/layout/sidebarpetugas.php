<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('petugas') ?>" class="brand-link">
        <img src="https://edulab.co.id/wp-content/uploads/2019/01/LogoEdulab.png" alt="Edulab Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Edulab</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
                <img src="<?= base_url(('img') . "/" . session()->get('foto')) ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get('nama'); ?></a>
                <a href="#" class="d-block"><?= session()->get('level'); ?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('petugas') ?>" class="nav-link <?= ($segment == 'petugas') ? 'active' : '' ?>">

                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('petugas/dataanggota') ?>" class="nav-link <?= ($segment == 'dataanggota' || $segment == 'tambahuser' || $segment == 'profile') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>

                            Data Pengguna
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= ($segment == 'databuku' || $segment == 'tambahbuku' || $segment == 'ubahbuku' || $segment == 'kategori' || $segment == 'rak' || $segment == 'detailbuku') ? 'menu-open' : '' ?>">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('petugas/databuku') ?>" class="nav-link <?= ($segment == 'databuku' || $segment == 'tambahbuku' || $segment == 'ubahbuku' || $segment == 'detailbuku') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('petugas/kategori') ?>" class="nav-link <?= ($segment == 'kategori') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('petugas/rak') ?>" class="nav-link <?= ($segment == 'rak') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rak</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= ($segment == 'peminjaman' || $segment == 'transaksi' || $segment == 'pengembalian' || $segment == 'detailpinjam' || $segment == 'detailkembali') ? 'menu-open' : '' ?>
                                    ">
                    <a href="<?= base_url('petugas/transaksi') ?>" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('petugas/peminjaman') ?>" class="nav-link <?= ($segment == 'peminjaman' || $segment == 'transaksi' || $segment == 'detailpinjam') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('petugas/pengembalian') ?>" class="nav-link <?= ($segment == 'pengembalian' || $segment == 'detailkembali') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengembalian</p>
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