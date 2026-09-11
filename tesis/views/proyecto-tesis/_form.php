<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="proyecto-tesis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_estado_proyecto')->textInput() ?>

    <?= $form->field($model, 'protes_vctitulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protes_vcareadeinvestigacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protes_vclineadeinvestigacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protes_dtfechadeinicio')->textInput() ?>

    <?= $form->field($model, 'protes_dtfechadefin')->textInput() ?>

    <?= $form->field($model, 'protes_vcresumenejecutivo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protes_vcobjetivoespecifico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protes_vcjustificacion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protes_vcmetasespecificas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protes_iCancelado')->textInput() ?>

    <?= $form->field($model, 'protes_iEnviado')->textInput() ?>

    <?= $form->field($model, 'protes_iAprobado')->textInput() ?>

    <?= $form->field($model, 'protes_vcresolucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protes_dtFechaResolucion')->textInput() ?>

    <?= $form->field($model, 'protes_iObservado')->textInput() ?>

    <?= $form->field($model, 'protes_vcexpediente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'protes_dtFechaExpediente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
