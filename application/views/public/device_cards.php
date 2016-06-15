<?php $this->load->view("layouts/header"); ?>
<?php $this->load->view("layouts/navbar") ?>
<style>
	.card-container{
			display:block;
			padding:40px;
			transition:all 1s;
	}
	.row{
		align:center;
	}
	.col-xs-8{
	
	}
	.card{
		
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
		/*overflow: hidden;*/
	}
	hr{
		background: #00ffff;
		color:#00333;
	}
	.card-text{
		width:100%;
	}

</style>

	<div class="card-container">
	<div class="row row-centered">
	<?php for ($i=0; $i <1000; $i++) { ?>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<div class="card">
			<div class="card-title">
				<h4>Card Title</h4>
			</div>
			<div class="card-text">
				<p class="card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae nobis aliquam dolorum cum pariatur quae 
				</p>
			</div>
			<div class="card-footer">
				<h5>This is a lame footer</h5>
			</div>							

				
			</div>
	</div>
       <?php }?>
		
		
		
			
		
			</div>
		
	</div>



<?php $this->load->view("layouts/footer2"); ?>
<?php $this->load->view("layouts/footer"); ?>