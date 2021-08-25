<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Buku Detail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Data Buku</li>
          </ol>
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
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">CARA MUDAH BELAJAR PEMROGRAMAN</h3>
            </div>

            <!-- /.card-header -->
            <div>
              <div class="card-body">

                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>ISBN</td>
                      <td>AAG001</td>
                    </tr>
                    <tr>
                      <td>Sampul Buku</td>
                      <td>* Tidak ada Sampul</td>
                    </tr>
                    <tr>
                      <td>Judul Buku</td>
                      <td>CARA MUDAH BELAJAR PEMROGRAMAN</td>
                    </tr>
                    <tr>
                      <td>Kategori</td>
                      <td>Pemrograman</td>
                    </tr>
                    <tr>
                      <td>Penerbit</td>
                      <td>Erlangga</td>
                    </tr>
                    <tr>
                      <td>Pengarang</td>
                      <td>Satrio Arif</td>
                    </tr>
                    <tr>
                      <td>Tahun Terbit</td>
                      <td>2021</td>
                    </tr>
                    <tr>
                      <td>Jumlah Buku</td>
                      <td>15</td>
                    </tr>
                    <tr>
                      <td>Jumlah Pinjam</td>
                      <td>1
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                          <i class="fa fa-sign-in-alt" aria-hidden="true"></i> Detail Pinjam</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Keterangan Lainnya</td>
                      <td>
                        <table class="table table-striped">
                          <tr>
                            <td>Tipe Buku </td>
                            <td>Kertas</td>
                          </tr>
                          <tr>
                            <td>Bahasa</td>
                            <td>Bahasa Indonesia</td>
                          </tr>

                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>Rak / Lokasi</td>
                      <td>Rak Buku 1</td>
                    </tr>
                    <tr>
                      <td>Lampiran</td>
                      <td>* Tidak ada Lampiran</td>
                    </tr>
                    <tr>
                      <td>Tanggal Masuk</td>
                      <td>2019-11-23 11:49:57</td>
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
    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sedang dipinjam</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jankel</th>
                    <th>Telepon</th>
                    <th>Tgl Pinjam</th>
                    <th>Lama Pinjam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>AG002</td>
                    <td>Satrio Arif</td>
                    <td>Laki-Laki</td>
                    <td>085258861703</td>
                    <td>2020-05-21</td>
                    <td>2 hari</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default"> Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>