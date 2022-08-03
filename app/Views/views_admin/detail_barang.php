<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Detail Barang | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.go(-1)" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Detail Barang</h1>
    </div>
    <div class="section-body">
        <!-- <?= print_r($data_barang) ?> cek data-->
        <?php foreach ($data_barang as $data_barang) : ?>
            <div class="card card-info">
                <div class="card-header">
                    <h4> </h4>
                    <div class="card-header-action">

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img alt="image" src="/img/<?= $data_barang->foto_barang ?>" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                            <h3>Kode Barang #<?= $data_barang->kode_barang ?></h3>
                            <div class="section-title">Detail Barang</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="180">Tanggal Ditemukan</th>
                                        <td><?= date('d F Y', strtotime($data_barang->tanggal_ditemukan)); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <td><?= $data_barang->nama_barang ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Barang</th>
                                        <td><?= $data_barang->kategori_barang ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi Barang</th>
                                        <td><?= $data_barang->deskripsi_barang ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lokasi Barang</th>
                                        <td><?= $data_barang->lokasi_barang ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="section-title">Detail Pelapor</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="180">Nama Pelapor</th>
                                        <td><?= $data_barang->nama_pelapor ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $data_barang->email ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <?php if ($data_barang->status == 'Belum Dikonfirmasi') {
                                echo "
                            <div class='badge badge-pill badge-warning'>" . $data_barang->status . "</div>
                            ";
                            } elseif ($data_barang->status == 'Dikonfirmasi') {
                                echo "
                            <div class='badge badge-pill badge-success'>" . $data_barang->status . "</div>
                            ";
                            } elseif ($data_barang->status == 'Diambil') {
                                echo "
                            <div class='badge badge-pill badge-info'>" . $data_barang->status . "</div>
                            ";
                            } elseif ($data_barang->status == 'Out Of Date') {
                                echo "
                            <div class='badge badge-pill badge-danger'>" . $data_barang->status . "</div>
                            ";
                            } elseif ($data_barang->status == 'Didonasikan') {
                                echo "
                            <div class='badge badge-pill badge-primary'>" . $data_barang->status . "</div>
                            ";
                            } else {
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection() ?>