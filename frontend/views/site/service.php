<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--about start here-->
<!-- <div class="about"> -->
<div class="container">
	<div class="about-main">
			    <div class="about-top">
					<h2>Services</h2>
				</div>
				<br>
				<br>
				<div class="about-bottom">
					<?php
						foreach ($servicefst as $key) {
					?>
					<div class="col-md-7 service-left">
						<p><?php echo $key['description'];?></p>
					</div>
					<?php
						}
					?>
					<div class="col-md-5 about-right">
						<img src="image/<?= $key->image_file ?>" class="img-responsive">
						<!-- <a href="single.html" >
							<img src="images/1.jpg" alt="" class="img-responsive ">
						</a> -->								
					</div>
					<div class="clearfix"> </div>
				</div>
	</div>
	<br>
	<br>
<div class="features">
  <div class="container">
    <div class="features-main">
        <div class="features-top">
           <h3>Key Features</h3>
        </div>
        <div class="features-bottom">
              <?php
                foreach ($servefeat as $key) {
              ?>
              <div class="col-md-3 feature-grid">
                <img src="image/<?= $key->image_file ?>" alt=" " class="img-responsive">
                <h4><?php echo $key['heading'];?></h4>
                <p><?php echo $key['description'];?></p>
               </div>
              <?php
               }
              ?>
            <div class="clearfix"> </div>
        </div>
    </div>
  </div>
</div>


