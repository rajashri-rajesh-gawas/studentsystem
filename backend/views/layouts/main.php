<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Url::toRoute('site/index');?>">World Time Plece</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li> -->
                        <li><?= Html::a('Logout', ['site/logout'], ['data-method' => 'post']) ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            /input-group -->
                       <!--  </li> -->
                        <li>
                            <a href="<?php echo Url::toRoute('site/index');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">School<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse dropdown-menu" style="height: auto;">
                                <li>
                                    <a href="<?php echo Url::toRoute('tblschool-info/index');?>">List</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::toRoute('tblschool-info/create');?>">Create New</a>
                                </li>
                            </ul>
                          
                        </li> --> 
                        
                        <li>
                            <a href="<?php echo Url::toRoute('tblschool-info/create');?>"><i class="fa fa-scribd fa-fw"></i> School Information</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblclass-division/create');?>"><i class="fa fa-scribd fa-fw"></i> Class Division</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbldepartment/create');?>"><i class="fa fa-scribd fa-fw"></i> Department</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblemployee/create');?>"><i class="fa fa-scribd fa-fw"></i> Employee Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblemployee-attendance/create');?>"><i class="fa fa-scribd fa-fw"></i> Employee Attendance</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('email-setting/create');?>"><i class="fa fa-envelope fa-fw"></i> Email Setting</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblsms-setting/create');?>"><i class="fa fa-mobile fa-fw"></i> Sms Setting</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblstudent-registration/create');?>"><i class="fa fa-scribd fa-fw"></i> Student Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblstud-attendance/create');?>"><i class="fa fa-scribd fa-fw"></i> Student Attendance</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbllogin-history/create');?>"><i class="fa fa-scribd fa-fw"></i> Login History</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbltracking-history/create');?>"><i class="fa fa-scribd fa-fw"></i> Tracking History</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo Url::toRoute('tblsliders/index');?>"><i class="fa fa-scribd fa-fw"></i> Slider</a>
                        </li> -->
                        <!-- <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                           
                        </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                            </ul>
                            
                        </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="<?php echo Url::toRoute('site/login');?>">Login Page</a>
                                </li>
                            </ul>
                            
                        </li> -->
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

   <div id="page-wrapper">
       
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
   
    </div>
</div>

<footer class="footer">
    <div class="container">
       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
