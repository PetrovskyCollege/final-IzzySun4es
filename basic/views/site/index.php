<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>



    <div class="header">
        <div class="main">
            <h1 class="main-h1">Кулинарные тайны: Искусство готовить вкусно и легко</h1>
            <p class="main-p">Откройте мир вкуса и наслаждайтесь разнообразием рецептов для каждого вкуса</p>
            <form action="search.php" method="GET" class="search">
                <input type="text" name="query" placeholder="Поиск по названию рецепта или ингредиентам">
                <button type="submit" style="display: none;">Искать</button>
            </form>
        </div>
    </div>
        <!-- Преимущества -->
        <div class="advantages">
            <div class="advantages-content">
                <img src="img/recipe 1.svg" alt="1">
                <p>Делитесь любимыми рецептами</p>
            </div>
            <div class="advantages-content">
                <img src="img/cooking 1.svg" alt="2">
                <p>Узнавайте новые идеи</p>
            </div>
            <div class="advantages-content">
                <img src="img/review 1.svg" alt="2">
                <p>Пользовательские рейтинги и отзывы</p>
            </div>
        </div>

        <!-- О нас -->
        <div>
            <div class="text">
                <div class="text-left">
                    <h3>О нас</h3>
                    <p>Мы - сообщество любителей вкусной еды, 
                    где каждый может поделиться своими уникальными рецептами 
                    и найти новые вдохновляющие идеи от других пользователей.</p>
                </div>
                <div class="text-right">
                    <img src="img/books.svg" alt="1">
                </div>
            </div>
            <div class="text">
                <div class="text-right">
                    <img src="img/idea.svg" alt="2">
                </div>
                <div class="text-left">
                    <h3>Рецепты</h3>
                    <p>Мы - сообщество любителей вкусной еды, 
                        где каждый может поделиться своими уникальными рецептами 
                        и найти новые вдохновляющие идеи от других пользователей.</p>
                        <form action="/recipe/index">
                            <input type="submit" value="Перейти к рецептами" />
                        </form>
                </div>
            </div>
            <div class="text">
                <div class="text-left">
                    <h3>Авторы</h3>
                    <p>Мы - сообщество любителей вкусной еды, 
                    где каждый может поделиться своими уникальными рецептами 
                    и найти новые вдохновляющие идеи от других пользователей.</p>
                    <form action="/site/about">
                            <input type="submit" value="Перейти к авторам" />
                    </form>
                </div>
                <div class="text-right">
                    <img src="img/cookbook 1.svg" alt="3">
                </div>
            </div>
        </div>



    
