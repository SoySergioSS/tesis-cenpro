<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesis $model */

$this->title = 'Update Proyecto Tesis: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyecto Teses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proyecto-tesis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
