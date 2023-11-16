<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Kitchen $model */

$this->title = 'Create Kitchen';
$this->params['breadcrumbs'][] = ['label' => 'Kitchens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitchen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
