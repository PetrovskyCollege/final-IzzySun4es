<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "recipe".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property int $kitchen_id
 * @property int $menu_id
 * @property string $img
 * @property string $created_at
 *
 * @property Category $category
 * @property Kitchen $kitchen
 * @property Menu $menu
 * @property User[] $users
 */
class Recipe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'kitchen_id', 'menu_id', 'created_at'], 'required'],
            [['category_id', 'kitchen_id', 'menu_id'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['kitchen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kitchen::class, 'targetAttribute' => ['kitchen_id' => 'id']],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'title' => 'Название рецепта',
            'category_id' => 'Категория',
            'kitchen_id' => 'Кухня',
            'menu_id' => 'Меню',
            'img' => 'Изображение',
            'created_at' => 'Дата создания',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Kitchen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKitchen()
    {
        return $this->hasOne(Kitchen::class, ['id' => 'kitchen_id']);
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::class, ['id' => 'menu_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['recipe_id' => 'id']);
    }
}
