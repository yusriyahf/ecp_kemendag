<?= $this->extend('layouts/landing_layout') ?>

<?= $this->section('content') ?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Category</span>
                    </div>
                    <ul>
                        <li><a href="<?= base_url('product') ?>">All</a></li>
                        <?php foreach ($categories as $category): ?>
                            <li><a href="<?= base_url('product/' . $category['slug_kategori']) ?>"><?= esc($category['nama_kategori']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="<?= base_url('landing/img/hero/banner.jpg'); ?>">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php foreach ($categories as $category): ?>
                            <li data-filter=".<?= esc($category['slug_kategori']); ?>">
                                <?= esc($category['nama_kategori']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row featured__filter">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $product['slug_kategori']; ?> fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?= base_url('landing/img/featured/feature-1.jpg') ?>">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                <li> <a href="https://wa.me/<?= $product['wa_pemesanan'] ?>?text=<?= urlencode('Halo, saya tertarik dengan produk ' . $product['nama_produk']) ?>" target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a></li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?= base_url('product/' . $product['slug_kategori'] . '/' . $product['slug_produk']) ?>"><?= $product['nama_produk']; ?></a></h6>
                            <h5>$<?= $product['harga_dolar']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4><?= esc($ecp1['nama']) ?></h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php
                        $count = 0;
                        foreach ($ecp1['produk'] as $produk):
                            if ($count % 3 === 0): // buka item baru setiap 3 produk
                        ?>
                                <div class="latest-prdouct__slider__item">
                                <?php endif; ?>

                                <a href="<?= base_url('product/' . $product['slug_kategori'] . '/' . $product['slug_produk']) ?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?= base_url('landing/img/latest-product/lp-1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?= esc($produk['nama_produk']) ?></h6>
                                        <span>$<?= esc($produk['harga_dolar']) ?></span>
                                    </div>
                                </a>

                                <?php
                                $count++;
                                if ($count % 3 === 0 || $count === count($ecp1['produk'])):
                                ?>
                                </div> <!-- tutup slider item -->
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4><?= esc($ecp2['nama']) ?></h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php
                        $count = 0;
                        foreach ($ecp2['produk'] as $produk):
                            if ($count % 3 === 0):
                        ?>
                                <div class="latest-prdouct__slider__item">
                                <?php endif; ?>

                                <a href="<?= base_url('product/' . $product['slug_kategori'] . '/' . $product['slug_produk']) ?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?= base_url('landing/img/latest-product/lp-1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?= esc($produk['nama_produk']) ?></h6>
                                        <span>$<?= esc($produk['harga_dolar']) ?></span>
                                    </div>
                                </a>

                                <?php
                                $count++;
                                if ($count % 3 === 0 || $count === count($ecp2['produk'])):
                                ?>
                                </div> <!-- close slider item -->
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4><?= esc($ecp3['nama']) ?></h4>

                    <div class="latest-product__slider owl-carousel">
                        <?php
                        $count = 0;
                        foreach ($ecp2['produk'] as $produk):
                            if ($count % 3 === 0):
                        ?>
                                <div class="latest-prdouct__slider__item">
                                <?php endif; ?>
                                <a href="<?= base_url('product/' . $product['slug_kategori'] . '/' . $product['slug_produk']) ?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?= base_url('landing/img/latest-product/lp-1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?= esc($produk['nama_produk']) ?></h6>
                                        <span>$<?= esc($produk['harga_dolar']) ?></span>
                                    </div>
                                </a>
                                <?php
                                $count++;
                                if ($count % 3 === 0 || $count === count($ecp2['produk'])):
                                ?>
                                </div> <!-- close slider item -->
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!-- Latest Product Section End -->
<?= $this->endSection() ?>