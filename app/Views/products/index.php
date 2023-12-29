<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Products
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Products</div>
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
                        <a href="<?= base_url('admin/products/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add Product</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Product Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($products as $product) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $product['product_name'] ?></td>
                                        <td><?= $product['description'] ?></td>
                                        <td><?= $product['product_price'] ?></td>
                                        <td><?= $product['id_category'] ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/img/' . $product['image']) ?>" alt="..." class="img-thumbnail" style="width: 50px;">
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="<?= base_url('admin/products/edit/' . $product['id']) ?>">Edit</a>
                                            <form action="<?= base_url('admin/products/delete/' . $product['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('Are You Sure?')">
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