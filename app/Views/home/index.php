<?= $this->extend('layouts/home'); ?>

<?= $this->section('content'); ?>
<!-- =============Produk================ -->
<section class="spt__laki section container" id="spt-laki">
    <h2 class="section__judul-center">
        Produk
    </h2>

    <main class="main1 bd-grid">
        <article class="produk">
            <img src="<?= base_url('assets/') . "img/" . "0-removebg-preview.png" ?>" alt="" class="produk__img">
            <div class="produk__data">
                <h1 class="produk__judul"></h1>
                <span class="produk__harga"></span>
                <p class="produk__deskripsi"></p>
                <a href="https://wa.me/+6289531852238?text=Halo%20saya%20ingin%20membeli%20 " target="_blank" class="produk__button">Beli Sekarang</a>
            </div>
        </article>
    </main>
</section>
<?= $this->endSection('content'); ?>