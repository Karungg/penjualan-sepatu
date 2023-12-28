<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('title'); ?>
Customers
<?= $this->endSection('title'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Detail</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('admin') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Detail</div>
        </div>
    </div>
    <div class="section-body">

        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card-header">
                            <a class="btn btn-primary" href="<?= base_url('admin/customers') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="<?= $customer->email ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="<?= $customer->fullname ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="<?= $customer->phone ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="<?= $customer->username ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Created At</label>
                                    <input type="text" class="form-control" value="<?= $customer->created_at ?>" readonly>
                                </div>
                                <div class="form-group col-md-12 col-12">
                                    <label>Updated At</label>
                                    <input type="text" class="form-control" value="<?= $customer->updated_at ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>