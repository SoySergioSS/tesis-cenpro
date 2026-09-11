<?php

namespace app\models;

use yii\db\ActiveRecord;

class Docente extends ActiveRecord
{
    public static function tableName()
    {
        return 'docente';
    }
}