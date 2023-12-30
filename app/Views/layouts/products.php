<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =============CSS================ -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
    <!-- =============Remix Icons================ -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Maroal | Produk</title>
</head>

<body>
    <?= $this->include('partials/home/products_header'); ?>

    <!-- =============Beranda================ -->
    <main class="main">

        <?= $this->renderSection('content'); ?>

    </main>

    <?= $this->include('partials/home/footer'); ?>

    <!-- =============Main Javascript================ -->
    <script src="<?= base_url('assets') ?>/javascript/main.js"></script>
</body>

</html>