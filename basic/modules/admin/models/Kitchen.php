<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "kitchen".
 *
 * @property int $id
 * @property string $title
 *
 * @property Recipe[] $recipes
 */
class Kitchen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitchen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'title' => 'Название кухни',
        ];
    }

    /**
     * Gets query for [[Recipes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecipes()
    {
        return $this->hasMany(Recipe::class, ['kitchen_id' => 'id']);
    }
}
