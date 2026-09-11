<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EstadoProyecto $model */

$this->title = 'Create Estado Proyecto';
$this->params['breadcrumbs'][] = ['label' => 'Estado Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-proyecto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
