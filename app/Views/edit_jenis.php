<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Jenis Usaha</h1>
    </section>
    <section class="content">
        <form action="<?= site_url('home/editJenisUsaha/' . $dataJenis->id_usaha); ?>" method="post">
            <div class="form-group">
                <label for="devisi">Nama Jenis Usaha</label>
                <input type="text" id="devisi" name="devisi" value="<?= $dataJenis->devisi; ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('home/callviewjenisusaha'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </section>
</div>
