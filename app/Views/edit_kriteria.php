<div class="content-wrapper"> 
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Kriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('home'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Kriteria</li>
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
                            <h3 class="card-title">Form Edit Data Kriteria</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('home/updateKriteria'); ?>" method="post">
                                <!-- ID Kriteria (hidden field) -->
                                <input type="hidden" name="id_kriteria" value="<?= isset($kriteria->id_kriteria) ? $kriteria->id_kriteria : ''; ?>">

                                <!-- Kode Kriteria -->
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" class="form-control" name="kode_kriteria" id="kode_kriteria" 
                                           value="<?= isset($kriteria->kode_kriteria) ? $kriteria->kode_kriteria : ''; ?>" required>
                                </div>

                                <!-- Nama Kriteria -->
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria" 
                                           value="<?= isset($kriteria->nama_kriteria) ? $kriteria->nama_kriteria : ''; ?>" required>
                                </div>

                                <!-- Nilai Kriteria -->
                                <div class="form-group">
                                    <label for="nilai_kriteria">Nilai Kriteria</label>
                                    <select class="form-control" name="nilai_kriteria" id="nilai_kriteria" required>
                                        <option value="">Pilih Nilai Kriteria</option>
                                        <?php foreach ($nilai_kriteria as $s): ?>
                                            <option value="<?= $s->nilai_kriteria; ?>" 
                                                <?= isset($kriteria->nilai_kriteria) && $kriteria->nilai_kriteria == $s->nilai_kriteria ? 'selected' : ''; ?>>
                                                <?= $s->nilai_kriteria . ' - ' . $s->deskripsi_skala; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Tipe Kriteria -->
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria</label>
                                    <input type="text" class="form-control" name="tipe_kriteria" id="tipe_kriteria" 
                                           value="<?= isset($kriteria->tipe_kriteria) ? $kriteria->tipe_kriteria : ''; ?>" required>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Update</button>

                                <!-- Back Button -->
                                <a href="<?= site_url('home/viewDataKriteria'); ?>" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
