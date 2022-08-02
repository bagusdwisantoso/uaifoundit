<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>My Profile &mdash; UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="('admin')">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    <?php foreach ($users as $us) : ?>
        <div class="section-body">
            <div class="row">
                <div class="card mb-6" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/assets/img/no-profile.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <h2 class="section-title"><?= $us->username ?></h2>
                            <h2 class="section-title"><?= $us->email ?></h2>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Online</h5>
                            <p class="card-text"><small class="text-muted">Last Online 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <div class="card-header">
                                <h4>Tanggal Bergabung</h4>
                            </div>
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-date">Tanggal</div>
                                    <div class="profile-widget-item-value"><?= date('d', strtotime($us->created_at)); ?></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-month">Bulan</div>
                                    <div class="profile-widget-item-value"><?= date('F', strtotime($us->created_at)); ?></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-year">Tahun</div>
                                    <div class="profile-widget-item-value"><?= date('Y', strtotime($us->created_at)); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Admin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-12 col-md-12 col-lg-7 mt-sm-4">
                <div class="card">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card-header">
                            <h4>Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Ujang" required="">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Maman" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="ujang@maman.com" required="">
                                </div>
                                <div class="form-group col-md-5 col-12">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" value="08776468379">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="section-body">
        </div> -->
</section>
<?= $this->endSection() ?>