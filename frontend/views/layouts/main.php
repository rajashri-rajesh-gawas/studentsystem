<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
   <?php
   NavBar::begin([
       // 'brandLabel' => Html::image('image/wtp.png', ['alt'=>Yii::$app->name]),
       'brandLabel' => '<img src="image/wtp.png" style="width:115px; margin:-21px;" class="img-responsive" alt="">',
       'brandUrl' => Yii::$app->homeUrl,
       'options' => [
           'class' => 'navbar navbar-default navbar-static-top',
       ],
   ]);
   $menuItems = [
       ['label' => 'Home', 'url' => ['/site/index']],
       ['label' => 'About','url' => ['site/about']],
       ['label' => 'Service', 'url' => ['/site/service']],
       ['label' => 'Software', 'url' => ['/site/software']],
       ['label' => 'Contact', 'url' => ['/site/contact']],
               
   ];
   if (Yii::$app->user->isGuest) {
       // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
       $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
   } else {
       // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
       $menuItems[] = '<li>'
           . Html::beginForm(['/site/logout'], 'post')
           . Html::submitButton(
               'Logout (' . Yii::$app->user->identity->username . ')',
               ['class' => 'btn btn-link logout']
           )
           . Html::endForm()
           . '</li>';

   }
   echo Nav::widget([
       'options' => ['class' => 'navbar-nav navbar-right'],
       'items' => $menuItems,
   ]);
   NavBar::end();
   
   ?>
</div>

<div id="wrapper">
    <div class="container-full">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!--footer start here-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                    <strong><!-- <i class="glyphicon glyphicon-home" aria-hidden="true"></i> -->World Timepiece Technology PVT.LTD.</strong><br>
                    Office No. 302 Shree Sidhivinayaka Aangan,  
                    Khedekar Nagar, Narhe,<br>
                    Pin-411041 Pune, Maharashtra.</address>
                    <p>
                        <!-- <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> --> (+91) 9730354461
                        <br>
                        <!-- <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> --><a href="mailto:wtp@worldtimespiece.com">wtp@worldtimespiece.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="<?php echo Url::toRoute(['index']);?>">Home</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/about']);?>">About</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/service']);?>">Service</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/software']);?>">Software</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/contact']);?>">Contact</a></li>
                        <li><a href="<?php echo Url::toRoute(['site/login']);?>">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Working Technologies</h5>
                    <ul>
                        <li>Java</li>
                        <li>J2EE</li>
                        <li>Struts .x</li>
                        <li>Hibernate .x</li>
                        <li>Android</li>
                        <li>Php .x</li>
                        <li>Electronic Manufacturing Microcontroller Programming</li>
                        <li>Automotive Development</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Recent News</h5>
                    <ul class="link-list">
                        <h4>Monitor Location</h4>
                        <li>You don't need the mobile app for monitoring location. Simply login to this web site in your web browser.</li>
                        <h4>Cross Platform</h4>
                        <li>Our GPS tracking mobile app supports iOS, Android, Windows, and Blackberry.
                        </li>
                        <h4>Grouping Devices</h4>
                        <li>You can group your devices in your account. Then you can view the location map by group.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="sub-footer">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    </footer>
<!--footer end here-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
