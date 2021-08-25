<?= $this->extend('layout/templateindexadmin'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Data Pengguna</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../admin">Beranda</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
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
              <div class="col-4">
                <a href="<?= base_url('admin/tambahuser'); ?>" class="btn btn-success" role="button">
                  <i class="fa fa-edit"> Tambah Pengguna</i>
                </a>
              </div>
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Level</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($anggota as $a) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $a['anggota_id']; ?></td>
                      <td>
                        <div class="text-center">
                          <img src="<?= base_url('img') . "/" . $a['foto'] ?>" alt="" width="80px" class="center">
                        </div>
                      </td>
                      <td><?= $a['nama']; ?></td>
                      <td><?= $a['user']; ?></td>
                      <td><?= $a['jenkel']; ?></td>
                      <td><?= $a['telepon']; ?></td>
                      <td><?= $a['level']; ?></td>
                      <td><?= $a['alamat']; ?></td>
                      <td>
                        <a href="<?= base_url('admin/profileanggota') ?><?= '/' . $a['user']; ?>" class="btn btn-success" role="button">
                          <i class="fa fa-edit"></i>
                        </a>
                        <form action="../admin/delPetugas/<?= $a['user']; ?>" method="POST" class="d-inline ">
                          <?= csrf_field(); ?>
                          <input type="hidden" name="_method">
                          <input type="hidden" name="segment" value="anggota">
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">
                            <i class=" fa fa-trash"></i>
                          </button>
                        </form>
                        <a href="<?= base_url('../dashboard/print') ?><?= '/' . $a['user']; ?>" class="btn btn-primary" role="button">
                          <i class="fa fa-print"></i>
                          Cetak Kartu
                        </a>

                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
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
<?= $this->endSection(); ?>