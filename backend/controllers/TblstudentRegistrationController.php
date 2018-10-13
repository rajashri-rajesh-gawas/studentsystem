<?php

namespace backend\controllers;

use Yii;
use backend\models\TblstudentRegistration;
use backend\models\TblstudentRegistrationSearch;
use backend\models\TblschoolInfo;
use backend\models\TblclassDivision;
use backend\models\TblloginAccess;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * TblstudentRegistrationController implements the CRUD actions for TblstudentRegistration model.
 */
class TblstudentRegistrationController extends Controller
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
     * Lists all TblstudentRegistration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblstudentRegistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblstudentRegistration model.
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
     * Creates a new TblstudentRegistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblstudentRegistration();

        $login = new TblloginAccess();

        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');
        $classlist = ArrayHelper::map(TblclassDivision::find()->all(), 'class_id','class_name');

            $insdt = date('Y-m-d');
            $model->insert_date = $insdt;

        if ($model->load(Yii::$app->request->post()) ) {
        
            $model->password =rand(); 
            if($model->save())
            {
                $login->student_id = $model->student_id;
                $login->email_id = $model->parent_email_id ;
                $login->password = $model->password;
                $login->user_type = "student"; 
                $login->save(false); 
                return $this->redirect(['view', 'id' => $model->student_id]);
            }
            else
            {
                return $this->render('create', [
                    'model' => $model,
                    'schoollist'=>$schoollist,
                    'classlist'=>$classlist
                ]);
            }
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->student_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'schoollist'=>$schoollist,
                'classlist' =>$classlist
            ]);
        }
    }

    /**
     * Updates an existing TblstudentRegistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $login = new TblloginAccess();
        $login = $login->find()->where(['student_id'=>$id])->one();

        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');
        $classlist = ArrayHelper::map(TblclassDivision::find()->all(), 'class_id','class_name');

            $updt = date('Y-m-d');
            $model->update_date = $updt;

        if ($model->load(Yii::$app->request->post()) ) {
        
            $model->password =rand(); 
            if($model->save())
            {
                if(isset($login))
                {
                    $login->student_id = $model->student_id;
                    $login->email_id = $model->parent_email_id ;
                    $login->password = $model->password;
                    $login->user_type = "student"; 
                    $login->save(false);
                } 
                return $this->redirect(['view', 'id' => $model->student_id]);
            }
            else
            {
                // echo "<pre>"; print_r($model->errors); 
                //                 echo "in model save"; exit; 
                return $this->render('update', [
                    'model' => $model,
                    'schoollist'=>$schoollist,
                    'classlist' =>$classlist
                ]);
            }
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->student_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'schoollist'=>$schoollist,
                'classlist' =>$classlist
            ]);
        }
    }

    /**
     * Deletes an existing TblstudentRegistration model.
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
     * Finds the TblstudentRegistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblstudentRegistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblstudentRegistration::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
