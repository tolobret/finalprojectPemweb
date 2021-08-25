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
            <li class="breadcrumb-item"><a href="../petugas">Beranda</a></li>
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
              <h3 class="card-title"><?= $buku[0]['title']; ?></h3>
            </div>

            <!-- /.card-header -->
            <div>
              <div class="card-body">

                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <td>ISBN</td>
                      <td><?= $buku['0']['isbn']; ?></td>
                    </tr>
                    <tr>
                      <td>Sampul Buku</td>
                      <td>

                        <img src="<?= base_url('img') . "/" . $buku[0]['sampul'] ?>" alt="" width="200px" class="center">

                      </td>
                    </tr>
                    <tr>
                      <td>Judul Buku</td>
                      <td><?= $buku[0]['title']; ?></td>
                    </tr>
                    <tr>
                      <td>Kategori</td>
                      <td><?= $buku[0]['id_kategori']; ?></td>
                    </tr>
                    <tr>
                      <td>Penerbit</td>
                      <td><?= $buku[0]['penerbit']; ?></td>
                    </tr>
                    <tr>
                      <td>Pengarang</td>
                      <td><?= $buku[0]['pengarang']; ?></td>
                    </tr>
                    <tr>
                      <td>Tahun Terbit</td>
                      <td><?= $buku[0]['thn_buku']; ?></td>
                    </tr>
                    <tr>
                      <td>Jumlah Buku</td>
                      <td><?= $buku[0]['jml']; ?></td>
                    </tr>
                    <tr>
                      <td>Jumlah Pinjam</td>
                      <td><?= $countbuku; ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                          <i class="fa fa-sign-in-alt" aria-hidden="true"></i> Detail Pinjam</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Rak / Lokasi</td>
                      <td><?= $bukurak[0]['nama_rak']; ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Masuk</td>
                      <td><?= $buku[0]['created']; ?></td>
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
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Tgl Pinjam</th>
                    <th>Lama Pinjam</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($anggotapinjam as $data) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['anggota_id']; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['jenkel']; ?></td>
                      <td><?= $data['telepon']; ?></td>
                      <td><?= $data['tgl_pinjam']; ?></td>
                      <td><?= $data['lama_pinjam']; ?> hari</td>
                    </tr>
                  <?php endforeach; ?>
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
<?= $this->endSection(); ?>