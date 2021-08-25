<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition login-page" style="background-image: url('https://i.ibb.co/wQjr6XJ/perpustakaan.png')">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.html" class="h1"><b>EDULAB</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Masukkan Kata sandi Baru.</p>
        <form action="login.html" method="post">
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Kata Sandi">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Ubah Kata Sandi</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mt-3 mb-1">
          <a href="/Home">Masuk</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <?= $this->endSection(); ?>