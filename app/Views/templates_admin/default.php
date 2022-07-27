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

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a> -->
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <!-- <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="/assets/img/no-profile.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a> -->
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>

                    </div>
                    </li>
                    <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a> -->
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <!-- <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a> -->
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, Welcome!</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                            <a href="<?= base_url('admin/profile'); ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <?= $this->include('templates_admin/sidebar') ?>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content') ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Developed By <a href="">The Denker Team</a>
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/assets/admin/assets/jquery/dist1/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/popper.js/dist1/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/bootstrap/dist1/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/jquery.nicescroll/dist1/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/admin/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>