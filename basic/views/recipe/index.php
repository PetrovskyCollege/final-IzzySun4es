<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::$app->name;
?>


    <!-- <div class="search-recipe">
        <form action="" method="post">
            <div class="form-group">
                <label for="category">Категория</label>
                <select class="form-control" name="category_id" id="category">
                    <option value="">Все категории</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kitchen">Кухня</label>
                <select class="form-control" name="kitchen_id" id="kitchen">
                    <option value="">Все кухни</option>
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Меню</label>
                <select class="form-control" name="menu_id" id="menu">
                    <option value="">Все меню</option>
                </select>
            </div>
            <button type="submit">Подобрать рецепты</button>
        </form>
    </div> -->

    <div class="main main-recipe">
        <h1 class="main-h1-recipe">Рецепты</h1>
        <p class="main-p-recipe">Ищите рецепты, выбирая категорию блюда, кухню или меню.</p>
        <!-- Рецепт         -->
        <?php foreach ($recipes as $recipe): ?>
            <div class="recipe-content">
                <div class="recipe-content-left">
                    <?=  Html::img( $recipe->img) ?>
                </div>
                <div class="recipe-content-right">
                    <ul class="sort-first">
                        <li><?= $recipe->category->title ?></li>
                        <li><?= $recipe->kitchen->title ?></li>
                        <li><?= $recipe->menu->title ?></li>
                    </ul>
                    <h2><?= $recipe->title ?></h2>
                    <p>Автор</p>
                    <ul class="sort-second">
                        <li>Ингредиенты</li>
                        <li>Порции</li>
                        <li>Время</li>
                    </ul>
                    <button type="submit">Перейти к рецепту</button>
                </div>
            </div>
    <?php endforeach; ?>
    </div>
    

    
