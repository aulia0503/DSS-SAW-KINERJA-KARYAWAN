<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Keputusan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Keputusan Hasil</li>
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
              <h3 class="card-title">Keputusan Ranking</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID Alternatif</th>
                    <th>Nama Karyawan</th>
                    <th>Hasil Nilai</th>
                    <th>Rank</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($ranking as $row): ?> <!-- Sesuaikan dengan variabel 'ranking' -->
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row->id_alternatif; ?></td>
                      <td><?= $row->nama_karyawan; ?></td>
                      <td><?= number_format($row->nilai_preferensi, 2); ?></td>
                      <td><?= $row->ranking; ?></td>
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
