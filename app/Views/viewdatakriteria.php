<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SAW Pengukuran Kinerja Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kriteria</li>
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
            
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kriteria</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
              <p>
              <button type="button" class="btn btn-success" onclick="window.location='<?= site_url('home/tambahKriteria'); ?>'">Tambah Kriteria</button>
              </p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Nilai Kriteria</th>
                    <th>Tipe Kriteria</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                  foreach ($dataMb as $row):
                    $no++;
                  ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row->kode_kriteria; ?></td>
                    <td><?= $row->nama_kriteria; ?></td>
                    <td><?= $row->nilai_kriteria; ?></td>
                    <td><?= $row->tipe_kriteria; ?></td>
                    <td>
                      <a href="<?= site_url('home/formEditKriteria/' . $row->id_kriteria); ?>" class="badge badge-primary">Edit</a>
                      <a href="<?= site_url('home/deleteKriteria/' . $row->id_kriteria); ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
