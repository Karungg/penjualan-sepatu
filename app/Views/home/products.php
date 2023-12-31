<?= $this->extend('layouts/products'); ?>

<?= $this->section('content'); ?>
<!-- =============Produk================ -->
<section class="spt__laki section container" id="produk">
    <h2 class="section__judul-center">
        Produk
    </h2>

    <?= $this->include('components/products'); ?>

</section>
<?= $this->endSection('content'); ?>