 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="user_data_pinjam_buku.html" class="brand-link">
         <img src="https://edulab.co.id/wp-content/uploads/2019/01/LogoEdulab.png" alt="Edulab Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Edulab</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url('img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Satrio Arif</a>
                 <a>Anggota</a>
             </div>
         </div>


         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item ">
                     <a href="<?= base_url('anggota/') ?>" class="nav-link          <?php $uri = current_url(true);
                                                                                    $path = $uri->getPath();
                                                                                    if ($path == 'anggota') {
                                                                                        echo 'active';
                                                                                    } elseif ($path == 'anggota/detailpinjam') {
                                                                                        echo 'active';
                                                                                    }
                                                                                    ?>">
                         <i class="nav-icon fas fa-upload"></i>
                         <p>
                             Data Peminjaman
                             <i></i>
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/pengembalianbuku') ?>" class="nav-link <?php $uri = current_url(true);
                                                                                            $path = $uri->getPath();
                                                                                            if ($path == 'anggota/pengembalianbuku') {
                                                                                                echo 'active';
                                                                                            } elseif ($path == 'anggota/detailkembali') {
                                                                                                echo 'active';
                                                                                            }
                                                                                            ?>">
                         <i class="nav-icon fas fa-upload"></i>
                         <p>
                             Data Pengembalian
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/dataBukuAnggota') ?>" class="nav-link <?php $uri = current_url(true);
                                                                                            $path = $uri->getPath();
                                                                                            if ($path == 'anggota/dataBukuAnggota') {
                                                                                                echo 'active';
                                                                                            } elseif ($path == 'anggota/databukudetail') {
                                                                                                echo 'active';
                                                                                            }
                                                                                            ?>">
                         <i class="nav-icon fas fa-search"></i>
                         <p>
                             Cari Buku
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/profileAnggota') ?>" class="nav-link <?php $uri = current_url(true);
                                                                                            $path = $uri->getPath();
                                                                                            if ($path == 'anggota/profileAnggota') {
                                                                                                echo 'active';
                                                                                            }
                                                                                            ?>">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Data Anggota
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url('anggota/print') ?>" class="nav-link <?php $uri = current_url(true);
                                                                                $path = $uri->getPath();
                                                                                if ($path == 'anggota/print') {
                                                                                    echo 'active';
                                                                                } elseif ($path == 'petugas/tambahuser') {
                                                                                    echo 'active';
                                                                                }

                                                                                ?>">
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