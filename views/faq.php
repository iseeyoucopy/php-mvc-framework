<?php
/** @var $this View */
/** @var $cats FaqCats */
/** @var $faqs Faq */
/** @var $lang FaqController */

use iseeyoucopy\phpmvc\controllers\FaqController;
use iseeyoucopy\phpmvc\models\Faq;
use iseeyoucopy\phpmvc\models\FaqCats;
use iseeyoucopy\phpmvc\View;

$this->title = 'FAQ';
?>

<div class="container mt-5">
    <h1 class="mb-4"><?= $lang['faq_contents_header'] ?></h1>
    <div class="row">
        <!-- Sidebar with Categories -->
        <div class="col-md-4">
            <div class="list-group">
                <?php
                $count = 0;
                foreach ($cats as $row): ?>
                    <a href="#<?= htmlspecialchars($row['shortcut']) ?>" class="list-group-item list-group-item-action<?= ($count == 0 ? " active" : "") ?>" data-bs-toggle="list" role="tab"><?= htmlspecialchars($row['name']) ?></a>
                    <?php
                    $count++;
                endforeach; ?>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-8">
            <div class="tab-content">
                <?php
                $count = 0;
                foreach ($cats as $row): ?>
                    <div class="tab-pane fade<?= ($count == 0 ? " show active" : "") ?>" id="<?= htmlspecialchars($row['shortcut']) ?>" role="tabpanel">
                        <h2 class="mb-4"><?= htmlspecialchars($row['name']) ?></h2>

                        <?php foreach ($faqs as $item):
                            if ($item['type'] == $row['id']):
                                $item['text'] = str_replace(
                                    ["SITE_NAME", "SITE_PIC_URL", "BASE_URL", "  "],
                                    ["Battle Of Tickets", "battleofthetickets.com/pic", "battleofthetickets.com", "&nbsp; "],
                                    $item['text']
                                ); ?>
                                <div class="mb-4">
                                    <h3><?= htmlspecialchars_decode($item['title']) ?></h3>
                                    <p><?= htmlspecialchars_decode($item['text']) ?></p>
                                </div>
                            <?php
                            endif;
                        endforeach; ?>
                    </div>
                    <?php
                    $count++;
                endforeach; ?>
            </div>
        </div>
    </div>
</div>
