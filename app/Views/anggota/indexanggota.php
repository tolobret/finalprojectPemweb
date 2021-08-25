<?= $this->extend('layout/templateindexanggota'); ?>

<?= $this->section('content'); ?>
<!--  -->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Pinjam Buku</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../anggota">Beranda</a></li>
                <li class="breadcrumb-item active">Peminjaman</li>
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
                <!-- /.card-header -->
                <!-- <div> -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Pinjam</th>
                        <th>ID Anggota</th>
                        <th>Nama</th>
                        <th>Pinjam</th>
                        <th>Kembali</th>
                        <th>Status</th>
                        <th>Denda</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($join as $a) : ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $a['pinjam_id']; ?></td>
                          <td><?= $a['anggota_id']; ?></td>

                          <!-- belum diisi -->
                          <td><?= $a['nama']; ?></td>
                          <td><?= $a['tgl_pinjam']; ?></td>
                          <td><?= $a['tgl_kembali']; ?></td>
                          <td><?= $a['status']; ?></td>

                          <!-- belum diisi -->
                          <td>
                            <p class="text-danger font-weight-bold"><?= ($a['lama_waktu'] != null) ? $a['lama_waktu'] : '0' ?> Hari</p>
                            <p class="text-danger font-weight-bolder">Rp. <?= ($a['denda'] != null) ? $a['denda'] : '0' ?></p>
                          </td>
                          <td>
                            <a href="../anggota/detailpinjam/<?= $a['pinjam_id']; ?>" class="btn btn-primary" role="button">
                              <i class="fa fa-eye"></i>
                              Detail
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- </div> -->
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