<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="message">   
        <h2>Your Message</h2>
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.<br> Thank you.
        </p>
    </div>
    <div class="row">
        <div class="col-lg-5 form">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->textInput(['placeholder'=> "Enter Your Name"]) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=> "Enter Email Address"]) ?>

                <?= $form->field($model, 'mobile')->textInput(['placeholder'=> "Enter Mobile No"]) ?>

                <?= $form->field($model, 'message')->textarea(['rows' => 6])->textarea(['placeholder'=> "Enter Message"]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-6">
            <div class="span4">
                <h3 class="title-box_primary">Contact info</h3>
                <address>
                <strong>World Timepiece Technology PVT.LTD.<br>
                Office No. 302 Shree Sidhivinayaka Aangan,<br>
                Khedekar Nagar, Narhe,<br>
                Pin-411041 Pune, Maharashtra.</strong><br>
                Phone No: (+91) 9730354461<br>
                FAX: +1 234 567 890<br>
                E-mail: <a href="mailto:wtp@worldtimespiece.com">wtp@worldtimespiece.com</a><br>
                </address>
            </div>
        </div>
    </div>

</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.6170204712394!2d73.82339731442787!3d18.455689987446785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e9e3a25d5187%3A0xa48a622682da27b3!2sWorld+Timepiece+Technology+PVT.+LTD.!5e0!3m2!1sen!2sin!4v1511179553824" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>