<!-- =============Header================ -->
<header class="header" id="header">
    <nav class="nav container">
        <a href="<?= base_url('') ?>" class="nav__logo">
            <i class="ri-store-line nav__logo-icon"></i>Maroal
        </a>

        <!-- =============Navigasi================ -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <?php foreach ($categories as $category) : ?>
                    <li class="nav__item">
                        <a href="" class="nav__link"><?= $category['title'] ?></a>
                    </li>
                <?php endforeach ?>
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