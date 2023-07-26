<?php

/** @var $model LoginForm */

use app\models\LoginForm;
use iseeyoucopy\phpmvc\form\Form;

?>

    <h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
    <button class="button success">Submit</button>
<?php Form::end() ?>