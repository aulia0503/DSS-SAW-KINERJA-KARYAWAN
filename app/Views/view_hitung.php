<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SPK Bantuan UMKM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">min max</li>
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
                    <!-- Hitung NORMALISASI -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Bobot</th>
                                    <th>Nama Kriteria</th>
                                    <th>Tipe</th> <!-- Kolom baru untuk tipe -->
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($dataMb) && is_array($dataMb)): ?>
                                    <?php foreach ($dataMb as $row): ?>
                                        <tr>
                                            <td><?= $row->id_bobot; ?></td> <!-- Tampilkan id_bobot -->
                                            <td><?= $row->nama_kriteria; ?></td> <!-- Tampilkan nama_kriteria -->
                                            <td>
                                                <?= $row->nama_bobot === 'Benefit' ? 'max (Benefit)' : 'min (Cost)'; ?>
                                            </td> <!-- Kolom baru untuk tipe -->
                                            <td>
                                                <?= $row->nama_bobot === 'Benefit' ? $row->nilai_max : $row->nilai_min; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center">Data tidak tersedia</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
