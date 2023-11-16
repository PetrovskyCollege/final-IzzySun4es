<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Recipe $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="recipe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'category_id')->dropDownList(yii\helpers\ArrayHelper::map($cats, 'id', 'title')) ?>


    <?= $form->field($model, 'kitchen_id')->dropDownList(yii\helpers\ArrayHelper::map($kitchs, 'id', 'title')) ?>

    <?= $form->field($model, 'menu_id')->dropDownList(yii\helpers\ArrayHelper::map($menus, 'id', 'title')) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
