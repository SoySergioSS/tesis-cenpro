<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Alumno extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'alumno';
    }

    public function rules()
    {
        return [
            [['alu_vccodigo', 'alu_vcpassword'], 'required'],
            [['alu_vccodigo'], 'string', 'max' => 50],
            [['alu_vccodigo'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alu_vccodigo' => 'Código de Alumno',
            'alu_vcpassword' => 'Contraseña',
        ];
    }

    public function getUsername()
    {
        return $this->alu_vccodigo;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public static function findByUsername($codigo)
    {
        return static::findOne(['alu_vccodigo' => $codigo]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return false;
    }

    public function validatePassword($password)
    {
        return $this->alu_vcpassword === $password;
    }

    public function getProyectosTesis()
    {
        return $this->hasMany(ProyectoTesis::class, ['id' => 'id_proyecto_tesis'])
            ->viaTable('proyecto_alumno', ['id_alumno' => 'id']);
    }
}

