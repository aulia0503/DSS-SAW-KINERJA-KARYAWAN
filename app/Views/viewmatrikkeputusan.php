<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SAW Pengukuran Kinerja Karyawan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Matriks Keputusan</li>
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
                            <h3 class="card-title">Matriks Keputusan Karyawan</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                <button type="button" class="btn btn-success" onclick="window.location='<?= site_url('home/tambahMatriksKeputusan'); ?>'">Tambah Matriks Keputusan</button>
                            </p>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Matriks</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nama Kriteria</th>
                                        <th>Value Skala</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($matrik_keputusan as $matrik): ?>
                                    <tr>
                                        <td><?= $matrik->id_matriks; ?></td>
                                        <td><?= $matrik->nama_karyawan; ?></td>
                                        <td><?= $matrik->nama_kriteria; ?></td>
                                        <td><?= $matrik->value; ?></td>
                                        <td>
                                            
                                            <a href="<?= site_url('home/hapusMatrikKeputusan/' . $matrik->id_matriks); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
