<?= $this->extend('layout/templateindex'); ?>

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
            <div class="card-header">
              <h3 class="card-title">Data Buku</h3>
            </div>
            <div class="card-body">
              <div class="col-4">
                <a href="<?= base_url('petugas/tambahbuku'); ?>" class="btn btn-success" role="button">
                  <i class="fa fa-edit">Tambah Buku</i>
                </a>
              </div>


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
                        <a href="../petugas/ubahbuku/<?= $a['id_buku']; ?>" class="btn btn-success" role="button">
                          <i class="fa fa-edit"></i>
                        </a>


                        <a href="../petugas/detailbuku/<?= $a['buku_id']; ?>" class="btn btn-primary" role="button">
                          <i class="fa fa-eye"></i>
                          Detail
                        </a>

                        <form action="../petugas/delBuku/<?= $a['title']; ?>" method="POST" class="d-inline ">
                          <?= csrf_field(); ?>
                          <input type="hidden" name="_method">
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">
                            <i class=" fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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

</div>
<!-- ./wrapper -->
<?= $this->endSection(); ?>