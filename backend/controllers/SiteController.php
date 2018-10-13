<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Form;
use common\models\Tables;
use backend\models\TblschoolInfo;
use backend\models\TblclassDivision;
use backend\models\EmailSetting;
use backend\models\Tbldepartment;
use backend\models\Tblemployee;
use backend\models\TblemployeeAttendance;
use backend\models\TblsmsSetting;
use backend\models\TblstudentRegistration;
use backend\models\TblstudAttendance;
use backend\models\TblloginHistory;
use backend\models\TbltrackingHistory;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        // 'only' => ['index','create','view','update','delete'],
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','form','tables','tblschool-info', 'tblschool_info','tblclass-division','email-setting','tbldepartment','tblemployee','tblemployee-attendance','tblsms-setting','tblstudent-registration','tblstud-attendance'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
     public function actionForm()
    {
        return $this->render('form');
    }
    public function actionTables()
    {
       return $this->render('tables');
    }
    
    public function actionTblclassDivision()
    {
       return $this->render('create');
    }
    public function actionEmailSetting()
    {
       return $this->render('create');
    }
    public function actionTbldepartment()
    {
       return $this->render('create');
    }
    public function actionTblemployee()
    {
       return $this->render('create');
    }
    public function actionTblemployeeAttendance()
    {
       return $this->render('create');
    }
    public function actionTblsmsSetting()
    {
       return $this->render('create');
    }
    public function actionTblstudentRegistration()
    {
       return $this->render('create');
    }
    public function actionTblstudAttendance()
    {
       return $this->render('create');
    }
    public function actionTblloginHistory()
    {
       return $this->render('create');
    }
    public function actionTbltrackingHistory()
    {
       return $this->render('create');
    }
    

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        // $this->site='login(copy)';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
