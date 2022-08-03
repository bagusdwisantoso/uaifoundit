<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>Katalog | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="empty-state">
                    <h2 class="mt-0">Katalog Barang Hilang</h2>
                    <p class="lead">
                        Lihat daftar barang hilang dan segera klaim barang jika itu barang kamu sebelum kadaluarsa
                    </p>
                    <p>Ingin melapor barang hilang? <a href="/home" class="mt-4 bb">Lapor disini</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($katalog as $ktg) : ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-primary" href="#">
                        <div class="card-body ">
                            <img class="mr-3 rounded" height="100" src="/img/<?= $ktg->foto_barang ?>">
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-footer">
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title"><?= $ktg->nama_barang ?></div>
                                    <div class="text-muted text-small">by <?= $ktg->nama_pelapor ?></a>
                                        <div class="bullet"></div> <?= date('d F Y', strtotime($ktg->tanggal_ditemukan)); ?>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>