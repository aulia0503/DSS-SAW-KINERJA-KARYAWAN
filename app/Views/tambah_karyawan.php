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
                        <li class="breadcrumb-item active">Tambah Data Karyawan</li>
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
                            <h3 class="card-title">Tambah Data Karyawan</h3>
                        </div>
                        <div class="card-body">
                            <!-- Form untuk menambah data karyawan -->
                            <form action="<?= base_url('simpanKaryawan') ?>" method="post">
                                <div class="form-group">
                                    <label for="nama_karyawan">Nama Karyawan:</label>
                                    <input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control" placeholder="Masukkan Nama Karyawan" required>
                                </div>
                                <!-- Dropdown untuk Devisi -->
                                <div class="form-group">
                                    <label for="devisi">Devisi:</label>
                                    <select id="devisi" name="devisi" class="form-control" required>
                                        <option value="">Pilih Devisi</option>
                                        <?php if (isset($jenisUsaha) && !empty($jenisUsaha)) : ?>
                                            <?php foreach ($jenisUsaha as $jenis) : ?>
                                                <option value="<?= $jenis->devisi ?>"><?= $jenis->devisi ?></option>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <option value="">Tidak ada data jenis usaha</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kelamin">Jenis Kelamin:</label>
                                    <select id="kelamin" name="kelamin" class="form-control" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama:</label>
                                    <select id="agama" name="agama" class="form-control" required>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
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
