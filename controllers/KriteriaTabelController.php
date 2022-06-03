<?php

namespace app\controllers;

use app\models\kriteriaTabel;
use app\models\kriteriaTabelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KriteriaTabelController implements the CRUD actions for kriteriaTabel model.
 */
class KriteriaTabelController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all kriteriaTabel models.
     *
     * @return string
     */
    public function actionJual()
    {
        $searchModel = new kriteriaTabelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('jual', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUntung()
    {
        $searchModel = new kriteriaTabelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('untung', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionHarga()
    {
        $searchModel = new kriteriaTabelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('harga', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single kriteriaTabel model.
     * @param int $id_kriteria Id Kriteria
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kriteria)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kriteria),
        ]);
    }

    /**
     * Creates a new kriteriaTabel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new kriteriaTabel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kriteria' => $model->id_kriteria]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing kriteriaTabel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kriteria Id Kriteria
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kriteria)
    {
        $model = $this->findModel($id_kriteria);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kriteria' => $model->id_kriteria]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing kriteriaTabel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kriteria Id Kriteria
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kriteria)
    {
        $this->findModel($id_kriteria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the kriteriaTabel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kriteria Id Kriteria
     * @return kriteriaTabel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kriteria)
    {
        if (($model = kriteriaTabel::findOne(['id_kriteria' => $id_kriteria])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
