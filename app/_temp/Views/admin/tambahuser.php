<?= $this->extend('layout/templateindexadmin'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
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
            <form>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputNamaPengguna">Nama Pengguna</label>
                    <input type="email" class="form-control" id="InputNamaPengguna" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputTelepon">Telepon</label>
                    <input type="password" class="form-control" id="InputTelepon" placeholder="Masukkan Nomor Telepon">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTempatLahir">Tempat Lahir</label>
                    <input type="email" class="form-control" id="InputTempatLahir" placeholder="Masukkan Tempat Lahir">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputEmail">Email</label>
                    <input type="password" class="form-control" id="InputEmail" placeholder="Masukkan alamat E-mail">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputTanggalLahir">Tanggal Lahir</label>
                    <input type="email" class="form-control" id="InputTanggalLahir" placeholder="Masukkan Tanggal Lahir">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputFile">Foto Profil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputUsername">Username</label>
                    <input type="email" class="form-control" id="InputUsername" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputUsername">Alamat</label>
                    <input type="email" class="form-control" id="InputAlamat" placeholder="Masukkan Alamat">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="InputPassword">Kata Sandi (Opsional)</label>
                    <input type="email" class="form-control" id="InputPassword" placeholder="Isi Kata Sandi Jika Diperlukan Ganti">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleSelectRounded0">Level</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                      <option>Petugas</option>
                      <option>Anggota</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="pickgender">Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
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
                  <a href="admin_data_pengguna.html" class="btn btn-danger">Kembali</a>
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
</div><?= $this->endSection(); ?>