<!-- view_cart.php -->

<h1>Your Cart</h1>

<table>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product->name) ?></td>
            <td><?= htmlspecialchars($product->quantity) ?></td>
            <td>$<?= htmlspecialchars($product->price) ?></td>
            <td>
                <form action="/removeFromCart" method="post">
                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($product->id) ?>">
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
