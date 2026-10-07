<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Matriks Normalisasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan Normalisasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Normalisasi</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <p><strong>Note:</strong> B = Benefit, C = Cost</p>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Alternatif</th>
                                        <th>ID Bobot</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nama Bobot</th>
                                        <th>Nilai Min</th>
                                        <th>Nilai Max</th>
                                        <th>Nilai Asli</th>
                                        <th>Nilai Normalisasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop Data -->
                                    <?php
                                    $no = 1;
                                    foreach ($dataMb as $row):
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nama_karyawan; ?></td>
                                            <td><?= $row->id_bobot; ?></td>
                                            <td><?= $row->nama_kriteria; ?></td>
                                            <td><?= $row->nama_bobot; ?></td>
                                            <td><?= $row->nilai_min; ?></td>
                                            <td><?= $row->nilai_max; ?></td>
                                            <td><?= $row->nilai_asli; ?></td>
                                            <td><?= $row->nilai_normalisasi; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
