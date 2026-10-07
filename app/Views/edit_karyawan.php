<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Bobot Kriteria</h1>
    </section>
    <section class="content">
        <form action="<?= site_url('home/editBobot/' . $data->id_bobot); ?>" method="post">
            <div class="form-group">
                <label for="kode_kriteria">Kode Kriteria</label>
                <input type="text" id="kode_kriteria" name="kode_kriteria" value="<?= $data->kode_kriteria; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_kriteria">Nama Kriteria</label>
                <input type="text" id="nama_kriteria" name="nama_kriteria" value="<?= $data->nama_kriteria; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_bobot">Nama Bobot</label>
                <input type="text" id="nama_bobot" name="nama_bobot" value="<?= $data->nama_bobot; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nilai_bobot">Nilai Bobot</label>
                <input type="number" id="nilai_bobot" name="nilai_bobot" value="<?= $data->nilai_bobot; ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('home/callviewdatabobot'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </section>
</div>
