<?= $this->extend('layouts/landing_layout') ?>

<?= $this->section('content') ?>
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Category</span>
                    </div>
                    <ul>
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
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('landing/img/breadcrumb.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $product['nama_produk']; ?></h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url('/') ?>">Home</a>
                        <a href="<?= base_url('product/' . $product['slug_kategori']) ?>"><?= $product['nama_kategori']; ?></a>
                        <span><?= $product['nama_produk']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="<?= base_url('landing/img/product/details/product-details-1.jpg') ?>" alt="">
                    </div>
                    <!-- <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="landing/img/product/details/product-details-2.jpg"
                            src="landing/img/product/details/thumb-1.jpg" alt="">
                        <img data-imgbigurl="landing/img/product/details/product-details-3.jpg"
                            src="landing/img/product/details/thumb-2.jpg" alt="">
                        <img data-imgbigurl="landing/img/product/details/product-details-5.jpg"
                            src="landing/img/product/details/thumb-3.jpg" alt="">
                        <img data-imgbigurl="landing/img/product/details/product-details-4.jpg"
                            src="landing/img/product/details/thumb-4.jpg" alt="">
                    </div> -->
                </div>

            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?= $product['nama_produk']; ?>
                    </h3>
                    <!-- <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div> -->
                    <div class="product__details__price">$<?= $product['harga_dolar']; ?></div>
                    <p><?= $product['deskripsi_produk']; ?></p>

                    <?php
                    $nomorWa = $product['wa_pemesanan']; // dari database
                    $linkWa = "https://wa.me/{$nomorWa}?text=" . urlencode("Halo, saya tertarik dengan produk {$product['nama_produk']}");
                    ?>

                    <a href="<?= $linkWa ?>" class="primary-btn" target="_blank"><span class="fa fa-whatsapp"></span> WhatsApp</a>
                    <!-- <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">ADD TO CARD</a>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                        <li><b>Availability</b> <span>In Stock</span></li>
                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Weight</b> <span>0.5 kg</span></li>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Contact</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Reviews <span>(1)</span></a>
                        </li> -->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Company Infomation</h6>
                                <p><?= $product['deskripsi_perusahaan']; ?></p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Contact Infomation</h6>
                                <p>Hubungi Kami di ...</p>
                            </div>
                        </div>
                        <!-- <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                    sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                    diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($relatedProducts as $product): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('landing/img/product/product-1.jpg') ?>">
                            <ul class="product__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                <li>
                                    <a href="https://wa.me/<?= $product['wa_pemesanan'] ?>?text=<?= urlencode('Halo, saya tertarik dengan produk ' . $product['nama_produk']) ?>" target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="<?= base_url('product/' . $product['slug_kategori'] . '/' . $product['slug_produk']) ?>"><?= esc($product['nama_produk']) ?></a></h6>
                            <h5>$<?= esc($product['harga_dolar']) ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- Related Product Section End -->
<?= $this->endSection() ?>