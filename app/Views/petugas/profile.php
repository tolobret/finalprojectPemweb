<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update User - <?= $datauser['nama']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../petugas">Beranda</a></li>
            <li class="breadcrumb-item active">General Form</li>
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
            <form action="../../petugas/editUser" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="card-body">
                <div class="row">
                  <input type="hidden" class="form-control" id="id" name="id" value="<?= $datauser['id_login']; ?>">
                  <div class="form-group col-md-6">
                    <label for="InputNamaPengguna">Nama Pengguna</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $datauser['nama']; ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputTelepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $datauser['telepon']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $datauser['tempat_lahir']; ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputEmail">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $datauser['email']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTanggalLahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $datauser['tgl_lahir']; ?>">
                  </div>
                  <div class=" form-group col-md-6">
                    <label for="foto">Foto Profil</label>
                    <div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto">
                        <div class="invalid-feedback">
                          <?= $validation->getError('foto'); ?>
                        </div>
                        <label class="custom-file-label" for="foto">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputUsername">Username</label>
                    <input type="text" id="user" name="user" value="<?= $datauser['user']; ?>" readonly class="form-control">
                  </div>
                  <!-- <div class="col-md-6">
                    <img src="/img/default.png" alt="" class="img-thumbnail img-preview">
                  </div> -->
                  <div class="form-group col-md-6">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $datauser['alamat']; ?>" placeholder="Masukkan Alamat">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputPassword">Kata Sandi (Opsional)</label>
                    <input type="password" class="form-control" id="pass" name="pass" value="<?= $datauser['pass']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <?php
                    $value = $datauser['jenkel'];
                    if ($value == "Laki-laki") {
                      echo 'checked';
                    }
                    ?>
                    <label for="pickgender">Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-laki" <?php
                                                                                                                                    $value = $datauser['jenkel'];
                                                                                                                                    if ($value == "Laki-laki") {
                                                                                                                                      echo 'checked';
                                                                                                                                    }


                                                                                                                                    ?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Perempuan" <?php
                                                                                                                                    $value = $datauser['jenkel'];
                                                                                                                                    if ($value == "Perempuan") {
                                                                                                                                      echo 'checked';
                                                                                                                                    }


                                                                                                                                    ?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary btn-md">Submit</button>
                  <a href="../dataanggota" class="btn btn-danger">Kembali</a>
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
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?= $this->endSection(); ?>