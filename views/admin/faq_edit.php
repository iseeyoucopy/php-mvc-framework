<?php
/** @var $model Faq */

use iseeyoucopy\phpmvc\form\Form;
use iseeyoucopy\phpmvc\models\Faq;


$form = new Form();
?>
    <h1>Edit Product</h1>
<?php $form = Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'type') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'title') ?>
        </div>
    </div>
<?php echo $form->field($model, 'text')->textareaField() ?>
    <button class="button success">Submit</button>
<?php Form::end() ?>