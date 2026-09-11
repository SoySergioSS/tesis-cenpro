<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProyectoRevisor $model */

$this->title = 'Create Proyecto Revisor';
$this->params['breadcrumbs'][] = ['label' => 'Proyecto Revisors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-revisor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
