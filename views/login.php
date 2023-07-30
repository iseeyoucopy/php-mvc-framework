<?php

/** @var $model LoginForm */

use iseeyoucopy\phpmvc\form\Form;
use iseeyoucopy\phpmvc\models\LoginForm;

?>

    <h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
    <button class="button success">Submit</button>
<?php Form::end() ?>