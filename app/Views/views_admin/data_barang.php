<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Data Masuk | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Daftar Barang Ditemukan</h1>
        <div class="section-header-button">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data</button>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
            <div class="breadcrumb-item">Data Barang</div>
        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Barang | </h4>
                        <ul class="nav nav-pills" id="Tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="belumkonfir-tab" data-toggle="tab" href="#belumkonfir" role="tab" aria-controls="belumkonfir" aria-selected="true"><i class="fas fa-boxes"></i> Belum Dikonfirmasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dikonfirmasi-tab" data-toggle="tab" href="#dikonfirmasi" role="tab" aria-controls="dikonfirmasi" aria-selected="false"></i> Dikonfirmasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="diambil-tab" data-toggle="tab" href="#diambil" role="tab" aria-controls="diambil" aria-selected="false"><i class="fas fa-hands-helping"></i> Diambil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="outofdate-tab" data-toggle="tab" href="#outofdate" role="tab" aria-controls="outofdate" aria-selected="false"><i class="fas fa-exclamation-triangle"></i> Out of Date</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="didonasikan-tab" data-toggle="tab" href="#didonasikan" role="tab" aria-controls="didonasikan" aria-selected="false"><i class="fas fa-gift"></i> Didonasikan</a>
                            </li>
                        </ul>
                        <h4></h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="belumkonfir" role="tabpanel" aria-labelledby="belumkonfir-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Lokasi Ditemukan</th>
                                            <th>Ditemukan oleh</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_barang as $barang) : ?>
                                            <tr>
                                                <?php if ($barang->status == 'Belum Dikonfirmasi') {
                                                    echo "
                                                <td>" . $barang->kode_barang . "</td>
                                                <td>" . $barang->nama_barang . "</td>
                                                <td>" . date('d F Y', strtotime($barang->tanggal_ditemukan)) . "</td>
                                                <td>" . $barang->lokasi_barang . "</td>
                                                <td>" . $barang->nama_pelapor . "</td>
                                                <td><div class='badge badge-pill badge-warning'>" . $barang->status . "</div></td>
                                                <td>
                                                    <a class='btn btn-primary' href=" . base_url('/admin/data-barang/' . $barang->id_barang) . "><i class='fas fa-info'></i></a>
                                                </td>
                                                
                                            ";
                                                } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dikonfirmasi" role="tabpanel" aria-labelledby="dikonfirmasi-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Lokasi Ditemukan</th>
                                            <th>Ditemukan oleh</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_barang as $barang) : ?>
                                            <tr>
                                                <?php if ($barang->status == 'Dikonfirmasi') {
                                                    echo "
                                                <td>" . $barang->kode_barang . "</td>
                                                <td>" . $barang->nama_barang . "</td>
                                                <td>" . date('d F Y', strtotime($barang->tanggal_ditemukan)) . "</td>
                                                <td>" . $barang->lokasi_barang . "</td>
                                                <td>" . $barang->nama_pelapor . "</td>
                                                <td><div class='badge badge-pill badge-success'>" . $barang->status . "</div></td>
                                                <td>
                                                    <a class='btn btn-primary' href=" . base_url('/admin/data-barang/' . $barang->id_barang) . "><i class='fas fa-info'></i></a>
                                                </td>
                                                
                                            ";
                                                } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="diambil" role="tabpanel" aria-labelledby="diambil-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Lokasi Ditemukan</th>
                                            <th>Ditemukan oleh</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_barang as $barang) : ?>
                                            <tr>
                                                <?php if ($barang->status == 'Diambil') {
                                                    echo "
                                                <td>" . $barang->kode_barang . "</td>
                                                <td>" . $barang->nama_barang . "</td>
                                                <td>" . date('d F Y', strtotime($barang->tanggal_ditemukan)) . "</td>
                                                <td>" . $barang->lokasi_barang . "</td>
                                                <td>" . $barang->nama_pelapor . "</td>
                                                <td><div class='badge badge-pill badge-info'>" . $barang->status . "</div></td>
                                                <td>
                                                    <a class='btn btn-primary' href=" . base_url('/admin/data-barang/' . $barang->id_barang) . "><i class='fas fa-info'></i></a>
                                                </td>
                                                
                                            ";
                                                } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="outofdate" role="tabpanel" aria-labelledby="outofdate-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Lokasi Ditemukan</th>
                                            <th>Ditemukan oleh</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_barang as $barang) : ?>
                                            <tr>
                                                <?php if ($barang->status == 'Out Of Date') {
                                                    echo "
                                                <td>" . $barang->kode_barang . "</td>
                                                <td>" . $barang->nama_barang . "</td>
                                                <td>" . date('d F Y', strtotime($barang->tanggal_ditemukan)) . "</td>
                                                <td>" . $barang->lokasi_barang . "</td>
                                                <td>" . $barang->nama_pelapor . "</td>
                                                <td><div class='badge badge-pill badge-danger'>" . $barang->status . "</div></td>
                                                <td>
                                                    <a class='btn btn-primary' href=" . base_url('/admin/data-barang/' . $barang->id_barang) . "><i class='fas fa-info'></i></a>
                                                </td>
                                                
                                            ";
                                                } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="didonasikan" role="tabpanel" aria-labelledby="didonasikan-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Lokasi Ditemukan</th>
                                            <th>Ditemukan oleh</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data_barang as $barang) : ?>
                                            <tr>
                                                <?php if ($barang->status == 'Didonasikan') {
                                                    echo "
                                                <td>" . $barang->kode_barang . "</td>
                                                <td>" . $barang->nama_barang . "</td>
                                                <td>" . date('d F Y', strtotime($barang->tanggal_ditemukan)) . "</td>
                                                <td>" . $barang->lokasi_barang . "</td>
                                                <td>" . $barang->nama_pelapor . "</td>
                                                <td><div class='badge badge-pill badge-primary'>" . $barang->status . "</div></td>
                                                <td>
                                                    <a class='btn btn-primary' href=" . base_url('/admin/data-barang/' . $barang->id_barang) . "><i class='fas fa-info'></i></a>
                                                </td>
                                                
                                            ";
                                                } else {
                                                } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="tambahModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('databarang/tambah_data') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Tuliskan nama barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="kategori" class="form-control">
                                <option value="" hidden placeholder="Pilih kategori"></option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Buku/Majalah">Buku/Majalah</option>
                                <option value="Alat Tulis">Alat Tulis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Tuliskan deskripsi barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input type="lokasi" class="form-control" id="lokasi" name="lokasi" placeholder="Tuliskan lokasi barang ditemukan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Ditemukan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-3 col-form-label">Gambar Barang</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="detailModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>