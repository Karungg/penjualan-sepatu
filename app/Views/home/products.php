<?= $this->extend('layouts/products'); ?>

<?= $this->section('content'); ?>
<!-- =============Produk================ -->
<section class="spt__laki section container" id="produk">

    <main class="main1 bd-grid">
        <?php foreach ($products as $product) : ?>
            <article class="produk">
                <img src="<?= base_url('assets/') . "img/" . $product['image'] ?>" alt="" class="produk__img">
                <div class="produk__data">
                    <h1 class="produk__judul"><?= $product['product_name'] ?></h1>
                    <span class="produk__harga"><?= number_format($product['product_price']) ?></span>
                    <p class="produk__deskripsi"><?= $product['description'] ?></p>
                    <a href="#" class="produk__button">Detail</a>
                </div>
            </article>
        <?php endforeach ?>
    </main>
</section>
<?= $this->endSection('content'); ?>