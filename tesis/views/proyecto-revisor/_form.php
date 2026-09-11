<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProyectoRevisor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="proyecto-revisor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'id_proyecto_tesis')->textInput() ?>

    <?= $form->field($model, 'id_profesor')->textInput() ?>

    <?= $form->field($model, 'prorev_dtfechaderevision')->textInput() ?>

    <?= $form->field($model, 'prorev_dthoraderevision')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
