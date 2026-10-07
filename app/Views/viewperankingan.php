<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Nilai Preferensi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Proses Nilai Preferensi</li>
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
                            <h3 class="card-title">Tabel Hasil Nilai Preferensi</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Alternatif</th>
                                        <th>Nama Karyawan</th>
                                        <th>ID Bobot</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nilai Pra-Ranking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ranking as $row): ?>
                                        <tr>
                                            <!-- Gunakan akses ke objek jika $ranking berisi objek -->
                                            <td><?= isset($row->id_alternatif) ? $row->id_alternatif : ''; ?></td>
                                            <td><?= isset($row->nama_karyawan) ? $row->nama_karyawan : ''; ?></td>
                                            <td><?= isset($row->id_bobot) ? $row->id_bobot : ''; ?></td>
                                            <td><?= isset($row->nama_kriteria) ? $row->nama_kriteria : ''; ?></td>
                                            <td><?= isset($row->nilai_praranking) ? $row->nilai_praranking : ''; ?></td>
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
