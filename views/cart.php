<!-- cart.php -->

<h1>Shopping Cart</h1>

<?php

if (isset($products) && (is_array($products) || $products instanceof Countable) && count($products)): ?>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product->name ?></td>
                <td>$<?= $product->price ?></td>
                <td><?= $product->quantity ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="/checkout">Proceed to Checkout</a>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>
