<?php

namespace app\models;

use yii\db\ActiveRecord;

class ProyectoRevisor extends ActiveRecord
{
    public static function tableName()
    {
        return 'proyecto_revisor';
    }

    public function getDocente()
    {
        return $this->hasOne(Docente::class, ['id' => 'id_profesor']);
    }
}