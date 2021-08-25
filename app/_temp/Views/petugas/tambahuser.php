<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Tambah User</li>
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
            <form action="../petugas/save" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="nama">Nama Pengguna</label>
                    <input type="text" class="form-control " id="nama" name="nama" placeholder="Masukkan Nama Lengkap">

                  </div>
                  <div class="form-group col-md-6">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat E-mail">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group col-md-6">
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
                    <label for="user">Username</label>
                    <input type="text" class="form-control <?= ($validation->hasError('user')) ? 'is-invalid' : ''; ?>" id="user" name="user" placeholder="Masukkan Username">
                    <div class="invalid-feedback">
                      <?= $validation->getError('user'); ?>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">

                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Isi Kata Sandi">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="level">Level</label>
                    <select class="custom-select rounded-0" id="level" name="level">
                      <option>Petugas</option>
                      <option>Anggota</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="pickgender">Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki-laki">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Perempuan">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer ">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary btn-md">Submit</button>
                  <a href="../petugas/dataanggota" class="btn btn-danger">Kembali</a>
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