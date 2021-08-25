<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Peminjaman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Pinjam Buku</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Transaksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../petugas/prosespinjam" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Peminjaman</label>
                                    <input type="text" name="nopinjam" id="nopinjam" value="<?= $peminjaman['pinjam_id']; ?>" readonly class="form-control">
                                </div>
                                <!-- Date -->
                                <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" value="<?= $peminjaman['tgl_pinjam']; ?>" name="tgl" id="tgl" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" value="<?= $peminjaman['tgl_kembali']; ?>" name="tgl" id="tgl" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ID Anggota</label>
                                    <div class="input-group date" id="Idanggota" data-target-input="nearest">
                                        <input type="text" readonly class="form-control" required autocomplete="off" name="anggota_id" value="<?= $peminjaman['anggota_id']; ?>">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Biodata</label>
                                    <div class="input-group " name="Biodata" id="Biodata" data-target-input="nearest">
                                        <div id="result_tunggu">
                                            <p style="color:red">* Belum Ada</p>
                                        </div>
                                        <div id="result"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Lama Peminjaman</label>
                                    <div class="input-group date" name="lamapeminjaman" id="lamapeminjaman" data-target-input="nearest">
                                        <input type="number" id="lamapeminjaman" name="lamapeminjaman" readonly class="form-control" value="<?= $peminjaman['lama_pinjam']; ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Hari</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <!-- </form> -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- right column -->
                <div class=" col-md-6">
                    <!-- Form Element sizes -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Pinjam Buku</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status</label>
                                <div class="input-group ">
                                    <input type="text" readonly class="form-control" autocomplete="off" name="buku_id" id="buku-search" type="text" value="<?= $peminjaman['status']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kembali</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" value=" <?php if ($peminjaman['tgl_balik'] == null) {
                                                                    echo 'belum dikembalikan';
                                                                } else {
                                                                    echo $peminjaman['tgl_balik'];
                                                                }
                                                                ?>
                                    
                                    " name="tgl" id="tgl" readonly class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kode Buku</label>
                                <div class="input-group date" name="lamapeminjaman" id="lamapeminjaman" data-target-input="nearest">
                                    <input type="text" value="<?= $peminjaman['buku_id']; ?>" id="lamapeminjaman" name="lamapeminjaman" readonly class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Data Buku</label>
                                <div id="result_tunggu">
                                    <p style="color:red">* Belum Ada</p>
                                </div>
                                <div id="result"></div>
                                <!-- <div class="input-group date" name="lamapeminjaman" id="lamapeminjaman" data-target-input="nearest">
                                    <input type="number" id="lamapeminjaman" name="lamapeminjaman" readonly class="form-control">
                                </div> -->
                            </div>



                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                    <!--/.col (right) -->

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
            <div class="card-footer ">
                <div class="float-right">
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    <a href="index.html" class="btn btn-danger">Kembali</a>
                </div>
            </div>

            </form>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection(); ?>