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
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
              </div>
            <?php endif; ?>
            <form action="<?= base_url('login/process'); ?>" method="post">
              <?= csrf_field(); ?>
              <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <!-- <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Ingat Saya
                    </label>
                  </div> -->
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

            </p>

          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form action="<?= base_url('login/process'); ?>" method="post">
              <?= csrf_field(); ?>
              <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <a href="<?= base_url('register/index'); ?>" class="text-center">Daftar Akun Baru</a>
                  <!-- <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Ingat Saya
                    </label>
                  </div> -->
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

            </p>
            <p class="mb-0">
              <!-- <a href="#" class="text-center">Daftar Akun Baru</a> -->
            </p>
          </div>
          <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">

            <form action="<?= base_url('login/process'); ?>" method="post">
              <?= csrf_field(); ?>
              <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <!-- <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Ingat Saya
                    </label>
                  </div> -->
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