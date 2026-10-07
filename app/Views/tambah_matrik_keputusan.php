<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Matriks Keputusan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Matriks Keputusan</li>
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
                            <h3 class="card-title">Form Tambah Matriks Keputusan</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('home/simpanMatrikKeputusan'); ?>" method="post">
                                <!-- Pilih Karyawan -->
                               <div class="form-group">
    <label for="id_alternatif">Nama Karyawan</label>
    <select class="form-control" name="id_alternatif" id="id_alternatif" required>
        <option value="">Pilih Karyawan</option>
        <?php foreach ($karyawan as $k): ?>
            <option value="<?= $k->id_karyawan; ?>"><?= $k->nama_karyawan; ?></option>
        <?php endforeach; ?>
    </select>

                                    <!-- Tampilkan pesan error jika ada -->
                                    <?php if (session()->has('error_id_alternatif')): ?>
                                        <div class="text-danger"><?= session('error_id_alternatif'); ?></div>
                                    <?php endif; ?>
                                </div>

                                <!-- Pilih Bobot -->
                                <div class="form-group">
    <label for="id_bobot">Nama Bobot</label>
    <select class="form-control" name="id_bobot" id="id_bobot" required>
        <option value="">Pilih Bobot</option>
        <?php foreach ($bobot as $b): ?>
            <option value="<?= $b->id_bobot; ?>"><?= $b->id_bobot; ?> - <?= $b->nama_kriteria; ?> - <?= $b->nama_bobot; ?> </option>
        <?php endforeach; ?>
    </select>

                                    <!-- Tampilkan pesan error jika ada -->
                                    <?php if (session()->has('error_id_bobot')): ?>
                                        <div class="text-danger"><?= session('error_id_bobot'); ?></div>
                                    <?php endif; ?>
                                </div>

                                <!-- Pilih Skala -->
                                <div class="form-group">
                                    <label for="id_skala">Nama Skala</label>
                                    <select class="form-control" name="id_skala" id="id_skala" required>
                                        <option value="">Pilih Skala</option>
                                        <?php foreach ($skala as $s): ?>
                                            <option value="<?= $s->id_skala; ?>"><?= $s->id_skala; ?> - <?=$s->keterangan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- Tampilkan pesan error jika ada -->
                                    <?php if (session()->has('error_id_skala')): ?>
                                        <div class="text-danger"><?= session('error_id_skala'); ?></div>
                                    <?php endif; ?>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
