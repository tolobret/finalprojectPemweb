<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Pinjam Buku</h1>
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
                  <input type="text" name="nopinjam" id="nopinjam" value="<?= $nopinjam; ?>" readonly class="form-control">
                </div>
                <!-- Date -->
                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="date" value="<?= date('Y-m-d'); ?>" name="tgl" id="tgl" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label>ID Anggota</label>
                  <div class="input-group date" id="Idanggota" data-target-input="nearest">
                    <input type="text" class="form-control" required autocomplete="off" name="anggota_id" id="search-box" placeholder="Contoh ID Anggota : AG001" value="">
                    <span class="input-group-btn">
                      <a data-toggle="modal" data-target="#TableAnggota" class="btn btn-primary"><i class="fa fa-search"></i></a>
                    </span>
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
                    <input type="number" required placeholder="Lama Pinjam Contoh : 2 Hari (2)" id="lamapeminjaman" name="lamapeminjaman" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <!-- </form> -->
          </div>
          <!-- /.card -->
        </div>
        <!-- right column -->
        <div class="col-md-6">
          <!-- Form Element sizes -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Pinjam Buku</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Kode Buku</label>
                <div class="input-group ">
                  <input type="text" class="form-control" autocomplete="off" name="buku_id" id="buku-search" placeholder="Contoh ID Buku : BK001" type="text" value="">
                  <span class="input-group-btn">
                    <a data-toggle="modal" data-target="#TableBuku" class="btn btn-primary"><i class="fa fa-search"></i></a>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Data Buku</label>
                <div class="input-group">
                  <input type="search" class="form-control " placeholder="Data Belum">
                </div>
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
<!-- /.content-wrapper -->
</div>

<!--modal import -->
<div class="modal fade" id="TableBuku">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Buku</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div id="modal_body" class="modal-body fileSelection1">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>ISBN</th>
              <th>Title</th>
              <th>Penerbit</th>
              <th>Tahun Buku</th>
              <th>Stok Buku</th>
              <th>Tanggal Masuk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($buku as $isi) { ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $isi['isbn']; ?></td>
                <td><?= $isi['title']; ?></td>
                <td><?= $isi['penerbit']; ?></td>
                <td><?= $isi['thn_buku']; ?></td>
                <td><?= $isi['jml']; ?></td>
                <td><?= $isi['tgl_masuk']; ?></td>
                <td style="width:17%">
                  <button class="btn btn-primary" id="Select_File2" data_id="<?= $isi['buku_id']; ?>">
                    <i class="fa fa-check"> </i> Pilih
                  </button>
                  <a href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>" target="_blank">
                    <button class="btn btn-success"><i class="fa fa-sign-in"></i> Detail</button></a>
                </td>
              </tr>
            <?php $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Anggota -->
<div class="modal fade" id="TableAnggota">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div id="modal_body" class="modal-body fileSelection1">
        <table id="example3" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Jenkel</th>
              <th>Telepon</th>
              <th>Level</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($user as $isi) {
              if ($isi['level'] == 'Anggota') {
            ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $isi['anggota_id']; ?></td>
                  <td><?= $isi['nama']; ?></td>
                  <td><?= $isi['jenkel']; ?></td>
                  <td><?= $isi['telepon']; ?></td>
                  <td><?= $isi['level']; ?></td>
                  <td style="width:20%;">
                    <button class="btn btn-primary" id="Select_File1" data_id="<?= $isi['anggota_id']; ?>">
                      <i class="fa fa-check"> </i> Pilih
                    </button>
                  </td>
                </tr>
            <?php $no++;
              }
            } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- END MODAL ANGGOTA -->
<!-- ./wrapper -->

<?= $this->endSection(); ?>