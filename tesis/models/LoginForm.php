<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $alu_vccodigo;
    public $alu_vcpassword;
    public $rememberMe = true;
    private $_user = false;

    public function rules()
    {
        return [
            [['alu_vccodigo', 'alu_vcpassword'], 'required'],
            ['rememberMe', 'boolean'],
            ['alu_vcpassword', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'alu_vccodigo' => 'Código de Alumno',
            'alu_vcpassword' => 'Contraseña',
            'rememberMe' => 'Recordarme',
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->alu_vcpassword)) {
                $this->addError($attribute, 'Código o contraseña incorrectos.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Alumno::findByUsername($this->alu_vccodigo);
        }
        return $this->_user;
    }
}
