<?php

namespace backend\controllers;

use Yii;
use backend\models\TblschoolInfo;
use backend\models\TblschoolInfoSearch;
use backend\models\TblloginAccess;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * TblschoolInfoController implements the CRUD actions for TblschoolInfo model.
 */
class TblschoolInfoController extends Controller
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
     * Lists all TblschoolInfo models.
     * @return mixed
     */
    public function actionTblschool_info()
    {
        $model = new TblschoolInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['view', 'id' => $model->id]);
            }
        

        return $this->render('tblschool_info', [
            'model' => $model,
        ]);
    }

    public function actionIndex()
    {
        $searchModel = new TblschoolInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblschoolInfo model.
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
     * Creates a new TblschoolInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblschoolInfo();

        $login = new TblloginAccess();


        if ($model->load(Yii::$app->request->post())) {

            $imageName = "school_logo_".rand();
            $model->s_logo = UploadedFile::getInstance($model,'s_logo');

            $insdt = date('Y-m-d');
            $model->insert_date = $insdt;
            
            $model->password =rand();
            if($model->save())
            {

            if(!empty($model->s_logo))
                {
                    
                   $model->s_logo->saveAs('../image/schoolinfo/'.$imageName.'.'.$model->s_logo->extension);
                       $model->s_logo = $imageName.'.'.$model->s_logo->extension;     
                       $model->save(false);

                //    return $this->redirect(['view', 'id' => $model->s_id]); 
                }
                else
                {
                     
                     $model->s_logo = 'default_school.png';                            
                     $model->save(false);
              //      return $this->redirect(['view', 'id' => $model->s_id]); 
               }   

                $login->s_id = $model->s_id;
                $login->email_id = $model->s_email ;
                $login->password = $model->password;
                $login->user_type = "school"; 
                $login->save(false); 
                return $this->redirect(['view', 'id' => $model->s_id]);
            }
            else
            {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing TblschoolInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $login = new TblloginAccess();
        $login = $login->find()->where(['s_id'=>$id])->one(); 
        $image = $model['s_logo'];
        
        if ($model->load(Yii::$app->request->post())) {

            $updt = date('Y-m-d');
            $model->update_date = $updt;
            
            $imageName = "school_logo_".rand();
            $model->s_logo = UploadedFile::getInstance($model,'s_logo');

            $model->password =rand(); 
            if($model->save())
            {
                if(isset($login))
                {

                    $login->s_id = $model->s_id;
                    $login->email_id = $model->s_email ;
                    $login->password = $model->password;
                    $login->user_type = "school"; 
                    $login->save(false);
                } 
                return $this->redirect(['view', 'id' => $model->s_id]);
            }
            else
            {
                // echo "<pre>"; print_r($model->errors); 
                //                 echo "in model save"; exit; 
                return $this->render('update', [
                    'model' => $model,
                ]);
            }


            if(!empty($model->s_logo)){
                $model->s_logo->saveAs('../image/schoolinfo/'.$imageName.'.'.$model->s_logo->extension);
                  echo $imageName.'.'.$model->s_logo->extension;
                   $model->s_logo = $imageName.'.'.$model->s_logo->extension;
                   $model->save();
            }else{
                

                $model->s_logo = $image;
                $model->save();
            }

            return $this->redirect(['view', 'id' => $model->s_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TblschoolInfo model.
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
     * Finds the TblschoolInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblschoolInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblschoolInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
                                                                                                    