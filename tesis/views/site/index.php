<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;

$this->title = 'Gestión del Proyecto de Tesis';
?>

<div class="site-index">
    <div class="card shadow-sm p-4 mt-4">
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'pjax' => true,
                'striped' => true,
                'hover' => true,
                'panel' => [
                        'type' => GridView::TYPE_PRIMARY,
                        'heading' => '<h3 class="panel-title"> Mis Proyectos de Tesis</h3>',
                        'before' => Html::a('Agregar otra Tesis', ['proyecto-tesis/create'], ['class' => 'btn btn-success']),
                        'after' => Html::a('Recargar Tabla', ['site/index'], ['class' => 'btn btn-info']),
                ],
                'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],

                        'protes_vctitulo',
                        'protes_vcareadeinvestigacion',
                        [
                                'attribute' => 'id_estado_proyecto',
                                'value' => function ($model) {
                                    return $model->estadoProyecto->estpro_vcnombre ?? 'No asignado';
                                },
                        ],
                        'protes_dtfechadeinicio',
                        'protes_dtfechadefin',
                        [
                                'class' => 'kartik\grid\BooleanColumn',
                                'attribute' => 'protes_iAprobado',
                                'trueLabel' => 'Sí',
                                'falseLabel' => 'No'
                        ],

                        [
                                'class' => 'kartik\grid\ActionColumn',
                                'buttons' => [
                                        'view' => function ($url, $model) {
                                            return Html::a('<i class="fas fa-eye"></i>', $url, [
                                                    'title' => 'Ver',
                                                    'class' => 'btn btn-sm btn-info text-white me-1',
                                            ]);
                                        },
                                        'update' => function ($url, $model) {
                                            return Html::a('<i class="fas fa-pencil-alt"></i>', $url, [
                                                    'title' => 'Modificar',
                                                    'class' => 'btn btn-sm btn-warning text-white me-1',
                                            ]);
                                        },
                                        'delete' => function ($url, $model) {
                                            return Html::a('<i class="fas fa-trash"></i>', $url, [
                                                    'title' => 'Eliminar',
                                                    'class' => 'btn btn-sm btn-danger',
                                                    'data' => [
                                                            'confirm' => '¿Estás seguro de eliminar este registro?',
                                                            'method' => 'post',
                                                    ],
                                            ]);
                                        },
                                ],
                                'dropdown' => false,
                                'vAlign' => 'middle',
                                'urlCreator' => function ($action, $model, $key, $index) {
                                    return Url::to(["proyecto-tesis/{$action}", 'id' => $model->id]);
                                },
                                'viewOptions' => ['title' => 'Ver detalles', 'data-toggle' => 'tooltip'],
                                'updateOptions' => ['title' => 'Editar información', 'data-toggle' => 'tooltip'],
                                'deleteOptions' => [
                                        'title' => 'Eliminar tesis',
                                        'data-toggle' => 'tooltip',
                                        'data-confirm' => '¿Está seguro de que desea eliminar este proyecto de tesis?',
                                        'data-method' => 'post',
                                ],
                        ],
                ],
        ]); ?>
    </div>
</div>
