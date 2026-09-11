<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProyectoRevisor $model */

$this->title = 'Update Proyecto Revisor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyecto Revisors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proyecto-revisor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
