<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Buku <?= $databuku['title']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../petugas">Beranda</a></li>
            <li class="breadcrumb-item active">Edit Buku</li>
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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <!-- <h3 class="card-title">Quick Example</h3> -->
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../../petugas/editbuku" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class=" card-body">
                <div class="row">
                  <input type="hidden" class="form-control" id="id_buku" name="id_buku" value="<?= $databuku['id_buku']; ?>">
                  <div class="form-group col-md-6">
                    <label for="exampleSelectRounded0">Kategori</label>
                    <select class="custom-select rounded-0" id="id_kategori" name="id_kategori">
                      <option disabled selected value> -- Pilih Kategori -- </option>
                      <?php foreach ($kategori as $isi) { ?>
                        <option value="<?= $isi['id_kategori']; ?>" <?php if ($isi['id_kategori'] == $databuku['id_kategori']) {
                                                                      echo 'selected';
                                                                    } ?>><?= $isi['nama_kategori']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputTelepon">Jumlah Buku</label>
                    <input type="text" class="form-control" id="jml" name="jml" placeholder="Masukkan Jumlah" value="<?= $databuku['jml']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleSelectRounded0">Rak / Lokasi</label>
                    <select class="custom-select rounded-0" id="id_rak" name="id_rak">
                      <?php foreach ($rak as $isi) { ?>
                        <option value="<?= $isi['id_rak']; ?>" <?php if ($isi['id_rak'] == $databuku['id_rak']) {
                                                                  echo 'selected';
                                                                } ?>><?= $isi['nama_rak']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="sampul">Sampul</label>

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="sampul" name="sampul">
                      <label class="custom-file-label" for="sampul">Choose file</label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTanggalLahir">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan No ISBN" value="<?= $databuku['isbn']; ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputPassword">Tahun Buku</label>
                    <input type="text" class="form-control" id="thn_buku" name="thn_buku" placeholder="Tahun Buku : 2019" value="<?= $databuku['thn_buku']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTanggalLahir">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku" value="<?= $databuku['title']; ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputPassword">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Nama Penerbit" value="<?= $databuku['penerbit']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputPassword">Nama Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Nama Pengarang" value="<?= $databuku['pengarang']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer ">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary btn-md">Submit</button>
                  <a href="data_buku.html" class="btn btn-danger">Kembali</a>
                </div>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?= $this->endSection(); ?>