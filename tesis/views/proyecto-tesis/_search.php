<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="proyecto-tesis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_estado_proyecto') ?>

    <?= $form->field($model, 'protes_vctitulo') ?>

    <?= $form->field($model, 'protes_vcareadeinvestigacion') ?>

    <?= $form->field($model, 'protes_vclineadeinvestigacion') ?>

    <?php // echo $form->field($model, 'protes_dtfechadeinicio') ?>

    <?php // echo $form->field($model, 'protes_dtfechadefin') ?>

    <?php // echo $form->field($model, 'protes_vcresumenejecutivo') ?>

    <?php // echo $form->field($model, 'protes_vcobjetivoespecifico') ?>

    <?php // echo $form->field($model, 'protes_vcjustificacion') ?>

    <?php // echo $form->field($model, 'protes_vcmetasespecificas') ?>

    <?php // echo $form->field($model, 'protes_iCancelado') ?>

    <?php // echo $form->field($model, 'protes_iEnviado') ?>

    <?php // echo $form->field($model, 'protes_iAprobado') ?>

    <?php // echo $form->field($model, 'protes_vcresolucion') ?>

    <?php // echo $form->field($model, 'protes_dtFechaResolucion') ?>

    <?php // echo $form->field($model, 'protes_iObservado') ?>

    <?php // echo $form->field($model, 'protes_vcexpediente') ?>

    <?php // echo $form->field($model, 'protes_dtFechaExpediente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
