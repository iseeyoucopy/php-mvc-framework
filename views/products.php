<h1>Product List</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['category'] ?></td>
            <td>
                <a href="/product_edit/<?= $product['id'] ?>"><i class="fa fa-pencil"></i></a>
                <form action="/product_delete" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <button type="submit" style="background:none;border:none;padding:0;"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>