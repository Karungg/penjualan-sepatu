<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Customers
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Customers</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Customers</div>
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
                    <div class="card-body p-0">
                        <div class="table-responsive p-3">
                            <table class="table table-md" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($customers as $customer) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $customer->fullname ?></td>
                                            <td><?= $customer->email ?></td>
                                            <td><?= $customer->address ?></td>
                                            <td><?= $customer->phone ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= base_url('admin/customers/detail/' . $customer->id) ?>">Detail</a>
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