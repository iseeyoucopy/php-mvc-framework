<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/settings">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="/admin/dashboard" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="/admin/submissions" class="list-group-item list-group-item-action">Submissions</a>
                <a href="/admin/products" class="list-group-item list-group-item-action">Products</a>
                <a href="/admin/customers" class="list-group-item list-group-item-action">Customers</a>
                <a href="/admin/faq" class="list-group-item list-group-item-action">Faq</a>
            </div>
        </div>
        <div class="col-md-9">
            <h2>Welcome to the Admin Panel</h2>
            <p>This is where you can manage your website's content and settings.</p>
            {{content}}
        </div>
    </div>
</div>


<!-- Bootstrap JS and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Template Javascript -->
<script src="/../js/main.js"></script>
</body>
</html>