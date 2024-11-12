<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
        </div>
    </div>

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>login">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#baak" aria-expanded="false" aria-controls="baak">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">BAAK</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="baak">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>baak">Tampil BAAK</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>baak/tambah">Tambah BAAK</a></li>
                    </ul>   
                </div>
            </li>

            <!-- Dosen Menu -->
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#dosen" aria-expanded="false" aria-controls="dosen">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Dosen</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="dosen">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>dosen">Tampil Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>dosen/tambah">Tambah Dosen</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Menu untuk Mahasiswa (Dapat digunakan jika penguji perlu melihat mahasiswa yang dia uji) -->
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#mahasiswa" aria-expanded="false" aria-controls="mahasiswa">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Mahasiswa</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="mahasiswa">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>mahasiswa"> Tampil Mahasiswa </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>mahasiswa/tambah"> Tambah Mahasiswa </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Koordinator Tugas Akhir Menu -->
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#koordinator" aria-expanded="false" aria-controls="koordinator">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Koordinator TA</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="koordinator">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>koordinator">Tampil Koordinator TA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>koordinator/tambah">Tambah Koordinator TA</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </nav>

    