<?php

use app\modules\admin\models\Recipe;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Recipes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recipe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Recipe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->category->title;
                }
            ],

            //'kitchen_id',
            [
                'attribute' => 'kitchen_id',
                'value' => function($data){
                    return $data->kitchen->title;
                }
            ],
            //'menu_id',
            [
                'attribute' => 'menu_id',
                'value' => function($data){
                    return $data->menu->title;
                }
            ],
            //'img',
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Recipe $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
