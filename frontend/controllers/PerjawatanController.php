<?php

namespace frontend\controllers;

use common\models\Perjawatan;
use common\models\PerjawatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use common\models\Jawatan;
use common\models\Profil;
use common\models\Bahagian;


/**
 * PerjawatanController implements the CRUD actions for Perjawatan model.
 */
class PerjawatanController extends Controller
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
     * Lists all Perjawatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerjawatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Perjawatan model.
     * @param int $id ID
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
     * Creates a new Perjawatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Perjawatan();
        $bahagian = ArrayHelper::map(Bahagian::find()->all(), 'id','namaBahagian');
        $jawatan = ArrayHelper::map(Jawatan::find()->all(), 'id','namaJawatan');
        $profil = ArrayHelper::map(Profil::find()->all(), 'id','nama');

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'jawatan' => $jawatan,
            'bahagian' => $bahagian,
            'profil' => $profil
        ]);
    }

    /**
     * Updates an existing Perjawatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $bahagian = ArrayHelper::map(Bahagian::find()->all(), 'id','namaBahagian');
        $jawatan = ArrayHelper::map(Jawatan::find()->all(), 'id','namaJawatan');
        $profil = ArrayHelper::map(Profil::find()->all(), 'id','nama');

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'jawatan' => $jawatan,
            'bahagian' => $bahagian,
            'profil' => $profil
        ]);
    }

    /**
     * Deletes an existing Perjawatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Perjawatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Perjawatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perjawatan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
