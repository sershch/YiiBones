<?php

namespace app\controllers;

use Yii;
use app\models\exp;
use app\models\search\expSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
//use app\controllers;

/**
 * expController implements the CRUD actions for exp model.
 */
class expController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all exp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new expSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single exp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $resultsProvider = new ActiveDataProvider([
                    'query' => \app\models\res::find()->where(['id_exp' => $model->id_exp]),
                    'pagination' => [
                        'pageSize' => 10,
                        ],
                ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'resultsProvider' => $resultsProvider,
        ]);
    }

    /**
     * Creates a new exp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new exp;
        $model -> date = date("Y-m-d");
        $model -> time = date("H:i:s");
        $model -> bones_num = 2;
        $model -> throws = 36000;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $id = $model->id_exp;
            $res = new \app\models\res();
            $res -> genResult($id);
            return $this->redirect(['view', 'id' => $model->id_exp]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing exp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_exp]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing exp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the exp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return exp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = exp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
