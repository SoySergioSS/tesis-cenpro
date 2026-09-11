<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DocenteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="docente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'doc_vcnombre') ?>

    <?= $form->field($model, 'doc_vctelefono') ?>

    <?= $form->field($model, 'doc_vccorreo') ?>

    <?= $form->field($model, 'doc_vcdireccion') ?>

    <?php // echo $form->field($model, 'doc_vccorreo2') ?>

    <?php // echo $form->field($model, 'doc_vcapellido') ?>

    <?php // echo $form->field($model, 'doc_vcsexo') ?>

    <?php // echo $form->field($model, 'id_facultad') ?>

    <?php // echo $form->field($model, 'doc_vcpassword') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
