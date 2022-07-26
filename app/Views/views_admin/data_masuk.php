<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Data Masuk | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Daftar Barang Masuk</h1>
        <div class="section-header-button">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data</button>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
            <div class="breadcrumb-item">Data Barang Masuk</div>
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
                        <!-- <h4>Advanced Table</h4> -->
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
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Lokasi Ditemukan</th>
                                    <th>Ditemukan oleh</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($data_barang as $barang) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $barang->nama_barang ?></td>
                                        <td><?= $barang->kategori_barang ?></td>
                                        <td><?= $barang->lokasi_barang ?></td>
                                        <td><?= $barang->nama_pelapor ?></td>
                                        <td><?= $barang->status ?></td>
                                        <!-- <td>
                                            <div class="badge badge-success">Active</div>
                                        </td> -->
                                        <td>
                                            <a href="/admin/data-masuk/<?= $barang->id_barang ?>" class="btn btn-primary"><i class="fas fa-info"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
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