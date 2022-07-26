<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="empty-state mt-0">
                            <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" style="width:250px;height:250px">
                            </lord-icon>
                            <h2 class="mt-0">Terima kasih orang baik, tapi<br>Laporan kamu perlu dikonfirmasi</h2>
                            <div class="row" align="left">
                                <div class="col">
                                    <p>
                                        1. Tunggu email berisi kode barang dari kami <br>
                                        2. Bawa barang yang kamu laporkan ke petugas <br>
                                        3. Tunjukkan kode barang yang telah didapatkan <br>
                                        4. Setelah dikonfirmasi barang akan tampil di katalog
                                    </p>
                                </div>
                            </div>
                            <p>Kembali ke beranda <a href="/" class="mt-4 bb">disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>