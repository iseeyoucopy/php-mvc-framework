<?php
/** @var $this \iseeyoucopy\phpmvc\View */

use iseeyoucopy\phpmvc\Application;

$this->title = 'User Profile';
?>
<div class="grid-container">
    <div class="grid-x">
        <div class="cell">
            <h2>Profile</h2>
        </div>
    </div>

    <div class="grid-x">
        <div class="cell large-3">
            <img class="profile-image" src="//foundation.zurb.com/sites/docs/assets/img/thumbnail/01.jpg" alt="Profile Image.">
        </div>
        <div class="cell large-9">
            <h3><?php echo Application::$app->user->getDisplayName() ?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ipsum magna. Nullam fringilla lorem quis metus suscipit, sed posuere elit ultrices.</p>
            <p>Email: <?php echo Application::$app->user->getDisplayEmail() ?></p>
            <p>Location: New York, USA</p>
            <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
                <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Basic Detail</a></li>
                <li class="tabs-title"><a href="#panel2c">Portofolio</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="collapsing-tabs">
                <div class="tabs-panel is-active" id="panel1c">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="tabs-panel" id="panel2c">
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>