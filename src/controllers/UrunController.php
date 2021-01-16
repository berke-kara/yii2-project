<?php

namespace berkekaraa\project\controllers;

use Yii;
use berkekaraa\project\models\Urun;
use berkekaraa\project\models\Depo;
use berkekaraa\project\models\UrunSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * UrunController implements the CRUD actions for Urun model.
 */
class UrunController extends Controller
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
     * Lists all Urun models.
     * @return mixed
     */
    public function actionIndex()
    {

        /*  $searchModel = new UrunSearch();
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

           return $this->render('index', [
               'searchModel' => $searchModel,
               'dataProvider' => $dataProvider,
           ]);


          $searchModel = new UrunSearch();
          $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

          return $this->render('index', [
              'searchModel' => $searchModel,
              'dataProvider' => $dataProvider,
          ]);*/





        $searchModel = new UrunSearch();


        $q = $searchModel->search(Yii::$app->request->queryParams);
        // print_r($q);

        $count = $q->count();
        // print_r($count);

        $pagination = new Pagination(['totalCount' => $count,'pageSize'=>12]); //her iki sayfa da bir linkpager sayesinde diğer sayfaya geçiyoruz


        $model = $q->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data = Depo::find()->all();



        return $this->render('index', [
            'data' =>$data,
            'searchModel' => $searchModel,
            'model' => $model,
            'pagination' => $pagination,
        ]);

    }

    /**
     * Displays a single Urun model.
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
     * Creates a new Urun model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed

     */

    public function actionStok($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('stok', [
            'model' => $this->findModel($id),

        ]);
    }

    public function actionCreate()
    {
        $model = new Urun();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Urun model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post()))
        {
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }



        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Urun model.
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
     * Finds the Urun model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Urun the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Urun::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}