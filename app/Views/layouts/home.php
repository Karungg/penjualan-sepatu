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
    <title>Maroal | Home</title>
</head>

<body>
    <?= $this->include('partials/home/header'); ?>

    <!-- =============Beranda================ -->
    <main class="main">

        <?= $this->include('partials/home/beranda'); ?>

        <?= $this->include('partials/home/about'); ?>

        <?= $this->renderSection('content'); ?>

        <?= $this->include('partials/home/contact'); ?>

    </main>

    <?= $this->include('partials/home/footer'); ?>

    <!-- =============Main Javascript================ -->
    <script src="<?= base_url('assets') ?>/javascript/main.js"></script>
</body>

</html>