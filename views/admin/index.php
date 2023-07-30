<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
<h1>Welcome to the Admin Page</h1>
<h1>Admin Dashboard</h1>

<a href="/admin/products">Manage Products</a>
<a href="/admin/users">Manage Users</a>
<a href="/admin/orders">Manage Orders</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['description']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
