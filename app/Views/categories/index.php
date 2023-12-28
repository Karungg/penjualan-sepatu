<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Categories
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Categories</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Categories</div>
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
                        <a href="<?= base_url('admin/categories/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add Category</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($categories as $category) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $category['title'] ?></td>
                                        <td><?= $category['description'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('admin/categories/edit/' . $category['id']) ?>" class="btn btn-success">Edit</a>
                                            <form action="<?= base_url('admin/categories/delete/' . $category['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Are You Sure?')">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>