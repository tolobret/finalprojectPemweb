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
            <li class="breadcrumb-item active">Detail Pinjam</li>
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
                    <td><?= $peminjaman['pinjam_id']; ?></td>

                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Tanggal Peminjaman</td>
                    <td><?= $peminjaman['tgl_pinjam']; ?></td>

                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Tanggal Pengembalian</td>
                    <td><?= $peminjaman['tgl_kembali']; ?></td>

                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>ID Anggota</td>
                    <td><?= $peminjaman['anggota_id']; ?></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Biodata</td>
                    <td>
                      <table class="table table-striped">
                        <tr>
                          <td>Nama Anggota</td>
                          <td><?= $joinanggota['0']['nama']; ?></td>
                        </tr>
                        <tr>
                          <td>Telepon</td>
                          <td><?= $joinanggota['0']['telepon']; ?></td>
                        </tr>
                        <tr>
                          <td>E-Mail</td>
                          <td><?= $joinanggota['0']['email']; ?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?= $joinanggota['0']['alamat']; ?></td>
                        </tr>
                        <tr>
                          <td>Level</td>
                          <td><?= $joinanggota['0']['level']; ?></td>
                        </tr>

                      </table>
                    </td>

                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Lama Peminjaman</td>
                    <td><?= $peminjaman['lama_pinjam']; ?> hari</td>
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
                    <td><?= $peminjaman['status']; ?></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Tanggal Kembali</td>
                    <td><?= $peminjaman['tgl_kembali']; ?></td>
                  </tr>
                  <!-- denda belum dikerjakan -->
                  <tr>
                    <td>3.</td>
                    <td>Denda</td>
                    <td>denda</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Kode Buku</td>
                    <td><?= $peminjaman['buku_id']; ?></td>
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
                          <td><?= $joinbuku['0']['title']; ?></td>
                          <td><?= $joinbuku['0']['penerbit']; ?></td>
                          <td><?= $joinbuku['0']['thn_buku']; ?></td>
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