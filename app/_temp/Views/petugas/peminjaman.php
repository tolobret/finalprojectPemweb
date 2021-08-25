<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Peminjaman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
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
                            <h3 class="card-title">Peminjaman</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-4">
                                <a href="<?= base_url('petugas/transaksi'); ?>" class="btn btn-success" role="button">
                                    <i class="fa fa-edit">Tambah Pinjam</i>
                                </a>
                            </div>


                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Pinjam</th>
                                        <th>ID Anggota</th>
                                        <th>Nama</th>
                                        <th>Pinjam</th>
                                        <th>Balik</th>
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
                                            <td>denda</td>


                                            <td>
                                                <a href="../petugas/kembalikan/<?= $a['pinjam_id']; ?>" class="btn btn-warning" onclick="return confirm('Apakah Anda Yakin Untuk Mengembalikan Buku ?');" role="button">
                                                    <i class="fa fa-sign-out-alt"></i>
                                                    Kembalikan
                                                </a>
                                                <a href="../petugas/detailpinjam/<?= $a['pinjam_id']; ?>" class="btn btn-primary" role="button">
                                                    <i class="fa fa-eye"></i>
                                                    Detail
                                                </a>

                                                <form action="../petugas/delPinjam/<?= $a['pinjam_id']; ?>" method="POST" class="d-inline ">
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