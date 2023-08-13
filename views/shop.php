<?php

/** @var $this View */
/** @var $products Product */

use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\View;

?>

<h1>Product List</h1>

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="/">Home</a>
                <a class="breadcrumb-item text-dark" href="/shop">Shop</a>
                <span class="breadcrumb-item active">Shop List</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-12 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <!-- ... other toolbar and sorting buttons -->
                </div>

                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="/detail/<?= $product['id'] ?>"><?= $product['name'] ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5><?= $product['price'] ?></h5>
                                    <!-- Assuming there's a discounted price, otherwise remove or modify this -->
                                    <h6 class="text-muted ml-2"><del>Discounted Price</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <!-- You might want to have a loop for stars based on ratings -->
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small> <!-- Assuming 99 is the number of reviews, modify as necessary -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-12">
                    <!-- pagination code -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop End -->
