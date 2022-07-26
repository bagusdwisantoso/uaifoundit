<?= $this->extend('templates_user2/default') ?>

<?= $this->section('title') ?>
<title>About Us | UAI Found It!</title>
<?= $this->endSection() ?>

<!--nama 'content' sesuaikan yang ada di templates/default-->
<?= $this->section('content') ?>
<section class="section">
    <div class="section-body">
        <article class="article">
            <div class="article-header">
                <div class="article-image" data-background="/assets/img/news/img12.jpg">
                </div>
                <div class="article-title">
                    <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                </div>
            </div>
            <div class="article-details">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                <div class="article-cta">
                    <a href="#" class="btn btn-primary">KEMBALI KE BERANDA</a>
                </div>
            </div>
        </article>
    </div>
</section>
<?= $this->endSection() ?>