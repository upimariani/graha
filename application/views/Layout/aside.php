<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('asset/AdminLTE/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMPT GRAHA QUR'AN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">SISTEM PEMBAYARAN</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'cDashboard') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('cDataSiswa') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'cDataSiswa') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-solid fa-user-graduate"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('cDataPaket') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'cDataPaket') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-solid fa-book-open"></i>
                        <p>Data Paket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('cLaporan') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'cLaporan') {
                                                                                echo 'active';
                                                                            }  ?>">
                        <i class="nav-icon fas fa-solid fa-receipt"></i>
                        <p>Laporan Pembayaran</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>