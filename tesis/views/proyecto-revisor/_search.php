<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProyectoRevisorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="proyecto-revisor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_proyecto_tesis') ?>

    <?= $form->field($model, 'id_profesor') ?>

    <?= $form->field($model, 'prorev_dtfechaderevision') ?>

    <?= $form->field($model, 'prorev_dthoraderevision') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
