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
                        <li class="breadcrumb-item active">Tambah Data Kriteria</li>
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
                            <h3 class="card-title">Tambah Data Kriteria</h3>
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
                            <form action="<?= base_url('home/simpanKriteria') ?>" method="post">
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria:</label>
                                    <input type="text" id="kode_kriteria" name="kode_kriteria" class="form-control" placeholder="Masukkan Kode Kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria:</label>
                                    <input type="text" id="nama_kriteria" name="nama_kriteria" class="form-control" placeholder="Masukkan Nama Kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kriteria">Nilai Kriteria:</label>
                                    <input type="number" id="nilai_kriteria" name="nilai_kriteria" class="form-control" placeholder="Masukkan Nilai Kriteria" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria:</label>
                                    <input type="text" id="tipe_kriteria" name="tipe_kriteria" class="form-control" placeholder="Masukkan Nilai Kriteria" step="0.01" required>

                                    <!-- <select id="tipe_kriteria" name="tipe_kriteria" class="form-control" required> -->
                                        <!-- <option value="">Pilih Tipe Kriteria</option>
                                        <option value="benefit">Benefit</option>
                                        <option value="cost">Cost</option> -->
                                    </select>
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
