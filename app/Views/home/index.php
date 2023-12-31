<?= $this->extend('layouts/home'); ?>

<?= $this->section('content'); ?>
<!-- =============Produk================ -->
<section class="spt__laki section container" id="produk">
    <h2 class="section__judul-center">
        Produk Unggulan
    </h2>

    <?= $this->include('components/products'); ?>
</section>
<center>
    <a href="<?= base_url('products') ?>" class="button button--flex">
        Lihat Semua Produk
        <i class=" ri-arrow-right-up-line button__icon"></i>
    </a>
</center>
<?= $this->endSection('content'); ?>