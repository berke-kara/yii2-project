<?php

namespace berkekaraa\project\controllers;

use Yii;
use berkekaraa\project\models\Satis;
use berkekaraa\project\models\SatisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use berkekaraa\project\models\Urun;
/**
 * SatisController implements the CRUD actions for Satis model.
 */
class SatisController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Satis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SatisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Satis model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Satis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($stok)
    {

        $model = new Satis();
        $model->urun_id=$stok;
        if(Yii::$app->request->post())
        {
            $model->load(Yii::$app->request->post());
            if($model->stok_adedi<=Urun::findOne($stok)->stok_adedi)
            {
                if ($model->save()) {

                    $temp=Urun::findOne($stok);
                    $temp->stok_adedi=$temp->stok_adedi-$model->stok_adedi;
                    $temp->save();
                    return $this->redirect(['view', 'id' => $model->kullanici_tc,'model'=>$model]);
                }
            }
            else
                Yii::$app->session->setFlash('error', 'Stok adedi mevcut değil.Daha düşük bir adet giriniz.');
        }


        return $this->render('create', [
            'model' => $model,
            'stok' => $stok,
        ]);

    }

    /**
     * Updates an existing Satis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kullanici_tc,'stok'=>$model->stok_adedi]);
        }

        return $this->render('update', [
            'model' => $model,
            'id' => $id,
        ]);
    }

    /**
     * Deletes an existing Satis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Satis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Satis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Satis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
