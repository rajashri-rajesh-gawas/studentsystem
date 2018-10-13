<?php

namespace backend\controllers;

use Yii;
use backend\models\Tblemployee;
use backend\models\TblemployeeSearch;
use backend\models\TblschoolInfo;
use backend\models\Tbldepartment;
use backend\models\TblloginAccess;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * TblemployeeController implements the CRUD actions for Tblemployee model.
 */
class TblemployeeController extends Controller
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
     * Lists all Tblemployee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblemployeeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tblemployee model.
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
     * Creates a new Tblemployee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tblemployee();

        $login = new TblloginAccess();

       
        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');
        $departmentlist =  ArrayHelper::map(Tbldepartment::find()->all(), 'dept_id', 'dept_name');

            $insdt = date('Y-m-d');

            $model->insert_date = $insdt;
            

        if ($model->load(Yii::$app->request->post()) ) {
        
            $model->password =rand(); 
            if($model->save())
            {
                $login->emp_id = $model->emp_id;
                $login->email_id = $model->email_id ;
                $login->password = $model->password;
                $login->user_type = "employee"; 
                $login->save(false); 
                return $this->redirect(['view', 'id' => $model->emp_id]);
            }
            else
            {
                return $this->render('create', [
                    'model' => $model,
                    'schoollist'=>$schoollist,
                    'departmentlist'=>$departmentlist
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'schoollist'=>$schoollist,
                'departmentlist'=>$departmentlist
            ]);
        }
    }

    /**
     * Updates an existing Tblemployee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       $login = new TblloginAccess();
        $login = $login->find()->where(['emp_id'=>$id])->one(); 

        $schoollist =  ArrayHelper::map(TblschoolInfo::find()->all(), 's_id', 's_name');
        $departmentlist =  ArrayHelper::map(Tbldepartment::find()->all(), 'dept_id', 'dept_name');
        
            $updt = date('Y-m-d');
            $model->update_date = $updt;

        if ($model->load(Yii::$app->request->post()) ) {
        
            $model->password =rand(); 
            if($model->save())
            {
                if(isset($login))
                {
                    $login->emp_id = $model->emp_id;
                    $login->email_id = $model->email_id ;
                    $login->password = $model->password;
                    $login->user_type = "employee"; 
                    $login->save(false);
                } 
                return $this->redirect(['view', 'id' => $model->emp_id]);
            }
            else
            {
                // echo "<pre>"; print_r($model->errors); 
                //                 echo "in model save"; exit; 
                return $this->render('update', [
                    'model' => $model,
                    'schoollist'=>$schoollist,
                    'departmentlist'=>$departmentlist
                ]);
            }

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->emp_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'schoollist'=>$schoollist,
                'departmentlist'=>$departmentlist
            ]);
        }
    }

    /**
     * Deletes an existing Tblemployee model.
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
     * Finds the Tblemployee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tblemployee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tblemployee::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
