<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Add Category
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Add Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('admin/categories') ?>">Categories</a></div>
            <div class="breadcrumb-item">Add Category</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin/categories') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <?= form_open('admin/categories/add') ?>
                        <?= csrf_field() ?>
                        <?php $errors = validation_errors() ?>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control <?= (isset($errors['title'])) ? 'is-invalid' : '' ?>" id="title" name="title" value="<?= old('title') ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('title') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control <?= (isset($errors['description'])) ? 'is-invalid' : '' ?>" id="description" name="description" value="<?= old('description') ?>">
                            <div class="invalid-feedback">
                                <?= validation_show_error('description') ?>
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