<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Add Product
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Add Product</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('admin/categories') ?>">Categories</a></div>
            <div class="breadcrumb-item">Add Product</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/products') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <?= form_open('admin/products/add') ?>
                        <?= csrf_field() ?>
                        <?php $errors = validation_errors() ?>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control <?= (isset($errors['product_name'])) ? 'is-invalid' : '' ?>" id="product_name" name="product_name" value="<?= old('product_name') ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('product_name') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control <?= (isset($errors['description'])) ? 'is-invalid' : '' ?>" id="description" name="description" value="<?= old('description') ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('description') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="text" class="form-control <?= (isset($errors['product_price'])) ? 'is-invalid' : '' ?>" id="product_price" name="product_price" value="<?= old('product_price') ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('product_price') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="id_category">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
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