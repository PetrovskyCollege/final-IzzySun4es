<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::$app->name;
?>

<div class="container">
<?php foreach ($recipes as $recipe): ?>
    <div class="main">
        <ul class="sort-first">
            <li>Категория: <?= $recipe->category->title ?></li>
            <li><?= $recipe->kitchen->title ?> кухня</li>
            <li><?= $recipe->menu->title ?></li>
        </ul>
        <h1>Название рецепта</h1>
        <ul class="sort-first">
            <li>Время</li>
            <li>Добавить в книгу рецептов</li>
            <li>Кол-во лайков</li>
        </ul>
        <?= $recipe->img ?>
        <P>Автор</p>
    </div>
    <div class="ingredient">
        <h2>Ингредиенты</h2>
        <p>Ингредиент</p>
        <p>Ингредиент</p>
        <p>Ингредиент</p>
        <p>Ингредиент</p>
    </div>
    <div class="prigotovlenie">
        <div class="prigotovlenie-content">
            <p>Ингредиент</p>
            <img src="" alt="">
        </div>
        <div class="prigotovlenie-content">
            <p>Ингредиент</p>
            <img src="" alt="">
        </div>
    </div>
</div>
<?php endforeach; ?>