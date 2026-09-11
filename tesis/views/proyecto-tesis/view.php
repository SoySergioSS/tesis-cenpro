<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesis $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyecto Teses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proyecto-tesis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_estado_proyecto',
            'protes_vctitulo',
            'protes_vcareadeinvestigacion',
            'protes_vclineadeinvestigacion',
            'protes_dtfechadeinicio',
            'protes_dtfechadefin',
            'protes_vcresumenejecutivo:ntext',
            'protes_vcobjetivoespecifico:ntext',
            'protes_vcjustificacion:ntext',
            'protes_vcmetasespecificas:ntext',
            'protes_iCancelado',
            'protes_iEnviado',
            'protes_iAprobado',
            'protes_vcresolucion',
            'protes_dtFechaResolucion',
            'protes_iObservado',
            'protes_vcexpediente',
            'protes_dtFechaExpediente',
        ],
    ]) ?>

</div>
