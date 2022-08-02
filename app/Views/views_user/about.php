<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>About Us | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <article class="article article-style-b">
            <div class="article-header">
                <div class="article-image" data-background="/assets/img/bk-1.png">
                </div>
            </div>
            <div class="article-details">
                <div class="article-title">
                    <h2 class="text-primary">About Us</h2>
                </div><br>
                <h6>Website UAI Found It adalah sebuah website untuk menemukan/melaporkan barang hilang di sekitar lingkungan Universitas Al Azhar Indonesia. User juga dapat melihat dan mengklaim benda-benda yang hilang dengan mencari barang-barang yang ditemukan lalu di tambahkan oleh orang lain sesuai kategori barangnya.</h6>
                <br>
                <h6>Daftar Barang Hilang</h6>
                <p>Menampilkan daftar barang yang hilang di sekitar area komplek Al Azhar. User dapat melihat gambar barang, lokasi ditemukan, tanggal berapa dilaporkan, nama penemu/pelapor dll.</p>

                <h6>Melaporkan Barang Hilang</h6>
                <p>User dapat menginput data dari barang yang hilang tersebut.</p>

                <h6>Claim Barang</h6>
                <p>Apabila user melihat ada barangnya yang hilang terdapat di dalam website UAI Found It, user dapat mengklaimnya agar dapat mengambil barangnya yang terdapat di kantor UAI Found It.</p>

                <p class="text-primary">Alamat: Masjid Agung Al-Azhar, Jl. Sisingamangaraja No.2, RT.2/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110</p>
                <p class="text-primary">Telepon: (021) 72792753</p>
            </div>
        </article>
    </div>
</section>
<?= $this->endSection() ?>