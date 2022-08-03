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
                    <div class="card card-primary">
                        <div class="card-body ">
                            <img class="mr-3 rounded" height="100" src="/img/<?= $ktg->foto_barang ?>">
                            <a class="stretched-link" href="#staticBackdrop<?= $ktg->id_barang ?>" data-toggle='modal' data-target='#staticBackdrop<?= $ktg->id_barang ?>'></a>
                        </div>
                        <div class='modal fade' id='staticBackdrop<?= $ktg->id_barang ?>' data-backdrop='false' data-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered modal-lg'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='staticBackdropLabel'>Detail Barang</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <div class='row'>
                                            <div class='col-sm-6'>
                                                <img src='/img/<?= $ktg->foto_barang ?>' class='img-thumbnail'>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-md">
                                                        <tr>
                                                            <th data-width="150">Tanggal Ditemukan</th>
                                                            <td><?= date('d F Y', strtotime($ktg->tanggal_ditemukan)); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Barang</th>
                                                            <td><?= $ktg->nama_barang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kategori Barang</th>
                                                            <td><?= $ktg->kategori_barang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Deskripsi Barang</th>
                                                            <td><?= $ktg->deskripsi_barang ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Lokasi Ditemukan</th>
                                                            <td><?= $ktg->lokasi_barang ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-whitesmoke br">
                                        <strong>Share item ini ke Media Sosial</strong><br>
                                        <a href="#" class="btn btn-md btn-light"> <i class="fab fa-facebook"></i> </a>
                                        <a href="#" class="btn btn-md btn-light"> <i class="fab fa-twitter"></i> </a>
                                        <a href="#" class="btn btn-md btn-light"> <i class="fab fa-whatsapp"></i> </a>
                                        <a href="#" class="btn btn-md btn-light"> <i class="fab fa-instagram"></i> </a>
                                        <a href="" type="button" class="btn btn-green">Klaim Barang Ini</a>
                                    </div>
                                </div>
                            </div>
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
</section>
<?= $this->endSection() ?>