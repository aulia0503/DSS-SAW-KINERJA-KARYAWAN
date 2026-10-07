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
                        <li class="breadcrumb-item active">Tambah Data Bobot</li>
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
                    <!-- Card for Form -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Bobot</h3>
                        </div>
                        <div class="card-body">
                            <!-- Menampilkan Flashdata -->
                            <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Form -->
                            <form action="<?= base_url('home/simpanBobot') ?>" method="post">
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria:</label>
                                    <input type="text" id="kode_kriteria" name="kode_kriteria" class="form-control" placeholder="Masukkan Kode Kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria:</label>
                                    <input type="text" id="nama_kriteria" name="nama_kriteria" class="form-control" placeholder="Masukkan Nama Kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_bobot">Nama Bobot:</label>
                                    <input type="text" id="nama_bobot" name="nama_bobot" class="form-control" placeholder="Masukkan Nama Bobot" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_bobot">Nilai Bobot:</label>
                                    <input type="number" id="nilai_bobot" name="nilai_bobot" class="form-control" placeholder="Masukkan Nilai Bobot" step="0.01" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
                                </div>
                            </form>
                            <!-- Akhir Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
