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
<div class="container mt-4">
    <h1 class="mb-4"><?= $lang['faq_contents_header'] ?></h1>

    <ul id="myTab" class="nav nav-pills">
        <?php
        $count = 0;
        foreach ($cats as $row) {
            if ($count == 9) echo "<div style='display:block;height:50px;'></div>";
            echo "<li class='nav-item'>";
            echo "<a class='nav-link" . ($count == 0 ? " active" : "") . "' data-toggle='pill' href='#" . htmlspecialchars($row['shortcut']) . "'>" . htmlspecialchars($row['name']) . "</a></li>";
            $count++;
        }
        ?>
    </ul>

    <div class="tab-content">
        <?php
        $count = 0;
        foreach ($cats as $row) {
            echo "<div class='tab-pane container fade" . ($count == 0 ? " show active" : "") . "' id='" . htmlspecialchars($row['shortcut']) . "'>";
            echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
            foreach ($faqs as $item) {
                if ($item['type'] == $row['id']) {
                    $item['text'] = str_replace(array(
                        "SITE_NAME",
                        "SITE_PIC_URL",
                        "BASE_URL",
                        "  "
                    ), array(
                        "Battle Of Tickets",
                        "battleofthetickets.com/pic",
                        "battleofthetickets.com",
                        "&nbsp; "
                    ), $item['text']);

                    echo "<h3>" . htmlspecialchars_decode($item['title']) . "</h3>";
                    echo "<p>" . htmlspecialchars_decode($item['text']) . "</p>";
                }
            }
            echo "</div>";
            $count++;
        }
        ?>
    </div>
</div>