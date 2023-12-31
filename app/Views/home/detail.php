<?= $this->extend('layouts/products'); ?>

<?= $this->section('content'); ?>
<section class="tentang section container" id="tentang">
    <div class="tentang__container grid">
        <img src="<?= base_url('assets/img/' . $product['image']) ?>" alt="" class="tentang__img">

        <div class="tentang__data">
            <h2 class="section__judul tentang__judul">
                <?= $product['product_name'] ?>
            </h2>

            <p class="tentang__deskripsi">
                <?= $product['description'] ?>
            </p>

            <div class="tentang__detail">
                <p class="tentang__detail-deskripsi">
                    <i class="ri-checkbox-fill about__details-icon"></i>
                    Rp. <?= number_format($product['product_price']) ?>
                </p>
                <p class="tentang__detail-deskripsi">
                    <i class="ri-checkbox-fill about__details-icon"></i>
                    Category : <?= $category['title'] ?>
                </p>
                <p class="tentang__detail-deskripsi">
                    <i class="ri-checkbox-fill about__details-icon"></i>
                    Stock :
                <ul>
                    <?php foreach ($stocks as $stock) : ?>
                        <li>Size <?= $stock['size'] ?> Tersisa <?= $stock['quantity'] ?></li>
                    <?php endforeach ?>
                </ul>

                </p>
                <div class="sizes">
                    <p>Size:</p>
                    <select name="Size" id="size" class="size-option">
                        <?php foreach ($stocks as $stock) : ?>
                            <option value="<?= $stock['size'] ?>"><?= $stock['size'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="quantity">
                    <p>Quantity:</p>
                    <input type="number" value="1" min="1" max="">
                    <button class="button button--flex" style="display:block">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>