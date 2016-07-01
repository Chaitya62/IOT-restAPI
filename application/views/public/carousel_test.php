<?php $this->load->view("layouts/header"); ?>
<?php $this->load->view("layouts/navbar") ?>
 
 
	<?php foreach ($devices as $device) { 
 	$p = 'carousel_count'.$device->id;
 	$q = $$p; 
 	$count = 0;
 	$parameters = 'parameter'.$device->id;?>
<div class="container">
  <br>
  <div id="myCarousel<?php echo $device->id; ?>" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
	<?php while($q>0){?>
      <li data-target="#myCarousel<?php echo $device->id; ?>" data-slide-to="<?php echo $count; ?>" class="active"></li>
      <?php $count++; $q--; } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php while($$p>0){ ?>
      <div class="item active">
       
      </div>

   	<?php $$p--; } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel<?php echo $device->id; ?>" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel<?php echo $device->id; ?>" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php  } ?>
<?php $this->load->view("layouts/footer2"); ?>
<?php $this->load->view("layouts/footer"); ?>