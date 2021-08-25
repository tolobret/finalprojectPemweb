<?= $this->extend('layout/templateindex'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../petugas">Beranda</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $count_anggota; ?></h3>
              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="ion-ios-contact-outline"></i>
            </div>
            <a href="<?= base_url('petugas/dataanggota') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $count_buku; ?></h3>
              <p>Jenis Buku</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="<?= base_url('petugas/databuku') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning ">
            <div class="inner">
              <h3 class="text-white"><?= $count_pinjam; ?></h3>
              <p class="text-white">Pinjam</p>
            </div>
            <div class=" icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('petugas/peminjaman') ?>" class="small-box-footer text-white">
              More Info<i class="fas fa-arrow-circle-right text-white"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $count_kembali; ?></h3>
              <p>Di Kembalikan</p>
            </div>
            <div class="icon">
              <i class="ion-ios-list-outline"></i>
            </div>
            <a href="<?= base_url('petugas/pengembalian') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<!-- /.content -->
<?= $this->endSection(); ?>