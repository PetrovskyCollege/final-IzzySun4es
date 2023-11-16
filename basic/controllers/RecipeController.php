<?php

namespace app\controllers;
use app\models\Recipe;

use yii\web\Controller;

class RecipeController extends Controller
{
    public function actionIndex()
    {
        $recipes = Recipe::find()->all();
        return $this->render('index', compact('recipes'));

    }
}
