<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition login-page" style="background-image: url('https://i.ibb.co/wQjr6XJ/perpustakaan.png')">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.html" class="h1"><b>EDULAB</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login untuk masuk ke EDULAB</p>
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Petugas</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Anggota</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab1" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile" aria-selected="false">Admin</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form action="<?= base_url('login/auth'); ?>" method="post">
              <div class="input-group mb-3">
                <input type="email" id="user" name="user" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Ingat Saya
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <!-- /.social-auth-links -->

            <p class="mb-1">
              <a href="Home/forgotPassword">Lupa Kata Sandi?</a>
            </p>

          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form action="index.html" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember1">
                    <label for="remember1">
                      Ingat Saya
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <a class="btn btn-primary btn-block" href="user_data_pinjam_buku.html" role="button">Masuk</a>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <!-- /.social-auth-links -->

            <p class="mb-1">
              <a href="Home/forgotPassword">Lupa Kata Sandi?</a>
            </p>
            <p class="mb-0">
              <a href="Home/register" class="text-center">Daftar Akun Baru</a>
            </p>
          </div>
          <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form action="index.html" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember2">
                    <label for="remember1">
                      Ingat Saya
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <a class="btn btn-primary btn-block" href="admin_data_petugas.html" role="button">Masuk</a>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <!-- /.social-auth-links -->

            <p class="mb-1">
              <a href="Home/forgotpassword">Lupa Kata Sandi?</a>
            </p>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <?= $this->endSection(); ?>