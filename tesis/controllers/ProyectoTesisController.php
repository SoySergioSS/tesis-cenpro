<?php

namespace app\controllers;

use app\models\ProyectoTesis;
use app\models\ProyectoTesisSearch;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ProyectoTesisController implements the CRUD actions for ProyectoTesis model.
 */
class ProyectoTesisController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => \yii\filters\VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
//            'access' => [
//                'class' => \yii\filters\AccessControl::class,
//                'only' => ['index', 'view', 'create', 'update', 'delete'],
//                'rules' => [
//                    [
//                        // Permitir al alumno logueado solo ver el listado y el detalle
//                        'actions' => ['index', 'view'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                    [
//                        // Denegar explícitamente crear, editar y borrar (solo accesibles por Admin)
//                        'actions' => ['create', 'update', 'delete'],
//                        'allow' => false,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
        ];
    }

    /**
     * Lists all ProyectoTesis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProyectoTesisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProyectoTesis model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProyectoTesis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ProyectoTesis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProyectoTesis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $loaded = $model->load($this->request->post());

            if (!$loaded) {
                echo "<h3>Fallo en load()</h3>";
                echo "<p>Los datos enviados por POST no coinciden con el formName() de este modelo.</p>";
                echo "<pre>";
                print_r($this->request->post());
                echo "</pre>";
                die();
            }

            if (!$model->save()) {
                echo "<h3>Fallo en save() - Errores de validación:</h3>";
                echo "<pre>";
                print_r($model->getErrors());
                echo "</pre>";
                die();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProyectoTesis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProyectoTesis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return ProyectoTesis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProyectoTesis::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
