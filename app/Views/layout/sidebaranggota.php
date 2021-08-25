 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url('anggota') ?>" class="brand-link">
         <img src="https://edulab.co.id/wp-content/uploads/2019/01/LogoEdulab.png" alt="Edulab Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Edulab</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar user (optional) -->
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
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item ">
                     <a href="<?= base_url('anggota/') ?>" class="nav-link <?= ($segment == 'anggota' || $segment == 'detailpinjam') ? 'active' : '' ?>">
                         <i class="nav-icon fas fa-upload"></i>
                         <p>
                             Data Peminjaman
                             <i></i>
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/pengembalianbuku') ?>" class="nav-link <?= ($segment == 'pengembalianbuku' || $segment == 'detailkembali' || $segment == 'profile') ? 'active' : '' ?>">
                         <i class="nav-icon fas fa-upload"></i>
                         <p>
                             Data Pengembalian
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/dataBukuAnggota') ?>" class="nav-link <?= ($segment == 'dataBukuAnggota' || $segment == 'databukudetail') ? 'active' : '' ?>">
                         <i class="nav-icon fas fa-search"></i>
                         <p>
                             Cari Buku
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/profileAnggota') ?>" class="nav-link <?= ($segment == 'profileAnggota') ? 'active' : '' ?>">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Data Anggota
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/print') ?>" class="nav-link <?= ($segment == 'print' || $segment == 'tambahuser') ? 'active' : '' ?>">
                         <i class=" nav-icon fas fa-print"></i>
                         <p>
                             Cetak Kartu Anggota
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>