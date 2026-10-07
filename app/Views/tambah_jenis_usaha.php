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
                        <li class="breadcrumb-item active">Data Jenis Usaha</li>
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
                            <h3 class="card-title">Tambah Data Jenis Usaha</h3>
                        </div>
                        <div class="card-body">
                            <!-- Form dengan URL dinamis -->
                            <form action="<?= base_url('home/simpanJenisUsaha') ?>" method="post">
                                <div class="form-group">
                                    <label for="devisi">Nama Devisi:</label>
                                    <input type="text" id="devisi" name="devisi" class="form-control" placeholder="Masukkan Nama Jenis Usaha" required>
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
