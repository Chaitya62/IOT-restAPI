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