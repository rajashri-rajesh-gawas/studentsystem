<?php

namespace backend\controllers;

use Yii;
use backend\models\TblclassDivision;
use backend\models\TblclassDivisionSearch;
use backend\models\TblschoolInfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * TblclassDivisionController implements the CRUD actions for TblclassDivision model.
 */
class TblclassDivisionController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all TblclassDivision models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblclassDivisionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblclassDivision model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
             // Html::activeDropDownList($model, 's_id',$schoollist) 
        ]);
    }

    /**
     * Creates a new TblclassDivision model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblclassDivision();

        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');

            $insdt = date('Y-m-d');
            $model->insert_date = $insdt;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['view', 'id' => $model->class_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'schoollist'=>$schoollist
            ]);
        }
    }

    /**
     * Updates an existing TblclassDivision model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');

            $updt = date('Y-m-d');
            $model->update_date = $updt;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->class_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'schoollist'=>$schoollist
            ]);
        }
    }

    /**
     * Deletes an existing TblclassDivision model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->isDeleted = 1 ; 
        $model->save(false); 

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblclassDivision model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblclassDivision the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblclassDivision::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
