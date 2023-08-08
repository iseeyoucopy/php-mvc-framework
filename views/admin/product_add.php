<?php
/** @var $model Model */

use iseeyoucopy\phpmvc\form\Form;
use iseeyoucopy\phpmvc\Model;

$form = new Form();
?>
<h1>Add Product</h1>
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
<button class="btn btn-success">Submit</button>
<?php Form::end() ?>

