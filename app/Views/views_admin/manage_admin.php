<?= $this->extend('templates_admin/default') ?>

<?= $this->section('title') ?>
<title>Manage Admin | UFI Admin</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Administration Management</h1>
        <div class="section-header-button">
            <a href="/register" class="btn btn-primary">Add Admin</a>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Advanced Table</h4>
                        <div class="card-header-form">
                            <form>
                                <!--Ini untuk menampilkan fitur Search Bar-->
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama(Email)</th>
                                    <th>Username</th>
                                    <th>Status(Active)</th>
                                    <th>Aksi</th>
                                    <th>Profile</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $us) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $us->email ?></td>
                                        <td><?= $us->username ?></td>
                                        <!-- <td><?= $us->active ?></td> -->
                                        <?php if ($us->active) {
                                            echo "
                                            <td>
                                                <div class='badge badge-pill badge-success'>Active</div>
                                            </td>
                                        ";
                                        } else {
                                            echo "
                                            <td>
                                                <div class='badge badge-pill badge-danger'>Not Active</div>
                                            </td>
                                        ";
                                        } ?>
                                        <td>
                                            <a href="/admin/active/<?= $us->id ?>" class="btn btn-success">Aktif</a>
                                            <a href="/admin/nonactive/<?= $us->id ?>" class="btn btn-danger">non-Aktif</a>
                                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                                                Non-aktif
                                            </button>
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="false" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin menonaktifkan Akun Admin berikut?
                                                            Akun Admin tidak dapat digunakan apabila dalam keadaan belum aktif!
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <a href="/admin/nonactive/<?= $us->id ?>" id="<?= $us->id ?>" type="button" class="btn btn-danger">Non Aktifkan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticActive">
                                                Aktif
                                            </button>
                                            <div class="modal fade" id="staticActive" data-backdrop="false" data-keyboard="false" tabindex="-1" aria-labelledby="staticActiveLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticActiveLabel">Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin mengaktifkan Akun Admin ini kembali?
                                                            Akun admin yang sudah di aktifkan, akan dapat digunakan kembali untuk masuk ke dalam Dashboard Admin!
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <a href="/admin/active/<?= $us->id ?>" id="<?= $us->id ?>" type="button" class="btn btn-success">Aktifkan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </td>
                                        <td>
                                            <!-- ini untuk button profile @Aldo Ramadhan -->
                                            <a href="#" class="btn btn-primary"><i class="fas fa-user"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <!--INI Untuk menampilkan jumlah halaman-->
                    <!-- <div class="card-footer text-right">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>