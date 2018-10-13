<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--about start here-->
<!-- <div class="about"> -->
<div class="container">
	<div class="about-main">
			    <div class="about-top">
					<h2>About</h2>
				</div>
				<br>
				<br>
				<div class="about-bottom">
					<?php
						foreach ($aboutfst as $key) {
					?>
					<div class="col-md-7 about-left">
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

		<div class="advantages">
			<div class="container">
				<div class="advantage-main">
					<div class="advance-top">
						<h3>Advantages</h3>
					</div>
					<?php
						foreach ($aboutscd as $key) {
					?>
					<div class="advance-bottom">

					   <div class="col-md-6 advantage-left">
					   	
					   	<div class="advanc-grid">
					   	  
					   	  
					   	  <div class="col-md-9 advanc-text">
					   	  	
					   		<h4><?php echo $key['heading'];?></h4>
					   		<p><?php echo $key['description'];?></p>
					   		 
					   	  </div>
					   	 
					   	  <div class="clearfix"> </div>
					   	</div>

					   	
					<div class="clearfix"> </div>
				</div>
			</div>
			<?php
						}
					?>
		</div>
	</div>
	<br>
<br>
</div>
<!--about end here-->
<br>
<br>


