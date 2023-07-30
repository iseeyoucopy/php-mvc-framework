<!-- addToCart.php -->

<h1>Product Details</h1>
<p>Name: <?= htmlspecialchars($product->name) ?></p>
<p>Description: <?= htmlspecialchars($product->description) ?></p>
<p>Price: $<?= htmlspecialchars($product->price) ?></p>

<form action="/addToCart/<?= htmlspecialchars($product->id) ?>" method="post">
    <button type="submit">Add to Cart</button>
</form>
