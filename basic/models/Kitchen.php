<?php

namespace app\models;

use yii\db\ActiveRecord;

class Kitchen extends ActiveRecord
{
    public static function tableName()
    {
        return 'kitchen';
    }
}
