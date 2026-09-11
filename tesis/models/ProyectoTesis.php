<?php

namespace app\models;

use yii\db\ActiveRecord;

class ProyectoTesis extends ActiveRecord
{
    public static function tableName()
    {
        return 'proyecto_tesis';
    }

    public function getEstadoProyecto()
    {
        return $this->hasOne(EstadoProyecto::class, ['id' => 'id_estado_proyecto']);
    }

    public function getProyectoRevisores()
    {
        return $this->hasMany(ProyectoRevisor::class, ['id_proyecto_tesis' => 'id']);
    }

    public function getProyectoAlumnos()
    {
        return $this->hasMany(ProyectoAlumno::class, ['id_proyecto_tesis' => 'id']);
    }
}