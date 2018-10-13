<?php

namespace backend\controllers;

use Yii;
use backend\models\EmailSetting;
use backend\models\EmailSettingSearch;
use backend\models\TblschoolInfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * EmailSettingController implements the CRUD actions for EmailSetting model.
 */
class EmailSettingController extends Controller
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
     * Lists all EmailSetting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmailSettingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmailSetting model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EmailSetting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EmailSetting();
        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // $model->insert_date= date('Y/m/d');
            // $insdt = date('Y/m/d');
            // $model->insert_date= $insdt;

            return $this->redirect(['view', 'id' => $model->email_setting_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'schoollist'=>$schoollist
            ]);
        }
    }

    /**
     * Updates an existing EmailSetting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->email_setting_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'schoollist'=>$schoollist
            ]);
        }
    }

    /**
     * Deletes an existing EmailSetting model.
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
     * Finds the EmailSetting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EmailSetting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EmailSetting::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
