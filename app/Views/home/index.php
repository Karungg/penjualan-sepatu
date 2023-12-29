<?= $this->extend('layouts/home'); ?>

<?= $this->section('content'); ?>
<!-- =============Produk================ -->
<section class="spt__laki section container" id="spt-laki">
    <h2 class="section__judul-center">
        Produk Unggulan
    </h2>

    <main class="main1 bd-grid">
        <?php foreach ($products as $product) : ?>
            <article class="produk">
                <img src="<?= base_url('assets/') . "img/" . $product['image'] ?>" alt="" class="produk__img">
                <div class="produk__data">
                    <h1 class="produk__judul"><?= $product['product_name'] ?></h1>
                    <span class="produk__harga"><?= number_format($product['product_price']) ?></span>
                    <p class="produk__deskripsi"><?= $product['description'] ?></p>
                    <a href="#" target="_blank" class="produk__button">Beli Sekarang</a>
                </div>
            </article>
        <?php endforeach ?>
    </main>
</section>
<?= $this->endSection('content'); ?>