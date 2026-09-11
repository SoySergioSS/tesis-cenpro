<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Docente $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="docente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'doc_vcnombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vctelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vccorreo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcdireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vccorreo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcapellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcsexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_facultad')->textInput() ?>

    <?= $form->field($model, 'doc_vcpassword')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
