<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penentuan Kinerja Karyawan - Tambah Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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
                            <h3 class="card-title">Form Tambah Data</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <form action="<?php echo site_url('home/savembl'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama_usaha">Nama Karyawan</label>
                                    <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_pimpinan">Devisi</label>
                                    <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" required>
                                </div>
                                <div class="form-group">
                                    <label for="jalan">Kelamin</label>
                                    <input type="text" class="form-control" id="jalan" name="jalan" required>
                                </div>
                                <div class="form-group">
                                    <label for="desa">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="desa" name="desa" required>
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Alamat</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_jenis">Agama</label>
                                    <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" required>
                                </div>
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kriteria">Nilai Kriteria</label>
                                    <input type="number" class="form-control" id="nilai_kriteria" name="nilai_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria</label>
                                    <input type="text" class="form-control" id="tipe_kriteria" name="tipe_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_bobot">Nama Bobot</label>
                                    <input type="text" class="form-control" id="nama_bobot" name="nama_bobot" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_bobot">Nilai Bobot</label>
                                    <input type="number" class="form-control" id="nilai_bobot" name="nilai_bobot" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </form>
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
