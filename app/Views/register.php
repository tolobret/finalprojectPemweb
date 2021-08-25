<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body class="hold-transition register-page" style="background-image: url('https://i.ibb.co/wQjr6XJ/perpustakaan.png')">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index2.html" class="h1"><b>Edulab</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Daftar Akun Edulab</p>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h4>Periksa Entrian Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
          </div>
        <?php endif; ?>
        <form action="../register/process" method="post" enctype="multipart/form-data">
             <?= csrf_field(); ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="username" class="form-control" placeholder="Username" id="username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Kata Sandi" id="password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Tulis Ulang Kata Sandi" id="passwordUlang" name="passwordUlang">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div>
                <a href="/login" class="text-center">Sudah Punya Akun?</a>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- <a href="/Home" class="text-center">Sudah Punya Akun?</a> -->
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  <?= $this->endSection(); ?>