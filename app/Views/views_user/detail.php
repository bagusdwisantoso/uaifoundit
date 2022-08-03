<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>Katalog | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <?php foreach ($data_katalog as $katalog) : ?>
                    <div class="row">
                        <div class="col-md-5">
                            <img alt="image" src="/img/<?= $katalog->foto_barang ?>" class="img-fluid">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>