<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesis $model */

$this->title = 'Create Proyecto Tesis';
$this->params['breadcrumbs'][] = ['label' => 'Proyecto Teses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-tesis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
