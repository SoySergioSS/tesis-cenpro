<?php

namespace app\models;

use yii\db\ActiveRecord;

class EstadoProyecto extends ActiveRecord
{
    public static function tableName()
    {
        return 'estado_proyecto';
    }
}