<?php
/** @var $this View */
/** @var $products Product */

use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\View;

?>

<h1>Product List</h1>

<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="/admin/product_add" class="btn btn-primary">Add Product</a>
    </div>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>"> <!-- Assuming you have image URLs -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>

                        <!-- Description with Read More -->
                        <p class="card-text">
                            <span class="ellipsis-description" id="short-desc-<?= $product['id'] ?>"><?= $product['description'] ?></span>
                            <span id="full-desc-<?= $product['id'] ?>" style="display:none;"><?= $product['description'] ?></span>
                            <a href="#" class="read-more" data-id="<?= $product['id'] ?>">Read more</a>
                        </p>

                        <p><strong>Price:</strong> <?= $product['price'] ?></p>
                        <p><strong>Category:</strong> <?= $product['category'] ?></p>
                        <p><strong>Added by:</strong> <?= $product['added_by'] ?></p>
                        <a href="/admin/product_edit/<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                        <form action="/admin/product_delete" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
