<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Recipe $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Recipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="recipe-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => $model->category->title,
            ],
            //'kitchen_id',
            [
                'attribute' => 'kitchen_id',
                'value' => $model->kitchen->title,
            ],
            //'menu_id',
            [
                'attribute' => 'menu_id',
                'value' => $model->menu->title,
            ],
            'img',
            'created_at',
        ],
    ]) ?>

</div>
