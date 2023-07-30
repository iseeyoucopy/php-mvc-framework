<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title ?></title>
    <!-- Foundation CSS -->
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/fontawesome.css" rel="stylesheet">
    <link href="/css/brands.css" rel="stylesheet">
    <link href="/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css"/>

</head>
<body>
<header>
    <div class="container">
        <div class="logo">IseeyouCopy MVC</div>
        <nav id="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/contact">Contact</a></li>
                <?php use iseeyoucopy\phpmvc\Application;

                if (Application::isGuest()): ?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                <?php else: ?>
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/logout">Welcome <?php echo Application::$app->user->getDisplayName() ?> (Logout)</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <svg onclick="menuShow()" id="burger" fill=" #fff" viewBox="0 0 448 512" title="bars">
            <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/>
        </svg>
    </div>
</header>
<div class="grid-container">
    <?php if (Application::$app->session->getFlash('success')): ?>
        <div class="callout success">
            <p><?php echo Application::$app->session->getFlash('success') ?></p>
        </div>
    <?php endif; ?>
    {{content}}
</div>
<footer>
    <div class="container">
        <p>Made with ❤ by <a href="https://github.com/iseeyoucopy">Iseeyoucopy</a></p>
        <div class="social-links">
            <a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
            <a target="_blank" href="https://github.com/"><i class="fab fa-github"></i></a>
            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>


<!-- Foundation JS -->
<script type="text/javascript" src="/js/vendor/jquery.js"></script>
<script type="text/javascript" src="/js/vendor/what-input.js"></script>
<script type="text/javascript" src="/js/vendor/foundation.js"></script>
<script type="text/javascript" src="/js/navbar.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');
            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });
    });
</script>
</body>
</html>
