<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <?= $this->renderSection('title') ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/icon.ico">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/assets/bootstrap/dist1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/assets/@fortawesome/fontawesome-free/css/all.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/assets/css/components.css">
</head>

<header class="p-3 bg-darkme text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="/assets/img/land_white.png" style="width: 150px;">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="/katalog" class="nav-link px-2 text-white">Katalog</a></li>
                <li><a href="about" class="nav-link px-2 text-white">About</a></li>
            </ul>
        </div>
    </div>
</header>

<body class="layout-3">
    <div class="main-wrapper container">
        <!-- Main Content -->
        <div class="main-content">
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <footer class="footer mt-auto">
        <div class="container">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
            <p class="text-center text-muted">© 2022 The Denkér Developer Team</p>
        </div>
    </footer>
    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/assets/admin/assets/jquery/dist1/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/popper.js/dist1/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/bootstrap/dist1/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/jquery.nicescroll/dist1/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/assets/admin/assets/sticky-kit/dist1/sticky-kit.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/admin/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/js/custom.js"></script>

    <script src="<?= base_url() ?>/assets/admin/assets/sweetalert/dist1/modules-sweetalert.js"></script>

</body>

</html>