    <?= $this->extend('layout/templateindexanggota'); ?>

    <?= $this->section('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Detail Pengembalian</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Transaksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>No Peminjaman</td>
                        <td>PJ001</td>

                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Tanggal Peminjaman</td>
                        <td>24-03-2021</td>

                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Tanggal Pengembalian</td>
                        <td>01-04-2021</td>

                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>ID Anggota</td>
                        <td>A001

                        </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Biodata</td>
                        <td>
                          <table class="table table-striped">
                            <tr>
                              <td>Nama Anggota</td>
                              <td>Satrio Arif</td>
                            </tr>
                            <tr>
                              <td>Telepon</td>
                              <td>08123456789</td>
                            </tr>
                            <tr>
                              <td>E-Mail</td>
                              <td>satrioarif@gmail.com</td>
                            </tr>
                            <tr>
                              <td>Alamat</td>
                              <td>Jalan Danau Toba Sawojajar</td>
                            </tr>
                            <tr>
                              <td>Level</td>
                              <td>Anggota</td>
                            </tr>

                          </table>
                        </td>

                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Lama Peminjaman</td>
                        <td>1 Hari</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">

              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Pinjam Buku</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Status</td>
                        <td>Di Kembalikan</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Tanggal Kembali</td>
                        <td>2020-05-20</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Denda</td>
                        <td>Rp0,-</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Kode Buku</td>
                        <td>1.BK008</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Data Buku</td>
                        <td>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 10px">No</th>
                                <th>Title</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                              </tr>
                            </thead>
                            <tr>
                              <td><strong>1</strong></td>
                              <td>CARA MUDAH BELAJAR PEMROGRAMAN C++</td>
                              <td>INFORMATIKA BANDUNG</td>
                              <td>2012</td>
                            </tr>
                          </table>
                        </td>
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
        </div>


      </section>
      <!-- /.content -->
    </div>
    <?= $this->endSection(); ?>