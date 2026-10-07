 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <!-- <span class="brand-text font-weight-light">Informatika UIN Malang</span> -->
          <a > Aulia</a>
        </div>
      </div>
    
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               
        <a href="<?= base_url('/') ?>" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Home
        </p>
      </a>

          <li class="nav-item">
            <a href="<?php echo base_url('/viewmebel'); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewjenisusaha');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Devisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatakaryawan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatakriteria');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Home/callviewdatabobot');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bobot</p>
                </a>
              </li>
              <li class="nav-item">
    <a href="<?php echo base_url('home/viewmatrikkeputusan'); ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Data Matriks Keputusan</p>
    </a>
</li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewhitung');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Mencari Min Max
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewnormalisasi');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Normalisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewranking');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Nilai Preferensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewkeputusan');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil Keputusan
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>