<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Stocks
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Stocks</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Stocks</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    </div>
                <?php endif ?>
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/stocks/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add Stock</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive p-3">
                            <table class="table table-md" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($stocks as $stock) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $stock['product_name'] ?></td>
                                            <td><?= $stock['size'] ?></td>
                                            <td><?= $stock['quantity'] ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/stocks/edit/' . $stock['id']) ?>" class="btn btn-success">Edit</a>
                                                <form action="<?= base_url('admin/stocks/delete/' . $stock['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Are You Sure?')">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>