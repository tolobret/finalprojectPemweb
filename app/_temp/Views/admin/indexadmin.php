<?= $this->extend('layout/templateindexadmin'); ?>

<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Data Petugas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Data Petugas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="col-4">
                <a href="<?= base_url('dashboard/tambahUserAdmin'); ?>" class="btn btn-success" role="button">
                  <i class="fa fa-edit"> Tambah Petugas</i>
                </a>
              </div>


              <table id="example1" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Level</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>P001
                    </td>
                    <td>
                      <div class="text-center"> <img src="https://siakad.ub.ac.id/dirfoto/foto/foto_2019/195150407111008.jpg" alt="" width="80px" class="center"></div>
                    </td>
                    <td>Fawwaz</td>
                    <td>fawwaz</td>
                    <td>Laki-Laki</td>
                    <td>085231168019</td>
                    <td>Petugas</td>
                    <td>Ponorogo</td>
                    <td>
                      <a href="<?= base_url('dashboard/profileAdmin'); ?>" class="btn btn-success" role="button">
                        <i class="fa fa-edit"></i>
                      </a>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                      </div>
                      <a href="<?= base_url('dashboard/print'); ?>" class="btn btn-primary" role="button">
                        <i class="fa fa-print"></i>
                        Cetak Kartu
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?= $this->endSection(); ?>