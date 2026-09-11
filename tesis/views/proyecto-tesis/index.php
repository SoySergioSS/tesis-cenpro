<?php

use app\models\ProyectoTesis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProyectoTesisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Proyecto Teses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-tesis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Proyecto Tesis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_estado_proyecto',
            'protes_vctitulo',
            'protes_vcareadeinvestigacion',
            'protes_vclineadeinvestigacion',
            //'protes_dtfechadeinicio',
            //'protes_dtfechadefin',
            //'protes_vcresumenejecutivo:ntext',
            //'protes_vcobjetivoespecifico:ntext',
            //'protes_vcjustificacion:ntext',
            //'protes_vcmetasespecificas:ntext',
            //'protes_iCancelado',
            //'protes_iEnviado',
            //'protes_iAprobado',
            //'protes_vcresolucion',
            //'protes_dtFechaResolucion',
            //'protes_iObservado',
            //'protes_vcexpediente',
            //'protes_dtFechaExpediente',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProyectoTesis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
