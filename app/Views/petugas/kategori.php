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
      <?php if (session()->getFlashdata('pesan-gagal')) : ?>
        <div class="alert alert-danger" role="alert">
          <?= session()->getFlashdata('pesan-gagal'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Kategori</h1>

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../petugas">Beranda</a></li>
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <!-- <div class="col-md-12"> -->
              <form action="../petugas/saveKategori" method="POST">
                <?= csrf_field(); ?>
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="form-group"> -->
                    <label for="InputNamaPengguna">Nama Kategori</label>
                    <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Masukkan Nama Kategori" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('nama'); ?>
                    </div>
                    <!-- </div> -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right" id="tambah" name="tambah">Tambah Kategori</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="col-md-8">
          <div class="card">
            <!-- <div class="card-header">
                  <h3 class="card-title"></h3>
                </div> -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($data as $a) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $a['nama_kategori']; ?></td>
                      <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-xl" id="btn-edit" data-nama="<?= $a['nama_kategori']; ?>" data-id="<?= $a['id_kategori']; ?>">
                          <i class=" fa fa-edit"></i>
                        </button>
                        </button>
                        <form action="../petugas/delKategori/<?= $a['nama_kategori']; ?>" method="POST" class="d-inline ">
                          <?= csrf_field(); ?>
                          <input type="hidden" name="_method">
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">
                            <i class=" fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Ubah Kategori</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- Modal Section -->
          <div class="modal-body">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Kategori</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <!-- <div class="col-md-12"> -->
                <form action="../petugas/editKategori" method="POST">
                  <?= csrf_field(); ?>
                  <div class="card-body">
                    <div class="row">
                      <!-- <div class="form-group"> -->

                      <label for="InputNamaPengguna">Nama Kategori</label>
                      <input type="hidden" name="data-id" id="data-id">
                      <input class="form-control <?= ($validation->hasError('data-nama')) ? 'is-invalid' : ''; ?>" id="data-nama" name="data-nama" placeholder="Masukkan Nama Kategori">
                      <div class="invalid-feedback">
                        <?= $validation->getError('data-nama'); ?>
                      </div>
                      <!-- </div> -->
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-info float-right">Tambah Kategori</button> -->
                    <form action="../petugas/editKategori" method="POST" class="d-inline">
                      <?= csrf_field(); ?>
                      <!-- <input type="hidden" name="_method" id="data-nama">
                      <input type="hidden" name="_method" id="data-id"> -->
                      <button type="submit" class="btn btn-info float-right">
                        Ubah Kategori
                      </button>
                    </form>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>