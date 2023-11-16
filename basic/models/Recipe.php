<?php

namespace app\models;

use yii\db\ActiveRecord;

class Recipe extends ActiveRecord
{
    public static function tableName()
    {
        return 'recipe';
    }

    public function getCategory()
    {
        return $this -> hasOne(Category::class, ['id' => 'category_id']);
    }
    public function getKitchen()
    {
        return $this -> hasOne(Kitchen::class, ['id' => 'kitchen_id']);
    }
    public function getMenu()
    {
        return $this -> hasOne(Menu::class, ['id' => 'menu_id']);
    }
}
