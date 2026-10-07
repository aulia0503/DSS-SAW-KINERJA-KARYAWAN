<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SAW Kinerja Karyawan Perusahaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Karyawan</li>
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
            
            <!-- Card for displaying data -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nama Karyawan</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <p>
                  <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url('home/tambahKaryawan'); ?>'">Tambah Data Karyawan</button>
                </p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Karyawan</th>
                      <th>Devisi</th>
                      <th>Kelamin</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Agama</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataKaryawan as $row): // Loop through each row of data
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= htmlspecialchars($row->nama_karyawan); ?></td>
                      <td><?= htmlspecialchars($row->nama_devisi); ?></td>
                      <td><?= htmlspecialchars($row->kelamin); ?></td>
                      <td><?= htmlspecialchars($row->tanggal_lahir); ?></td>
                      <td><?= htmlspecialchars($row->alamat); ?></td>
                      <td><?= htmlspecialchars($row->agama); ?></td>
                      <td>
                        <!-- Edit and Delete Actions -->
                        <a href="<?= site_url('home/formEditKaryawan/' . $row->id_karyawan); ?>" class="badge badge-primary">Edit</a>
                        <form action="<?= site_url('home/deleteKaryawan/' . $row->id_karyawan); ?>" method="post" style="display:inline;">
                            <?= csrf_field(); ?>
                            <button type="submit" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                        </form>
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
