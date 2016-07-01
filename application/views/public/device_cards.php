<?php $this->load->view("layouts/header"); ?>
<?php $this->load->view("layouts/navbar") ?>
<style>#style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #003333;
}

#style-1::-webkit-scrollbar
{
	width: 5px;
	background-color: #00ffff;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}
#style-1::-moz-scrollbar-track
{
	-moz-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #003333;
}

#style-1::-moz-scrollbar
{
	width: 5px;
	background-color: #00ffff;
}

#style-1::-moz-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}

	.card-container{
			display:block;
			padding:40px;
			transition:all 1s;
			color:#555;
	}
	.row{
		align:center;
		color:#00ffff;
	}
	.card::scrollbar{
		width:20px;
		background-color:red;

	}
	.card{
		
		overflow-y:scroll;
		background: #003333;
		display: inline-block;
		margin-right:6%;
		margin-top:10px;
		margin-bottom: 10px;
		height:33%;
		width:90%;
		box-shadow:#00ffff;
		/*max-height: 200px;*/
		/*width: 27%;*/
		position:relative;
		border:2px solid #00ffff;
		padding:20px;
		clear:both;
		color:#00ffff
		/*overflow: hidden;*/
	}
	.card-text{
		width:100%;
	}

</style>
	<!-- Card Start-->
	<div class="card-container">
	<div class="row row-centered">
	<?php foreach ($devices as $device) {?>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<div class="card" id="style-1">
			<div class="card-title">
				<h4><?php echo $device->device_name;?></h4>
			</div>

			<div class="card-text">
			<!--Carousel Start -->
			<?php $p = 'carousel_count'.$device->id;
		 	$q = $$p; 
		 	$count = 0; 
		 	
		 	?>
		 	<div class="container col-xs-11 col-md-12 col-lg-12">
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
				
		
			<div class="bs-component">
			<table class="table col-xs-5 col-md-8 col-lg-8">
				<thead>
					<tr>
						<th>Parameter Name</th>
						<th>Parameter Value</th>
					</tr>
				</thead>
				<tbody>
					
					
				
			<?php $parameters = 'parameter'.$device->id; 

			// echo "<pre>";
			// print_r($$parameters);
			// echo "</pre>";
			
			$loop_count = 0;
			while($loop_count<=3){
				if($count>=${$parameters}['count']){break;}
			?>
				<tr>
				<td><?php if(isset(${$parameters}[$count])){ echo ${$parameters}[$count]->parameter_name;} ?></td>
				<td>
				<?php  if(isset($values[${$parameters}[$count]->parameter_id])){
						echo $values[${$parameters}[$count]->parameter_id];}
				 
					
				  else echo "Null" ;
				  $loop_count++;
				  $count++;


				?> </td> 

				</tr>
		
			<?php } ?>
			</tbody>
			</table>
			</div>
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
			</div>
			<div class="card-footer">
				 <h6> Last updated on <i class="fa fa-clock-o"></i><?php echo $values['timestamp']; ?></h6>
			</div>							

				
			</div>
	</div>
       <?php }?>
		
		
		
			
		
			</div>
		
	</div>



<?php $this->load->view("layouts/footer2"); ?>
<?php $this->load->view("layouts/footer"); ?>