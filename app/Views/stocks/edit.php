<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Edit Stock
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Stock</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('admin/stocks') ?>">Stocks</a></div>
            <div class="breadcrumb-item">Edit Stock</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/stocks') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <?php $errors = validation_errors() ?>
                        <?= form_open('admin/stocks/edit/' . $stock['id']) ?>
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" class="form-control" readonly value="<?= $stock['id_product'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="number" class="form-control <?= (isset($errors['size'])) ? 'is-invalid' : '' ?>" id="size" name="size" value="<?= $stock['size'] ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('size') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control <?= (isset($errors['quantity'])) ? 'is-invalid' : '' ?>" id="quantity" name="quantity" value="<?= $stock['quantity'] ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('quantity') ?>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>