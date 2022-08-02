<?= $this->extend('templates_admin/default') ?>

<?= $this->section('content') ?>
<title>Verifikasi Data | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Verifikasi Barang</h1>
    </div>


    <div class="section-body">
        <?php foreach ($data_verif as $verif) : ?>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-warning">
                        <div class="card-body">
                            <img class="img-fluid" src="/img/<?= $verif->foto_barang ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-9">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>Tanggal Laporan: <?= $verif->tanggal_ditemukan ?></h4>
                            <div class="card-header-action">
                                <a href="/admin/confirm/<?= $verif->id_barang ?>" class="btn btn-success">
                                    Konfirmasi
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <p>Kode Barang : <strong><mark><?= $verif->kode_barang ?></mark></strong><br>
                                        Nama Barang : <?= $verif->nama_barang ?><br>
                                        Lokasi Ditemukan : <?= $verif->lokasi_barang ?></p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6">
                                    <p>Nama Pelapor : <?= $verif->nama_pelapor ?><br>
                                        Email Pelapor : <?= $verif->email ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</section>
<?= $this->endSection() ?>