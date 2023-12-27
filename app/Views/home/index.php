<?php

define('NamaWebsite', 'Spokatku');

$produk_men = [
    [
        "judul" => "Nike Air Jordan 1 Mid",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Mid Smoke Grey GS menghadirkan gaya lapangan penuh
        dan kenyamanan premium ke tampilan ikonik.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Low",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Mid Smoke Grey GS menghadirkan gaya lapangan penuh
        dan kenyamanan premium ke tampilan ikonik.',
        'Air Jordan 1 Low. Tiba dalam model University Blue dan University Gold yang dicetak tebal.
        Di bagian tumit terdapat motif “Air Jordan” bersayap Jordan Brand, sementara Swoosh kulit berwarna biru yang ramping ditempatkan di atas dinding samping.",
    ],
    [
        "judul" => "Nike Air Jordan 1",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Retro High OG SE Bubble Gum memperbarui siluet ikonik dengan aksen pastel dalam
        sentuhan akhir yang mengilap. Bagian atas dibedakan dengan kulit paten merah muda pada kotak kaki, overlay tumit dan
        penutup kerah, menampilkan Sayap tradisional yang dicap di Obsidian di sisi samping.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Mid",
        "harga" => "5.500.000",
        "deskripsi" => "Skema Black Toe yang terkenal dibiarkan apa adanya dari segi warna, sementara bahannya diubah menjadi
        nilon di bagian depan dan suede di sepanjang tumit. Garis kulit putih di bawahnya, membungkus ke atas ke lipatan pergelangan kaki yang latar
        belakang abu-abunya meniru motif pilling yang disengaja.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Mid",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Mid SE Igloo Island TD menghadirkan gaya lapangan penuh
        dan kenyamanan premium ke tampilan ikonik.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Mid",
        "harga" => "5.500.000",
        "deskripsi" => "Menggunakan skema warna Hitam, Merah Chili, dan Putih. Air Jordan 1 mid-top
        ini menampilkan kulit halus berwarna putih di bagian toe box, eyelet atas, flap pergelangan kaki, tumit, dan
        midsole. Kulit hitam jatuh menutupi lapisan luar, panel samping, kerah pergelangan kaki, tali, lapisan dalam, logo Wings, dan sol karet.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Low",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Low Pinksicle menampilkan dasar kulit biasa, yang kali ini
        menggabungkan warna pink pada toebox, swoosh dan tumit, dan hitam dan putih pada pasangan lainnya.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Low",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Low Light Madder Root menampilkan upper suede off-white dengan overlay
        kulit coral yang terinspirasi dari madder root. Branding khas seperti Swoosh, logo Jordan Wings dan
        23 bordir pada loop renda berwarna hijau muda.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Low",
        "harga" => "5.500.000",
        "deskripsi" => "Air Jordan 1 Low Black Cactus Flower menampilkan toebox pink fuchsia yang serasi
        dengan Swoosh dan outsole. Basis kulit putih dikontraskan dengan lapisan suede hitam, meningkatkan nuansa iterasi
        yang nyaman.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Coral",
        "harga" => "5.500.000",
        "deskripsi" => "Nike Dunk Low Next Nature (Pale Coral) memiliki desain ramah lingkungan yang terbuat
        dari kulit daur ulang berwarna putih dan pink pucat, kontras dengan sol dalam hijau neon dengan cap Move To Zerobranding di atasnya.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Mid",
        "harga" => "5.500.000",
        "deskripsi" => "Sepatu yang terbuat dari leather didesain sporty dengan detail neat stitching, eyelets dan outsole yang nyaman ketika dipakai.",
    ],
    [
        "judul" => "Nike Air Jordan 1 Low",
        "harga" => "5.500.000",
        "deskripsi" => "NIKE Air Jordan 1 Low GS Light Arctic Orange Pink merupakan sepatu olahraga berbahan leather upper yang didesain trendy
        & sporty dengan neat stitching dan outsole yang nyaman saat digunakan. Ideal untuk berolahraga maupun sehari-hari.",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =============CSS================ -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- =============Remix Icons================ -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title><?= NamaWebsite ?></title>
</head>

<body>
    <!-- =============Header================ -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#beranda" class="nav__logo">
                <i class="ri-store-line nav__logo-icon"></i>Spokatku
            </a>

            <!-- =============Navigasi================ -->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#beranda" class="nav__link active-link">Beranda</a>
                    </li>
                    <li class="nav__item">
                        <a href="#tentang" class="nav__link">Tentang Kami</a>
                    </li>
                    <li class="nav__item">
                        <a href="#spt-laki" class="nav__link">Produk</a>
                    </li>
                    <li class="nav__item">
                        <a href="#kontak-kami" class="nav__link">Kontak Kami</a>
                    </li>
                </ul>

                <!-- Icon Diambil dari Remix Icon -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- =============Beranda================ -->
    <main class="main">
        <section class="beranda" id="beranda">
            <div class="beranda__container container grid">
                <img src="assets\gambar\home_img2.png" class="beranda__img">

                <div class="beranda__data">
                    <h1 class="beranda__judul">Toko Sepatu <br> No.1 di Ciampea</h1>
                    <p class="beranda__deskripsi">Spokatku adalah toko yang menjual berbagai macam sepatu
                        original dari brand-brand ternama, seperti: Adidas, Nike, Converse,
                        Vans, New Balance, Puma, dan lain-lain.</p>
                    <a href="#tentang" class="button button--flex">
                        Jelajah <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- =============Tentang Kami================ -->
        <section class="tentang section container" id="tentang">
            <div class="tentang__container grid">
                <img src="assets\gambar\about_img.jpg" alt="" class="tentang__img">

                <div class="tentang__data">
                    <h2 class="section__judul tentang__judul">
                        Kenapa Harus Beli <br> Sepatu di Spokatku?
                    </h2>

                    <p class="tentang__deskripsi">
                        Semua sepatu yang kami jual pastinya original.
                        Kami telah menjual lebih dari 5.000 pasang sepatu sejak
                        tahun 2018. Jadi tidak perlu ragu lagi deh untuk beli
                        sepatu di sini.
                    </p>

                    <div class="tentang__detail">
                        <p class="tentang__detail-deskripsi">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Produk 100% Original
                        </p>
                        <p class="tentang__detail-deskripsi">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Bisa Ditukar Jika Size Tidak Sesuai
                        </p>
                        <p class="tentang__detail-deskripsi">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Respon Cepat
                        </p>
                        <p class="tentang__detail-deskripsi">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Pengiriman Tepat Waktu
                        </p>
                    </div>

                    <a href="#spt-laki" class="button--link button--flex">
                        Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- =============Produk================ -->
        <section class="spt__laki section container" id="spt-laki">
            <h2 class="section__judul-center">
                Produk
            </h2>

            <main class="main1 bd-grid">
                <?php
                $no = 1;
                foreach ($produk_men as $data) :
                ?>
                    <article class="produk">
                        <img src="<?= "assets/gambar/" . $no . "-removebg-preview.png" ?>" alt="" class="produk__img">
                        <div class="produk__data">
                            <h1 class="produk__judul"><?= $data['judul'] ?></h1>
                            <span class="produk__harga"><?= $data['harga'] ?></span>
                            <p class="produk__deskripsi"><?= $data['deskripsi'] ?></p>
                            <a href="https://wa.me/+6289531852238?text=Halo%20saya%20ingin%20membeli%20 <?= $data['judul'] ?>" target="_blank" class="produk__button">Beli Sekarang</a>
                        </div>
                    </article>
                    <?php $no++ ?>
                <?php endforeach ?>
            </main>
        </section>
        <!-- =============Kontak Kami================ -->
        <section class="kontak__kami section container" id="kontak-kami">
            <div class="kontak__kami-container grid">
                <div class="kontak__kami-box">
                    <h2 class="kontak__kami-judul">
                        Untuk Informasi Lebih Lanjut, <br> Bisa Hubungi Kami di:
                    </h2>

                    <div class="kontak__kami-data">
                        <div class="kontak__kami-informasi">
                            <h3 class="kontak__kami-sub">No. Whatsapp</h3>
                            <span class="kontak__kami-deskripsi">
                                <i class="ri-phone-line kontak__kami-icon">
                                    +62 895-3185-2238
                                </i>
                            </span>
                        </div>

                        <div class="kontak__kami-informasi">
                            <h3 class="kontak__kami-sub">Via Email</h3>
                            <span class="kontak__kami-deskripsi">
                                <i class="ri-mail-line kontak__kami-icon"></i>
                                spokatku@gmail.com
                                </i>
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" method="post" class="kontak__kami-form">
                    <div class="kontak__kami-inputs">
                        <div class="kontak__kami-konten">
                            <input type="email" placeholder=" " class="kontak__kami-input" name="email" required>
                            <label for="" class="kontak__kami-label">Email</label>
                        </div>

                        <div class="kontak__kami-konten">
                            <input type="text" placeholder=" " class="kontak__kami-input" name="subjek" required>
                            <label for="" class="kontak__kami-label">Subjek</label>
                        </div>

                        <div class="kontak__kami-konten kontak__kami-area">
                            <textarea name="pesan" placeholder=" " class="kontak__kami-input" name="pesan" required></textarea>
                            <label for="" class="kontak__kami-label">Pesan</label>
                        </div>
                    </div>

                    <button type="submit" class="button button--flex">
                        Kirim Pesan
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>
    <!-- =============Footer================ -->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__konten">
                <a href="#" class="footer__logo">
                    <i class="ri-store-line footer__logo-icon"></i>Spokatku
                </a>
            </div>

            <div class="footer__konten">
                <h3 class="footer__judul">Alamat Kami</h3>

                <ul class="footer__data">
                    <li class="footer__informasi">
                        <i class="ri-map-pin-line">
                            Jl. Dramaga, Kota Bogor, Jawa Barat <br><br>
                        </i>
                    </li>
                </ul>
            </div>

            <div class="footer__konten">
                <h3 class="footer__judul">Follow juga Sosial Media Kami</h3>

                <ul class="footer__data">
                    <li class="footer__informasi">
                        <div class="footer__sosmed">
                            <a href="https://www.instagram.com/senikersku/" class="footer__sosmed-link">
                                <img src="assets\gambar\ig.png" alt="" class="footer__ig">@Spokatku
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer__konten">
                <h3 class="footer__judul">
                    Kami juga Menerima Pembayaran Melalui
                </h3>

                <div class="footer__pembayaran">
                    <img src="assets\gambar\logo dana.png" alt="" class="footer__pembayaran-logo">
                    <img src="assets\gambar\logo gopay.png" alt="" class="footer__pembayaran-logo">
                    <img src="assets\gambar\logo linkaja.png" alt="" class="footer__pembayaran-logo">
                    <img src="assets\gambar\logo ovo.png" alt="" class="footer__pembayaran-logo">
                </div>
            </div>
        </div>

        <p class="footer__copyright">&#169; Spokatku. All rights reserved</p>
    </footer>

    <!-- =============Main Javascript================ -->
    <script src="assets/javascript/main.js"></script>
</body>

</html>