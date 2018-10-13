<?php

/* @var $this yii\web\View */

$this->title = 'WorldTimePlece';
?>

<section id="slider">
  <div class="container-full">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php
            $i = 0;
            foreach ($sliders as $slider) {
          ?>
              <div class="item <?php if($slider['id'] == 1){ echo 'active'; }?>">
                <img src="image/<?= $slider['image_file'] ?>" class="img-responsive" style="width: 100%;">
                  <ul class="slides">
                    <div class="flex-caption">
                      <div class="item_introtext"> 
                      <!-- <strong>Track Your Student Any Time,Any Where.</strong> -->
                        <strong><?php echo $slider['heading'];?></strong>
                      </div>
                    </div>
                  </ul>
                </div>
        <?php
          $i++;
          }
        ?>
      </div>   

      <ol class="carousel-indicators">
    <!--     <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
        <?php for ($j=0; $j < $i; $j++) { 
        ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="active"></li>
        <?php  
          }
        ?>
      </ol>  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section> 
<br>
<br>

<div class="banner-info">
  <div class="container">
    <div class="banner-info-main">
      <?php
        foreach ($fist as $key) {
      ?>
        <div class="col-md-6 bann-info-left">
          <img src="image/<?= $key->image_file ?>" alt=" " class="img-responsive" width="100%" height="200px">
          <p><?php echo $key['content'];?></p>
        </div>
      <?php
        }
      ?>
      <div class="clearfix"> </div> 
    </div>
  </div>
</div>
<br>
<br>
<!--testimonal start here-->
<div class="testimonal">
  <div class="container">
    <div class="testimonal-main">
       <h2>GPS Tracking is a relatively new, unproven technology</h2>
       <p>GPS technology has been around for decades now, and has found applications in several fields. In fact, the era of the reliable standalone GPS systems that were so helpful for travelers are now being replaced by handheld devices. But handheld devices fall short when it comes to tracking student including school buses, and hence GPS Vehicle Tracking Systems become vital for schools and parents looking for a reliable student safety system</p>
       
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!--testimonal end here-->
<br>
<br>
<!--we work strat her-->
<div class="we-work">
  <div class="container">
    <div class="we-work-main">
      <div class="we-work-top">
        <h3>How It's Work</h3>
        <p>However, this is not an irresolvable issue. Student and Employing a student tracking system to track our child is an effective solution. The concept of Student Tracking is quite simple. It provides real-time updates to parents and school authorities about the student its location using GPS. Considering its simplicity and utility, this student tracking system is a boon for school authorities as well as parents.</p>
      </div>
      <br>
      <br>
      <div class="we-work-bottom">
         <div class="col-md-6 we-work-left">
          <div class="col-md-6 we-left-img1">
            <img src="img/slides/599c610c3e7db.image.jpg" alt="" class="img-responsive">
          </div>
          <div class="col-md-6 we-left-img2">
            <img src="img/slides/FNL20170517_075025-2-300x300.jpg" alt="" class="img-responsive">
          </div>
          <div class="clearfix"> </div>
         </div>
         <div class="col-md-6 we-work-right">
          <p> The primary concern for every parent is their child's safety. With a student tracking system school authorities, as well as parents, get real-time information on each student's location. “Didn't he get on the school?” “Did he get on the wrong school?” All such doubts become irrelevant. Notifications are sent for unscheduled stops, and the real-time location can be checked from the system's mobile application; thus quickly finding solutions during emergency situations.</p>
         </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!--we work end here-->
<br>
<br>
<!--feature start here-->
<div class="features">
  <div class="container">
    <div class="features-main">
        <div class="features-top">
           <h3>Features</h3>
        </div>
        <div class="features-bottom">
              <?php
                foreach ($feat as $key) {
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
<!--services end here-->
