<?php

/** @var $name View */
/** @var $latestProducts Product */

use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\View;
?>

<h1>Welcome <?php echo $name ?></h1>
<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($latestProducts as $index => $product) : ?>
                        <li data-target="#header-carousel" data-slide-to="<?= $index ?>" <?php if ($index === 0) echo 'class="active"' ?>></li>
                    <?php endforeach; ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($latestProducts as $index => $product) : ?>
                        <div class="carousel-item position-relative <?php if ($index === 0) echo 'active' ?>" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?= $product->image ?>" style="object-fit: cover;" alt="<?= $product->name ?>">

                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h3 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"><?= $product->name ?></h3>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?= $product->description ?></p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/product_details/<?= $product->id ?>/">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="/../img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="/../img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->