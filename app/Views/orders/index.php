<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Orders
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Orders</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Orders</div>
        </div>
    </div>

    <div class="section-body">
    </div>
</section>
<?= $this->endSection('content'); ?>