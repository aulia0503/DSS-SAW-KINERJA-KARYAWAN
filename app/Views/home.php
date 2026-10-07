<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href= "<?= base_url('/') ?>">Home</a></li>
              <li class="breadcrumb-item active">SPK Pengukuran Kinerja Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>
                <p>Jenis Devisi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url('Home/callviewjenisusaha');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>4<sup style="font-size: 20px"></sup></h3>
                <p>Data Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url('Home/callviewdatakaryawan');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3</h3>
                <p>Data Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo site_url('Home/callviewdatakriteria');?>"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>10</h3>
                <p>Data Bobot</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo site_url('Home/callviewdatabobot');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
           <!-- small box for Matrik Keputusan -->
           <div class="col-lg-3 col-6">
              <div class="small-box bg-primary"> <!-- Changed to bg-primary -->
                <div class="inner">
                  <h3>3</h3>
                  <p>Matrik Keputusan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('home/viewmatrikkeputusan'); ?>"class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Deskripsi Aplikasi -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Deskripsi Aplikasi</h3>
              </div>
              <div class="card-body">
                <p>
                  Aplikasi *Sistem Pendukung Keputusan* (SPK) ini dirancang untuk membantu pengukuran kinerja karyawan secara objektif. 
                  Dengan metode SAW (*Simple Additive Weighting*), aplikasi ini mengolah data karyawan, kriteria penilaian, dan bobot 
                  masing-masing kriteria untuk menghasilkan peringkat kinerja yang terukur. Tujuannya adalah memberikan rekomendasi 
                  berdasarkan kriteria kinerja yang telah ditentukan untuk mendukung pengambilan keputusan yang lebih efektif.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
