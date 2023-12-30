<!-- =============Header================ -->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#beranda" class="nav__logo">
            <i class="ri-store-line nav__logo-icon"></i>Maroal
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

        <?php if (empty(user())) : ?>
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?= base_url('register') ?>" class="nav__link">Daftar</a>
                </li>
                <li class="nav__item">
                    <a href="<?= base_url('login') ?>" class="nav__link">Login</a>
                </li>
            </ul>
        <?php endif ?>
        <?php if (in_groups('user')) : ?>
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="" class="nav__link">My Order</a>
                </li>
            </ul>
        <?php endif ?>
    </nav>
</header>