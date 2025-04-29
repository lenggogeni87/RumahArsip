<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <a href="index.html"><img src="assets/images/logo/manrisk.png" alt="Logo" srcset="" width="200px" height="100px"></a>
        
        <div class="sidebar-menu">
        <ul class="menu">

            <li class="sidebar-title">MENU NAVIGASI</li>

            <li class="sidebar-item <?= (uri_string() == "home") ? "active" : ""; ?>">
                <a href="home" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>BERANDA</span>
                </a>
            </li>

            <li class="sidebar-title"><strong>SATKER</strong></li>

            <li class="sidebar-item <?= (uri_string() == "table-data-umum" || uri_string() == "edit-data-umum") ? "active" : ""; ?>">
                <a href="<?= base_url('table-data-umum')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>DATA UMUM</span>
                </a>
            </li>

            <li class="sidebar-item <?= (uri_string() == "table-faktor-risiko" || uri_string() == "edit-faktor-risiko") ? "active" : ""; ?>">
                <a href="<?= base_url('table-faktor-risiko')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>FAKTOR RISIKO</span>
                </a>
            </li>

            <li class="sidebar-item <?= (uri_string() == "table-penilaian-risiko") ? "active" : ""; ?>">
                <a href="<?= base_url('table-penilaian-risiko')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>PENILAIAN RISIKO</span>
                </a>
            </li>

            <li class="sidebar-item <?= (uri_string() == "table-profil-risiko" || uri_string() == "data-profil-risiko") ? "active" : ""; ?>">
                <a href="<?= base_url('table-profil-risiko')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>PROFIL RISIKO</span>
                </a>
            </li>

            <li class="sidebar-item <?= (uri_string() == "table-pemantauan-risiko" || uri_string() == "data-pemantauan-risiko") ? "active" : ""; ?>">
                <a href="<?= base_url('table-pemantauan-risiko')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>PEMANTAUAN RISIKO</span>
                </a>
            </li>

            <li class="sidebar-title"><strong>ADMIN</strong></li>

            <li class="sidebar-item <?= (uri_string() == "table-manajemen-pengguna" || uri_string() == "edit-manajemen-pengguna") ? "active" : ""; ?>">
                <a href="<?= base_url('table-manajemen-pengguna')?>" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>MANAJEMEN PENGGUNA</span>
                </a>
            </li>

        </ul>
    </div>

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>