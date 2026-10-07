<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Karyawan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Karyawan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Data Karyawan</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('home/updateKaryawan'); ?>" method="post">
                                <!-- ID Karyawan (hidden field) -->
                                <input type="hidden" name="id_karyawan" value="<?= isset($karyawan->id_karyawan) ? $karyawan->id_karyawan : ''; ?>">

                                <!-- Nama Karyawan -->
                                <div class="form-group">
                                    <label for="nama_karyawan">Nama Karyawan</label>
                                    <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" 
                                           value="<?= isset($karyawan->nama_karyawan) ? $karyawan->nama_karyawan : ''; ?>" required>
                                </div>

                                <!-- Divisi -->
                                <div class="form-group">
                                    <label for="devisi">Divisi</label>
                                    <select class="form-control" name="devisi" id="devisi" required>
                                        <option value="">Pilih Divisi</option>
                                        <?php foreach ($jenis_usaha as $ju): ?>
                                            <option value="<?= $ju->devisi; ?>" <?= isset($karyawan->devisi) && $karyawan->devisi == $ju->devisi ? 'selected' : ''; ?>>
                                                <?= $ju->devisi; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="form-group">
                                    <label for="kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="kelamin" id="kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" <?= isset($karyawan->kelamin) && $karyawan->kelamin == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?= isset($karyawan->kelamin) && $karyawan->kelamin == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" 
                                           value="<?= isset($karyawan->tanggal_lahir) ? $karyawan->tanggal_lahir : ''; ?>" required>
                                </div>

                                <!-- Alamat -->
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" required><?= isset($karyawan->alamat) ? $karyawan->alamat : ''; ?></textarea>
                                </div>

                                <!-- Agama -->
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" name="agama" id="agama" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam" <?= isset($karyawan->agama) && $karyawan->agama == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                        <option value="Kristen" <?= isset($karyawan->agama) && $karyawan->agama == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                                        <option value="Katolik" <?= isset($karyawan->agama) && $karyawan->agama == 'Katolik' ? 'selected' : ''; ?>>Katolik</option>
                                        <option value="Hindu" <?= isset($karyawan->agama) && $karyawan->agama == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                        <option value="Buddha" <?= isset($karyawan->agama) && $karyawan->agama == 'Buddha' ? 'selected' : ''; ?>>Buddha</option>
                                        <option value="Konghucu" <?= isset($karyawan->agama) && $karyawan->agama == 'Konghucu' ? 'selected' : ''; ?>>Konghucu</option>
                                    </select>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Update</button>

                                <!-- Back Button -->
                                <a href="<?= site_url('home/viewdatakaryawan'); ?>" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
