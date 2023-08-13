<?php
/** @var $this View */

use iseeyoucopy\phpmvc\Application;
use iseeyoucopy\phpmvc\View;

$this->title = 'User Profile';
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Profile</h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-3 col-md-4 col-12 text-center">
            <img class="img-fluid rounded-circle" src="//foundation.zurb.com/sites/docs/assets/img/thumbnail/01.jpg" alt="Profile Image">
        </div>
        <div class="col-lg-9 col-md-8 col-12">
            <h3><?php echo Application::$app->user->getDisplayName() ?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ipsum magna. Nullam fringilla lorem quis metus suscipit, sed posuere elit ultrices.</p>
            <p><strong>Email:</strong> <?php echo Application::$app->user->getDisplayEmail() ?></p>
            <p><strong>Location:</strong> New York, USA</p>
            <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="basic-detail-tab" data-bs-toggle="tab" href="#basic-detail" role="tab" aria-controls="basic-detail" aria-selected="true">Basic Detail</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="portfolio-tab" data-bs-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false">Portfolio</a>
                </li>
            </ul>
            <div class="tab-content" id="profileTabsContent">
                <div class="tab-pane fade show active" id="basic-detail" role="tabpanel" aria-labelledby="basic-detail-tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
