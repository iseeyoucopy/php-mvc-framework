<?php
/** @var $model Product */

use iseeyoucopy\phpmvc\form\Form;
use iseeyoucopy\phpmvc\models\Product;

$form = new Form();
?>
    <h1>Edit Product</h1>
<?php $form = Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'name') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'description') ?>
        </div>
    </div>
<?php echo $form->field($model, 'price') ?>
<?php echo $form->field($model, 'category') ?>
    <button class="button success">Submit</button>
<?php Form::end() ?>