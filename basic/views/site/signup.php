<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>
<div class="container">
    <div style="margin-top: 60px;">
    <h1>Регистрация</h1>
        <?php $form = ActiveForm::begin()?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'patronymic') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')-> passwordInput() ?>

        <div>
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end()?>