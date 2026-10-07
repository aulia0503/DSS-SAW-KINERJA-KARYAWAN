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
                        <li class="breadcrumb-item active">Data Bobot</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Data Bobot</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <!-- Button Tambah -->
                            <p>
                                <button type="button" class="btn btn-success" onclick="window.location='<?= site_url('home/tambahBobot'); ?>'">Tambah Bobot</button>
                            </p>

                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nama Bobot</th>
                                        <th>Nilai Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($dataMb as $row) :
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= htmlspecialchars($row['kode_kriteria'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td><?= htmlspecialchars($row['nama_kriteria'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td><?= htmlspecialchars($row['nama_bobot'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td><?= htmlspecialchars($row['nilai_bobot'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td>
    <!-- Tombol Edit -->
    <a href="<?= site_url('home/formEditBobot/' . $row['id_bobot']); ?>" class="btn btn-primary btn-sm">Edit</a>

    <!-- Tombol Hapus -->
    <form action="<?= site_url('home/deleteBobot/' . $row['id_bobot']); ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
