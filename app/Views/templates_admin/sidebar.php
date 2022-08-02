<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?= site_url('admin') ?>">UAI Found It!</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?= site_url('admin') ?>">UFI</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="<?= site_url('admin') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
        <?php if (in_groups('superadmin')) : ?>
            <li><a class="nav-link" href="<?= site_url('admin/manage_admin') ?>"><i class="fas fa-users"></i> <span>Manage Admin</span></a></li>
        <?php endif; ?>
        <li><a class="nav-link" href="<?= site_url('admin/verifikasi') ?>"><i class="fas fa-check-square"></i> <span>Verifikasi Barang Masuk</span></a></li>

        <li class="menu-header">MASTER DATA</li>
        <li><a class="nav-link" href="<?= site_url('admin/data-barang') ?>"><i class="fas fa-database"></i> <span>Data Barang</span></a></li>
        <!-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Barang</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= site_url('admin/data-masuk') ?>">Data Barang Masuk</a></li>
                <li><a class="nav-link" href="<?= site_url('admin/data-keluar') ?>">Data Barang Ambil</a></li>
            </ul>
        </li> -->
        <!-- <li class="active"><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> -->
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="/logout" class="btn btn-danger btn-lg btn-block btn-icon-split">KELUAR</a>
    </div>
</aside>