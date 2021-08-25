<?= $this->extend('layout/templateindexanggota'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Buku</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../anggota">Beranda</a></li>
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
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Sampul</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Penerbit</th>
                    <th>Tahun Buku</th>
                    <th>Stok Buku</th>
                    <th>Dipinjam</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($buku as $a) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>
                        <img src="<?= base_url('img') . "/" . $a['sampul'] ?>" alt="" width="80px" class="center">
                      </td>
                      <td><?= $a['isbn']; ?></td>
                      <td><?= $a['title']; ?></td>
                      <td><?= $a['penerbit']; ?></td>
                      <td><?= $a['thn_buku']; ?></td>
                      <td><?= $a['jml']; ?></td>
                      <!-- diisi dipinjam -->
                      <td><?= $a['jml']; ?></td>
                      <td><?= $a['created']; ?></td>
                      <td>
                        <a href="../anggota/databukudetail/<?= $a['buku_id']; ?>" class="btn btn-primary" role="button">
                          <i class="fa fa-eye"></i>
                          Detail
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?= $this->endSection(); ?>