<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $this->title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/../lib/animate/animate.min.css" rel="stylesheet">
    <link href="/../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/../css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid">
    <!-- Upper Row -->
    <div class="row bg-secondary py-1 px-xl-5">
        <!-- Left Links -->
        <div class="col-lg-6 d-flex d-lg-block justify-content-center">
            <a class="text-body mx-2" href="/about">About</a>
            <a class="text-body mx-2" href="/contact">Contact</a>
            <a class="text-body mx-2" href="/Help">Help</a>
            <a class="text-body mx-2" href="/faq">FAQs</a>
            <a class="text-body mx-2" href="/admin/index">Admin</a>
        </div>

        <!-- Right Drop-downs and Icons -->
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <?php use iseeyoucopy\phpmvc\Application; ?>
                <div class="dropdown mx-1">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <?php if (Application::isGuest()): ?>
                            <li><a class="dropdown-item" href="/login">Sign in</a></li>
                            <li><a class="dropdown-item" href="/register">Sign up</a></li>
                        <?php else: ?>
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Currency Dropdown -->
                <div class="dropdown mx-1">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        USD
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="currencyDropdown">
                        <li><a class="dropdown-item" href="#">EUR</a></li>
                        <li><a class="dropdown-item" href="#">GBP</a></li>
                        <li><a class="dropdown-item" href="#">CAD</a></li>
                    </ul>
                </div>

                <!-- Language Dropdown -->
                <div class="dropdown mx-1">
                    <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#">FR</a></li>
                        <li><a class="dropdown-item" href="#">AR</a></li>
                        <li><a class="dropdown-item" href="#">RU</a></li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Icons -->
            <div class="d-flex d-lg-none justify-content-center mt-2">
                <a href="#" class="btn px-0 mx-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge bg-dark border border-dark rounded-circle">0</span>
                </a>
                <a href="#" class="btn px-0 mx-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge bg-dark border border-dark rounded-circle">0</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Lower Row -->
    <div class="row align-items-center bg-light py-3 px-xl-7 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="#" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Battle</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Of</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Tickets</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-end">
            <p class="m-0">Customer Service</p>
            <h5 class="m-0">+012 345 6789</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 py-lg-0">
                <a class="navbar-brand d-block d-lg-none" href="/home">MultiShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="/detail">Shop Detail</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu bg-primary" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="/cart">Shopping Cart</a></li>
                                <li><a class="dropdown-item" href="/checkout">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                    <div class="navbar-nav d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge bg-secondary">0</span>
                        </a>
                        <a class="nav-link ml-3" href="#">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge bg-secondary">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
<?php if (Application::$app->session->getFlash('success')): ?>
    <div class="alert alert-success">
        <p><?php echo Application::$app->session->getFlash('success') ?></p>
    </div>
<?php endif; ?>
{{content}}


<!-- Footer Start -->
<footer class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="container px-xl-5 pt-5">
        <div class="row">
            <!-- Contact Section -->
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-uppercase mb-4">Get In Touch</h5>
                <p>No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</li>
                    <li class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</li>
                    <li><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</li>
                </ul>
            </div>

            <!-- Quick Shop & My Account -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="row">
                    <!-- Quick Shop -->
                    <div class="col-md-6">
                        <h5 class="text-uppercase mb-4">Quick Shop</h5>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a></li>
                            <!-- Add other items similarly -->
                        </ul>
                    </div>

                    <!-- My Account -->
                    <div class="col-md-6">
                        <h5 class="text-uppercase mb-4">My Account</h5>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a></li>
                            <!-- Add other items similarly -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter & Follow Us -->
            <div class="col-lg-4 col-md-12 mb-5">
                <h5 class="text-uppercase mb-4">Newsletter</h5>
                <p>Duo stet tempor ipsum sit amet magna ipsum tempor est.</p>
                <form action="" class="mb-4">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>

                <h6 class="text-uppercase mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-primary btn-square mr-2" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <!-- Add other social media buttons similarly -->
                </div>
            </div>
        </div>

        <!-- Lower Footer -->
        <div class="row border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 text-center text-md-left">
                <p>&copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed by <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <img class="img-fluid" src="/../img/payments.png" alt="Payment Methods">
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/../lib/easing/easing.min.js"></script>
<script src="/../lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="/../mail/jqBootstrapValidation.min.js"></script>
<script src="/../mail/contact.js"></script>

<!-- Template Javascript -->
<script src="/../js/main.js"></script>
</body>


