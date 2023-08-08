<?php
/** @var $this View */
/** @var $product Product */

use iseeyoucopy\phpmvc\models\Product;
use iseeyoucopy\phpmvc\View;

$this->title = 'Product details';


?>
    <div class="callout">
        <h1><?= $product->name ?></h1>
    </div>
    <div class="callout">
        <p class="center">Cash Alternative: £25,000</p>
    </div>
    <div class="grid-x grid-margin-x">
        <div class="medium-6 cell">
            <img class="thumbnail" src="<?= $product->image ?>">
            <div class="grid-x grid-padding-x small-up-4">
                <div class="cell">
                    <img src="<?= $product->image ?>">
                </div>
                <div class="cell">
                    <img src="<?= $product->image ?>">
                </div>
                <div class="cell">
                    <img src="<?= $product->image ?>">
                </div>
                <div class="cell">
                    <img src="<?= $product->image ?>">
                </div>
            </div>
        </div>
        <div class="medium-6 large-5 cell large-offset-1">
            <p>£<?= $product->price ?> Per ticket</p>
            <h3>Who Makes The M3?</h3>
            <div class="small secondary expanded button-group">
                <a class="button">Dacia</a>
                <a class="button">Bmw</a>
                <a class="button">Ford</a>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <label for="quantity">Quantity</label>
                        <input type="range" id="quantity" name="quantity" min="1" max="500" value="1">
                    <span id="quantity-value">1</span>
                </div>
            </div>

            <script>
                // Get the quantity input element and the element to display the quantity value
                const quantityInput = document.getElementById('quantity');
                const quantityValue = document.getElementById('quantity-value');

                // Set the initial value
                quantityValue.textContent = quantityInput.value;

                // Add an event listener to update the displayed quantity value when the slider changes
                quantityInput.addEventListener('input', function () {
                    quantityValue.textContent = quantityInput.value;
                });
            </script>
            <a href="/addToCart" class="button large expanded">Add to cart</a>
        </div>
    </div>

    <div class="">
        <hr>
        <ul class="tabs" data-tabs="" id="example-tabs" role="tablist" data-e="7yqvd7-e">
            <li class="tabs-title is-active" role="presentation">
                <a href="#panel1" aria-selected="true" role="tab" aria-controls="panel1" id="panel1-label" tabindex="0">Details</a></li>
            <li class="tabs-title" role="presentation"><a href="#panel2" role="tab" aria-controls="panel2"
                                                          aria-selected="false" id="panel2-label" tabindex="-1">FAQ</a></li>
        </ul>
        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-labelledby="panel1-label">
                <?= $product->description ?>
            </div>
            <div class="tabs-panel" id="panel2" role="tabpanel" aria-labelledby="panel2-label" aria-hidden="true">

            </div>
        </div>
    </div>
