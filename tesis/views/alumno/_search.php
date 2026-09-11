<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AlumnoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alumno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alu_vcnombre') ?>

    <?= $form->field($model, 'alu_vcapellido') ?>

    <?= $form->field($model, 'alu_vccodigo') ?>

    <?= $form->field($model, 'alu_vcsexo') ?>

    <?php // echo $form->field($model, 'alu_vccorreo') ?>

    <?php // echo $form->field($model, 'alu_vcpassword') ?>

    <?php // echo $form->field($model, 'alu_vctelefono') ?>

    <?php // echo $form->field($model, 'id_escuela') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
